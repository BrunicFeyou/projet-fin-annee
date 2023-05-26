
<?php 
// PAGE BROUILLON
require '../BDD/connect.php'; ?>

<?php   
  $requete= $database->prepare("SELECT * FROM publication");
  $requete->execute();
  
  $publication = $requete->fetchAll( PDO::FETCH_ASSOC )
?>

       
    <article name="carte-publication-texte" class="carte-publication-texte">
        <div class="identification-carte">
            <div class="image-profil">
                <img src="../Images/image profil.jpg" alt="" class="photo-profil">
            </div>
            <span class="nom-utilisateur">Brunic Feyou </span>
            <div class="icone-poubelle">
                <form action="../BDD/delete.php" method='POST'>
                    <input type="hidden" name='supprimer' value="<?= $publication['publication_id']?> ">
                <button type= 'submit' class="lien-delete" href="">
                    <i class="fa-solid fa-trash"></i>
                </button>
                </form>
                <!-- <img src="" alt="supprimer le post"> --> <!--icone pobelle pour supprimer son post-->
            </div>
        </div>
        <div class="date-publication"> <!-- La date de publication du poste -->
            <span>
                <?php 
                echo $publication[creation];
                ?>
            </span>
        </div>
        <div class="texte-publication">
            <span class="text-publication">
            <?php
            echo $publication[type];
            ?>
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
        <button class="btn-affichage-commentaires">
            <i class="affiche-commentaire"> "afficher les 28 commentaires"</i>
        </button>
    </article>
    </form>


