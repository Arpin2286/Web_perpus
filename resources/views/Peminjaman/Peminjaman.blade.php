@extends('layout.main')

@section('title')
	<title>
		SIMP | Peminjaman
	</title>
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Data Peminjaman Buku
                </h3>   
            </div>
            <div>
                <a href="{{ route('TampilFormPeminjaman') }}" class="btn btn-success"><i class="fa flaticon-add"></i> Tambah Data </a>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__body">
                <div class="table-responsive">
                    <table 
                        class=" table table-bordered datatable">
                        <thead>
                            <tr>
                                <th class="no-sort" >No</th>
                                <th class="no-sort" >Nama Mahasiswa</th>
                                <th class="no-sort" >Judul Buku</th>
                                <th class="no-sort" >Tanggal Pinjam</th>
                                <th class="no-sort" >Tanggal Kembali</th>
                                <th class="no-sort" >Status Pinjam</th>
                                <th class="no-sort" >Total Biaya</th>
                                <th class="no-sort" >Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data as $datas)
                                <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td>{{$datas->nama}}</td>
                                    <td>{{$datas->judul_buku}}</td>
                                    <td>{{$datas->tanggal_pinjam}}</td>
                                    <td>{{$datas->tanggal_kembali}}</td>
                                    <td>
                                        @if ($datas->status_pinjam == 1)
                                        <a href="/Peminjaman/Status/Edit/{{$datas->id_transaksi}}">Dipinjam</a>    
                                        @else
                                            <a href="/Peminjaman">Dikembalikan</a>
                                        @endif
                                    </td>
                                    <td>{{$datas->total_biaya}}</td>
                                    <td>
                                        <div>
                                            @if($datas->status_pinjam == 1)
                                                <a href="/Peminjaman/Edit/{{$datas->id_transaksi}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            @endif
                                            
                                            <a href="/Peminjaman/Delete/{{$datas->id_transaksi}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection