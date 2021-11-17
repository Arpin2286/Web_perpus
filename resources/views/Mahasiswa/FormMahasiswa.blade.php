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
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Tambah Data Mahasiswa
                </h3>   
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet akses-list">
            <form method="post" action="{{ route('InsertMahasiswa') }}"
            class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
            {{ csrf_field() }}
                        <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label>
                                        Nama Mahasiswa
                                    </label>
                                    <input type="text" class="form-control m-input" name="nama" required>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label>
                                        NIM Mahasiswa
                                    </label>
                                    <input type="text" class="form-control m-input" name="nim" required>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label>
                                        Email
                                    </label>
                                    <input type="email" class="form-control m-input" name="email" required>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label>
                                        Nomor Telepon
                                    </label>
                                    <input type="text" class="form-control m-input" name="no_telp" required>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label>
                                        Program Studi
                                    </label>
                                    <input type="text" class="form-control m-input" name="prodi" required>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label>
                                        Jurusan
                                    </label>
                                    <input type="text" class="form-control m-input" name="jurusan" required>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label>
                                        Fakultas
                                    </label>
                                    <input type="text" class="form-control m-input" name="fakultas" required>
                                </div>
                                <div class="form-group m-form__group row">
                                    <input type="submit" value="Simpan" class="btn btn-success">
                                    <a href="/mahasiswa" class="btn btn-default">Kembali</a>
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