<template>
    <main id="main">
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <h1>Accès WIFI</h1>
                        <h2>
                            C'est une plateforme d'application web afin de gérer
                            l'accès à un point d'accès WIFI.
                        </h2>

                        <div
                            class="d-flex justify-content-center justify-content-lg-start"
                        >
                            <router-link
                                to="/about"
                                class="btn-get-started scrollto"
                                >Démarrer</router-link
                            >
                        </div>
                    </div>
                    <div
                        class="col-lg-6 order-1 order-lg-2 hero-img"
                        data-aos="zoom-in"
                        data-aos-delay="200"
                    >
                        <img
                            src="assets/img/hero-img.png"
                            class="img-fluid animated"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img src="akata.gif" class="img-fluid" alt="" />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img src="arato.jpg" class="img-fluid" alt="" />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img src="log1.jpg" class="img-fluid" alt="" />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img src="numeri.png" class="img-fluid" alt="" />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img src="vilia.png" class="img-fluid" alt="" />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img src="WeCours.jpg" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cliens Section -->

        <about-component></about-component>
        <contact-component></contact-component>
    </main>
</template>

<script>
import AboutComponent from "./client/about/AboutComponent.vue";
import ContactComponent from "./client/contact/ContactComponent.vue";
export default {
    components: { AboutComponent, ContactComponent },
};
</script>

<style></style>
