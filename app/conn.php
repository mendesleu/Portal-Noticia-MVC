<?php
$host = 'localhost';
$user = 'root';
$senha = '';
$db = 'portal_noticia';

try{   
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $senha);
    return $conn;   
}catch(PDOException $e){
    die('Erro: ' . $e->getMessage());
}