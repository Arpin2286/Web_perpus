<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    
    public function show()
    {
        $data = DB::table('buku')->get();
        return view('Buku.Buku', ['data' => $data]);
    }

    public function create()
    {
        return view('Buku.FormBuku');
    }

    public function insert(Request $add)
    {
        DB::table('buku')->insert(
            [
                'judul_buku' => $add->judul,
                'pengarang' => $add->pengarang,
                'penerbit' => $add->penerbit,
                'tahun_terbit' => $add->tahun_terbit,
                'tebal' => $add->tebal,
                'isbn' => $add->isbn,
                'stok_buku' => $add->stok_buku,
                'biaya_sewa_harian' => $add->biaya_sewa_harian
            ]
        );

        return redirect('/Buku');
    }

    public function edit(Int $id)
    {
        $buku = DB::table('buku')-> where('id_buku', $id)->first();
        return view('/Buku/FormEditbuku', ['buku'=>$buku]);
    }

    public function update(Request $request,Int $id)
    {
        DB::table('buku')->where('id_buku', $id)->update([
            'judul_buku' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'tebal' => $request->tebal,
            'isbn' => $request->isbn,
            'stok_buku' => $request->stok_buku,
            'biaya_sewa_harian' => $request->biaya_sewa_harian
        ]);

        return redirect('/Buku');
    }

    public function delete(Int $id){
        DB::table('buku')->where('id_buku', $id)->delete();

        return redirect('/Buku');
    }
}
