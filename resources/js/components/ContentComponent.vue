<template>
    <main id="main">
        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens section-bg">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img
                            src="akata.gif"
                            class="img-fluid"
                            alt=""
                        />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img
                            src="assets/img/clients/client-2.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img
                            src="assets/img/clients/client-3.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img
                            src="assets/img/clients/client-4.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img
                            src="assets/img/clients/client-5.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>

                    <div
                        class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                    >
                        <img
                            src="assets/img/clients/client-6.png"
                            class="img-fluid"
                            alt=""
                        />
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
