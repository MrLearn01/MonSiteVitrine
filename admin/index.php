<?php
require_once "../includes/db.php";
require_once "trait.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Connexion - Administration</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
    <div class="center">
        <h1>Administration</h1>
        <form method="post" action="index.php">
            <div class="inp">
                <input type="text" name="username">
                <span></span>
                <label>Username</label>
            </div>
            <div class="inp">
                <input type="password" name="password">
                <span></span>
                <label>Password</label>
            </div>
            <div>
                <?php if (isset($error)) {  ?>
                    <p class="red"><?= $error ?></p>
                <?php } ?>
            </div>
            <input type="submit" value="Envoyer" name="envoyer">
        </form>
    </div>
</body>

</html>