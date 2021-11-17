@extends('layout.main')

@section('title')
	<title>
		SIMP | Mahasiswa
	</title>
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Data Mahasiswa
                </h3>   
            </div>
            <div>
                <a href="{{ route('TampilFormMahasiswa') }}" class="btn btn-success"><i class="fa flaticon-add"></i> Tambah Data </a>
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
                                <th class="no-sort" >NIM</th>
                                <th class="no-sort" >Email</th>
                                <th class="no-sort" >Nomor Telepon</th>
                                <th class="no-sort" >Program Studi</th>
                                <th class="no-sort" >Jurusan</th>
                                <th class="no-sort" >Fakultas</th>
                                <th class="no-sort" >Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data as $item)
                                <tr>
                                    <td><?php echo($i); $i++;?></td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->no_telp }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    <td>{{ $item->jurusan }}</td>
                                    <td>{{ $item->fakultas }}</td>
                                    <td>
                                        <div>
                                            <a href="/Mahasiswa/Edit/{{$item->id_mahasiswa}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            <a href="/Mahasiswa/Delete/{{$item->id_mahasiswa}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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