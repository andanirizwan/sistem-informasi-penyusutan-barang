@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Barang Aset</div>

                <div class="card-body">

                  <a href="{{route('barang.create')}}" class="btn btn-info mb-2"><i class="fas fa-plus"></i> Tambah barang</a><br>                  

                  @if(Auth::user()->role == 'admin')
                  <form class="form-inline" method="post" action="/barang/filter">
                    <select name="filter" class="form-control mr-2" >
                      <option > -- pilih pengguna --</option>
                      @foreach ($user as $users)
                        @if($users->role != 'admin')
                          <option name="filter" value="{{$users->id}}"> {{$users->name}} </option>
                        @endif
                      @endforeach
                    </select>
                    @csrf

                    <button class="btn btn-primary mr-1" type="submit">Filter</button>  
                    
                  </form><br>
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
                      <th>Pengguna</th>
                      <th>Jumlah Modal</th>
                      <th>Kecamatan</th>
                      <th>No</th>
                      <th>Tahun Beli</th>
                      <th>Jenis</th>
                      <!-- <th>#</th> -->
                    </tr>

                    @php
                      $i=1
                    @endphp
                    @foreach ($barang as $barangs)
                    

                    <tr>
                      <td>{{$i++}}</td>
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