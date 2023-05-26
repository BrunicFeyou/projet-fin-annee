<?php

session_start();
require '../BDD/connect.php';
?>


<?php
if($_SERVER['REQUEST_METHOD']== 'GET' && $_GET['profil']== 'profile'){

    if(isset($_SESSION['pseudo'])){
        header('Location: ../html/profil.php'.$_GET["psdin"].'');
    } else {
        header('Location: ../html/connexion.php');
    }
    
}




?>



