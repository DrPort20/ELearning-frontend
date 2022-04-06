@extends('layouts.main')
@section('content')
<div class="row">
    
    <!--modals-->
    
    @include('modals.addmateri')
    @include('modals.editmateri')

    <!--modals-->
    
    <div class="col-12 col-sm-12 col-lg-12">
      <div class="card card-primary">
        <div class="card-header">
            <h4>Input Manajemen Materi</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="mapel-table" data-toggle="tab" href="#materiTable" role="tab" aria-controls="mapel" aria-selected="true">Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="kelas-table" data-toggle="tab" href="#kelasTable" role="tab" aria-controls="kelas" aria-selected="false">Tugas Terkumpul</a>
            </li>
          </ul>
          <div class="tab-content tab-bordered" id="myTab3Content">    
         
            <div class="tab-pane fade show active" id="materiTable" role="tabpanel" aria-labelledby="materi-table">
              
                @include('tables.materi')

            </div>
            <div class="tab-pane fade" id="kelasTable" role="tugasTable" aria-labelledby="tugas-table">

                @include('tables.tugaskumpul')
                
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection