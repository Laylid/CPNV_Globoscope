<?php
    function getBD()
        {
        $connexion = new mysqli("localhost", "root", "", "globoscope");
        return $connexion;
    }

    $obj = json_decode($_POST["x"], false);
    $connexion = getBD();
    $reponse = "SELECT NomFichier,Pseudo,Slogan FROM images WHERE IDImage = ".$obj->ID;
    $resultats = $connexion->query($reponse);

    $output = array();

    $output = $resultats->fetch_all(MYSQLI_ASSOC);

    echo json_encode($output);  
?>
