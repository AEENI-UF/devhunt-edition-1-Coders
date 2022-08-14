<template>
    <div>
        <div class="d-flex no-block align-items-center m-t-25">
            <span>72% Uniquie Clicks</span>
            <div class="ml-auto">
                <span>120</span>
            </div>
        </div>
        <div class="progress">
            <div
                class="progress-bar progress-bar-striped bg-success"
                role="progressbar"
                style="width: 72%"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
            ></div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            listeEtudiant: [],
        };
    },
    async mounted() {
        // await axios("/api/etudiant");
    },
};
</script>

<style></style>
