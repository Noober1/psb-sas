<style>
::-webkit-scrollbar {
    width: 0px;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
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
					<a href="#cs" id="btn-cs" class="btn bg-purple btn-lg mr-1 ml-1 mb-2"><i class="fa mr-3 fa-id-card"></i> Contact Person</a>
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

<div id="cs">
	<div class="close-animatedModal text-center"> 
		<i class="fa fa-times"></i>
	</div>
		
	<div class="modal-content mr-2 ml-2" style="box-shadow: 0 0 0 !important;border: none;">
		cdcdc
	</div>
</div>

<script>
	$(document).ready(function () {

		//applying overlay scrollbar to main page
		$("body").overlayScrollbars({ className : "os-theme-dark" });

		//initializing WOW
		new WOW().init();

		//show pop-up
		$("#btn-cs").animatedModal({
			animatedIn: 'lightSpeedOut',
			animatedIn: 'lightSpeedIn',
			color:'#FFF',
		});
	});
</script>