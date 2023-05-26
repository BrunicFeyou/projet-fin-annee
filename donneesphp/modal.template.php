<form action="../BDD/publication.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name='form' value="addpublication">
    <div class="fond"> <!-- le modal de poste qui apparait lorsqu'on click sur le bouton de la popup -->
        <div class="close"> <!-- La croix pour fermer le modal -->
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="poste"> <!-- le modal -->
            <div class="la-photo-profil">
                <!--carte de publication de texte comme sur twitter; l'utilisateur peut écrire en ajoutant des tags à son post-->
                <img class="photo-profil" src="../Images/image-profil.jpg" alt=""> <!--photo de profil utilisateur-->
            </div>
            <div>

                <input id="textspace" type="text" name="opinion" autocomplete="off" placeholder="What's up ?">
                <div class="elements-poste">
                    <!-- ligne de tags et ajout image sous le post -->

                    <input type="file" name="photo"
                        accept="image/png, image/jpeg"><!-- <i class="fa-solid fa-image"></i> -->

                    <select class="tags-list-deroulante" id="select" name="ntag" onchange="tagstorage()">
                        <option value="">Tags</option>
                        <option value="tranquilité" id="beige">#tranquilité</option>
                        <option value="digital" id="orange">#digital</option>
                        <option value="détente" id="jaune">#détente</option>
                        <option value="activités" id="bleu">#activités</option>
                        <option value="travail" id="rouge">#travail</option>
                        <option value="courses" id="marron">#courses</option>
                        <option value="home" id="blanc">#home</option>
                        <option value="happy" id="vert">#happy</option>
                        <option value="jeux" id="noir">#jeux</option>
                        <option value="voyage" id="gris">#voyage</option>
                    </select>


                </div>
                <div class="btn-partager">
                    <button type="submit" class="partager"> Partager</button>
                </div>
            </div>


        </div>
    </div>


</form>