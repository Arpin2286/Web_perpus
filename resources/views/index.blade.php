@extends('layout.main')

@section('title')
	<title>
		SIMP | Dashboard
	</title>
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1>Selamat Datang</h1>
			<p >Sistem Informasi Manajemen Perpustakaan Universitas XYZ membantu anda dalam proses manajemen data mahasiswa, data buku dan manajemen peminjaman buku di perpustakaan XYZ </p>
		</div>
	</div>
	<div>
		<div class="m-portlet__body">
			<div class="m-pricing-table-1 m-pricing-table-1--fixed">
				<div class="m-pricing-table-1__items row">
					<div class="m-pricing-table-1__item col-lg-4">
						<div class="m-pricing-table-1__visual">
							<div class="m-pricing-table-1__hexagon1"></div>
							<div class="m-pricing-table-1__hexagon2"></div>
							<span class="m-pricing-table-1__icon m--font-brand">
								<i class="fa flaticon-user-ok"></i>
							</span>
						</div>
						<span class="m-pricing-table-1__price">
							{{ $mahasiswa }}
						</span>
						<h3>Mahasiswa</h3>
						<div class="m-pricing-table-1__btn">
							<a href="/Mahasiswa" class="btn m-btn--pill  btn-brand m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Kelola Sekarang</a>
						</div>
					</div>
					<div class="m-pricing-table-1__item col-lg-4">
						<div class="m-pricing-table-1__visual">
							<div class="m-pricing-table-1__hexagon1"></div>
							<div class="m-pricing-table-1__hexagon2"></div>
							<span class="m-pricing-table-1__icon m--font-brand">
								<i class="fa flaticon-book"></i>
							</span>
						</div>
						<span class="m-pricing-table-1__price">
							{{ $buku }}
						</span>
						<h3>Buku</h3>
						<div class="m-pricing-table-1__btn">
							<a href="/Buku" class="btn m-btn--pill  btn-brand m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Kelola Sekarang</a>
						</div>
					</div>
					<div class="m-pricing-table-1__item col-lg-4">
						<div class="m-pricing-table-1__visual">
							<div class="m-pricing-table-1__hexagon1"></div>
							<div class="m-pricing-table-1__hexagon2"></div>
							<span class="m-pricing-table-1__icon m--font-brand">
								<i class="fa flaticon-suitcase"></i>
							</span>
						</div>
						<span class="m-pricing-table-1__price">
							{{ $transaksi }}
						</span>
						<h3>Transaksi Peminjaman</h3>
						<div class="m-pricing-table-1__btn">
							<a href="/Peminjaman" class="btn m-btn--pill  btn-brand m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Kelola Sekarang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection