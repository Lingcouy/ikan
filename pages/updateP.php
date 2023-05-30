<?php
session_start();
$id_persediaan = $_SESSION['id_persediaan'];
var_dump($id_persediaan);
include 'conixion.php';
if (isset($_POST['submit'])){
    $jml_ikan = $_POST['Jumlah'];
    $requete = $con -> prepare("UPDATE persediaan_gudang 
    SET 
    jml_ikan = '$jml_ikan'
    WHERE id_persediaan = $id_persediaan");
    $res = $requete -> execute();
    header("location:persediaan_list.php");
}
?>