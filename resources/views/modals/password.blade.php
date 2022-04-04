<div class="modal fade" id="ubahPassword" tabindex="-1" role="dialog" aria-labelledby="ubahPassword" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action ="" method="post" class="" novalidate="">
                <div class="card-body">
                    <div class="row">        
                      <div class="form-group col-md-12 col-12">
                        <label>Password Lama</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-lock"></i>
                            </div>
                          </div>
                          <input type="password" class="form-control" placeholder="Password Lama" required>
                        </div>
                      </div>

                      <div class="form-group col-md-12 col-12">
                        <label>Password Baru</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-key"></i></i>
                            </div>
                          </div>
                          <input type="password" class="form-control" placeholder="Password Baru" required>
                        </div>
                      </div>   
                      
                      <div class="form-group col-md-12 col-12">
                        <label>Verifikasi Password Baru</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-check"></i>
                            </div>
                          </div>
                          <input type="password" class="form-control" placeholder="Verifikasi Password Baru" required>
                        </div>
                      </div>        
                   </div>                
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" name="updatePwd" class="btn btn-match">Simpan</button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>