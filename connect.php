<?php
require_once('./functions/db.php');
require_once('./templates/header.html');
session_start();

?>

  <form action="./connexion.php" method="post">
    <label for="firstname">Entrez votre prénom : </label><br>
    <input type="text" name="firstname"><br>

    <label for="lastname">Entrez votre nom</label><br>
    <input type="text" name="lastname"><br>

    <input type="submit" value="Connexion">
 </form>
