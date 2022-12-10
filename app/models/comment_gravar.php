<?php
header('Content-Type: applicattion/json');

$nome = $_POST['name'];
$coment = $_POST['comment'];
$id_noticia = $_POST['id'];

require_once '../conn.php';

$sql = "INSERT INTO comentarios (nome, comentario, id_noticia) VALUES (:no, :co, :id)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':no', $nome);
$stmt->bindValue(':co', $coment);
$stmt->bindValue(':id', $id_noticia);

if($stmt->execute()){
    echo json_encode('Comentário salvo com sucesso!');
}else{
    echo json_encode('Erro ao salvar comentário!');
}