<?php 
    require '../BDD/connect.php';

    if(isset($_GET['id'])) {
    
       $id = $database->quote(htmlentities($_GET['id']));
        //$delete = $database->query('DELETE FROM publication WHERE id= $id ');
        
           if($database->query("DELETE FROM publication WHERE id= $id ")){
              echo 'la publication a été supprimé';
              header('Location: ../html/index.php');
           } else {
            echo 'erreur';
           }
        
    }
?>



