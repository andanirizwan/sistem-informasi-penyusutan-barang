@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create Barang</div>

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
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah">
                  </div>
                  <div class="form-group">
                    <label>Satuan :</label>
                    <input type="text" class="form-control" name="satuan" required>
                  </div>
                  <div class="form-group">
                    <label>harga :</label>
                    <input type="text" class="form-control" name="harga" required>
                  </div>
                  <div class="form-group">
                    <label>total :</label>
                    <input type="text" class="form-control" name="total" required>
                  </div>
                  <div class="form-group">
                    <label>unit :</label>
                    <input type="text" class="form-control" name="unit" required>
                  </div>
                  <div class="form-group">
                    <label>jumlah modal :</label>
                    <input type="text" class="form-control" name="jumlahmodal" required>
                  </div>
                  <div class="form-group">
                    <label>kecamatan :</label>
                    <input type="text" class="form-control" name="kecamatan" required>
                  </div>
                  <div class="form-group">
                    <label>no :</label>
                    <input type="text" class="form-control" name="no" required>
                  </div>
                  <div class="form-group">
                    <label>tahun beli :</label>
                    <input type="date" class="form-control" name="tahunbeli" required>
                  </div>
                  <div class="form-group">
                    <label>jenis :</label>
                    <input type="text" class="form-control" name="jenis" required>
                  </div>
                  <div class="form-group">
                    <label>Foto :</label>
                    <input type="file" class="form-control" name="foto" required>
                  </div>
                  @csrf
                  <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  </form>
                </div>

              
            </div>
        </div>

    </div>
</div>
@endsection