@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Barang</div>

                <div class="card-body">
                  <form class="form-horizontal" method="POST" action="{{route('barang.store')}}" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Nama Barang :</label>
                    <input type="text" class="form-control" name="barang" required>
                  </div>
                  <div class="form-group">
                    <label>Merk :</label>
                    <input type="text" class="form-control" name="merk" required>
                  </div>
                  <div class="form-group">
                    <label>Jumlah :</label>
                    <input type="text" class="form-control" name="jumlah">
                  </div>
                  <div class="form-group">
                    <label>Satuan :</label>
                    <input type="text" class="form-control" name="satuan" required>
                  </div>
                  <div class="form-group">
                    <label>Harga :</label>
                    <input type="text" class="form-control" name="harga" required>
                  </div>
                  <div class="form-group">
                    <label>Total :</label>
                    <input type="text" class="form-control" name="total" required>
                  </div>
                  <div class="form-group">
                    <label>Pengguna :</label>
                    <input type="text" class="form-control" name="unit"  value="{{Auth::user()->name}}" readonly>
                  </div>
                  <div class="form-group">
                    <label>Jumlah :</label>
                    <input type="text" class="form-control" name="jumlahmodal" required>
                  </div>
                  <div class="form-group">
                    <label>Kecamatan :</label>
                    <input type="text" class="form-control" name="kecamatan" required>
                  </div>
                  <div class="form-group">
                    <label>No :</label>
                    <input type="text" class="form-control" name="no" required>
                  </div>
                  <div class="form-group">
                    <label>Tahun Beli :</label>
                    <input type="date" class="form-control" name="tahunbeli" required>
                  </div>
                  <div class="form-group">
                    <label>Jenis :</label>
                    <input type="text" class="form-control" name="jenis" required>
                  </div>
                
                  @csrf
                  <button class="btn btn-primary mr-1" type="submit">Tambah</button>
                  </form>
                </div>

              
            </div>
        </div>

    </div>
</div>
@endsection