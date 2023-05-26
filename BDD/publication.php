<?php 
session_start();
require '../BDD/connect.php';


?>


<?php 


if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'addpublication')  {
    if(isset($_POST['form'])||isset($_FILES['photo'])||empty($_POST['opinion'])||empty($_POST['ntag'])) { 
        if($_POST['opinion'] != '') { 
            $tmpName= $_FILES['photo']['tmp_name'];
            $name= $_FILES['photo']['name'];
            $size= $_FILES['photo']['size'];
            $error= $_FILES['photo']['error']; // PHP retourne un code d'erreur approprié dans le tableau de fichiers.
            // Ce code d'erreur est accessible à l'index ['error'] du tableau, qui est créé durant le téléchargement par PHP.
            // En d'autres termes, le message d'erreur est accessible dans la variable 
            //  Autres type d'error : erreur de téléchargement ou dossier temporairement masqué
            
            $tabExtension= explode('.', $name); // La fonction explode permets de découper une chaîne de caractère en plusieurs morceaux à partir d’un délimiteur (ici c'est le point). 
            //Prenons l’exemple suivant : explode(« . » , « 10.25.65.20 ») permet de découper la chaîne de caractère à chaque fois qu’il y a un « . ».
            // On obtient alors le tableau [« 10 », « 25 », « 65 », « 20 »].

            $extension= strtolower(end($tabExtension)); // On va faire de même avec le nom de notre fichier : explode(« . » , « image.jpg »).
            // Ce qui nous donne un tableau avec 2 éléments, comme ceci [« image », « jpg »]. 
            //Il faut donc récupérer le dernier élément de ce tableau avec la fonction end().

            //Le fonction strolower permets de mettre en minuscule tout une chaîne de caractère.
            // Ce contrôle nous permet de ne pas avoir de problème de comparaison par la suite.
            // Pas de soucis si quelqu’un mets un fichier avec une extension .Jpg, .JPG, .jpG, …
            
            $extensions= ['jpg', 'png', 'gif'];
            $maxsize= 2097152; //1 Mo (mégaoctet) est égal à 1 048 576 bytes.
            // Donc, pour convertir 2 Mo en bytes, il suffit de multiplier 2 par 1 048 576 

            if($size <= $maxsize) { // L'erreur qui reviendra beaucoup c'est qu'aucun fichier n'a été trouvé. Si aucun fichier 
             //n'est trouvé alors on applique le else sinon on continue la condition      
                if($error == 0) { 
                    $uniqueName= uniqid('', true); // la fonction PHP uniqid(). 
                    //Elle attend 2 paramètres. Le premier est une chaîne de caractère qui servira de préfixe 
                    //et le deuxième est un booléen (true / false) qui permets d’augmenter la taille de la chaîne générée pour plus de sécurité.

                    $file= $uniqueName.".".$extension;
                    $data = [
                    'commentaire' => $_POST['opinion'],
                    'nom' => $_SESSION['id'],
                    'tag' => $_POST['ntag'],
                    'public'=> 2,
                    'images'=> '../Images/'.$name
                    ];
               
                    move_uploaded_file($tmpName, '../Images/'.$name);
                    $requete = $database->prepare("INSERT INTO publication (user_id, type, tag, public,images) VALUES (:nom,:commentaire,:tag,:public,:images) ");
                      
                    if ( $requete->execute($data)) {
                       echo "La publication a été publiée";
                       header('Location: ../html/index.php');
                     } else {
                     echo "erreur de publication";
                    }
               } 
               else { 
                   // Ici l'erreur détecter sera qu'aucun fichier n'exite dans le $Files['photo'] 
                   //alors on va enregitrer tous le reste en base de donnée et mettre une valeur par défaut à l'image
                   if($_POST['opinion'] != '') {
                      $uniqueName= uniqid('', true);
                      $file= $uniqueName.".".$extension;
                      $data = [
                      'commentaire' => $_POST['opinion'],
                       'nom' => $_SESSION['id'],
                       'tag' => $_POST['ntag'],
                       'public'=> 2,
                       'images'=> ''
                       ];
                       $requete = $database->prepare("INSERT INTO publication (user_id, type, tag, public,images) VALUES (:nom,:commentaire,:tag,:public,:images) ");
                        if ( $requete->execute($data)) {
                            echo "La publication a été publiée";
                            header('Location: ../html/index.php');
                        } else { echo "erreur de publication";}
                        
                   } else {  echo 'Vous ne pouvez pas poster sans inscrire quelque chose';}
                   
                }

            } else {  echo 'Choisir un fichier inférieur à 2Mo';}
                   
            

        } else { echo 'Vous ne pouvez pas poster sans remplir le champs';}
        

    }


}


?>