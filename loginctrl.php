<?php
    session_start();
  
  if (!empty($_POST['nom']) ) {
    
    $_SESSION["username"] = $_POST['nom'];
    
  
    header("location:loginsuite.php");
    
} else {
 
  ?>
  <h1><a href="index3.php">Au menu...</a></h1>
  <?php
   
    echo "Login ERROR";
}
    ?>

    
   
    