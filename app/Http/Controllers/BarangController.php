<?php

namespace App\Http\Controllers;

use App\Barang;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $user = User::all();
            $barang = barang::paginate(10);
            return view('barang', ['barang'=>$barang,'user'=>$user]);
        }
        
        $user_id = Auth::user()->id;
        $user = User::all();
        $barang = barang::where('user_id' , $user_id)->paginate(10);
        return view('barang', ['barang'=>$barang,'user'=>$user]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'file' => 'mimes:jpg,jpeg,png|max:2000'
        // ]);

        //upload
        // $nama_foto= time() .'.jpg';
        // $request->file('foto')->storeAs('public', $nama_foto);

        $barang = new Barang;
        $barang->nama_barang = $request->barang;
        $barang->merk = $request->merk;
        $barang->jumlah = $request->jumlah;
        $barang->satuan = $request->satuan;
        $barang->harga = $request->harga;
        $barang->total = $request->satuan;
        $barang->unit = $request->unit;
        $barang->jumlah_modal = $request->jumlahmodal;
        $barang->kecamatan = $request->kecamatan;
        $barang->no = $request->no;
        $barang->tahun_beli = $request->tahunbeli;
        $barang->jenis = $request->jenis;
        // $barang->gambar = $nama_foto;
        
        $barang->user_id = Auth::user()->id;

        $barang->save();

        return redirect('/barang')->with('alert', 'barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        
        return view('lapor-barang', ['barang'=>$barang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('nilai-barang', ['barang'=>$barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $harga = $request->harga;
        $penyusutan_fisik = $request->penyusutan_fisik;
        $penyusutan_fungsional = $request->penyusutan_fungsional;
        $penyusutan_ekonomis = $request->penyusutan_ekonomis;

        $rumus = $harga*(1-($penyusutan_fisik/100))*(1-($penyusutan_fungsional/100))*(1-($penyusutan_ekonomis/100));

        $id = $barang->id;
        $barang = Barang::find($id);
        $barang->penyusutan_fisik = $penyusutan_fisik;
        $barang->penyusutan_fungsional = $request->penyusutan_fungsional;
        $barang->penyusutan_ekonomis = $request->penyusutan_ekonomis;
        $barang->penyusutan_aset = $rumus;
        $barang->status = 'konfirmasi';

        $barang->save();

        return redirect('/penyusutan')->with('alert', 'barang berhasil dinilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $id = $barang->id;
        $barang = barang::where('id', $id)->delete();
        return redirect('/penyusutan')->with('alert', 'barang berhasil dihapus');
    }

    public function laporan()
    {
        if (Auth::user()->role == 'admin') {
            $barang = barang::where('status' , 'belum')->paginate(10);
            return view('laporan', ['barang'=>$barang]);
        }

        $user_id = Auth::user()->id;
        $barang = barang::where('status' , 'belum')->where('user_id' , $user_id)->paginate(10);
        return view('laporan', ['barang'=>$barang]);
    }

    public function penyusutan()
    {
        if (Auth::user()->role == 'admin') {
            $barang = barang::where('status' , 'konfirmasi')->paginate(10);
        return view('penyusutan', ['barang'=>$barang]);
        }

        $user_id = Auth::user()->id;
        $barang = barang::where('status' , 'konfirmasi')->where('user_id' , $user_id)->paginate(10);
        return view('penyusutan', ['barang'=>$barang]);
    }
    public function pelaporan(Request $request, $id)
    {
        $this->validate($request,[
            'file' => 'mimes:jpg,jpeg,png|max:2000'
        ]);

        //upload
        $nama_foto= time() .'.jpg';
        $request->file('foto')->storeAs('public', $nama_foto);
        
        $barang = Barang::find($id);
        $barang->gambar = $nama_foto;
        $barang->kondisi = $request->kondisi;
        $barang->status = 'konfirmasi';

        $barang->save();

        return redirect('/penyusutan')->with('alert', 'barang berhasil dilaporkan');
    }

    public function filter(Request $request)
    {
        $filter = $request->filter;
        $user = User::all();
        $barang = barang::where('user_id' , $filter)->paginate(10);
        return view('barang', ['barang'=>$barang,'user'=>$user]);
    }
}
