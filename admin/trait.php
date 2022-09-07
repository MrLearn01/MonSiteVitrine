<?php
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['username']) and !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        if ($username == "MSI" and $password == "MSIGROUP_LEGEND123@") {
            header("Location:admin.php?access=1");
        } else {
            $error = "Acces Refuse";
        }
    } else {
        $error = "Veuillez Remplir Tous Les Champs";
    }
}
