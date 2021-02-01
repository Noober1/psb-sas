<div class="wrapper bg-light">
    <!-- navbar start -->
	<?=view('templates/navbar')?>
    <!-- navbar end -->
    <div class="content-wrapper pt-4">
    <!-- Content Header (Page header) -->
        
            <!-- /.content-header -->

            <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        
                    <div class="card">
                        <div class="card-body box-profile">

                            <h3 class="profile-username text-center skeleton" id="sidebar-title"></h3>

                            <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b class="skeleton" id="menu-personal-info"></b>
                            </li>
                            <li class="list-group-item">
                                <b class="skeleton" id="menu-registration-proove"></b>
                            </li>
                            </ul>
                            <a href="<?=base_url('Logout')?>" class="btn btn-danger btn-block"><i class="fa fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </div>

                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="callout callout-info">
                                    <h2 id="callout-title" class="skeleton"></h2>
                                    <p id="callout-subtitle" class="skeleton"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {

        const initPage = (data) => {
            var calloutTitle = $('#callout-title'),
            calloutSubtitle = $('#callout-subtitle')
            menuPersonalInfo = $('#menu-personal-info')
            menuRegistrationProove = $('#menu-registration-proove')
            sidebarTitle = $('#sidebar-title');

            const {
                nama_depan,
                nama_belakang
            } = data

            const fullname = nama_depan + ' ' + nama_belakang

            calloutTitle.text(`Selamat datang, ${fullname}`)
            calloutSubtitle.html('Saat ini Anda berhasil login kedalam sistem PPDB, silahkan untuk melengkapi data pribadi Anda pada menu <b>Data Pribadi</b>.<br>Jika sudah melengkapi data pribadi, dipersilahkan untuk mencetak bukti pendaftaran pada menu <b>Cetak bukti pendaftaran</b>')
            sidebarTitle.text(fullname)
            menuPersonalInfo.html('<a href="<?=base_url('Personal')?>">Info Pribadi</a>')
            menuRegistrationProove.html('<a href="<?=base_url('Personal')?>">Cetak Bukti Pendaftaran</a>')
        }

        $.get('<?=getenv('SAS_URL')?>AJAX/PSB_getdata?id=<?= $session_data['reg_id'] ?>', (data, textStatus, jqXHR) => {
            if (data) {
                initPage(data)
            } else {
                window.location.href = '<?= base_url('/Logout')?>';
            }
        })
    });
</script>