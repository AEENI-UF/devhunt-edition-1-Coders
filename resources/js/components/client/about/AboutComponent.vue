<template>
    <div>
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>A propos </h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            L'Ecole Nationale d'informatique possède à peu près 2000 étudiants dans
                            son effectif actuellement. En tant qu'école nationale de l'innovation dans la digitalisation informatique,
                            avoir une connexion internet est un atout pour chaque étudiant dans cette école.
                        </p>
                        <ul>
                            <li>
                                <i class="ri-check-double-line"></i> Mettre en place un
                                point d'accèss WIFI pour permettre à ces étudiants d'avoir internet.
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Gérer plus de 2000 étudiants est une tâche
                                très délicate pour l'administrateur réseau de l'école, que ce soit dans le domaine de

                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Création d'une application WEB permettant d'administrer
                                et répartir l'accès internet pour chaque étudiant de l'école.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            L'école n'a qu'une option: mettre en place un point d'accès WIFI pour permettre à
                            ces étudiants d'avoir internet.Gérer plus de 2 000 étudiants est une tâche très delicate pour l'administrateur réseau de l'école,
                            que ce soit dans le domaine de sécurisation ou dans le domaine de gestion d'accès à ce réseau WIFI
                        </p>
                        <router-link to="/contact" class="btn-learn-more">Rester en contact</router-link>
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
                        class="col-lg-5 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1 img" 
                        style="background-image: url('assets/img/why-us.png')"
                        data-aos="zoom-in"
                        data-aos-delay="150"
                    >
                 </div>

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"
                    >
                        <div class="content">
                            <h3>
                            L’Ecole Nationale d’Informatique possède à
                                <strong

                                    >peu près 2 000 étudiants dans son
effectif actuel.</strong>
                            </h3>
                            <p>
                                En tant qu’école nationale de l’innovation dans la digitalisation informatique,
                                on a 3 parcours différents dans cette ecole
                            </p>
                        </div>


                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a
                                        data-bs-toggle="collapse"
                                        class="collapse"
                                        data-bs-target="#accordion-list-1"
                                        ><span>01</span> Informatique Generale(IG)
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
                                            L'informatique générale est un domaine d'activité scientifique, technique, et industriel concernant 
                                            le traitement automatique de l'information numérique par l'exécution de programmes informatiques hébergés par des dispositifs électriques-électroniques : des systèmes embarqués, des ordinateurs, des robots, des automates,
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-list-2"
                                        class="collapsed"
                                        ><span>02</span> Génie Logiciel et Base de données(GB)
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
                                           Le génie logiciel applique les principes et techniques d'ingénierie à la conception de systèmes logiciels,
                                         intégrés et à grande échelle.
                                            L'ingénieur logiciel doit maîtriser la théorie et les méthodes de l'informatique.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-list-3"
                                        class="collapsed"
                                        ><span>03</span>Administration Systèmes et Réseaux(SR)
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
                                           L'administrateur système et réseau est un professionnel en charge de l'architecture informatique de l'entreprise.
                                            Garant de l'efficacité des machines et de l'intégrité des données, 
                                           ce profil technique est très recherché par les entreprises.
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
