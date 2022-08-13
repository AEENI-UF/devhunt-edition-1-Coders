<template>
    <v-app>
        <v-text-field
            v-model="search"
            append-icon="mdi-magnify"
            label="Search"
            single-line
            hide-details
        ></v-text-field>
        <v-data-table
            :search="search"
            :headers="columns"
            :items="data"
            :items-per-page="5"
            class="elevation-1"
        ></v-data-table>
    </v-app>
</template>
<script>
import axios from "axios";
export default {
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
                    text: "Email",
                    value: "email",
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
    },
    async mounted() {
        this.data = await axios.get("/api/etudiant").then((res) => res.data);
    },
};
</script>
