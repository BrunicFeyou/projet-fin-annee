

<?php





require '../BDD/connect.php'
?>
<?php

$gettwitter = $database->prepare('SELECT  * FROM publication INNER JOIN inscription 
ON publication.user_id = inscription.id');
 $gettwitter->execute();
 $results = $gettwitter->fetchAll(PDO::FETCH_ASSOC);
 /* echo '<pre>';
 var_dump($results);
 die;

 foreach ($results as $row) {
    echo $row['Pseudo'] . ' a publié : ' . $row['type'] . '<br>';
} */



?>

<?php 


$requete = $database->prepare('SELECT * FROM publication ORDER BY creation DESC');
$requete->execute();

$publications = $requete->fetchAll( PDO::FETCH_ASSOC )

?>