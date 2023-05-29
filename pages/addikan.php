<?php 
    include 'conixion.php';
    if(isset($_POST['submitI'])){
        
        $nama_ikan = $_POST['nama_ikan'];
        $jenis = $_POST['jenis'];
        $berat = $_POST['berat'];

        $requete = $con->prepare("INSERT INTO ikan(nama_ikan, jenis, berat) VALUES('$nama_ikan','$jenis', '$berat')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:ikan_list.php')
    ?>