<?php 
session_start();

require '../BDD/connect.php';
require '../BDD/jointure.php';
require '../BDD/image.php';




?>


<?php    
/* $requete = $database->prepare('SELECT  * FROM publication INNER JOIN inscription ON publication.user_id = inscription.id ' );
 $requete->execute();
 $publications = $requete->fetchAll(PDO::FETCH_ASSOC); */

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fee6e965e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body id="body-profil">
    


<?php 
    foreach($publications as $publication) {  ?>
         
        <div class="fond-suppression" id="supp<?php echo $publication["id"]; ?>">
          <div class="modal-suppression">
              <p class="publications" >Voulez-vous vraiment suppprimer ce poste ? </p>
              <div class="les-boutons">
                
                <button type="submit" class="confirmer" onclick="window.location.href = '../BDD/delete.php?id=<?php echo $publication['id'];?>';">Confirmer</button>
                  
                <button class="annuler">Annuler</button>
              </div>
          </div>
        </div>
    
<?php } ?>

    <?php require '../donneesphp/navbarmobil.template.php'; ?>
    <?php  require '../donneesphp/modal.template.php'; ?>
    <div class="le-profil">
        <div class="page-profil">
            <?php require '../donneesphp/navbar.template.php'; ?>
            <div class="profil-type">
                <!-- C'est le container de toute la page profil avec les publications classées par date -->

                <div  class="info-utilisateur">
                    <!-- c'est le sous-contenair de la page profil avec les information sur l'utilisateurs -->
                    <div class="name-setting">
                        <div  class="name-profil"> <!-- La div contenant le nom de  -->
                            <span  class="name">
                                <?php echo ' '.$_SESSION['last_name'].' '. $_SESSION['pseudo']?>
                            </span>
                        </div>

                        <div  class="stroke">
                            <!-- Boutton modifier pour permettre à l'utilisateur de changer sa description -->
                            <button  id="btn-modifier"><i  class="fa-solid fa-gears"></i></button>
                        </div>
                    </div>

                    <header >
                        <!-- les sous contenaire plus précis sur les données de l'utilisateurs avec sa photo de profil -->
                        <?php  
                        require '../donneesphp/popup.template.php'
                        ?>

                        <div  class="image-profil-grand-espace">
                            <div class="image-profil-petit-espace">
                                <img class="photo-de-profil" src="../Images/image-profil.jpg" alt="">
                            </div>
                            <div class="all-infos">
                                <div class="name">
                                    <span>
                                        <?php echo ' '.$_SESSION['last_name'].' '. $_SESSION['first_name']?>
                                    </span> <!-- Nom et prénom de l'utilisateur -->

                                </div>
                                <div class="vide"></div>
                                <div class="infos-utilisateur">
                                    <div class="publication">
                                        <span class="nombres-de-publications"></span>
                                        Publications
                                    </div>
                                    <div class="followers">
                                        <span class="nombres-abonnés"></span>
                                        Abonnés
                                    </div>
                                    <div class="follow">
                                        <span class="nombres-abonnements"></span>
                                        Abonnements
                                    </div>
                                    <div class="tag">
                                        <span class="tags-plus-utilisés"></span>
                                        Tags Favoris
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-modifier">
                            <div class="vide1-modifier profil">
                            </div>
                            <div class="btn-modfier-profil">
                                <button>Modifier profil</button>
                            </div>
                            <div class="vide2-modifier-profil">
                            </div>
                        </div>
                        <div class="description-profil">
                            <span class="description-profil">"Description du profil"</span>
                        </div>
                    </header>
                </div>
                <h3 class="mes-publications">Mes publications</h3>

                <?php 
                    // Sélectionner toutes les publications ou la valeur dans la colonne user_id est égale à la valeur stocké dans $_SESSION['id']

                    if(isset($_GET['pseudo'])) {
                        $db= $database->prepare('SELECT * FROM publication INNER JOIN inscription ON publication.user_id = inscription.id WHERE inscription.Pseudo = :pseudo ORDER BY publication.creation DESC');
                        $db->execute(['pseudo'=> $_GET['pseudo']]); //
                    } else {
                        $db= $database->prepare('SELECT * FROM publication WHERE user_id= :id ORDER BY creation DESC'); // on récupère l'id et on lui attribut un placeholder
                        $db->execute(['id'=> $_SESSION['id']]); //
                    }

                    
                    $bases= $db->fetchAll();
  
                    foreach($bases as $base){
                        echo '  <div  class="carte-publication-texte '.$base['tag'].'">
                        <div class="identification-carte">
                           <div class="image-profil">
                              <img src="../Images/image-profil.jpg" alt="image postée par l\'utilisateur" class="photo-profil">
                           </div>
                           <span class="nom-utilisateur"> '.$_SESSION['pseudo'].' </span>';
            
                           if($base['user_id']== $_SESSION['id']) { 
                            echo'
                           <div class="icone-poubelle">
                              <button class="lien-delete" onclick="popupdel('.$base["id"].')">
                                 <i class="fa-solid fa-trash"></i>
                              </button>  
                            </div>';
                             } else {   
                               echo' <div style="display: none" class="icone-poubelle">
                               <button class="lien-delete" onclick="popupdel('.$base["id"].')">
                                  <i class="fa-solid fa-trash"></i>
                               </button>  
                             </div>'; 
                             }
            
                             echo '
                        </div>
                        <div class="date-publication"> <!-- La date de publication du poste -->
                         <span>
                         '.$base['creation'].'</span>
                        </div>
                        <div class="texte-publication">
                         <span class="text-publication">
                      
                          '.$base['type'].' <br>';
                          if($base['images']!= null){
                            echo '<img alt="image postée par l\'utilisateur" class="img-pub" src= "'.$base['images'].'">';
                            
                          } else { 
                             echo '<img alt="image postée par l\'utilisateur" style= "display : none" class="img-pub" src= "noimage">'; 
                            }
                            
                          echo ' <br> 
                          #'.$base['tag'].'
                           </span>
                        </div>
                        <div class="les-trois-boutons"> <!--une div contenant les trois mention "aimer,commenter,partager"-->
                           <a class="jaime">
                               <i class="fa-regular fa-heart"></i>
                               <!-- <img src="" alt=" un coeur pour aimer la publication" class="coeur"> -->
                           </a>
                           
                           <a class="commentaires">
                               <i class="fa-solid fa-comment"></i>
                               <!-- <img src="" alt=" une icone pour laisser un commentaire" class="commentaire"> -->
                           </a>
                            <a class="envoyer">
                                <i class="fa-sharp fa-solid fa-share"></i>
                                <!-- <img src="" alt=" un avion pour partager le post" class="avion"> -->
                            </a>
                       </div>
                       
                       </div> ';



                    }
  
  
  
                ?>
  

            </div>
        </div>
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../javascript/modal.js"></script>
    <script src="../javascript/supprimer.js"></script>
    <script src="../javascript/sidebar.js"></script>
    <script src="../javascript/localstrorage.js"></script>
</body>
</html>