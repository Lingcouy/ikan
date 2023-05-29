<?php
session_start();
$id_gudang = $_SESSION['id_gudang'];
var_dump($id_gudang);
include 'conixion.php';
if (isset($_POST['submit'])){
    $nama_gudang = $_POST['Name'];
    $alamat = $_POST['Alamat'];
    $requete = $con -> prepare("UPDATE gudang 
    SET 
    nama_gudang = '$nama_gudang',
    alamat = '$alamat'
    WHERE id_gudang = $id_gudang");
    $res = $requete -> execute();
    header("location:gudang_list.php");
}
?>