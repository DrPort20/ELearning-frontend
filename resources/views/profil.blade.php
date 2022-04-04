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
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="fas fa-id-card"></i>
                                  </div>
                                </div>
                                <input type="number" class="form-control" value="2018222123123" disabled>
                                <div class="invalid-feedback">
                                </div>
                              </div>
                            </div>   
      
                            <div class="form-group col-md-12 col-12">
                              <label>Nama Lengkap</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                  </div>
                                </div>
                                <input type="text" class="form-control" value="Ujang Maman" disabled>
                                <div class="invalid-feedback">
                                </div>
                              </div>
                            </div>   
      
                            <div class="form-group col-md-6 col-12">
                              <label>Jabatan</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="fas fa-star"></i>
                                  </div>
                                </div>
                                <input type="text" class="form-control" value="Siswa" disabled>
                                <div class="invalid-feedback">
                                </div>
                              </div>
                            </div> 
      
                            <div class="form-group col-md-6 col-12">
                              <label>Jenis Kelamin</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="fas fa-mars-and-venus"></i>
                                  </div>
                                </div>
                                <input type="text" class="form-control" value="Laki-Laki" disabled>
                                <div class="invalid-feedback">
                                </div>
                              </div>
                            </div> 
      
                            <div class="form-group col-md-6 col-12">
                              <label>Tanggal Lahir</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="fas fa-calendar-days"></i>
                                  </div>
                                </div>
                                <input type="text" class="form-control" value="20/02/1992" disabled>
                                <div class="invalid-feedback">
                                </div>
                              </div>
                            </div> 
      
                            <div class="form-group col-md-6 col-12">
                              <label>No HP</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <div class="font-weight-bold">+62</div>
                                  </div>
                                </div>
                                <input type="number" class="form-control" value="123123123" disabled>
                                <div class="invalid-feedback">
                                </div>
                              </div>
                            </div> 
      
                            <div class="form-group col-md-12 col-12">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="4" style="height: 100%;" required disabled>Jl. raya tengah atas bawah no.100 rt 01 rw 02, bojong kenyot, bogor</textarea>
                            </div>
      
                            <div class="form-group col-md-7 col-12 mt-4">
                              <label>Email</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="fas fa-at"></i>
                                  </div>
                                </div>
                                <input type="email" class="form-control" value="ujang@maman.com" disabled>
                                <div class="invalid-feedback">
                                </div>
                              </div>
                            </div> 
      
                            <div class="form-group col-md-5 col-12 mt-4">
                              <label>Tahun Masuk</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="far fa-calendar"></i>
                                  </div>
                                </div>
                                <input type="number" class="form-control" value="2022" disabled>
                                <div class="invalid-feedback">
                                </div>
                              </div>
                            </div> 
                          </div>    
                          
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#ubahPassword"><i class="fas fa-key"></i>  Ubah Password</button>
                        <button class="btn btn-match" data-toggle="modal" data-target="#editProfil"><i class="fas fa-pen-to-square"></i>  Ubah Data</button>
                      </div>

                      <!--Modals-->
                      @include('modals.editprofile')
                      @include('modals.password')

                  </div>
            </div>
        </div>
    </div>
</div>
@endsection