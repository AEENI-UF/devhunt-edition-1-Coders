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
                        class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-1 order-lg-1"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <h1>C'est quoi ?</h1>
                        <h2>
                            Vous trouverez la déscription du plateforme ici !
                        </h2>
                    </div>
                    <div
                        class="col-lg-6 order-2 order-lg-2 hero-img"
                        data-aos="zoom-in"
                        data-aos-delay="200"
                    >
                        <img
                            src="/assets/img/pngtree-cute-clouds-bubble-question-mark-clipart-png-image_5592907-removebg-preview.png"
                            class="img-fluid animated"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>A propos</h2>
                </div>

                <div class="row content text-justify">
                    <div class="col-lg-6">
                        <p>
                            L'Ecole Nationale d'informatique possède à peu près
                            2000 étudiants dans son effectif actuellement. En
                            tant qu'école nationale de l'innovation dans la
                            digitalisation informatique, avoir une connexion
                            internet est un atout pour chaque étudiant dans
                            cette école.
                        </p>
                        <ul>
                            <li>
                                <i class="ri-check-double-line"></i>Mise en
                                place d'un système de gestion de point d'accès
                                WI-FI
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Gestion
                                d'une base de données uniques pour les étudiants
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Gestion des
                                utilisateurs avec authentification à doubles
                                facteurs
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            L'école n'a qu'une option: mettre en place un point
                            d'accès WIFI pour permettre à ces étudiants d'avoir
                            internet.Gérer plus de 2 000 étudiants est une tâche
                            très delicate pour l'administrateur réseau de
                            l'école, que ce soit dans le domaine de sécurisation
                            ou dans le domaine de gestion d'accès à ce réseau
                            WIFI
                        </p>
                        <router-link to="/contact" class="btn-learn-more"
                            >Rester en contact</router-link
                        >
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div
                        class="col-lg-5 align-items-stretch order-1 order-lg-1 img"
                        style="background-image: url('assets/img/why-us.png')"
                        data-aos="zoom-in"
                        data-aos-delay="150"
                    ></div>
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-2"
                    >
                        <div class="content">
                            <h3>
                                L’Ecole Nationale d’Informatique possède à
                                <strong
                                    >peu près 2 000 étudiants dans son effectif
                                    actuellement.</strong
                                >
                            </h3>
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a
                                        data-bs-toggle="collapse"
                                        class="collapse"
                                        data-bs-target="#accordion-list-1"
                                        ><span>01</span> Informatique
                                        Generale(IG) ><span>01</span> Parcours
                                        Informatique Generale(IG)

                                        <i
                                            class="bx bx-chevron-down icon-show"
                                        ></i
                                        ><i
                                            class="bx bx-chevron-up icon-close"
                                        ></i
                                    ></a>
                                    <div
                                        id="accordion-list-1"
                                        class="collapse show"
                                        data-bs-parent=".accordion-list"
                                    >
                                        <p>
                                            L'informatique générale est un
                                            domaine d'activité scientifique,
                                            technique, et industriel concernant
                                            le traitement automatique de
                                            l'information numérique par
                                            l'exécution de programmes
                                            informatiques hébergés par des
                                            dispositifs
                                            électriques-électroniques : des
                                            systèmes embarqués, des ordinateurs,
                                            des robots, des automates,
                                            Informatique Générale fait les atous
                                            en informatique Genie et Systeme
                                            Réseaux
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-list-2"
                                        class="collapsed"
                                        ><span>02</span> Génie Logiciel et Base
                                        de données(GB) ><span>02</span> Génie
                                        Logiciel et Base de donnée(GB)

                                        <i
                                            class="bx bx-chevron-down icon-show"
                                        ></i
                                        ><i
                                            class="bx bx-chevron-up icon-close"
                                        ></i
                                    ></a>
                                    <div
                                        id="accordion-list-2"
                                        class="collapse"
                                        data-bs-parent=".accordion-list"
                                    >
                                        <p>
                                            Le génie logiciel applique les
                                            principes et techniques d'ingénierie
                                            à la conception de systèmes
                                            logiciels, intégrés et à grande
                                            échelle. L'ingénieur logiciel doit
                                            maîtriser la théorie et les méthodes
                                            de l'informatique. fait et créer des
                                            logiciel en facon proffesionnel
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-list-3"
                                        class="collapsed"
                                        ><span>03</span>Administration Systèmes
                                        et Réseaux(SR)
                                        <i
                                            class="bx bx-chevron-down icon-show"
                                        ></i
                                        ><i
                                            class="bx bx-chevron-up icon-close"
                                        ></i
                                    ></a>
                                    <div
                                        id="accordion-list-3"
                                        class="collapse"
                                        data-bs-parent=".accordion-list"
                                    >
                                        <p>
                                            L'administrateur système et réseau
                                            est un professionnel en charge de
                                            l'architecture informatique de
                                            l'entreprise. Garant de l'efficacité
                                            des machines et de l'intégrité des
                                            données, ce profil technique est
                                            très recherché par les entreprises.
                                            Fait les atous des materiel en
                                            réseaux en informatique
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->
    </div>
</template>

<script>
export default {};
</script>

<style></style>
