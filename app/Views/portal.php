<style>
::-webkit-scrollbar {
    width: 0px;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
.spinner {
	position: fixed;
	top:0px;
	left: 0px;
	width:100%;
	height: 100%;
	z-index: 999;
}
</style>

<div class="spinner bg-dark">&nbsp;</div>

<div class="wrapper bg-dark" style="background-color:#343a406b!important;">

	<!-- navbar start -->
	<?=view('templates/navbar',array('isPortal'=>true))?>
	<!-- navbar end -->

	<div class="container-fluid" style="padding-left:0px!important;padding-right:0px!important">
		<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="padding-top:10vw;">
			<div class="row text-center">
				<div class="col-12 mt-4 mb-4">
					<h1 class="display-3 text-bold">Selamat datang</h1>
					<h3>Selamat datang di situs Pendaftaran Siswa Baru (PSB) <strong><?=getenv('SCHOOL_NAME')?></strong>.<br>Silahkan memilih menu di bawah ini untuk memulai</h3>
				</div>
				<div class="col-12">
					<button id="btn-info" class="btn btn-light btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-info"></i> Informasi</button>
					<button id="btn-terms" class="btn bg-info btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-book-open"></i> Persyaratan</button>
					<button id="btn-cs" class="btn bg-purple btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-id-card"></i> Contact Person</button>
				</div>
				<div class="col-12 mt-5 mb-4">
					<p>Sudah membaca informasi dan persyaratan?<br>Silahkan untuk mendaftar atau login jika ingin melihat informasi pendaftaran yang telah Anda lakukan</p>
				</div>
				<div class="col 12">
					<a href="<?=base_url('Register')?>" class="btn btn-primary btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-pen"></i> Pendaftaran Daring</a>
					<a href="<?=base_url('login')?>" class="btn btn-success btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-door-open"></i> Log-In</a>
				</div>
			</div>
		</div>
	</div>

</div><!-- end wrapper -->

<div class="sr-only" id="popup-content">
	<div id="informasi">
		test
	</div>
	<div id="terms">
		<p>Persyaratan</p>
	</div>
	<div id="cs">
		<p>Jika Anda mempunyai saran, kritik maupun pertanyaan, Anda dapat menghubungi Contact Person <?=getenv('SCHOOL_NAME')?> yang ada di bawah ini.</p>
		<button class="btn btn-block bg-gradient-success btn-lg mr-1 ml-1 mb-2"><i class="fab mr-3 fa-whatsapp"></i><?=getenv('CONTACT_PERSON')?></button>
		<a href="<?=getenv('FP_LINK')?>" class="btn btn-block bg-gradient-primary btn-lg mr-1 ml-1 mb-2"><i class="fab mr-3 fa-facebook"></i><?=getenv('FP_NAME')?></a>
		<a href="mailto:<?=getenv('EMAIL')?>" class="btn btn-block bg-gradient-primary btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-at"></i><?=getenv('EMAIL')?></a>
	</div>
</div>

<script>
	$(document).ready(function () {

		$('.spinner').fadeOut();
		const btnInfo = $('#btn-info');
		const btnTerms = $('#btn-terms');
		const btnCS = $('#btn-cs');

		//applying overlay scrollbar to main page
		$("body").overlayScrollbars({ className : "os-theme-dark" });

		//initializing WOW
		new WOW().init();

		//show information pop-up
		btnInfo.click(function (param) {
			var content = $('#popup-content #informasi').html();
			Swal.fire({
				title: '<strong>Informasi Pendaftaran Siswa Baru</strong>',
				html:content,
				width:'90vw',
				showCloseButton: true,
				showCancelButton: false,
				allowOutsideClick: false,
				showClass: {
					popup: 'animated bounceInUp'
				},
				hideClass: {
					popup: 'animated bounceOutDown'
				},
				confirmButtonText:
					'<i class="fa fa-times"></i> Tutup',
				confirmButtonAriaLabel: 'Tutup informasi',
			})
		})

		//show information pop-up
		btnTerms.click(function (param) {
			var content = $('#popup-content #terms').html();
			Swal.fire({
				title: '<strong>Persyaratan</strong>',
				html:content,
				showCloseButton: true,
				width:'90vw',
				showCancelButton: false,
				allowOutsideClick: false,
				showClass: {
					popup: 'animated bounceInUp'
				},
				hideClass: {
					popup: 'animated bounceOutDown'
				},
				confirmButtonText:
					'<i class="fa fa-times"></i> Tutup',
				confirmButtonAriaLabel: 'Tutup Persyaratan',
			})
		})

		//show information pop-up
		btnCS.click(function (param) {
			var content = $('#popup-content #cs').html();
			Swal.fire({
				title: '<strong>Contact Person</strong>',
				html:content,
				showCloseButton: true,
				showCancelButton: false,
				allowOutsideClick: false,
				showClass: {
					popup: 'animated bounceInUp'
				},
				hideClass: {
					popup: 'animated bounceOutDown'
				},
				confirmButtonText:
					'<i class="fa fa-times"></i> Tutup',
				confirmButtonAriaLabel: 'Tutup Contact Person',
			})
		})
	});
</script>