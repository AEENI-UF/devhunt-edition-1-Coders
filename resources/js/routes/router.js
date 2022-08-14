import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            component: require("./../components/ContentComponent.vue").default,
        },
        {
            path: "/get-started",
            component:
                require("./../components/client/get-started/GetStartedComponent.vue")
                    .default,
        },
        {
            path: "/contact",
            component:
                require("./../components/client/contact/ContactComponent.vue")
                    .default,
        },
        {
            path: "/about",
            component:
                require("./../components/client/about/AboutComponent.vue")
                    .default,
        },
    ],
});

export default routes;
