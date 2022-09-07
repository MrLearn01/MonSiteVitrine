<?php
require_once "../includes/db.php";
if (isset($_GET['supprime'])) {
    $supprime = (int) $_GET['supprime'];
    $del = $bdd->prepare("DELETE FROM infos WHERE Id=?");
    $del->execute(array($supprime));
    header('Location:admin.php?access=1');
    exit();
} else {
    header('Location:admin.php?access=1');
    exit();
}
