@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Laporan Barang Aset</div>

                <div class="card-body">                  

                  <table class="table table-bordered table-md table-responsive">
                    <tbody>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Nama barang</th>
                      <th>Merk</th>
                      <th>Jumlah</th>
                      <th>Satuan</th>
                      <th>Harga</th>
                      <th>Total</th>
                      <th>Unit</th>
                      <th>Jumlah Modal</th>
                      <th>Kecamatan</th>
                      <th>No</th>
                      <th>Tahun Beli</th>
                      <th>Jenis</th>
                      <th>Status</th>
                      <th>#</th>
                    </tr>

                  </tbody>
                </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection