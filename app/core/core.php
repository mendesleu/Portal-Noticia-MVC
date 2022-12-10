<?php
$url = isset($_GET['url']) ? explode('/', $_GET['url']) : 'home';

if ($url[0] == 'search') {
   $search = str_replace('-', ' ', $url[1]);
}else{
    $search = null;
}

// print_r($url);
// print_r($search);
// echo $search;    

if ($url != 'home') {
    require_once "app/controller/" . $url[0] . ".php";
} 