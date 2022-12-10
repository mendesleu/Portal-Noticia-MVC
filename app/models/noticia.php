<?php

class NoticiaModel
{
    private $id;

    function __construct($id)
    {
        $this->id = $id;
    }

    public function getNoticia()
    {
        require_once "app/conn.php";
        
        $sql = "SELECT * FROM noticia WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);

        if($stmt->execute()){
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $json = json_encode($row);
            // print_r($row);

            $jsonFile = fopen('noticia.json', 'w') or die('Error');
            fwrite($jsonFile, $json);
            fclose($jsonFile);
            // echo 'get';
                        
        }
    }
}

$noticiaModel = new NoticiaModel($id);
$noticiaModel->getNoticia();
// echo "model";