<?php 
require "../vendor/autoload.php";


$dsn = 'mysql:host=mysql23.ezhostingserver.com;dbname=id6793594_wasidb;charset=utf8';
$usr = 'id6793594_root';
$pwd = 'Adm_1234';

$pdo = new \Slim\PDO\Database($dsn, $usr, $pwd);

$selectStatement = $pdo->select()
                       ->from('publicacion')
                       ->where('idpublicacion', '=', @$_REQUEST["idToken"]);

$stmt = $selectStatement->execute();
$data = $stmt->fetch(PDO::FETCH_OBJ);

echo json_encode($data);
