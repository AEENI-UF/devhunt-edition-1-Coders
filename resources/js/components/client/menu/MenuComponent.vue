<template>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="/"> <strong> ENI </strong></a>
            </h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <router-link class="nav-link scrollto" to="/"
                            >Accueil</router-link
                        >
                    </li>
                    <li>
                        <router-link class="nav-link scrollto" to="/about"
                            >A propos</router-link
                        >
                    </li>
                    <li>
                        <router-link class="nav-link scrollto" to="/contact"
                            >Contact</router-link
                        >
                    </li>

                    <li v-if="logged">
                        <router-link
                            class="getstarted scrollto"
                            to="/get-started"
                            >Démarrer</router-link
                        >
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
</template>

<script>
export default {
    data() {
        return {
            logged: false,
        };
    },
    async mounted() {
        if (localStorage.getItem("access_token")) {
            this.logged = true;
        }
    },
};
</script>

<style></style>
