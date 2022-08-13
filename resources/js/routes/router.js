import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/index",
            component: require("./../components/client/menu/MenuComponent")
                .default,
        },
    ],
});

export default routes;
