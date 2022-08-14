<template>

        <v-app>
                    <div class="text-right">
            <v-dialog
            v-model="dialog"
            width="1000"
            >
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                color="red lighten-2"
                dark
                v-bind="attrs"
                v-on="on"
                >
                Click Me
                </v-btn>
            </template>

            <v-card>
                    <v-card-title>
                    <span class="headline">{{formTitle}}</span>
                    </v-card-title>

                    <v-card-text>
                    <v-form ref="form" v-model="valid" lazy-validation >
                        <v-container tag="form" grid-list-md>
                        <v-layout wrap>
                            <v-flex xs12 sm6 md6>
                            <v-text-field
                            xs12 sm6 md6
                            v-model="editedItem.design_niveau"
                            label="Desigation"
                            required
                            :rules="[v => !!v || 'Designation obligatoire']"
                            ></v-text-field>
                            </v-flex>
                            <v-flex xs12 sm6 md6>
                            <v-select
                            xs12 sm6 md6
                            v-model="editedItem.id_config"
                            label="Forfait"
                            required
                            :rules="[v => !!v || 'Forfait obligatoire']"
                            ></v-select>
                        </v-flex>
                        </v-layout>
                        </v-container>
                    </v-form>
                    </v-card-text>

                    <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="red darken-1"  outlined text @click="close">Annuler</v-btn>
                    <v-btn color="blue darken-1"  outlined text @click="save">Sauvegarder</v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </div>

        </v-app>

</template>

<script>
import axios from 'axios';

export default{
    name : "niveaux",

    data(){
  return {
            search: "",
            data: [],
            dialog : false,
            editedItem: {
                design_niveau: '',
                id_config: '',

            },
            editedIndex: -1,
            defaultItem: {
                design_niveau: '',
                id_config: '',
            },
            columns: [
                {
                    text: "Id",
                    value: "id_niveau",
                },
                {
                    text: "Prénoms",
                    value: "design-niveau",
                },
                {
                    text: "Forfait",
                    value: "forfait",
                },

            ],
        };
    },

  methods: {
           close () {
        this.dialog = false
        setTimeout(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        }, 300)
      },

        async getAllNiveau() {
            this.data = await axios
                .get("/api/niveau")
                .then((res) => res.data);
        },
           async getAllConfig() {
            this.data = await axios
                .get("/api/niveau")
                .then((res) => res.data);
        },

         save () {
        if (this.$refs.form.validate()) {
        if (this.editedIndex > -1) {
            axios.put('/api/niveau/${this.params.id}', this.editedItem)
            .then(response => {
            this.getAllNiveau();
            this.close();
                }).catch(error=>{
                    console.log(error)
             })
        } else {

          axios.post('/api/niveau', this.editedItem)
         .then(response => {
            console.log(response.data);
            this.getAllNiveau();
            this.close();
                }).catch(error=>{
                    console.log(error)
             })


        }

      }
      },

    },
    computed :{
          formTitle () {
        return this.editedIndex === -1 ? 'Ajout d\'un niveau' : 'Modifier un niveau'
      },
    },
    async mounted() {
        this.getAllNiveau();
    },

}

</script>
