import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = new VueRouter({
    mode: "history",
    routes: [
        // {
        //     path: "/home",
        //     component: require("./../components/BaseComponent.vue").default,
        // },
        {
            path: "/get-started",
            component: require("./../components/ContentComponent.vue").default,
        },
        {
            path: "/contact",
            component:
                require("./../components/client/contact/ContactComponent.vue")
                    .default,
        },
    ],
});

export default routes;
