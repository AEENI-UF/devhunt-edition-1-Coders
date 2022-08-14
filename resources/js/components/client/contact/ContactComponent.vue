<template>
    <div>
        <section
            v-if="$route.path != '/'"
            id="hero"
            class="d-flex align-items-center"
        >
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-6 order-1 order-lg-1 hero-img"
                        data-aos="zoom-in"
                        data-aos-delay="200"
                    >
                        <img
                            src="/assets/img/5437683-removebg-preview.png"
                            class="img-fluid animated"
                            alt=""
                        />
                    </div>
                    <div
                        class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-2"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <h1>Restez en contact avec nous</h1>
                        <h2>
                            Laissez-nous un pétit message pour communiquer
                            ensemble
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <main id="main">
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Contact</h2>

                        <strong>
                            <h3>
                                <i data-aos="fade-out" data-aos-delay="200"
                                    >" La pépinière des élites informaticiennes
                                    Malagasy "</i
                                >
                            </h3>
                        </strong>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Localisation:</h4>
                                    <p>
                                        Antaninarenina Tanambao BP 1487 ,
                                        Fianarantsoa, 301
                                    </p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>eni@eni-univ.fianar.mg</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Contact:</h4>
                                    <p>+261 34 05 733 36/ +261 33 42 302 02</p>
                                </div>
                                <div
                                    id="map"
                                    frameborder="0"
                                    style="
                                        border: 0;
                                        width: 100%;
                                        height: 290px;
                                    "
                                    allowfullscreen
                                ></div>
                            </div>
                        </div>

                        <div
                            class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch"
                        >
                            <form
                                @submit.prevent="sendMessage"
                                class="php-email-form"
                            >
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Votre nom</label>
                                        <input
                                            v-model="name"
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            id="name"
                                            required
                                        />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Votre Email</label>
                                        <input
                                            v-model="email"
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            id="email"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Objets</label>
                                    <input
                                        v-model="object"
                                        type="text"
                                        class="form-control"
                                        name="subject"
                                        id="subject"
                                        required
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea
                                        class="form-control"
                                        v-model="message"
                                        name="message"
                                        rows="10"
                                        required
                                    ></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">
                                        Votre message a été bien envoyée. Merci
                                        à vous!
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button :disabled="sending" type="submit">
                                        <span v-if="sending == false"
                                            >Envoyez Message</span
                                        >
                                        <v-progress-circular
                                            :size="25"
                                            :width="1"
                                            color="white"
                                            v-if="sending == true"
                                            indeterminate
                                        ></v-progress-circular>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        </main>
    </div>
</template>

<script>
import axios from "axios";
var mapboxgl = require("mapbox-gl/dist/mapbox-gl.js");
export default {
    async mounted() {
        mapboxgl.accessToken =
            "pk.eyJ1Ijoia2xheXJtb250IiwiYSI6ImNsNnRlN2RjbDBpa2MzY3FqNm92aXczZHQifQ.THDy3h9Kjk8ooh3hygBmzA";
        var map = new mapboxgl.Map({
            container: "map",
            style: "mapbox://styles/mapbox/streets-v11",
            center: [47.0929951, -21.4552835],
            zoom: 17,
        });
    },
    data() {
        return {
            sending: false,
            email: "",
            message: "",
            name: "",
            object: "",
        };
    },
    methods: {
        async sendMessage() {
            this.sending = true;
            const body = new FormData();
            body.append("email", this.email);
            body.append("message", this.message);
            body.append("name", this.name);
            body.append("object", this.object);

            await axios
                .post("/contact-us", body)
                .then((data) => {
                    this.$toast.success("Message envoyée");
                    this.sending = false;
                    this.email = "";
                    this.message = "";
                    this.name = "";
                    this.object = "";
                })
                .catch((e) => this.$toast.error(e.response.data.message));
        },
    },
};
</script>

<style></style>
