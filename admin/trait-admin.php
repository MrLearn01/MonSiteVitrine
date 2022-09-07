<?php
if (isset($_GET['access']) and $_GET['access'] == 1) {
    $req = $bdd->query("SELECT * FROM infos ORDER BY Id ASC");

    $nbre_user_online = $bdd->query("SELECT * FROM online");
    $nbre_user = $nbre_user_online->rowCount();
} else {
    require_once "index.php";
    exit();
}
