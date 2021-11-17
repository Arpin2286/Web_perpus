<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PeminjamanController extends Controller
{
    public function show()
    {
        $data = DB::table('transaksi')
                ->join('buku', 'transaksi.id_buku', '=', 'buku.id_buku')
                ->join('mahasiswa','transaksi.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
                ->get();
        return view('Peminjaman.Peminjaman',['data'=>$data]);
    }

    public function create()
    {
        $data = DB::table('mahasiswa')->get();
        $data2 = DB::table('buku')->get();
        return view('Peminjaman.FormPeminjaman', ['mahasiswa'=>$data, 'buku'=>$data2]);
    }

    public function insert(Request $req)
    {
        DB::table('transaksi')->insert(
            [
                'id_mahasiswa' => $req->id_mahasiswa,
                'id_buku' => $req->id_buku,
                'tanggal_pinjam' => $req->tanggal_pinjam,
                'status_pinjam' => $req->status_pinjam,
                'total_biaya' => $req->total_biaya
            ]
        );
        DB::table('buku')->where('id_buku', $req->id_buku)->decrement('stok_buku');
        return redirect('/Peminjaman');
    }

    public function delete(Int $id)
    {
        $data = DB::table('transaksi')->where('id_transaksi', $id)->first();
        if($data->status_pinjam != 1){
            DB::table('transaksi')->where('id_transaksi', $id)->delete();
        }
        return redirect('/Peminjaman');
    }

    public function statusedit(Request $request, Int $id)
    {
        date_default_timezone_set('Asia/Singapore'); 
        $this_date = date("Y-m-d H:i:s");
        $data = 0;
        DB::table('transaksi')->where('id_transaksi', $id)->update([
            'status_pinjam' => $data,
            'tanggal_kembali' => $this_date
        ]);
        //hitung total
        $data = DB::table('transaksi')->where('id_transaksi', '=', $id)->select(DB::raw('datediff(tanggal_kembali,tanggal_pinjam)'))->get();
        $add = DB::table('transaksi')->where('id_transaksi',$id)->first();
        $dataBuku = DB::table('buku')->where('id_buku',$add->id_buku)->first();
        
        foreach($data as $datas){
            $total = 0;
            $total = $total + $dataBuku->biaya_sewa_harian;
        }

        DB::table('transaksi')->where('id_transaksi', $id)->update(['total_biaya' => $total]);
        //add stok
        DB::table('buku')->where('id_buku', $add->id_buku)->increment('stok_buku');
        return redirect('/Peminjaman');
    }

    public function edit(Int $id)
    {
        $transaksi = DB::table('transaksi')->where('id_transaksi', $id)->first();
        $mahasiswa= DB::table('mahasiswa')->where('id_mahasiswa', $transaksi->id_mahasiswa)->first();
        $buku = DB::table('buku')->where('id_buku', $transaksi->id_buku)->first();
        
        $data = DB::table('mahasiswa')->get();
        $data2 = DB::table('buku')->get();

        return view('Peminjaman.FormEditPeminjaman', ['transaksi'=>$transaksi,'mahasiswa'=>$mahasiswa, 'buku' => $buku,'data' =>$data,'data2' => $data2]);
    }

    public function update(Request $req, Int $id)
    {
        DB::table('transaksi')->where('id_transaksi', $id)->update([
            'id_mahasiswa' => $req->id_mahasiswa,
            'id_buku' => $req->id_buku
        ]);
        return redirect('/Peminjaman');
    }
}
