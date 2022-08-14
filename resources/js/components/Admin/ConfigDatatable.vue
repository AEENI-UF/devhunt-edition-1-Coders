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
                Ajouter Configuration
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
                            v-model="editedItem.forfait"
                            label="Forfait"
                            required
                            :rules="[v => !!v || 'Forfait obligatoire']"
                            ></v-text-field>
                            </v-flex>
                             <v-flex xs12 sm6 md6>
                            <v-select
                            xs12 sm6 md6
                            :items="typeforfait"
                            v-model="editedItem.typeforfait"
                            label="Type Forfait"
                            required
                            :rules="[v => !!v || 'Type Forfait obligatoire']"
                            ></v-select>
                        </v-flex>
                            <v-flex xs12 sm6 md6>
                            <v-text-field
                            xs12 sm6 md6
                            v-model="editedItem.duree"
                            label="Durée"
                            required
                            :rules="[v => !!v || 'Durée obligatoire']"
                            ></v-text-field>
                        </v-flex>
                          <v-flex xs12 sm6 md6>
                            <v-select
                            xs12 sm6 md6
                            :items="typeduree"
                            v-model="editedItem.typeduree"
                            label="Type Durée"
                            required
                            :rules="[v => !!v || 'Type Durée obligatoire']"
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
          <v-data-table

                :search="search"
                :headers="headers"
                :items="data"
                :items-per-page="5"
                class="elevation-1"
            >
            <template v-slot:item.actions="{ item }">
              <v-icon
          small
          class="mr-2"
          @click="editItem(item)"
        >
          mdi-pen
        </v-icon>
        <v-icon
          small
          @click="deleteItem(item)"
        >
          mdi-delete
        </v-icon>



      </template>

       </v-data-table>

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
            forfait: [],
             typeforfait: ['Go', 'Mo'],
              typeduree: ['Jour', 'Heure', 'Minute'],
            dialog : false,
            editedItem: {
                forfait: '',
                duree: '',
                id_config: '',
                typeforfait: '',
                typeduree: '',

            },
            editedIndex: -1,
            defaultItem: {
               forfait: '',
                duree: '',
                id_config: '',
                typeforfait: '',
                typeduree: '',
            },
            headers:[

      {
        text: 'id',
        value: 'id_config',
  align: 'left',
        sortable: false,


      },
      { text: 'Forfait(en Mo)', value: 'forfait' },
      { text: 'Durée (en Second)', value: 'duree' },

        { text: 'Action', value: 'actions', sortable: false  },
            ]

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

       
           async getAllConfig() {
            this.data = await axios
                .get("/list-config")
                .then((res) => res.data);
        },

         save () {
            console.log(this.item);
        if (this.$refs.form.validate()) {
        if (this.editedIndex > -1) {
            axios.put(`/add-config/${this.editedItem.id_config}`,this.editedItem)
            .then(response => {
            this.getAllConfig();
            this.close();
                }).catch(error=>{
                    console.log(error)
             })
        } else {

          axios.post('/add-config', this.editedItem)
         .then(response => {

            this.getAllConfig();
            this.close();
                }).catch(error=>{
                    console.log(error)
             })


        }

      }
      },
       editItem (item) {
      this.editedIndex = this.data.indexOf(item)
      this.editedItem = Object.assign({}, item)
      this.dialog = true
    },

    deleteItem (item) {
      const index = this.data.indexOf(item)
      confirm('vous voulez les supprimers?') && this.data.splice(index, 1)
    },


    },
    computed :{
          formTitle () {
        return this.editedIndex === -1 ? 'Ajout d\'un Configuration' : 'Modifier un Configuration'
      },
    },
    async mounted() {
        
        this.getAllConfig();
    },

}

</script>
