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
                    Edit Peminjaman Buku
                </h3>   
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet akses-list">
            <form method="post" action="/Peminjaman/Edit/{{$transaksi->id_transaksi}}"
            class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
            {{ csrf_field() }}
                        <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label for="exampleSelect1">
                                        Nama Mahasiswa
                                    </label>
                                    <select class="form-control m-input" name="id_mahasiswa" id="exampleSelect1" required>
                                        <option value="{{$transaksi->id_mahasiswa}}">
                                            {{$mahasiswa->nama}}
                                        </option>
                                        @foreach ($data as $mahasiswas)
                                            <option value="{{$mahasiswas->id_mahasiswa}}">
                                                {{$mahasiswas->nama}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="exampleSelect1">
                                        Judul Buku
                                    </label>
                                    <select class="form-control m-input" name="id_buku" id="exampleSelect1" required>
                                        <option value="{{$transaksi->id_buku}}">
                                            {{$buku->judul_buku}}
                                        </option>
                                        @foreach ($data2 as $bukus)
                                            <option value="{{$bukus->id_buku}}">
                                                {{$bukus->judul_buku}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group m-form__group row">
                                    <input type="submit" value="Ubah" class="btn btn-warning">
                                    <a href="/Peminjaman" class="btn btn-default">Kembali</a>
                                </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection