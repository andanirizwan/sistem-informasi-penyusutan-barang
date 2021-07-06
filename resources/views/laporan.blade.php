@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pelaporan Barang Aset</div>

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
                      <th>Pengguna</th>
                      <th>Jumlah Modal</th>
                      <th>Kecamatan</th>
                      <th>No</th>
                      <th>Tahun Beli</th>
                      <th>Jenis</th>
                      <th>Kondisi</th>
                      <th>#</th>
                    </tr>

                    @php
                      $i=1
                    @endphp
                    @foreach ($barang as $barangs)
                    

                    <tr>
                      <td>{{$i++}}</td>
                      <td><img src="{{asset('storage/'.$barangs->gambar)}}" alt="" width="50px" height="50px"></td>
                      <td>{{$barangs->nama_barang}}</td>
                      <td>{{$barangs->merk}}</td>
                      <td>{{$barangs->jumlah}}</td>
                      <td>{{$barangs->satuan}}</td>
                      <td>{{$barangs->harga}}</td>
                      <td>{{$barangs->total}}</td>
                      <td>{{$barangs->unit}}</td>
                      <td>{{$barangs->jumlah_modal}}</td>
                      <td>{{$barangs->kecamatan}}</td>
                      <td>{{$barangs->no}}</td>
                      <td>{{$barangs->tahun_beli}}</td>
                      <td>{{$barangs->jenis}}</td>
                      <td>{{$barangs->kondisi}}</td>

                      @if (Auth::user()->role == 'admin')
                      <td><a href="barang/{{$barangs->id}}/edit" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i> Nilai</a></td>
                      
                      @elseif (Auth::user()->role == 'user')
                      <td><a href="barang/{{$barangs->id}}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i> Lapor</a></td>
                      @endif
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