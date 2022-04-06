<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Data Materi</h4>
          <div class="card-header-form">   
            <div class="row">
              <div class="col-12 col-sm-2 col-lg-2 mb-1">
                <button class="btn btn-primary p-1" data-toggle="modal" data-target="#addmateri"><i class="fas fa-plus"></i></button>
              </div>
              <div class="col-12 col-sm-9 col-lg-9 mt-1">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              
            </div>            
          </div>
        </div>
        
        @include('partials.tablemateri')

      </div>
    </div>
  </div>