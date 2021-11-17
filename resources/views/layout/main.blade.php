<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		@yield('title')
		<meta name="description" content="Initialized with local json data">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
			});
		</script>
		    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
			<link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
			<link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
	</head>

	<body
		class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="#" class="m-brand__logo-wrapper">
										<img src="{{asset('assets/img/header.png')}}" alt="" width="170px">
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block ">
										<span></span>
									</a>
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="{{asset('https://undiksha.ac.id/wp-content/uploads/2016/10/cropped-new-Logo-Undiksha.png')}}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

	<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		data-menu-vertical="true"
		data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
		>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item " aria-haspopup="true" >
								<a  href="/" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-squares-2"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Dashboard
											</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item" aria-haspopup="true" >
								<a  href="{{route('TampilDataPeminjaman')}}" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-suitcase"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Data Peminjaman Buku
											</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true" >
								<a  href="{{route('TampilDataMahasiswa')}}" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-user-ok"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Data Mahasiswa
											</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true" >
								<a  href="{{route('TampilDataBuku')}}" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-book"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Data Buku
											</span>
										</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			@yield('content')
			</div>
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								{{ date("Y")}} &copy; Created by
								<a href="#" class="m-link" data-toggle="modal" data-target="#m_modal_1">
									Arpin, Medhi, Aden, Zaeni
								</a>
							</span>
						</div>
					</div>
				</div>
			</footer>
		</div>

        <!-- Modal -->
        <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Nama Kelompok
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>I Gede Anggie Suardika Arpin 1915091008</p>
                        <p>Zaeni Abdul Majid 			1915091044</p>
                        <p>Made Medhi Premana Kertiyasa 1915091047</p>
                        <p>I Made Ary Dhana Iswara 		1915091042</p>
                    </div>
                </div>
            </div>
        </div>

		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		@yield('js')
		<script src="../../../js/main.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="../../../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<script src="../../../assets/demo/default/custom/components/datatables/base/data-local.js" type="text/javascript"></script>
	</body>
</html>