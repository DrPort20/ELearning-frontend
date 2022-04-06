<div class="card-body">
    <div class="row">     
      <div class="form-group col-md-12 col-12">
        <label>Ubah Foto Profil</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" accept="image/png, image/gif, image/jpeg">
          <label class="custom-file-label" for="customFile">Masukan Gambar</label>
        </div>
        <div class="invalid-feedback">
        </div>
      </div>  

      <div class="form-group col-md-12 col-12">
        <label>No ID</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-id-card"></i>
            </div>
          </div>
          <input type="number" class="form-control" value="" required>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>   

      <div class="form-group col-md-12 col-12">
        <label>Nama Lengkap</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
          <input type="text" class="form-control" value="" required>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>   

      <div class="form-group col-md-6 col-12">
        <label>Jabatan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-star"></i>
            </div>
          </div>
          <select class="form-control" required>
            <option value="Siswa">Siswa</option>
            <option value="Guru">Guru</option>
            <option value="Admin">Admin</option>
          </select>
          <div class="invalid-feedback">
          </div>
        </div>
      </div> 

      <div class="form-group col-md-6 col-12">
        <label>Jenis Kelamin</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-mars-and-venus"></i>
            </div>
          </div>
          <select class="form-control" required>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <div class="invalid-feedback">
          </div>
        </div>
      </div> 

      <div class="form-group col-md-6 col-12">
        <label>Tanggal Lahir</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-calendar-days"></i>
            </div>
          </div>
          <input type="date" class="form-control" value="">
          <div class="invalid-feedback">
          </div>
        </div>
      </div> 

      <div class="form-group col-md-6 col-12">
        <label>No HP</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <div class="font-weight-bold">+62</div>
            </div>
          </div>
          <input type="number" class="form-control" value="">
          <div class="invalid-feedback">
          </div>
        </div>
      </div> 

      <div class="form-group col-md-12 col-12">
          <label>Alamat</label>
          <textarea class="form-control" rows="4" style="height: 100%;">Jl. raya tengah atas bawah no.100 rt 01 rw 02, bojong kenyot, bogor</textarea>
      </div>

      <div class="form-group col-md-7 col-12 mt-4">
        <label>Email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-at"></i>
            </div>
          </div>
          <input type="email" class="form-control" value="ujang@maman.com">
          <div class="invalid-feedback">
          </div>
        </div>
      </div> 

      <div class="form-group col-md-5 col-12 mt-4">
        <label>Kelas</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-chalkboard-user"></i>
            </div>
          </div>
          <input type="text" class="form-control" value="XAP1">
          <div class="invalid-feedback">
          </div>
        </div>
      </div> 
    </div>    

</div>                
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  <button type="submit" name="updateData" class="btn btn-match">Simpan</button>
</div>