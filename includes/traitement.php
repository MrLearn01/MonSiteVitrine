
<?php
if (isset($_POST['submitButton'])) {

    if (!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['phone']) and !empty($_POST['message'])) {
        $nom = htmlspecialchars(trim($_POST['nom']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $message = htmlspecialchars(trim(nl2br($_POST['message'])));
        if (strlen($nom) <= 120) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (strlen($phone) <= 15) {
                    $enre = $bdd->prepare("INSERT INTO infos(Nom,Email,Telephone,Message_envoi,Date_envoi) VALUES(?,?,?,?,NOW())");
                    $enre->execute(array($nom, $email, $phone, $message));
                    $success = "Merci de nous avoir contacté";
                    $use = $bdd->prepare("SELECT * FROM infos WHERE Nom=?");
                    $use->execute(array($nom));
                    $user = $use->fetch();
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $user['Id'];
                    $_SESSION['nom'] = $user['Nom'];
                    $_SESSION['email'] = $user['Email'];
                    $_SESSION['phone'] = $user['Telephone'];
                    $_SESSION['message'] = $user['Message_envoi'];
                    include_once "mail.php";
                    $temps_session = 15;
                    $temps_actuel = date("U");
                    $ip_user = $_SERVER["REMOTE_ADDR"];

                    $req_ip_exist = $bdd->prepare("SELECT * FROM online WHERE user_ip = ?");
                    $req_ip_exist->execute(array($ip_user));
                    $ip_existe = $req_ip_exist->rowCount();
                    if ($ip_existe == 0) {
                        $insert_user = $bdd->prepare("INSERT INTO online(time_user,user_ip) VALUES (?,?)");
                        $insert_user->execute(array($temps_actuel, $ip_user));
                    } else {
                        $update_user = $bdd->prepare("UPDATE online SET time_user = ? WHERE user_ip = ?");
                        $update_user->execute(array($temps_actuel, $ip_user));
                    }
                    $delete_session = $temps_actuel - $temps_session;
                    $delete_user = $bdd->prepare("DELETE FROM online WHERE time_user < ?");
                    $delete_user->execute(array($delete_session));
                } else {
                    $error = "Le numéro de téléphone est trop long";
                }
            } else {
                $error = "Email Invalide";
            }
        } else {
            $error = "Le nom est trop long";
        }
    } else {
        $error = "Veuillez renseigner tous les champs";
        header('Location:index.php #contact');
    }
}
