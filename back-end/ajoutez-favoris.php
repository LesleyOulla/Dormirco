<?php
require('./class/database.php');
$database = new Database();
//  Il SELECT - from ad LEFT JOIN villes_france on ad.id_ville_france . villes_france.ville_id where ville_slug like
$pdo = $database->connectDb();

?>