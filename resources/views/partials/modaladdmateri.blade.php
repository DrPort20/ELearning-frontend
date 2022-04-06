<div class="card-body">
    <div class="row">     
      <div class="form-group col-md-12 col-12">
        <label>Judul Materi</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-book"></i>
            </div>
          </div>
          <input type="text" class="form-control" value="" required>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>   

      <div class="form-group col-md-12 col-12">
        <label>Mata Pelajaran</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-book-open"></i>
            </div>
          </div>
          <select class="form-control" required>
            <option value="Pendidikan Agama">Pendidikan Agama</option>
            <option value="Pendidikan Agama 2">Pendidikan Agama 2</option>
          </select>
          <div class="invalid-feedback">
          </div>
        </div>
      </div> 

      <div class="form-group col-md-12 col-12">
        <label>Pertemuan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-calendar-check"></i>
            </div>
          </div>
          <input type="text" class="form-control" value="" required>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>   

      
      <div class="form-group col-md-12 col-12">
        <label>Materi</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile" required>Masukan Materi</label>
        </div>
        <div class="invalid-feedback">
        </div>
      </div>  

      <div class="form-group col-md-12 col-12">
        <label>Tugas</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Masukan Tugas</label>
        </div>
        <div class="invalid-feedback">
        </div>
      </div>  
    </div>    

</div>                
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  <button type="submit" name="updateData" class="btn btn-match">Simpan</button>
</div>