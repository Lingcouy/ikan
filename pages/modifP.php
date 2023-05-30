<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php
    session_start();
    include 'conixion.php';
    $_SESSION["id_persediaan"]= $_GET['id_persediaan'];
    $id_persediaan = $_SESSION["id_persediaan"];
    var_dump($id_persediaan);
    $statement = $con -> prepare("SELECT * FROM persediaan_gudang WHERE id_persediaan = $id_persediaan");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="updateP.php" enctype="multipart/form-data">
<div class="">                                    
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Nama Gudang</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Jumlah" value="<?php echo $table['id_gudang']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Nama Ikan</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Jumlah" value="<?php echo $table['id_gudang']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Jumlah" value="<?php echo $table['jml_ikan']?>">
                                  </div>
                                  <div class="">
                                    <label for="dateInput" class="col-form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="dateInput" name="dateInput" value="<?php echo $table['tgl_masuk']?>">
                                  </div>
                                  <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Update Persediaan</button>
                              </div>
                                </form>
</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>