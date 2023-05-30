<?php 
    include 'conixion.php';
    $id_persediaan = $_GET['id_persediaan'];

    if(isset($id_persediaan)){
        $stmt = $con ->prepare("DELETE FROM persediaan_gudang WHERE id_persediaan=$id_persediaan");
        $stmt -> execute();

    }
    header('location:persediaan_list.php');
?>