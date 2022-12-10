<?php

if (isset($_POST['search'])) {
    $server = $_SERVER['SERVER_ADDR'];
    $s = $_POST['search'];
    $s = str_replace(' ', '-', $s);
    header("Location: http://$server/Portal_Noticia_MVC/search/$s");
    $_POST = null;
}

class SearchController
{
    public function getSearch($search)
    {
        require_once "app/models/search.php";
    }
}

$searchController = new SearchController();
$searchController->getSearch($url[1]); 

// require_once "app/view/search.html";
