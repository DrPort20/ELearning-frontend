@extends('layouts.main')
@section('content')
<div class="row">
    
    <!--modals-->
    
    @include('modals.adduser')
    @include('modals.viewprofile')
    @include('modals.editprofile') 

    <!--modals-->
    
    <div class="col-12 col-sm-12 col-lg-12">
      <div class="card card-primary">
        <div class="card-header">
            <h4>Input Data User</h4>     
            <div class="card-header-form mr-4">                    
                <button class="btn btn-primary p-2" data-toggle="modal" data-target="#addprofil"><i class="fas fa-user-plus"></i> Tambah User</button>
            </div>     
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="siswa-table" data-toggle="tab" href="#siswaTable" role="tab" aria-controls="siswa" aria-selected="true">Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="guru-table" data-toggle="tab" href="#guruTable" role="tab" aria-controls="guru" aria-selected="false">Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="admin-table" data-toggle="tab" href="#adminTable" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
            </li>
          </ul>
          <div class="tab-content tab-bordered" id="myTab3Content">    
         
            <div class="tab-pane fade show active" id="siswaTable" role="tabpanel" aria-labelledby="siswa-table">
              
                @include('tables.siswa')

            </div>
            <div class="tab-pane fade" id="guruTable" role="tabpanel" aria-labelledby="guru-table">

                @include('tables.guru')
                
            </div>
            <div class="tab-pane fade" id="adminTable" role="tabpanel" aria-labelledby="admin-table">

                @include('tables.admin')

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection