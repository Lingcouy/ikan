<div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Ikan</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Ikan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addikan.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Nama Ikan</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama_ikan">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Jenis Ikan</label>
                                    <input type="text" class="form-control" id="recipient-name" name="jenis">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Berat (Kg)</label>
                                    <input type="text" class="form-control" id="recipient-name" name="berat">
                                  </div>
                                  
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submitI" class="btn btn-primary">Tambah Gudang</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>