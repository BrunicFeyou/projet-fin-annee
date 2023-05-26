<div class="la-nav-bar">


    <nav class="navbar-vertical">
        <form action="../BDD/pageProfil.php" method="GET">
            <input type="hidden" name="profil" value="profile">
            <ul class="navverticale">
                <li> <button class="btn-nav" type="submit"><i class="fa-solid fa-house-user"></i>Profil</button></li>

                <li><a class="btn-nav" href="../html/index.php"><i class="fa-solid fa-house"></i>contenu</a></li>
                <li><a class="btn-nav" href="../html/tags.php"><i class="fa-solid fa-magnifying-glass"></i>Recherche</a>
                </li>
            </ul>
        </form>
        <form action="../BDD/signOut.php" method="POST">
            <input type="hidden" name="deconnexion" value="deco">
            <ul class="navverticale">
                <?php    
                    
                    if(isset($_SESSION['pseudo'])){
                       echo '
                       
                       
                       <li><button class="btn-nav" type="submit"><i class="fa-solid fa-right-from-bracket"></i>sign out</button></li>
                       ';
    

                    } else {
    
                        echo '
                        
                        
                        <li style="display: none"> <button type="submit"><a class="btn-nav" ><i class="fa-solid fa-right-from-bracket"></i>sign out</a></button></li>
                        ';
    
                    }
                    
                ?>
            </ul>
        </form>
    </nav>

</div> <!-- fin du bloc Navbar vertical-->