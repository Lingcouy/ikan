<div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Persediaan</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Persediaan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addpersediaan.php" enctype="multipart/form-data" id="formAdd">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Nama Gudang</label>
                                    <select class="form-select" aria-label="Default select example" name="gudang">
                                    <?php
                                    include 'conixion.php';
                                    $statement = $con -> prepare("SELECT * FROM gudang order by nama_gudang asc");
                                    $statement->execute();
                                    while($gudang = $statement->fetch()){
                                        echo '<option value="'.$gudang['id_gudang'].'">'.htmlentities($gudang['nama_gudang']).'</option>';
                                    }
                                    ?>
                                    </select>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Nama Ikan</label>
                                    <select class="form-select" aria-label="Default select example" name="ikan">
                                    <?php
                                    include 'conixion.php';
                                    $statement = $con -> prepare("SELECT * FROM ikan order by nama_ikan asc");
                                    $statement->execute();
                                    while($ikan = $statement->fetch()){
                                        echo '<option value="'.$ikan['id_ikan'].'">'.htmlentities($ikan['nama_ikan']).'</option>';
                                    }
                                    ?>
                                    </select>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Jumlah">
                                  </div>
                                  <div class="">
                                    <label for="dateInput" class="col-form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="dateInput" name="dateInput">
                                  </div>
                
                                  
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submitP" class="btn btn-primary">Tambah Gudang</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>