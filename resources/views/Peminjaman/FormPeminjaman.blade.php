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
                    Peminjaman Data
                </h3>   
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet akses-list">
            <form method="post" action="{{ route('InsertPeminjaman') }}"
            class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
            {{ csrf_field() }}
            <?php date_default_timezone_set('Asia/Singapore'); $_date = date("Y-m-d H:i:s") ?>
            <input type="hidden" class="form-control m-input" name="tanggal_pinjam" value="{{$_date}}">
            <input type="hidden" class="form-control m-input" name="status_pinjam" value="1">
            <input type="hidden" class="form-control m-input" name="total_biaya" value="0">
                        <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label for="exampleSelect1">
                                        Nama Mahasiswa
                                    </label>
                                    <select class="form-control m-input" name="id_mahasiswa" id="exampleSelect1" required>
                                        @foreach ($mahasiswa as $mahasiswas)
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
                                        @foreach ($buku as $bukus)
                                            <option value="{{$bukus->id_buku}}">
                                                {{$bukus->judul_buku}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group m-form__group row">
                                    <input type="submit" value="Simpan" class="btn btn-success">
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