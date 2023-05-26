<?php 

require '../BDD/connect.php' ;

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['formco'] == 'connection') {
    if(!empty($_POST['psdin'])||!empty($_POST['mdpin'])) { 

        $pseudo = $_POST['psdin'];
        $mdp = $_POST['mdpin'];

        $coUser = $database->prepare( 'SELECT * FROM inscription WHERE Pseudo = ? and passwords = ? ');
        $coUser->execute(array($pseudo, $mdp));
        $user = $coUser->fetch();
        // Le coUser est un tableau qui contient chaque case d'un utilisateur et ces chaque cases contient lui meme un tableau avec l'id, le nom etc de l'utilisateur
        //Pour pouvoir récuper  
         
        if($user != null){
          $_SESSION['pseudo'] = $pseudo;
          $_SESSION['mdp'] = $mdp;
          $_SESSION['first_name'] = $user['Prenom'];
          $_SESSION['last_name'] = $user['nom'];
          $_SESSION['id'] = $user['id'];
          echo $_SESSION['id'];
          header('Location: ../html/index.php');
        } else {
            echo "votre identifiant ou mot de passe est incorrecte";
        }
    } else {
        echo "Remplissez tous les champs";
    }
}





?>