<?php require_once "includes/db.php";  ?>
<?php require_once "includes/traitement.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once "includes/head.php";  ?>

<body id="page-top">
    <?php require_once "includes/navbar.php";  ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bienvenue à</div>
            <div class="masthead-heading">Multi Services Informatique</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="index.php #services">En Savoir plus</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-decoration-underline">Services</h2>
                <h3 class="section-subheading text-muted">MSI est spécialisé dans plusieurs secteurs du domaine de l’informatique.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="display-1">
                        <i class="fa fa-solid fa-cart-shopping text-primary"></i>
                    </span>
                    <h4 class="my-3">E-Commerce</h4>
                    <p class="text-muted">Ordinateurs portable, accessoires informatique, équipements réseau, Des imprimantes et d'autres equipements de pointe…</p>
                    <button type="button" class="btn btn-primary text-uppercase mt-3" data-bs-toggle="modal" data-bs-target="#serviceModal1">EN SAVOIR PLUS</button>
                </div>
                <div class="col-md-4">
                    <span class="display-1">
                        <i class="fa fa-solid fa-laptop text-primary"></i>
                    </span>
                    <h4 class="my-3">Infographie & web Designer</h4>
                    <p class="text-muted">Création de site web, Conception de logiciels, Gestion et hébergement de site, Création de Base De Données, Création d’affiche publicitaire, Logo, Carte de visite, Flyers…</p>
                    <button type="button" class="btn btn-primary text-uppercase mt-3" data-bs-toggle="modal" data-bs-target="#serviceModal2">EN SAVOIR PLUS</button>
                </div>
                <div class="col-md-4">
                    <span class="display-1">
                        <i class="fa fa-solid fa-lock text-primary"></i>
                    </span>
                    <h4 class="my-3">Maintenance & securité</h4>
                    <p class="text-muted">Maintenance informatique, Maintenance industrielle, Maintenance de réseaux, câblage réseaux, Mise en place de SET-UP informatique…
                    </p>
                    <button type="button" class="btn btn-primary text-uppercase mt-3" data-bs-toggle="modal" data-bs-target="#serviceModal3">EN SAVOIR PLUS</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-decoration-underline">Portfolio</h2>
                <h3 class="section-subheading text-muted">MSI, c’est aussi les projets de qualités.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/SZS.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">N'DOGUE S.A</div>
                            <div class="portfolio-caption-subheading text-muted">Developpement Web</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/HY.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">NTIC GROUP</div>
                            <div class="portfolio-caption-subheading text-muted">Conception Graphique</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/qsd.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lines</div>
                            <div class="portfolio-caption-subheading text-muted">Branding</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-decoration-underline">A Propos</h2>
                <h3 class="section-subheading text-muted">Tout savoir du parcours ingenieux de Multi Services Informatique.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="text-muted">Qui Sommes Nous ?</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-dark"><span class="lettrine">C</span>REER EN 2020 MULTI SERVICES INFORMATIQUE(M.S.I) EST UNE STARTUP QUI S’ENGAGE A VOUS OFFRIR DES PRODUITS ET SERVICES INFORMATIQUES DE QUALITÉ TOUJOURS PLUS PERFORMANTS ET DURABLES. AVEC EN SON
                                SEIN DES JEUNES DYNAMIQUE, ENGAGE, RIGOUREUX ET TRAVAILLEURS POUR SATISFAIRE SA CLIENTÈLE QUE VOUS ÊTES</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="text-muted">Quel Est Notre Particularité ?</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-dark"> NOTRE PARTICULARITE C'EST VOUS OFFRIR UN SERVICE DE QUALITE AVEC POUR ATOUT MAJEUR : LA LOYAUTE, LA PONCTUALITE ET LE RESPECT DE NOS ENGAGEMENTS.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="text-muted">Quels Services Offrons-Nous ?</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-dark text-uppercase">MSI comme son nom l’indique fournir des prestations informatique mais aussi l’électronique et la mécanique et bien plus. Elle compte en son sein des techniciens en réseau, en maintenance informatique, en système de production, des développeurs et des infographes qu’elle met a votre service. Elle a pour but de satisfaire un grand nombre de personnes vis-à-vis de leurs besoins qu'il soit matériel ou services.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4><a class="text-light text-decoration-none" href="#contact">
                                Faites Partir
                                <br /> de Notre
                                <br /> Aventure!
                            </a>
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-decoration-underline py-3">Notre Equipe</h2>
                <h4 class="my-3 lead">L'équipe MSI est actuellement composée d'une dixaine de personnes. Nous avons initié le Projet d'un point de vue professionnel quand nous étions en fin d'études, dans des domaines divers. Motivés par l'idée de travailler sur un projet
                    Passionnant, original et multidisciplinaire. La caractéristique commune de toute l'équipe est la passion pour l'œuvre que nous créons tous ensemble. <br> Nous sommes une équipe soudée et très créative. Nous gérons tous ensemble le
                    côté positif et négatif de cette grande aventure entrepreneuriale. <br> Enfin, chacun développe le projet dans l'axe qui l'intéresse le plus, en proposant des idées, voire en prenant en charge toute la production. C'est la richesse
                    de nos idées et notre complémentarité qui fais la réussite de notre projet.
                </h4>
                <div class="mb-3">
                    <i class="fa fa-leaf"></i>
                    <i class="fa fa-leaf"></i>
                    <i class="fa fa-leaf"></i>
                </div>
                <h4 class="mb-3 text-uppercase text-decoration-underline">La Direction </h4>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="image/IM1.jpg" alt="N'GUESSAN KONAN" />
                        <h4>N'guessan Konan Patrick</h4>
                        <p class="text-muted">PDG DE MSI</p>
                        <a href="https://wa.me/c/22588320025" target="blank" class="btn btn-lg"><i class="fa fa-brands fa-whatsapp"></i></a>
                        <a href="https://t.me/konanMichelPaul" target="blank" class="btn btn-lg"><i class="fa fa-brands fa-telegram"></i></a>
                        <a href="https://www.linkedin.com/in/paul-konan-631bb41ab" target="blank" class="btn btn-lg"><i class="fa fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="image/Cisse.jpeg" alt="CISSE BOUBA" />
                        <h4>Bouba Abiba Cissé</h4>
                        <p class="text-muted">SECRETAIRE GENERALE DE MSI</p>
                        <a href="https://www.facebook.com/abi.cisse.3348" class="btn btn-lg" target="blank"><i class="fa fa-brands fa-facebook"></i></a>
                        <a href="https://t.me/abicisse" class="btn btn-lg" target="blank"><i class="fa fa-brands fa-brands fa-telegram"></i></a>
                        <a href="https://www.linkedin.com/in/abi-cisse-78a9b5218" class="btn btn-lg" target="blank"><i class="fa fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="image/Terra.jpg" alt="TERRA ADAMA" />
                        <h4>Terra Adama</h4>
                        <p class="text-muted">TRESORIER DE MSI</p>
                        <a href="https://m.facebook.com/adama.terra.52" target="blank" class="btn btn-lg" target="blank"><i class="fa fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com/terra_adama?t=f4MFsEiA-ywpLVYKol0pwA&s=09" class="btn btn-lg" target="blank"><i class="fa fa-brands fa-twitter"></i></a>
                        <a href="https://t.me/TerraAdama17" target="blank" class="btn btn-lg"><i class="fa fa-brands fa-brands fa-telegram"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted text-uppercase">Pour vous nous avons selectioné les meilleurs pour un service de qualité.</p>
                </div>
                <div class="button-team text-center mt-5 d-none d-xl-block">
                    <a href="Team.php" id="team" class="btn btn-xl btn-outline-primary">Reste de l'équipe <span><i class="fa fa-angle-right mx-3"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section com-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-decoration-underline text-light">Commentaires</h2>
                <h3 class="section-subheading text-muted">.</h3>
            </div>
            <div class="row">
                <div class="text-center">
                    <span class="fa fa-quote-left display-4 text-light"></span>
                    <p class="text-light fw-bolder"> L'élément déclencheur qui m'a convaincu de faire confiance à Multi Services Informatique (MSI) est que toutes les promesses qu'ils m'ont faites au départ ils les ont tenus. C’est une structure exceptionnelle doté d’un certain engouement
                        et d’une certaine loyauté. C’est un réel plaisir pour moi de collaborer avec eux.</p>
                    <span class="fa fa-quote-right display-4 text-light"></span>
                </div>
                <div class="text-center">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="image/team-3.jpg" alt="Monsieur Franklin" />
                        <h4 class="text-light">Mr. Franklin</h4>
                        <p class="text-light">Client</p>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Clients-->
    <div class="py-5 d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="my-3">
                    <h3 class="title text-center text-capitalize">MULTI SERVICES INFORMATIQUE &hearts;</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contacter Nous</h2>
                <h3 class="section-subheading text-white">Un spécialiste toujours a votre disposition.</h3>
            </div>
            <form id="contactForm" method="post" action="index.php">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" name="nom" type="text" placeholder="NOM & PRENOMS *" />
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" name="email" type="email" placeholder="Email *" />
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" name="phone" type="tel" placeholder="Contact *" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" name="message" placeholder="Entrez Votre Message*"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder"><?php if (isset($success)) { ?>
                            <p class="alert alert-success"><?= $success ?></p>
                        <?php }  ?>
                    </div>
                </div>
                <!-- Submit error message-->
                <div class="text-center text-danger mb-3">
                    <div class="fw-bolder"><?php if (isset($error)) { ?>
                            <p class="alert alert-danger"><?= $error ?></p>
                        <?php }  ?>
                    </div>
                </div>
                <div class="row">
                    <!-- Submit Button-->
                    <div class="col-md-6 text-center mt-3"><button class="btn btn-success btn-xl text-uppercase" name="submitButton" type="submit">Envoyer</button></div>
                    <!-- Reset Button-->
                    <div class="col-md-6 mt-3  text-center"><button class="btn btn-danger btn-xl text-uppercase" type="reset">Supprimer</button></div>
                </div>

            </form>
        </div>
    </section>
    <?php include "includes/footer.php";  ?>
    <!-- Portfolio And Services Modals-->
    <!-- Service item 1 modal popup-->
    <div class="portfolio-modal modal fade" data-bs-backdrop="static" id="serviceModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">E-commerce</h2>
                                <p class="item-intro text-muted">Avec MSI offrez-vous des appareils de qualite.</p>
                                <img class="img-fluid d-block mx-auto" src="image/za.jpg" alt="..." />
                                <p>Ordinateurs portable, Carte graphique, équipements réseau, imprimantes et autres équipements de pointe. Tous ces outils vous sont offert en fonction de vos besoins et sont de qualités et de meilleurs prix. MSI configure
                                    votre ordinateur selon vos spécifications. Nous vous installons les systèmes d’exploitations tels que Microsoft Windows, Linux ou encore MAC OS d’Apple. Nous vous installons tous les logiciels dont vous ayez besoin
                                    sur votre ordinateur.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Contact:</strong> (+225) 07-88-32-00-25 / 05-45-08-63-80
                                    </li>
                                    <li>
                                        <strong>Category:</strong> E-commerce
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fa fa-xmark me-1"></i>
                                    Fermer Projet
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service item 2 modal popup-->
    <div class="portfolio-modal modal fade" data-bs-backdrop="static" id="serviceModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Infographie Et Web Designer</h2>
                                <p class="item-intro text-muted">L'infographie est un art a MSI.</p>
                                <img class="img-fluid d-block mx-auto" src="image/laptop-computer-table-landscape-book-light-1178525-pxhere.com.jpg" alt="..." />
                                <p>Multi services informatique vous apporte les meilleurs designs dans la création de vos logos, affiches, flyers. Nous sommes disponible pour vos différents montage vidéos. Multi Services Informatique s’occupe de tout : dépôt
                                    de nom de domaine, hébergement sur serveurs sécurisés, création de votre site web personnalisé à votre goût, réalisation de logos professionnels, création de pages pour réseaux sociaux, campagnes de communication et
                                    e-marketing, référencement. Nous avons les solutions adaptées à vos besoins.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Contact:</strong> (+225) 07-88-32-00-25 / 05-45-08-63-80
                                    </li>
                                    <li>
                                        <strong>Category:</strong> Infographie et Developpement Web
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fa fa-xmark me-1"></i>
                                    Fermer Projet
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service item 3 modal popup-->
    <div class="portfolio-modal modal fade" data-bs-backdrop="static" id="serviceModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Maintenance & securité</h2>
                                <p class="item-intro text-muted">Avec MSI c’est la maintenance au dégré superieur.</p>
                                <img class="img-fluid d-block mx-auto" src="image/technology-machine-product-server-computers-servers-1241325-pxhere.com.jpg" alt="..." />
                                <p>Multi services informatique est disponible pour la mise en place de vos réseaux lan et wlan. Nous vous proposons des contrats de maintenance complets pour l’entretien, la maintenance, l’assistance, la sécurité et le dépannage
                                    de vos systèmes, réseaux et matériels informatique. Nous intervenons sur l’ensemble des composants de vos systèmes électrique et mécanique.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong> (+225) 07-88-32-00-25 / 05-45-08-63-80
                                    </li>
                                    <li>
                                        <strong>Category:</strong> Maintenance & securité
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fa fa-xmark me-1"></i>
                                    Fermer Projet
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" data-bs-backdrop="static" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Site Web</h2>
                                <p class="item-intro text-muted">L'efficacité fait ces preuves avec le MSI.</p>
                                <img class="img-fluid d-block mx-auto" src="image/az.jpg" alt="..." />
                                <p>Un site de qualité répondant a vos besoins.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong> N'DOGUE S.A
                                    </li>
                                    <li>
                                        <strong>Category:</strong> Developpement Web
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fa fa-xmark me-1"></i>
                                    Fermer Projet
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" data-bs-backdrop="static" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Carte de visite</h2>
                                <p class="item-intro text-muted">L'efficacité fait ces preuves avec le MSI.</p>
                                <img class="img-fluid d-block mx-auto" src="image/HY.jpg" alt="..." />
                                <p>Toute une equipe a votre disposition, pour vous apportez des services de qualité !</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong> MTIC GROUP
                                    </li>
                                    <li>
                                        <strong>Category:</strong> Conception Graphique
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fa fa-xmark me-1"></i>
                                    Fermer Projet
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" data-bs-backdrop="static" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Maintenance</h2>
                                <p class="item-intro text-muted">L'efficacité fait ces preuves avec le MSI.</p>
                                <img class="img-fluid d-block mx-auto" src="image/qsd.jpg" alt="..." />
                                <p>La Maintenance est un acquis chez Multi Services Informatique</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong> Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong> Maintenance
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fa fa-xmark me-1"></i>
                                    Fermer Projet
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="web/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>