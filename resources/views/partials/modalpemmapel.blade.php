<div class="card-body">
    <div class="row">     
      
      <div class="form-group col-md-12 col-12">
        <label>Id Kelas</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-id-card"></i>
            </div>
          </div>
          <select name="addMapelKelas" class="form-control selectpicker" data-live-search="true">
            <option>--select--</option>
            <option>XAP1</option>
            <option>XAP2</option>
            <option>XAP3</option>
          </select>
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
          <select name="addPemMapel" class="form-control selectpicker" data-live-search="true">
            <option>--select--</option>
            <option>Agama</option>
            <option>IPA</option>
            <option>IPS</option>
          </select>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>


      <div class="form-group col-md-12 col-12">
        <label>ID Guru</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="far fa-id-card"></i>
            </div>
          </div>
          <select name="addIDGuruMapel" class="form-control selectpicker" data-live-search="true">
            <option>--select--</option>
            <option>382812393213</option>
            <option>3123123</option>
            <option>31231233</option>
          </select>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>       

      <div class="form-group col-md-12 col-12 pr-2">
        <label>Guru</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
          <input type="text" class="form-control" value="" disabled>
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