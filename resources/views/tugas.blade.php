@extends('layouts.main')
@section('content')
<div class="row">
    
    <!--modals-->
    @include('modals.addtugassiswa')
    <!--modals-->
    
    <div class="col-12 col-sm-12 col-lg-12">
      <div class="card card-primary">
        <div class="card-header">
            <h4>Daftar Mapel</h4>
        </div>
        <div class="card-body">

            @include('tables.tugasterkumpulsiswa')

        </div>
      </div>
    </div>
  </div>
@endsection