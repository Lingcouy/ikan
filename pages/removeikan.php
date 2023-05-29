<?php 
    include 'conixion.php';
    $id_ikan = $_GET['id_ikan'];

    if(isset($id_ikan)){
        $stmt = $con ->prepare("DELETE FROM ikan WHERE id_ikan=$id_ikan");
        $stmt -> execute();

    }
    header('location:ikan_list.php');
?>