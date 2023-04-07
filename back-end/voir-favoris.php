<?php
require('./class/database.php');
$database = new Database();
//  Il SELECT - from ad LEFT JOIN villes_france on ad.id_ville_france . villes_france.ville_id where ville_slug like
$pdo = $database->connectDb();
//public function select($pdo, $search, $table, $where) 
//Recupération de l'id_user par l'utilisateur par l'email
$result = $database->select($pdo ,'*' ,'user', ['email', $_SESSION['email']]);
$result =$result->fetch(PDO::FETCH_ASSOC);
//recuperation dans les favorites par l'email

$nameResult = $database->selectLeftJoinWhereLike($pdo , '*', 'favorite', 'ad', 'favorite.id_ad = ad.id_ad',[]);
$nameResult =$nameResult->fetchAll(PDO::FETCH_ASSOC);


$favoris = $database->select($pdo , '*' ,'favorite', ['id_user', $result['id_user']]);
$favoris =$favoris->fetchAll(PDO::FETCH_ASSOC);


?>