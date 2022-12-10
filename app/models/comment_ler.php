<?php
require_once "../conn.php";

$id = $_GET['id'];

$sql = "SELECT * FROM comentarios WHERE id_noticia = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

if($stmt->rowCount() > 0){
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($row);
}