<?php 
    include 'conixion.php';
    if(isset($_POST['submitG'])){
        
        $nama_gudang = $_POST['Name'];
        $alamat = $_POST['Alamat'];
        

        $requete = $con->prepare("INSERT INTO gudang(nama_gudang, alamat) VALUES('$nama_gudang','$alamat')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:gudang_list.php')
    ?>