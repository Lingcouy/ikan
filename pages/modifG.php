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
    $_SESSION["id_gudang"]= $_GET['id_gudang'];
    $id_gudang = $_SESSION["id_gudang"];
    var_dump($id_gudang);
    $statement = $con -> prepare("SELECT * FROM gudang WHERE id_gudang = $id_gudang");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="updateG.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Name" value="<?php echo $table['nama_gudang']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Alamat</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Alamat" value="<?php echo $table['nama_gudang']?>">
                                  </div>
                                  <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Update student</button>
                              </div>
                                </form>
</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>