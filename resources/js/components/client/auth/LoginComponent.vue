<template>
    <main id="main" style="margin-top: 100px">
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
            <div class="card card0 border-0">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <div
                                class="row px-3 justify-content-center mt-4 mb-5 border-line"
                            >
                                <img
                                    src="assets/img/students_05.jpg"
                                    class="image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Adresse email
                                    </h6></label
                                >
                                <input
                                    class="mb-4"
                                    type="email"
                                    v-model="email"
                                    name="email"
                                    placeholder="Enter a valid email address"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Mot de passe
                                    </h6></label
                                >
                                <input
                                    v-model="password"
                                    type="password"
                                    name="password"
                                    placeholder="Enter password"
                                />
                            </div>
                            <div class="row mb-3 px-3">
                                <button
                                    :disabled="sending"
                                    @click="login"
                                    class="btn btn-blue text-center"
                                >
                                    <span v-if="sending == false"
                                        >Se connecter</span
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
                            <div class="row mb-4 px-3">
                                <small class="font-weight-bold"
                                    >Vous n'avez pas encore de compte ?
                                    <router-link
                                        to="/etudiant/register"
                                        class="text-danger"
                                        >S'inscrire</router-link
                                    ></small
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            email: "",
            password: "",
            sending: false,
        };
    },
    methods: {
        async login() {
            this.sending = true;
            const body = new FormData();
            body.append("email", this.email);
            body.append("password", this.password);

            await axios
                .post("api/etudiant-auth/login", body)
                .then((res) => {
                    this.sending = false;
                    this.$toast.success(
                        "Votre connexion est réussi, vous avez réçu le code du Portal Captif sur votre numéro de téléphone"
                    );
                    localStorage.setItem("access_token", res.data.token);
                    this.$router.push("/");
                })
                .catch((e) => {
                    this.sending = false;
                    this.$toast.error(e.response.data.message);
                });
        },
    },
};
</script>

<style scoped>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #b0bec5;
    background-repeat: no-repeat;
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px;
}

.card2 {
    margin: 0px 40px;
}

.logo {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px;
}

.image {
    width: 360px;
    height: 280px;
}

.border-line {
    border-right: 1px solid #eeeeee;
}

.facebook {
    background-color: #3b5998;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.twitter {
    background-color: #1da1f2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.linkedin {
    background-color: #2867b2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.line {
    height: 1px;
    width: 45%;
    background-color: #e0e0e0;
    margin-top: 10px;
}

.or {
    width: 10%;
    font-weight: bold;
}

.text-sm {
    font-size: 14px !important;
}

::placeholder {
    color: #bdbdbd;
    opacity: 1;
    font-weight: 300;
}

:-ms-input-placeholder {
    color: #bdbdbd;
    font-weight: 300;
}

::-ms-input-placeholder {
    color: #bdbdbd;
    font-weight: 300;
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2c3e50;
    font-size: 14px;
    letter-spacing: 1px;
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304ffe;
    outline-width: 0;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

a {
    color: inherit;
    cursor: pointer;
}

.btn-blue {
    background-color: #1a237e;
    width: 150px;
    color: #fff;
    border-radius: 2px;
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer;
}

.bg-blue {
    color: #fff;
    background-color: #1a237e;
}

@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px;
    }

    .image {
        width: 300px;
        height: 220px;
    }

    .border-line {
        border-right: none;
    }

    .card2 {
        border-top: 1px solid #eeeeee !important;
        margin: 0px 15px;
    }
}
</style>
