<template>
    <div>
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-6 order-1 order-lg-1 hero-img"
                        data-aos="zoom-in"
                        data-aos-delay="200"
                    >
                        <img
                            src="assets/img/pngtree-e-learning-concept-of-online-education-student-version-in-cartoon-style-png-image_6538503-removebg-preview.png"
                            class="img-fluid animated"
                            alt=""
                        />
                    </div>
                    <div
                        class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-2"
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
                </div>
            </div>
        </section>
        <main id="main">
            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Les avantages</h2>
                        <p>
                            Quelques fonctionnalités qui satisferont vos besoins
                            :
                        </p>
                    </div>

                    <div class="row">
                        <div
                            style="cursor: pointer"
                            class="col-xl-3 col-md-6 d-flex align-items-stretch"
                            data-aos="flip-left"
                            data-aos-delay="100"
                        >
                            <div class="icon-box text-center">
                                <div class="icon">
                                    <i class="bx bx-wifi"></i>
                                </div>
                                <h4>Points d'accès Wifi</h4>
                                <p class="text-justify">
                                    Mise en place d'une gestion de point d'accès
                                    Wifi pour chaque étudiant de l'école grâce à
                                    la validation rétroactive de leur mot de
                                    passe.
                                </p>
                            </div>
                        </div>

                        <div
                            style="cursor: pointer"
                            class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
                            data-aos="flip-left"
                            data-aos-delay="200"
                        >
                            <div class="icon-box text-center">
                                <div class="icon">
                                    <i class="bx bx-data"></i>
                                </div>
                                <h4>Base de données des étudiants</h4>
                                <p class="text-justify">
                                    Création d'une base de données pour les
                                    étudiants tout niveau confondu.
                                </p>
                            </div>
                        </div>

                        <div
                            style="cursor: pointer"
                            class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
                            data-aos="flip-left"
                            data-aos-delay="300"
                        >
                            <div class="icon-box text-center">
                                <div class="icon">
                                    <i class="bx bx-user"></i>
                                </div>
                                <h4>Utilisateurs</h4>
                                <p class="text-justify">
                                    Mise en place d'une page d'acceuil dans
                                    laquel chaque étudiant pourra accéder pour
                                    connecter
                                </p>
                            </div>
                        </div>

                        <div
                            style="cursor: pointer"
                            class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
                            data-aos="flip-left"
                            data-aos-delay="400"
                        >
                            <div class="icon-box text-center">
                                <div class="icon">
                                    <i class="bx bx-desktop"></i>
                                </div>

                                <h4>Dashboard</h4>
                                <p class="text-justify">
                                    Gestion des contenu avec tableau de bord
                                    pour l'administrateur du plateforme
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Services Section -->
            <section id="pricing" class="pricing">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Commencer</h2>
                    </div>

                    <div class="row">
                        <div
                            class="col-lg-6"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="box">
                                <h3>Se connecter sur votre compte</h3>
                                <div class="m-3">
                                    Vous avez déjà un compte étudiant ?
                                </div>
                                <router-link
                                    to="/etudiant/login"
                                    class="buy-btn btn-sm"
                                    >Se connecter</router-link
                                >
                            </div>
                        </div>
                        <div
                            class="col-lg-6 mt-4 mt-lg-0"
                            data-aos="fade-up"
                            data-aos-delay="300"
                        >
                            <div class="box">
                                <h3>S'inscrire sur le plateforme</h3>
                                <div class="m-3">
                                    Inscrivez-vous pour béneficier des offres de
                                    l'école avec la connexion internet
                                </div>
                                <router-link
                                    to="/etudiant/register"
                                    class="buy-btn btn-sm"
                                    >S'inscrire</router-link
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
export default {};
</script>

<style>
.text-justify {
    text-align: justify;
}
</style>
