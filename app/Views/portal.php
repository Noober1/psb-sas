<style>
.bg-bangunan::after {
	content: "";
	background-image: url(https://smkbintarjalancagak.sch.id/wp-content/uploads/2019/09/BANGUNAN1.jpg);
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	opacity: 0.5;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	position: absolute;
	z-index: -1;
}
.bg-bangunan.opacity-up::after {
	opacity: 0.3;
}
#menu {
	background-color:#343a406b!important;
}
#menu:hover {
	background-color:#343a40!important;
}
#menu .nav-item.active{
	background-color:#ffffff3b;
}
.transition-3s{
	-moz-transition: .3s ease-in-out;
	-webkit-transition: .3s ease-in-out;
	-o-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover-mt-3:hover {
	margin-top:1.5rem!important
}
.delay-1 {
	animation-delay: 1s;
}
</style>

<nav class="navbar fixed-top navbar-expand-lg d-lg-block d-md-block d-sm-block d-xs-block d-none navbar-dark transition-3s" id="menu">
	<ul class="navbar-nav d-inline-block">
		<li data-menuanchor="home" class="nav-item btn btn-dark d-none d-sm-inline-block mr-3 active">
			<a href="#home" class="nav-link p-0"><i class="fa fa-home mr-2"></i>Home</a>
		</li>
		<li data-menuanchor="infoPage" class="nav-item btn btn-dark d-none d-sm-inline-block mr-3">
			<a href="#infoPage" class="nav-link p-0"><i class="fa fa-info mr-2"></i>Informasi</a>
		</li>
		<li data-menuanchor="termPage" class="nav-item btn btn-dark d-none d-sm-inline-block mr-3">
			<a href="#termPage" class="nav-link p-0"><i class="fa fa-book-open mr-2"></i>Persyaratan</a>
		</li>
		<li data-menuanchor="registerPage" class="nav-item btn btn-dark d-none d-sm-inline-block mr-3">
			<a href="#registerPage" class="nav-link p-0"><i class="fa fa-pen mr-2"></i>Daftar</a>
		</li>
		<li class="nav-item btn btn-dark d-none d-sm-inline-block mr-3">
			<a href="javascript:void()" class="btn-login nav-link p-0"><i class="fa fa-door-open mr-2"></i>Login</a>
		</li>
	</ul>
</nav>

<div id="pagepiling">
	<div class="section bg-dark bg-bangunan">
		<div class="container-fluid" style="padding-left:0px!important;padding-right:0px!important">
			<div id="home-wrapper" class="container animated bounceInDown delay-1" data-wow-duration="1s" data-wow-delay="1.3s">
				<div class="row text-center">
					<div class="col-12 mt-4 mb-4">
						<div class="d-lg-block d-md-block d-sm-none d-none">
							<h1 class="display-3 text-bold" style="font-size:5vw">Selamat datang</h1>
							<h3 class="display-4 text-bold">Selamat datang di situs Pendaftaran Siswa Baru (PSB)<br><strong><?=getenv('SCHOOL_NAME')?></strong> tahun ajaran <strong><?=date('Y')?></strong>.<br></h3>
						</div>
						<div class="d-lg-none d-md-none d-sm-block d-block">
							<h5 class="display-4 text-bold" style="font-size:10vw">Selamat datang</h5>
							<h3 style="font-size:3.5vw">Selamat datang di situs Pendaftaran Siswa Baru (PSB)<br><strong><?=getenv('SCHOOL_NAME')?></strong> tahun ajaran <strong><?=date('Y')?></strong>.<br></h3>
						</div>
						<h5>Silahkan memilih menu di bawah ini untuk memulai</h5>
					</div>
					<div class="col-12">
						<a href="#infoPage" class="btn btn-light btn-lg mr-1 ml-1 mb-2"><i class="fa mr-2 fa-info"></i> Informasi</a>
						<a href="#termPage" class="btn bg-info btn-lg mr-1 ml-1 mb-2"><i class="fa mr-2 fa-book-open"></i> Persyaratan</a>
						<button id="btn-cs" class="btn bg-purple btn-lg mr-1 ml-1 mb-2"><i class="fa mr-2 fa-id-card"></i> Contact Person</button>
					</div>
					<div class="col-12 mt-3">
						<h3>SCROLL / SWIPE</h3>
						<i class="fa fa-angle-double-down display-4 transition-3s hover-mt-3"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section bg-light text-center">
		<div class="row">
			<div class="col-lg-6">
				informasi
			</div>
			<div class="col-lg-6">
				informasi
			</div>
		</div>
	</div>
	<div class="section bg-yellow text-center">
		<div class="row">
			<div class="col-12">
				persyaratan
			</div>
		</div>
	</div>
	<div class="section bg-light bg-bangunan opacity-up text-center">
		<div id="register-page" class="container animated slideInUp">
			<div class="row">
				<div class="col-12 mt-5 mb-4">
					<h5>Sudah membaca informasi dan persyaratan?</h5>
					<h5>Silahkan untuk mendaftar atau login jika ingin melihat informasi pendaftaran yang telah Anda lakukan</h5>
				</div>
				<div class="col 12">
					<a href="<?=base_url('Register')?>" class="btn btn-primary btn-lg mr-1 ml-1 mb-2"><i class="fa mr-2 fa-pen"></i> Pendaftaran Daring</a>
					<a href="javascript:void(0)" class="btn btn-login btn-success btn-lg mr-1 ml-1 mb-2"><i class="fa mr-2 fa-door-open"></i> Log-In</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="sr-only" id="modal-data">
	<div id="cs">
		<p>Jika Anda mempunyai saran, kritik maupun pertanyaan, Anda dapat menghubungi Contact Person yang ada di bawah ini.</p>
		<button class="btn btn-block bg-gradient-success mr-1 ml-1 mb-2"><i class="fab mr-3 fa-whatsapp"></i><?=getenv('CONTACT_PERSON')?></button>
		<a href="<?=getenv('FP_LINK')?>" class="btn btn-block bg-gradient-primary mr-1 ml-1 mb-2"><i class="fab mr-3 fa-facebook"></i><?=getenv('FP_NAME')?></a>
		<a href="mailto:<?=getenv('EMAIL')?>" class="btn btn-block bg-gradient-primary mr-1 ml-1 mb-2"><i class="fa mr-3 fa-at"></i><?=getenv('EMAIL')?></a>
	</div>
	<div id="login">
		<div class="row">
			<div class="col-12 mb-3 mt-2">
				Silahkan untuk login menggunakan <strong>Nomor pendaftaran</strong> dan <strong>E-Mail</strong> yang sudah Anda daftarkan sebelumnya
			</div>
			<div class="col-12">
				<div class="input-group mb-3">
					<input type="email" class="form-control" placeholder="Email">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-at"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Nomor Peserta">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-id-card"></span>
						</div>
					</div>
				</div>
				<div class="input-group">
					<button class="btn btn-primary btn-block"><i class="fa fa-key mr-1"></i>Login</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$('#pagepiling').pagepiling({
			direction:'vertical',
			anchors: ['home', 'infoPage', 'termPage', 'registerPage'],
			menu: '#menu',
			navigation: {
				'textColor': '#fff',
				'bulletsColor': '#fff',
				'position': 'right',
				'tooltips': ['<kbd>Selamat datang!</kbd>', '<kbd>Informasi</kbd>', '<kbd>Persyaratan</kbd>', '<kbd>Pendaftaran</kbd>']
			},
			afterLoad: function(anchorLink, index){
				if(index == 1){
					$('#home-wrapper').attr('class','container-fluid animated bounceInDown');
				}
				if (index == 4) {
					$('#register-page').attr('class','container animated slideInDown faster');
				}
			},
			onLeave: function(anchorLink, index){
				if(index == 1){
					$('#home-wrapper').attr('class','container-fluid animated bounceOutUp');
				}
				if (index == 4) {
					$('#register-page').attr('class','container animated bounceOutUp');
				}
			}
		});
		var modal_settings = {
			title: '',
			html: '',
			showClass: {
				popup: 'animated bounceInUp faster'
			},
			hideClass: {
				popup: 'animated bounceOutDown faster'
			}
		}
		//applying overlay scrollbar to main page
		$("body").overlayScrollbars({
			className : "os-theme-dark",
			overflowBehavior : {
				x : "hidden",
				y : "scroll"
			}
		});

		//initializing WOW
		// new WOW().init();

		//show pop-up
		$('#btn-cs').on('click',function () {
			modal_settings.title = 'Contact Person';
			modal_settings.html = $('#cs').html();
			Swal.fire(modal_settings);
		});

		$('.btn-login').on('click',function () {
			var set = modal_settings;
			set.allowOutsideClick = false;
			set.showConfirmButton = false;
			set.showCloseButton = true;
			set.title = 'Login peserta';
			set.html = $('#login').html();
			Swal.fire(set);
		});
		
	});
</script>