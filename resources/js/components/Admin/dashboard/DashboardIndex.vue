<template>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">Progress Box</h4>
            <div class="m-t-20">
                <show-effectif-stat></show-effectif-stat>
            </div>
        </div>
    </div>
</template>
<script>
import ShowEffectifStat from "./ShowEffectifStat.vue";
export default {
    components: { ShowEffectifStat },
};
</script>
