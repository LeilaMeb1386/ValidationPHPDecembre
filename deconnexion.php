<?php
session_start();
session_destroy();

echo "Vous êtes déconnecté";
?>
<!Doctype html>
<html lang="fr" dir="ltr">
<head>
  <title>Déconnexion</title>
  <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <p>Pour vous reconnecter a votre compte cliquez ici : </P>
    <button type="submit" value="Connexion"><a href="./connect.php">Connexion</a></button>
    <li><a href="index.php">revenir a l'accueil</a></li>

</body>
</html>
