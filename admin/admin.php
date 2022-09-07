<?php require_once "../includes/db.php";
require_once "trait-admin.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Multi Services Informatique</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../image/New-logo-MSI.png" />
    <!-- fichier fontawesone-->
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <!-- police de font google-->
    <link href="../web/css.css" rel="stylesheet" type="text/css" />
    <link href="../web/css 2.css" rel="stylesheet" type="text/css" />
    <!-- le fichier css-->
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="../index.php #page-top"><img src="../assets/New-logo-MSI.png" alt="Logo MSI" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="../index.php #services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php #portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php #about">A Propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php #team">Notre Equipe</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php #contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../image/img12.jpg');">
        <div class="container">
            <div class="masthead-subheading">Administration </div>
            <div class="masthead-heading">Multi Service Informatique</div>
        </div>
    </header>
    <section class="page-section py-5">
        <div class="container">
            <div class="row">
                <h3 class="text text-center text-uppercase text-decoration-underline text-dark mb-3">Liste Des Messages Recus</h3>
                <table class="table table-dark table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Identifiant</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($reqs = $req->fetch()) {     ?>
                            <tr>
                                <th scope="row"><?= $reqs['Id'] ?></th>
                                <th><?= $reqs['Nom'] ?></th>
                                <th><?= $reqs['Email'] ?></th>
                                <th><?= $reqs['Telephone'] ?></th>
                                <th><?= $reqs['Message_envoi'] ?></th>
                                <th><a href="delete.php?supprime=<?= $reqs['Id'] ?>" class="btn btn-danger" onclick="confirm('ETES VOUS SUR DE VOULOIR SUPPRIMER CE MESSAGE')"><i class="fa-solid fa-trash"></i> SUPPRIMER</a></th>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                <p class="text text-dark text-uppercase">Nombre d'utilisateurs en ligne : <?= $nbre_user ?></p>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Multi Services Informatique 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/invites/contact/?i=1fbmyy2rsx4z7&utm_content=7rx91hq" aria-label="Instagram" target="_blank"><i class="fa fa-brands fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/MiltiServicesInformatic" aria-label="Facebook" target="_blank"><i class="fa fa-brands fa-facebook"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="http://wa.me/c/22545086380" aria-label="Whatsapp" target="_blank"><i class="fa fa-brands fa-whatsapp" target="_blank"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <!-- <a class="link-dark text-decoration-none me-3" href="#!">Police Privé</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a> -->
                    <a href="../index.php #page-top"><img src="../assets/New-logo-MSI.png" alt="..." /></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="../web/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>

</html>