<?php
session_start();
$id_ikan = $_SESSION['id_ikan'];
var_dump($id_ikan);
include 'conixion.php';
if (isset($_POST['submit'])){
    $nama_ikan = $_POST['nama_ikan'];
    $jenis = $_POST['jenis'];
    $berat = $_POST['berat'];
    $requete = $con -> prepare("UPDATE ikan 
    SET 
    nama_ikan = '$nama_ikan',
    jenis = '$jenis',
    berat = '$berat'
    WHERE id_ikan = $id_ikan");
    $res = $requete -> execute();
    header("location:ikan_list.php");
}
?>