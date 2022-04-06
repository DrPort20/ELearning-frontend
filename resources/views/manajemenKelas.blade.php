@extends('layouts.main')
@section('content')
<div class="row">
    
    <!--modals-->
    
    @include('modals.addmapel')
    @include('modals.addkelas')
    @include('modals.addpemmapel')
    @include('modals.editmapel')
    @include('modals.editkelas')

    <!--modals-->
    
    <div class="col-12 col-sm-12 col-lg-12">
      <div class="card card-primary">
        <div class="card-header">
            <h4>Input Manajemen Kelas</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="nav-item"> 
              <a class="nav-link active" id="mapel-table" data-toggle="tab" href="#mapelTable" role="tab" aria-controls="mapel" aria-selected="true">Mata Pelajaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="kelas-table" data-toggle="tab" href="#kelasTable" role="tab" aria-controls="kelas" aria-selected="false">Kelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pemmapel-table" data-toggle="tab" href="#pemMapelTable" role="tab" aria-controls="pemMapel" aria-selected="false">Pembagian Mapel</a>
            </li>
          </ul>
          <div class="tab-content tab-bordered" id="myTab3Content">    
         
            <div class="tab-pane fade show active" id="mapelTable" role="tabpanel" aria-labelledby="mapel-table">
              
                @include('tables.mapel')

            </div>
            <div class="tab-pane fade" id="kelasTable" role="tabpanel" aria-labelledby="kelas-table">

                @include('tables.kelas')
                
            </div>
            <div class="tab-pane fade" id="pemMapelTable" role="tabpanel" aria-labelledby="pemmapel-table">

                @include('tables.pemmapel')

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection