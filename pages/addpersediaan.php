<?php 
    include 'conixion.php';
    if(isset($_POST['submitP'])){
        
        $id_gudang = $_POST['gudang'];
        $id_ikan = $_POST['ikan'];
        $jml_ikan = $_POST['Jumlah'];
        $tgl_masuk = $_POST['dateInput'];

        $requete = $con->prepare("INSERT INTO persediaan_gudang(id_gudang, id_ikan, jml_ikan, tgl_masuk) VALUES('$id_gudang','$id_ikan', '$jml_ikan', '$tgl_masuk')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:persediaan_list.php')
    ?>