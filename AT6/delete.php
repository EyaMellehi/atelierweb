<?php
require_once "config/connexion.php";
if(isset($_GET['ref']))
    $ref=$_GET['ref'];
$sql="delete from produit where reference='$ref'";
$connexion->exec($sql);//$res est un objet PDOstatemnet
header("location:produits.php");
?>