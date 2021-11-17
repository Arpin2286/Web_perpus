@extends('layout.main')

@section('title')
	<title>
		SIMP | Buku
	</title>
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Data Buku
                </h3>   
            </div>
            <div>
                <a href="{{ route('TampilFormBuku') }}" class="btn btn-success"><i class="fa flaticon-add"></i> Tambah Data </a>
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
                                <th class="no-sort" >Judul Buku</th>
                                <th class="no-sort" >Pengarang</th>
                                <th class="no-sort" >Penerbit</th>
                                <th class="no-sort" >Tahun Terbit</th>
                                <th class="no-sort" >Tebal</th>
                                <th class="no-sort" >ISBN</th>
                                <th class="no-sort" >stok</th>
                                <th class="no-sort" >Biaya Sewa Harian</th>
                                <th class="no-sort" >Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data as $item)
                                <tr>
                                    <td><?php echo($i); $i++;?></td>
                                    <td>{{ $item->judul_buku }}</td>
                                    <td>{{ $item->pengarang }}</td>
                                    <td>{{ $item->penerbit }}</td>
                                    <td>{{date('Y', strtotime($item->tahun_terbit))}}</td>
                                    <td>{{ $item->tebal }}</td>
                                    <td>{{ $item->isbn }}</td>
                                    <td>{{ $item->stok_buku }}</td>
                                    <td>{{ $item->biaya_sewa_harian }}</td>
                                    <td>
                                        <div>
                                            <a href="/Buku/Edit/{{$item->id_buku}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            <a href="/Buku/Delete/{{$item->id_buku}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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