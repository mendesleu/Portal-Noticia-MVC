<?php

// $conn = mysqli_connect('localhost', 'root', '');

$sql = "CREATE DATABASE IF NOT EXISTS portal_noticia";

if($query = $conn->query($sql)){
  echo 'Banco criado com sucesso! <br>';
}else{
  echo "Erro: " . $conn->erro;
}

$db = mysqli_select_db($conn, 'portal_noticia');

$sql = "CREATE TABLE IF NOT EXISTS usuario
(
  id INT(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  usuario VARCHAR(20) NOT NULL,
  senha VARCHAR(50) NOT NULL,
  foto VARCHAR(20) NULL,
  nivel VARCHAR(20) NOT NULL
)";

if($query = $conn->query($sql)){
  echo 'Tabela usuário criado com sucesso! <br>';
}else{
  echo "Erro: " . $conn->erro;
}

$sql2 = "INSERT INTO usuario (nome, usuario, senha, nivel) VALUES ('Leo Mendes', 'admin', 'teste', 'administrador')";

if($query = mysqli_query($conn, $sql2)){
  echo 'Usuário criado com sucesso! <br>';
}else{
  echo "Erro: " . $conn->erro;
}

$sql = "CREATE TABLE IF NOT EXISTS noticia
(
  id INT(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(100) NOT NULL,
  noticia VARCHAR(2000) NOT NULL,
  capa VARCHAR(20) NULL,
  id_usuario INT(255) NOT NULL,
  autor VARCHAR(50) NOT NULL,
  tags VARCHAR(100) NOT NULL,
  FOREIGN KEY (id_usuario) REFERENCES usuario (id)
)";

if($query = $conn->query($sql)){
  echo 'Tabela noticia criada com sucesso! <br>';
}else{
  echo "Erro: " . $conn->erro;
}

$sql = "ALTER TABLE 'noticia' ADD 'categoria' VARCHAR(50) NOT NULL AFTER 'noticia'";

if($query = $conn->query($sql)){
  echo 'Tabela noticia alterada com sucesso! <br>';
}else{
  echo "Erro: " . $conn->erro;
}
$sql = "ALTER TABLE 'noticia' ADD 'data' DATE NOT NULL AFTER 'categoria'";

if($query = $conn->query($sql)){
  echo 'Tabela noticia alterada com sucesso! <br>';
}else{
  echo "Erro: " . $conn->erro;
}

$sql = "CREATE TABLE IF NOT EXISTS comentarios
(
  id INT(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  comentario VARCHAR(500) NOT NULL,
  id_noticia INT(255) NOT NULL,
  FOREIGN KEY (id_noticia) REFERENCES noticia (id)
)";

if($query = $conn->query($sql)){
  echo 'Tabela comentários criada com sucesso! <br>';
}else{
  echo "Erro: " . $conn->erro;
}