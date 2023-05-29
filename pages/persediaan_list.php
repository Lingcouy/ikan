<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content ">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
        ?>
          
        
            <!-- start student list table -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Ikan</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                    <?php include 'component/popupaddP.php'; ?>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th>id</th>
                            <th>Nama Gudang</th>
                            <th>Nama Ikan</th>
                            <th>Jumlah Ikan</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Keluar</th>
                                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include 'conixion.php';
                          
                          $gudang = 
                          $result = $con -> query("SELECT persediaan_gudang.*, gudang.nama_gudang, ikan.nama_ikan FROM persediaan_gudang JOIN gudang ON persediaan_gudang.id_gudang = gudang.id_gudang JOIN ikan ON persediaan_gudang.id_ikan = ikan.id_ikan;");
                          foreach($result as $value):
                        ?>
                      <tr class="bg-white align-middle">
                                <td><?php echo $value['id_persediaan'] ?></td>
                                <td><?php echo $value['nama_gudang'] ?></td>
                                <td><?php echo $value['nama_ikan'] ?></td>
                                <td><?php echo $value['jml_ikan'] ?></td>
                                <td><?php echo $value['tgl_masuk'] ?></td>
                                <td><?php echo $value['tgl_keluar'] ?></td>
                                <td class="d-md-flex gap-3 mt-3">
                                  <a href="modifiP.php?id_persediaan=<?php echo $value['id_persediaan']?>"><i class="far fa-pen"></i></a>
                                  <a href="removeP.php?id_persediaan=<?php echo $value['id_persediaan']?>"><i class="far fa-trash"></i></a>
                                </td>
                        </tr> 

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- end student list table -->
        </div>
        <!-- end content page -->
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>