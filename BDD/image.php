<?php
// PAGE BROUILLON ELLE NE ME SERT A RIEN


require '../BDD/connect.php'
?>



<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'addpublication')  {
    if(isset($_POST['form'])||isset($_FILES['photo'])||empty($_POST['opinion'])||empty($_POST['ntag'])||$_POST['opinion'] != '' ) { 
        $tmpName= $_FILES['photo']['tmp_name'];
        $name= $_FILES['photo']['name'];
        $size= $_FILES['photo']['size'];
        $error= $_FILES['photo']['error'];
        
        $tabExtension= explode('.', $name);
        $extension= strtolower(end($tabExtension));
        $extensions= ['jpg', 'png', 'gif'];
        $maxsize= 200000 ;
           if(in_array('extension', 'extensions' && $size <= $maxsize )){
            
            if($error== 0){
                $uniqueName= uniqid('', true);
                $file= $uniqueName.".".$extension;
                $data = [
                    'commentaire' => $_POST['opinion'],
                     'nom' => 1,
                     'tag' => $_POST['ntag'],
                     'public'=> 2,
                     'images'=> $_FILES['photo']
                     ];
         
                move_upload_file($tmpName, '../Images/'.$file);
                $requete = $database->prepare("INSERT INTO publication (nom, type, tag, public,images) VALUES (:nom,:commentaire,:tag,:public,:images) ");
                     if ( $requete->execute($data) ) {
                      echo "La publication a été publiée";
                      header('Location: ../html/index.php');
                     } else {
                      echo "erreur de publication";
                     }
                 } 
                     else {
                         echo "formulaire incomplet";
                    }
                
            } else {
                echo ' Une erreur est survenue !';
            }
          
        } else {
            echo'Choisir un fichier d\'extension JPG, PNG ou GIF avec un taille inférieur à 2Mo '; 
        } 
           
     
}

else {

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'addpublication')  {
        if(isset($_POST['form'])||empty($_POST['opinion'])||empty($_POST['ntag'])) { 
            if( $_POST['opinion'] != '' ){
    
               $data = [
               'commentaire' => $_POST['opinion'],
                'nom' => 1,
                'tag' => $_POST['ntag'],
                'public'=> 2,
                'images'=> null 
                ];
                $requete = $database->prepare("INSERT INTO publication (nom, type, tag, public,images) VALUES (:nom,:commentaire,:tag,:public,:images) ");
                if ( $requete->execute($data) ) {
                 echo "La publication a été publiée";
                 header('Location: ../html/index.php');
                } else {
                 echo "erreur de publication";
                }
            } 
                else {
                    echo "formulaire incomplet";
               }
        }  
    }

}

?>

