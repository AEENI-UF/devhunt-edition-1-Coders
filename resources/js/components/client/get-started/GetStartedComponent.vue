<template>
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Les avantages</h2>
                    <p>
                        Quelques fonctionnalités qui satisferont vos besoins :
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
                                Wifi pour chaque étudiant de l'école grâce à la
                                validation rétroactive de leur mot de passe.
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
                                Mise en place d'une page d'acceuil dans laquel
                                chaque étudiant pourra accéder pour connecter
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
                                Gestion des contenu avec tableau de bord pour
                                l'administrateur du plateforme
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
                            <span>Vous avez déjà un compte étudiant ?</span>
                            <a href="/authentification/etudiant" class="buy-btn"
                                >Se connecter</a
                            >
                        </div>
                    </div>
                    <div
                        class="col-lg-6 mt-4 mt-lg-0"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >
                        <div class="box">
                            <h3>S'inscrire sur votre compte</h3>
                            <span
                                >Inscrivez-vous pour béneficier des offres de
                                l'école avec la connexion internet</span
                            >
                            <a
                                href="/authentification/inscription"
                                class="buy-btn"
                                >S'inscrire</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
export default {};
</script>

<style>
.text-justify {
    text-align: justify;
}
</style>
