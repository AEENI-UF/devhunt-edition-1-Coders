<template>
    <div class="w-50">
        <div v-for="niveau in listeNiveau" :key="niveau.id_niveau">
            <div class="d-flex no-block align-items-center m-t-25">
                <span
                    >{{ niveau.etudiants.length }} étudiant(s)
                    {{ niveau.design_niveau }}</span
                >
                <div class="ml-auto">
                    <span>{{ total }}</span>
                </div>
            </div>
            <div class="progress">
                <div
                    class="progress-bar progress-bar-striped bg-success"
                    role="progressbar"
                    :style="{ width: niveau.etudiants.length + '%' }"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                ></div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            listeNiveau: [],
            total: 0,
        };
    },
    async mounted() {
        this.listeNiveau = await axios("/api/by-level").then((res) => {
            res.data.map((element) => {
                this.total += element.etudiants.length;
            });
            return res.data;
        });
    },
};
</script>

<style></style>
