<template>
    <v-app>
        <div class="text-right">
            <v-dialog v-model="dialog" width="1000">
                <template v-slot:activator="{ on, attrs }">
                    <v-btn
                        color="green lighten-2"
                        dark
                        class="mt-2"
                        v-bind="attrs"
                        v-on="on"
                    >
                        Click Me
                    </v-btn>
                </template>

                <v-card>
                    <v-card-title>
                        <span class="headline">{{ formTitle }}</span>
                    </v-card-title>

                    <v-card-text>
                        <v-form ref="form" v-model="valid" lazy-validation>
                            <v-container tag="form" grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs12 sm6 md6>
                                        <v-text-field
                                            xs12
                                            sm6
                                            md6
                                            v-model="editedItem.nom"
                                            label="Nom"
                                            required
                                            :rules="[
                                                (v) => !!v || 'Nom obligatoire',
                                            ]"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex xs12 sm6 md6>
                                        <v-text-field
                                            xs12
                                            sm6
                                            md6
                                            v-model="editedItem.prenoms"
                                            label="Prenoms"
                                            required
                                            :rules="[
                                                (v) =>
                                                    !!v ||
                                                    'Prenoms obligatoire',
                                            ]"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex xs12 sm6 md6>
                                        <v-text-field
                                            v-model="editedItem.phone"
                                            required
                                            :rules="[
                                                (v) =>
                                                    !!v ||
                                                    'Numéro Telephone obligatoire',
                                            ]"
                                            label="Numéro Telephone "
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex xs12 sm6 md6>
                                        <v-text-field
                                            v-model="editedItem.email"
                                            required
                                            :rules="[
                                                (v) =>
                                                    !!v || 'Email obligatoire',
                                            ]"
                                            label="Email"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex xs12 sm6 md6>
                                        <v-text-field
                                            @click:append="show1 = !show1"
                                            :append-icon="
                                                show1
                                                    ? 'mdi-eye'
                                                    : 'mdi-eye-off'
                                            "
                                            :type="show1 ? 'text' : 'password'"
                                            required
                                            :rules="[
                                                (v) =>
                                                    !!v ||
                                                    'Mot de passe obligatoire',
                                            ]"
                                            v-model="editedItem.password"
                                            label="Mot de passe"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex xs12 sm6 md6>
                                        <v-text-field
                                            required
                                            @click:append="show2 = !show2"
                                            :append-icon="
                                                show2
                                                    ? 'mdi-eye'
                                                    : 'mdi-eye-off'
                                            "
                                            :type="show2 ? 'text' : 'password'"
                                            :rules="[
                                                (v) =>
                                                    !!v ||
                                                    ' Confirmation Mot de passe obligatoire',
                                            ]"
                                            v-model="
                                                editedItem.password_confirmation
                                            "
                                            label="Confirmation Mot de passe"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-form>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="red darken-1" outlined text @click="close"
                            >Annuler</v-btn
                        >
                        <v-btn
                            color="green darken-1"
                            outlined
                            text
                            @click="save"
                            >Sauvegarder</v-btn
                        >
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </div>
        <v-card class="mt-4">
            <v-card-title>
                <v-text-field
                    v-model="search"
                    append-icon="mdi-magnify"
                    label="Search"
                    hide-details
                ></v-text-field>
            </v-card-title>
            <v-data-table
                :search="search"
                :headers="columns"
                :items="data"
                :items-per-page="5"
                class="elevation-1"
            >
            </v-data-table>
        </v-card>
    </v-app>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            search: "",
            valid: true,
            show1: false,
            show2: false,
            data: [],
            dialog: false,
            editedItem: {
                nom: "",
                prenoms: "",
                phone: "",
                email: "",
                password: "",
                password_confirmation: "",
            },
            editedIndex: -1,
            defaultItem: {
                nom: "",
                prenoms: "",
                phone: "",
                email: "",
                password: "",
                password_confirmation: "",
            },
            columns: [
                {
                    text: "Nom",
                    value: "nom",
                },
                {
                    text: "Prénoms",
                    value: "prenoms",
                },
                {
                    text: "Numero Télèphone",
                    value: "phone",
                },
                {
                    text: "Adresse Email",
                    value: "email",
                },
            ],
        };
    },
    methods: {
        close() {
            this.dialog = false;
            setTimeout(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            }, 300);
        },

        async getAllUsers() {
            this.data = await axios.get("/list-user").then((res) => res.data);
        },

        async save() {
            if (this.$refs.form.validate()) {
                if (this.editedIndex > -1) {
                    await axios
                        .put(`/update-user/${this.params.id}`, this.editedItem)
                        .then((response) => {
                            this.getAllUsers();

                            this.close();
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                } else {
                    await axios
                        .post("/register-user", this.editedItem)
                        .then((response) => {
                            this.$toast.success("Compte ajouté");
                            this.getAllUsers();
                            this.close();
                        })
                        .catch((error) => {
                            this.$toast.error(error.response.data.message);
                        });
                    console.log(this.editedItem);
                }
            }
        },
    },
    computed: {
        formTitle() {
            return this.editedIndex === -1
                ? "Ajout d'un utilisateur"
                : "Modifier un utilisateur";
        },
    },
    async mounted() {
        await this.getAllUsers();
    },
};
</script>
