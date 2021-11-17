<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function show()
    {
        $data = DB::table('mahasiswa')->get();
        return view('Mahasiswa.Mahasiswa', ['data' => $data]);
    }

    public function create()
    {
        return view('Mahasiswa.FormMahasiswa');
    }

    public function insert(Request $add)
    {
        DB::table('mahasiswa')->insert(
            [
                'nama' => $add->nama,
                'nim' => $add->nim,
                'email' => $add->email,
                'no_telp' => $add->no_telp,
                'prodi' => $add->prodi,
                'jurusan' => $add->jurusan,
                'fakultas' => $add->fakultas
            ]
        );

        //redirect ke mahasiswa table page
        return redirect('/Mahasiswa');
    }

    public function edit(Int $id)
    {
        $mahasiswa = DB::table('mahasiswa')-> where('id_mahasiswa', $id)->first();
        return view('/Mahasiswa/FormEditMahasiswa', ['mahasiswa'=>$mahasiswa]);
    }

    public function update(Request $request,Int $id)
    {
        DB::table('mahasiswa')->where('id_mahasiswa', $id)->update([
            'nama' => $request->mahasiswa,
            'nim' => $request->nim,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'prodi' => $request->prodi,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
        ]);

        return redirect('/Mahasiswa');
    }

    public function delete(Int $id){
        $cek = DB::table('transaksi')->get();
        $cek2 = DB::table('mahasiswa')->get();
        DB::table('mahasiswa')->where('id_mahasiswa', $id)->delete();
        return redirect('/Mahasiswa');
    }
}
