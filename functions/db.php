<?php
function getAllProducts() {
$connec = new PDO("mysql:dbname=shop" , 'root','0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request=$connec->prepare('SELECT products.id, products.nameProd, type.name, quantity, disponibility FROM products INNER JOIN type ON products.type_id=type.id;');
$request->execute();
return $request->fetchAll();
}

function getAllTypes() {
$connec = new PDO("mysql:dbname=shop" , 'root','0000');
$request=$connec->prepare("SELECT * FROM type ");
$request->execute();
return $request->fetchAll();
}
