<div class="la-nav-bar2">


    <button class="icone-navbar"> <!-- bouton correspondant aux trois traits qui fera apparaitre la sidenav -->
        <i class="fa-solid fa-lines-leaning fa-2x"></i>
    </button>
    <nav class="navbar-vertical2">
        <form action="../BDD/pageProfil.php" method="GET">
            <input type="hidden" name="profil" value="profile">
            <ul class="navverticale">


                <li><button class="btn-nav" type="submit"><i class="fa-solid fa-house-user"></i>Profil</button></li>


                <li><a class="btn-nav" href="../html/index.php"><i class="fa-solid fa-house"></i>contenu</a></li>
                <li><a class="btn-nav" href="../html/tags.php"><i class="fa-solid fa-circle"></i>Recherche</a></li>
            </ul>
        </form>
        <form action="../BDD/signOut.php" method="POST">
            <input type="hidden" name="deconnexion" value="deco">
            <ul class="navverticale">
                <?php    
                    
                    if(isset($_SESSION['pseudo'])){
                       echo '
                       
                       <li> <button class="btn-nav" type="submit"><i class="fa-solid fa-right-from-bracket"></i>sign out</button></li>
                       ';
    

                    } else {
    
                        echo '
                        
                        <li style="display: none"><button class="btn-nav" type="submit"><i class="fa-solid fa-right-from-bracket"></i>sign out</button></li>
                        ';
    
                    }
                    
                ?>


            </ul>
        </form>
    </nav>

</div>