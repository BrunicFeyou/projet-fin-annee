<?php
session_start();
require '../BDD/connect.php';

?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deconnexion'] == 'deco') {
        if(isset($_POST['deconnexion'])){
            if(isset($_SESSION['pseudo'])){
               session_destroy();
               header('Location: ../html/index.php');

              
            }
        }


    }





?>