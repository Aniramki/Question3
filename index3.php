<?php
session_start();
    // diviser le code
   $titre = "Accueil";
   //@masquer message-error, include_once - 1fois
    @include("../Question3/header.php");
    include_once("../Question3/formuler.php");
    include("../Question3/footer.php");
    
   
    ?>