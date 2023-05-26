<?php
require '../BDD/connect.php';
?>


<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['formin'] == 'inscription') {
    if(isset($_GET['formin'])||empty($_GET['nomin'])||empty($_GET['prenomin'])||empty($_GET['psdin'])||empty($_GET['mailin'])||empty($_POST['mdpin'])) {
        if ($_GET['nomin'] != '' && $_GET['prenomin'] != '' && $_GET['psdin'] != '' && $_GET['mailin'] != '' && $_GET['mdpin'] != '') {
          /* $mdp =  $_POST['psdin']; */
         /*    $mdp = htmlspecialchars($_POST['mdpin']);
          $pseudo = sha1($_POST['psdin']); */
         
          $base = [
             'nom' => $_GET['nomin'],
             'prenom' => $_GET['prenomin'],
             'pseudo' => $_GET['psdin'],
             'mail' => $_GET['mailin'],
             'mdp' => $_GET['mdpin'],
             'userid' => 1
            ];

            $requete = $database->prepare("INSERT INTO inscription (nom, Prenom, Pseudo, passwords, user_id, email) VALUES (:nom,:prenom,:pseudo,:mdp,:userid,:mail) ");
            if ( $requete->execute($base) ) {
                echo " Vous êtes inscrit ! félicitation !";
                header('Location: ../html/connexion.php');
            } else {
                echo "Une erreur s'est produite veuillez réessayer plus tard";
            }

            $recupUseur= $database->prepare('SELECT * FROM inscription'); 
            $recupUseur->execute($base);
            $useur=$recupUseur->fectch();
            if($recupUseur->rowCount() > 0 ){
                $_SESSION['inscription'] = $base;
                $_SESSION['id'] = $useur['id'];
                if($useur!= null){
                    $_SESSION['pseudo'] = $useur['Pseudo'];
                    $_SESSION['mdp'] = $useur['passwords'];
                    $_SESSION['first_name'] = $useur['Prenom'];
                    $_SESSION['last_name'] = $useur['nom'];
                    $_SESSION['id'] = $useur['id'];

                }
                
            } 
        } else {
            echo "formulaire d'inscription incomplet ! Veuillez compléter touts les champs";
             }
    }
} else {
    echo 'Un élément n\'est pas vérifié';
}

?>