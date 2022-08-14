<template>
    <div>
        <v-file-input
            class="m-2"
            v-model="file"
            @change="checkFileExtension"
            counter
            :disabled="startUpload == true"
            label="Fichier avec la liste des étudiants"
            placeholder="Sélectionner votre fichier"
            prepend-icon="mdi-paperclip"
            outlined
            dense
            :show-size="1000"
        >
            <template v-slot:selection="{ index, text }">
                <v-chip
                    v-if="index < 2"
                    color="light-green-200"
                    dark
                    label
                    small
                >
                    {{ text }}
                </v-chip>

                <span
                    v-else-if="index === 2"
                    class="text-overline grey--text text--darken-3 mx-2"
                >
                    +{{ files.length - 2 }} Fichier(s)
                </span>
            </template>
        </v-file-input>
        <v-btn
            @click="uploadFile"
            class="ml-11 mr-0"
            small
            elevation="5"
            color="success"
            :disabled="file == null || file.length == 0"
        >
            Envoyer
            <v-icon dark right> mdi-cloud-upload </v-icon>
        </v-btn>
        <v-progress-circular
            v-show="startUpload"
            :rotate="360"
            :size="30"
            :width="1"
            indeterminate
            color="teal"
        >
        </v-progress-circular>
    </div>
</template>
<script>
import axios from "axios";
export default {
    data: () => ({
        file: [],
        niveaux: [],
        startUpload: false,
    }),
    async mounted() {
        this.niveaux = await axios.get("/api/niveau").then((res) => res.data);
    },
    methods: {
        async uploadFile() {
            const body = new FormData();
            body.append("id_niveau", 1);
            body.append("uploaded_file", this.file);
            axios
                .post("/api/upload-content", body)
                .then((res) => {
                    this.startUpload = false;
                    this.$emit("uploadfinished");
                    return;
                })
                .catch((e) => {
                    this.startUpload = false;
                    if (
                        e.response.data.message.indexOf("SQLSTATE[23000]") != -1
                    ) {
                        this.$toast.error(
                            "Le téléversement de fichier a echoué, Il y a des données dupliquées lors de l'enregistrement"
                        );
                    } else {
                        this.$toast.error(
                            "Le téléversement de fichier a echoué, verifier s'il vous plaît le fichier et ses colonnes"
                        );
                    }
                });

            this.file = null;
            this.startUpload = true;
        },
        async checkFileExtension() {
            if (this.file == null) return;
            if (
                this.file.type !=
                "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
            ) {
                this.$toast.error(
                    "Extension de fichier non-valide ! Fichier sous format excel seulement autorisé"
                );
                this.file = null;
                return;
            }
        },
    },
};
</script>
