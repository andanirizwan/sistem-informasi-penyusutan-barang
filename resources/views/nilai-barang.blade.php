@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Penilaian Barang Aset</div>

                <div class="card-body">

                  <table class="table table-bordered table-md table-responsive">
                    <tbody>
                    <tr>
                      <th>No</th>
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
                    </tr>

                    <tr>
                      <th>{{$barang->nama_barang}}</th>
                      <th>{{$barang->merk}}</th>
                      <th>{{$barang->jumlah}}</th>
                      <th>{{$barang->satuan}}</th>
                      <th>{{$barang->harga}}</th>
                      <th>{{$barang->total}}</th>
                      <th>{{$barang->unit}}</th>
                      <th>{{$barang->jumlah_modal}}</th>
                      <th>{{$barang->kecamatan}}</th>
                      <th>{{$barang->no}}</th>
                      <th>{{$barang->tahun_beli}}</th>
                      <th>{{$barang->jenis}}</th>
                    </tr>
                        
                  </tbody>
                </table>

                <form class="form-horizontal" method="POST" action="/barang/{{$barang->id}}" enctype="multipart/form-data">
                   @method('PUT')
                  <div class="form-group">
                    <label>Penyusutan Fisik :</label>
                    <input type="text" class="form-control" name="penyusutan_fisik" required>
                  </div>
                  <div class="form-group">
                    <label>Penyusutan Fungsional :</label>
                    <input type="text" class="form-control" name="penyusutan_fungsional" required>
                  </div>
                  <div class="form-group">
                    <label>Penyusutan Ekonomis :</label>
                    <input type="text" class="form-control" name="penyusutan_ekonomis" required>
                    <input type="hidden" class="form-control" name="harga" value="{{$barang->harga}}">
                  </div>

                  @csrf
                  <button class="btn btn-primary mr-1" type="submit">Hitung</button>
                  </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection