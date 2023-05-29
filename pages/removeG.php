<?php 
    include 'conixion.php';
    $id_gudang = $_GET['id_gudang'];

    if(isset($id_gudang)){
        $stmt = $con ->prepare("DELETE FROM gudang WHERE id_gudang=$id_gudang");
        $stmt -> execute();

    }
    header('location:gudang_list.php');
?>