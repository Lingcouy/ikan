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
    $_SESSION["id_ikan"]= $_GET['id_ikan'];
    $id_ikan = $_SESSION["id_ikan"];
    var_dump($id_ikan);
    $statement = $con -> prepare("SELECT * FROM ikan WHERE id_ikan = $id_ikan");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="updateikan.php" enctype="multipart/form-data">
                                 <div class="">
                                    <label for="recipient-name" class="col-form-label">Nama Ikan</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama_ikan" value="<?php echo $table['nama_ikan']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Jenis Ikan</label>
                                    <input type="text" class="form-control" id="recipient-name" name="jenis" value="<?php echo $table['jenis']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Berat (Kg)</label>
                                    <input type="text" class="form-control" id="recipient-name" name="berat" value="<?php echo $table['berat']?>">
                                  </div>
                                  <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Update Ikan</button>
                              </div>
                                </form>
</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>