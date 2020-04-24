<style>
body {
	background-image: url(https://smkbintarjalancagak.sch.id/wp-content/uploads/2019/09/BANGUNAN1.jpg);
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>

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
					<a href="javascript:void(0);" id="btn-cs" class="btn bg-purple btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-id-card"></i> Contact Person</a>
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

<div class="sr-only" id="modal-data">
	<div id="cs">
		<p>Jika Anda mempunyai saran, kritik maupun pertanyaan, Anda dapat menghubungi Contact Person <?=getenv('SCHOOL_NAME')?> yang ada di bawah ini.</p>
		<button class="btn btn-block bg-gradient-success btn-lg mr-1 ml-1 mb-2"><i class="fab mr-3 fa-whatsapp"></i><?=getenv('CONTACT_PERSON')?></button>
		<a href="<?=getenv('FP_LINK')?>" class="btn btn-block bg-gradient-primary btn-lg mr-1 ml-1 mb-2"><i class="fab mr-3 fa-facebook"></i><?=getenv('FP_NAME')?></a>
		<a href="mailto:<?=getenv('EMAIL')?>" class="btn btn-block bg-gradient-primary btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-at"></i><?=getenv('EMAIL')?></a>
	</div>
	<div id="terms">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid placeat reiciendis ipsa culpa provident molestiae, possimus magni veniam accusantium eveniet unde animi repellat odit commodi enim reprehenderit, soluta fuga vitae.
	</div>
	<div id="info">
		persyaratan?
	</div>
</div>

<script>
	$(document).ready(function () {

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
		$("body").overlayScrollbars({ className : "os-theme-dark" });

		//initializing WOW
		new WOW().init();

		//show pop-up
		$('#btn-cs').on('click',function () {
			modal_settings.title = 'Contact Person';
			modal_settings.html = $('#cs').html();
			Swal.fire(modal_settings);
		});

		$('#btn-terms').on('click',function () {
			modal_settings.title = 'Persyaratan dan ketentuan';
			modal_settings.html = $('#terms').html();
			modal_settings.width = 'calc(100vw - 6rem)';
			Swal.fire(modal_settings);
		});
		$('#btn-info').on('click',function () {
			modal_settings.title = 'Informasi pendaftaran';
			modal_settings.html = $('#info').html();
			Swal.fire(modal_settings);
		});
		
	});
</script>