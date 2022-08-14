<template>
    <v-app>
        <v-card class="mt-4">
            <upload-file @uploadfinished="finished_upload"></upload-file>
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
            ></v-data-table>
        </v-card>
    </v-app>
</template>
<script>
import axios from "axios";
import UploadFile from "./UploadFile.vue";
export default {
    components: { UploadFile },
    data() {
        return {
            search: "",
            data: [],
            columns: [
                {
                    text: "IM",
                    value: "matricule",
                },
                {
                    text: "Nom",
                    value: "nom",
                },
                {
                    text: "Prénoms",
                    value: "prenoms",
                },
                {
                    text: "Sexe",
                    value: "sexe",
                },
                {
                    text: "Email",
                    value: "email",
                },

                {
                    text: "Niveau",
                    value: "niveau.design_niveau",
                },
                {
                    text: "Adresse",
                    value: "adresse",
                },
                {
                    text: "Télephone",
                    value: "tel",
                },
                // ,
                // {
                //     text: "",
                //     value: "matricule",
                //     filterable: false,
                //     component: ExampleButton,
                //     event: "click",
                //     handler: this.alertMe,
                //     classes: {
                //         btn: true,
                //         "btn-primary": true,
                //         "btn-sm": true,
                //     },
                // },
            ],
        };
    },
    methods: {
        alertMe(data) {
            alert("hey");
        },
        async loadData() {
            this.data = await axios
                .get("/api/etudiant")
                .then((res) => res.data);
        },
        async finished_upload() {
            this.loadData();
        },
    },
    async mounted() {
        this.loadData();
    },
};
</script>
