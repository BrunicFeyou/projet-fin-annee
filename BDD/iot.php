<?php
 
try {
    $database = new PDO('mysql:host=localhost; dbname=twitter', 'root', '');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}

$requete = $database->prepare('SELECT * FROM publication ORDER BY id DESC LIMIT 1');
$requete->execute();

$publication = $requete->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($publication);

?>