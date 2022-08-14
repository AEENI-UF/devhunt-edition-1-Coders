<template>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">Statistiques</h4>
            <div class="m-t-20">
                <show-effectif-stat></show-effectif-stat>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import ShowEffectifStat from "./ShowEffectifStat.vue";
export default {
    components: { ShowEffectifStat },
    async mounted() {
        await axios.get("api/etudiant").then((res) => res.data);
    },
};
</script>
