<div class="card-body">
    <div class="row">     
      
      <div class="form-group col-md-12 col-12">
        <label>ID Kelas</label>
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
        <label>Nama Kelas</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-book-open"></i>
            </div>
          </div>
          <input type="text" class="form-control" value="" required>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>   

      <div class="form-group col-md-12 col-12">
        <label>Wali Kelas</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
          <select name="ibukota" class="form-control selectpicker" data-live-search="true">
            <option>--select--</option>
            <option>William S.Pd</option>
            <option>Suranto M.Pd</option>
            <option>Susan S.Kom</option>
          </select>
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