<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show()
    {
        $mahasiswa = DB::table('mahasiswa')->count();
        $buku = DB::table('buku')->sum('stok_buku');
        $transaksi = DB::table('transaksi')->count();

        $data = [
            'mahasiswa' => $mahasiswa,
            'buku' => $buku,
            'transaksi' => $transaksi
        ];

        return view('index', $data);
    }
}
