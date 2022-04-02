@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Siswa</h4>
              </div>
              <div class="card-body">
                10
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-chalkboard-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Guru</h4>
              </div>
              <div class="card-body">
                42
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-door-open"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Kelas</h4>
              </div>
              <div class="card-body">
                1,201
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6   col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-book"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Mapel</h4>
              </div>
              <div class="card-body">
                47
              </div>
            </div>
          </div>
        </div>                  
    </div>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Data Berdasarkan Jenis Kelamin</h4>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <canvas id="myChart4" width="608" height="304" style="display: block; height: 152px; width: 304px;" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Data Berdasarkan Jenis User</h4>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <canvas id="myChart4" width="608" height="304" style="display: block; height: 152px; width: 304px;" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
      
@endsection