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
                    Edit Data Mahasiswa
                </h3>   
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet akses-list">
            <form method="POST" action="/Buku/Edit/{{$buku->id_buku}}"
            class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
            {{ csrf_field() }}
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <label>
                                    Nama Buku
                                </label>
                                <input type="text" class="form-control m-input" name="judul" value="{{$buku->judul_buku}}" required>
                            </div>
                            <div class="form-group m-form__group row">
                                <label>
                                    Pengarang
                                </label>
                                <input type="text" class="form-control m-input" name="pengarang" value="{{$buku->pengarang}}" required>
                            </div>
                            <div class="form-group m-form__group row">
                                <label>
                                    Penerbit
                                </label>
                                <input type="text" class="form-control m-input" name="penerbit" value="{{$buku->penerbit}}" required>
                            </div>
                            <div class="form-group m-form__group row">
                                <label>
                                    Tahun Terbit
                                </label>
                                <input type="date" class="form-control m-input" name="tahun_terbit" value="{{$buku->tahun_terbit}}" required>
                            </div>
                            <div class="form-group m-form__group row">
                                <label>
                                    Tebal
                                </label>
                                <input type="text" class="form-control m-input" name="tebal" value="{{$buku->tebal}}" required>
                            </div>
                            <div class="form-group m-form__group row">
                                <label>
                                    ISBN
                                </label>
                                <input type="text" class="form-control m-input" name="isbn" value="{{$buku->isbn}}" required>
                            </div>
                            <div class="form-group m-form__group row">
                                <label>
                                    Jumlah Buku
                                </label>
                                <input type="text" class="form-control m-input" name="stok_buku" value="{{$buku->stok_buku}}" required>
                            </div>
                            <div class="form-group m-form__group row">
                                <label>
                                    Biaya Sewa Harian
                                </label>
                                <input type="text" class="form-control m-input" name="biaya_sewa_harian" value="{{$buku->biaya_sewa_harian}}" required>
                            </div>
                            <div class="form-group m-form__group row">
                                <input type="submit" value="Ubah" class="btn btn-warning">
                                <a href="/Buku" class="btn btn-default">Kembali</a>
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