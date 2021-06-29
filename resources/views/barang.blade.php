@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Barang Aset</div>

                <div class="card-body">

                @if (Auth::user()->role == 'admin')
                  <a href="{{route('barang.create')}}" class="btn btn-info">Tambah barang</a><br>
                @endif
                  

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
                      <th>#</th>
                    </tr>

                    @php
                      $i=1
                    @endphp
                    @foreach ($barang as $barangs)
                    

                    <tr>
                      <th>{{$i++}}</th>
                      <th>{{$barangs->nama_barang}}</th>
                      <th>{{$barangs->merk}}</th>
                      <th>{{$barangs->jumlah}}</th>
                      <th>{{$barangs->satuan}}</th>
                      <th>{{$barangs->harga}}</th>
                      <th>{{$barangs->total}}</th>
                      <th>{{$barangs->unit}}</th>
                      <th>{{$barangs->jumlah_modal}}</th>
                      <th>{{$barangs->kecamatan}}</th>
                      <th>{{$barangs->no}}</th>
                      <th>{{$barangs->tahun_beli}}</th>
                      <th>{{$barangs->jenis}}</th>
                      <th><a href="barang/{{$barangs->id}}/edit" class="btn btn-success">Nilai</a></th>
                    </tr>
                        
                    @endforeach

                  </tbody>
                </table>

                {{ $barang->links() }}

                @if (session('alert'))
                          <div class="alert alert-info">
                              {{ session('alert') }}
                          </div>
                @endif


                </div>
            </div>
        </div>

    </div>
</div>
@endsection