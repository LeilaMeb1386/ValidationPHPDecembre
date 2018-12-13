<?php
require_once('./functions/db.php');
require_once('./templates/header.html');
session_start();

if (!isset($_SESSION)){
  echo "Merci de vous connecter!";
  ?>
  <button type="submit" value="Connexion"><a href="./connect.php">Connexion</a></button>
  <?php
 } else {
   $_SESSION['firstname'] = $_POST['firstname'] ;
   $_SESSION['lastname'] = $_POST['lastname'] ;
   echo "Bonjour, " . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . "!<br>";
   ?>
   <li><a href="pannier.php">voir mon panier</a></li>

   <button type="submit" value="Déconnexion"><a href="./deconnexion.php">Déconnexion</a></button>
   <?php
 }

?>
