<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

$message = "";
if ( $_SESSION['username']== "Benoit") {
    $titre = "Au menu";
    $message = "Au menu du jour pour vous, Benoit...";
    include "../Question3/navbar.php";
} else {
    $titre = "ERREUR login";
    $message = "ERREUR login : vous n'avez pas droit d'accès à ce site ";
    ?>
    <h1><?=$message?></h1>
    <a href="index3.php">Retour à la page d'accueil</a>
    <?php
}
@include("../Question3/header.php");
?>