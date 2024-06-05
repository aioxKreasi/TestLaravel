<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{

    public function index(Request $request)
    {
        
        // $queryproduk = Produk::all();
        $querykategori = KategoriProduk::all();

        $batas = 5;
        $query = Produk::paginate($batas);
        $no = $batas * ($query->currentPage() - 1);
        $cari = $request->search;

        $queryproduk = DB::table('produks')
        ->join('kategori_produks','produks.kategoriProduk_id','=','kategori_produks.id')
        ->select('produks.*','kategori_produks.*')
        ->where('produks.nama_produk','LIKE',"%$cari%")
        ->orWhere('produks.harga_produk','LIKE',"%$cari%")
        ->orWhere('produks.detail_produk','LIKE',"%$cari%")
        ->orWhere('produks.warna_produk','LIKE',"%$cari%")
        ->orWhere('kategori_produks.nama_kategori','LIKE',"%$cari%")
        ->paginate($batas);
    
    return view('produk.index',compact('queryproduk','querykategori','no','cari'));
    }


    public function create()
    {

    }

    public function search(Request $request){

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
