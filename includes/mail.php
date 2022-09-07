<?php
$header = "MIME-Version: 1.0\n\r";
$header .= 'From:"MSI.com"<support@MSI.com>' . "\n";
$header .= 'Content-Type:text/html; charset=UTF-8';
$header .= 'Content-Transfer-Encoding : 8bit';

$Msg = '
<html>
      <body>
      <div align="center">
      <u>Nouveau Message - Multi Services Informatique</u>
      <img src="image/msiii.jpg" alt="MSI">
      Accéder à la page d\'administration pour voir les réactions.<a href="admin/admin.php">Par Ici</a>
      </div>
      </body>
</html>
';
mail("Multi.services.informatique@gmail.com", "Nouveau Message MSI", $Msg);
