<?php

class SearchModel
{
    private $search;

    function __construct($search)
    {
        $this->search = $search;
    }

    public function getBd()
    {
        require_once "app/conn.php";

        $sql = "SELECT * FROM noticia WHERE titulo LIKE :s OR noticia LIKE :s OR categoria LIKE :s OR tags LIKE :s";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':s', '%'.$this->search.'%', PDO::PARAM_STR);

        if ($stmt->execute()) { 
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // echo 'aqui';

            $json = json_encode($row);
            // print_r($row);

            $jsonFile = fopen('search.json', 'w') or die('Error');
            fwrite($jsonFile, $json);
            fclose($jsonFile);
        }
    }
}

$searchModel = new SearchModel($search);
$searchModel->getBd();
