@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4 ">
                          <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                              <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                              <div class="card-header">
                                <h4>Barang Aset</h4>
                              </div>
                              <div class="card-body">
                                
                              </div>
                            </div>
                          </div>
                        </div>    

                        <div class="col-md-4 ">
                          <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                              <i class="far fa-newspaper"></i>
                            </div>
                            <div class="card-wrap">
                              <div class="card-header">
                                <h4>Laporan Penyusutan</h4>
                              </div>
                              <div class="card-body">
                                
                              </div>
                            </div>
                          </div>
                        </div>                     

                                                                         
                </div>
            </div>
        </div>

    </div>
</div>

@endsection