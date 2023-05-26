<?php session_start(); ?>

<?php

require '../BDD/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fee6e965e0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body class="body-tags">

<?php  require '../donneesphp/modal.template.php'; ?>
<?php require '../donneesphp/navbarmobil.template.php'; ?>

<div class="page-tags">

    <?php require '../donneesphp/navbar.template.php'; ?>

    <div class="la-page-tags">
        <?php require '../donneesphp/navbarhorizontal.template.php'  ?>
        <?php require '../donneesphp/popup.template.php' ?>
        <div class="les-tags">
            <p>Les Tags</p>
        </div>
        <header class="scrolltags">

            <!-- <div class="filtre">
                <p>Filtre</p>
            </div> -->

            <div class="les-btn-tags">
                <button  name="lestags" class="btn-tags" id="be" data-tag="tranquilité">
                #tranquilité
                </button>
                <button  name="lestags" class="btn-tags" id="or" data-tag="digital">
                #digital
                </button>
                <button  name="lestags" class="btn-tags" id="ja" data-tag="plaisir">
                #plaisir
                </button>
                <button  name="lestags" class="btn-tags" id="bl" data-tag="activités">
                #activités
                </button>
                <button  name="lestags" class="btn-tags" id="ro" data-tag="travail">
                #travail
                </button>
                <button  name="lestags" class="btn-tags" id="ma" data-tag="courses">
                #courses
                </button>
                <button  name="lestags" class="btn-tags" id="bla" data-tag="home">
                #home
                </button>
                <button  name="lestags" class="btn-tags" id="ve" data-tag="happy">
                #happy
                </button>
                <button  name="lestags" class="btn-tags" id="no" data-tag="badmood">
                #badmood
                </button>
                <button  name="lestags" class="btn-tags" id="gr" data-tag="voyage">
                #voyage
                </button>
            </div>
            <div class="vide-div"> </div>

        </header>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
<script src="../javascript/modal.js"></script>
<script src="../javascript/supprimer.js"></script>
<script src="../javascript/sidebar.js"></script>
<script src="../javascript/localstrorage.js"></script>
<script src="../javascript/tags.js"></script>
<script src="../javascript/filtre.js"></script>
</body>

</html>