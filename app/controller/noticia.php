<?php

class NoticiaController
{

    public function setModel($id)
    {
        require_once "app/models/noticia.php";
    }

}

$noticiaController = new NoticiaController;
$noticiaController->setModel($url[1]);
