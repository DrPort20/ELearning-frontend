@extends('layouts.main')
@section('content')

    <div class="card card-primary">
    <!-- card header -->
    <div class="card-header">
        <!-- card title -->
        <h4>Profil Pengguna</h4>
    </div>
    <!-- card body -->
    <div class="card-body">
        <div class="row mt-3">
            <div class="col-12 col-md-12 col-lg-3 mb-4">
                <img class="image-profile rounded mx-auto d-block" alt="image" src="assets/img/avatar/avatar-1.png">
            </div>
            <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                      <div class="card-header">
                        <h4>Data Lengkap Pengguna</h4>
                      </div>
                      <div class="card-body">
                          <div class="row">                               
                            <div class="form-group col-md-12 col-12">
                              <label>No ID</label>
                              <input type="text" class="form-control" value="2018222123123" required="" disabled>
                              <div class="invalid-feedback">
                              </div>
                            </div>
                            <div class="form-group col-md-12 col-12">
                              <label>Nama Lengkap</label>
                              <input type="text" class="form-control" value="Ujang Maman" required="" disabled>
                              <div class="invalid-feedback">
                              </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" value="Siswa" required="" disabled>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" value="Laki-Laki" required="" disabled>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" value="Arab, 20 Juli 2020" required="" disabled>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>No HP</label>
                                <input type="text" class="form-control" value="0818827121" required="" disabled>
                              </div>
                              <div class="form-group col-md-12 col-12">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="4" style="height: 100%;" required="" disabled>Jl. raya tengah atas bawah no.100 rt 01 rw 02, bojong kenyot, bogor</textarea>
                            </div>
                              <div class="form-group col-md-7 col-12 mt-4">
                                <label>Email</label>
                                <input type="email" class="form-control" value="ujang@maman.com" required="" disabled>
                              </div>
                              <div class="form-group col-md-5 col-12 mt-4">
                                <label>Tahun Masuk</label>
                                <input type="number" class="form-control" value="2022" disabled>
                              </div>
                          </div>
                          
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editProfil"><i class="fas fa-pen-to-square"></i>  Ubah Data</button>
                      </div>

                      @include('modals.editprofile')

                  </div>
            </div>
        </div>
    </div>
    <!-- card footer -->
    <div class="card-footer">
        Card footer
    </div>
</div>
@endsection