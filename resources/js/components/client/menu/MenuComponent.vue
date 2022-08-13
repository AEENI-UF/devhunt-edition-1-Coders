<template>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">ENI</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <router-link class="nav-link scrollto active" to="/home"
                            >Accueil</router-link
                        >
                    </li>
                    <!--<li>
                        <a class="nav-link scrollto" href="#about">About</a>
                    </li>
                    <li>
                        <router-link class="nav-link scrollto" to="/get-started"
                            >Get started</router-link
                        >
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#portfolio"
                            >Portfolio</a
                        >
                    </li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown">
                        <a href="#"
                            ><span>Drop Down</span>
                            <i class="bi bi-chevron-down"></i
                        ></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown">
                                <a href="#"
                                    ><span>Deep Drop Down</span>
                                    <i class="bi bi-chevron-right"></i
                                ></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    -->
                    <li>
                        <router-link class="nav-link scrollto" to="/contact"
                            >Contact</router-link
                        >
                    </li>

                    <li>
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
export default {};
</script>

<style></style>
