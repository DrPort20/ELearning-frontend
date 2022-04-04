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
            <h4>Daftar Siswa yang Diajar</h4>     
        </div>
        <div class="card-body">
     
            @include('tables.tampilsiswa')
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection