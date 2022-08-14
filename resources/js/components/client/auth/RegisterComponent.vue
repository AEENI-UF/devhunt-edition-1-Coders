<template>
    <main id="main" style="margin-top: 100px">
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
            <div class="card card0 border-0">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        N. matricule
                                    </h6></label
                                >
                                <input
                                    class="mb-4"
                                    type="text"
                                    v-model="email"
                                    placeholder="Numéro matricule"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">Nom</h6></label
                                >
                                <input
                                    class="mb-4"
                                    type="text"
                                    v-model="email"
                                    placeholder="Votre nom"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Prénom(s)
                                    </h6></label
                                >
                                <input
                                    type="text"
                                    v-model="prenoms"
                                    placeholder="Votre prénoms"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Adresse email
                                    </h6></label
                                >
                                <input
                                    type="email"
                                    v-model="email"
                                    placeholder="Votre adresse email"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Mot de passe
                                    </h6></label
                                >
                                <input
                                    class="mb-4"
                                    type="password"
                                    v-model="password"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Date de naissance
                                    </h6></label
                                >
                                <input
                                    class="mb-4"
                                    type="text"
                                    v-model="date_naiss"
                                    placeholder="17-08-1998"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Lieu de naissance
                                    </h6></label
                                >
                                <input
                                    class="mb-4"
                                    type="text"
                                    v-model="lieu_naiss"
                                    placeholder="Ankazobe"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Adresse actuelle
                                    </h6></label
                                >
                                <input
                                    class="mb-4"
                                    type="text"
                                    v-model="adresse"
                                    placeholder="Andrainjato"
                                />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"
                                    ><h6 class="mb-0 text-sm">
                                        Adresse actuelle
                                    </h6></label
                                >
                                <input
                                    class="mb-4"
                                    type="text"
                                    v-model="tel"
                                    placeholder="+2613484578"
                                />
                            </div>

                            <div class="row mb-3 px-3">
                                <button
                                    @click="register"
                                    type="submit"
                                    class="btn btn-blue text-center"
                                >
                                    S'inscrire
                                </button>
                            </div>
                            <div class="row mb-4 px-3">
                                <small class="font-weight-bold"
                                    >Vous avez déjà un compte ?
                                    <router-link
                                        to="/etudiant/login"
                                        class="text-danger"
                                        >Se connecter</router-link
                                    ></small
                                >
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    data() {
        return {
            matricule: "",
            nom: "",
            prenoms: "",
            date_naiss: "",
            lieu_naiss: "",
            sexe: "",
            adresse: "",
            tel: "",
            email: "",
            password: "",
        };
    },
    methods: {
        async register() {
            if (
                this.matricule == "" ||
                this.nom == "" ||
                this.prenoms == "" ||
                this.date_naiss == "" ||
                this.lieu_naiss == "" ||
                this.sexe == "" ||
                this.adresse == "" ||
                this.tel == "" ||
                this.email == "" ||
                this.password == ""
            ) {
                
            }
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
