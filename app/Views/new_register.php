<?php
if (getenv('CAPTCHA_ENABLE')==="Y") {?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?=getenv('CAPTCHA_KEYS')?>"></script>
<?php }?>
<div class="wrapper">
    <div class="content-wrapper">

        <?=view('templates/navbar')?>

        <div class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Pendaftaran Online</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6 text-right">
                        <a href="<?=base_url()?>" class="btn btn-danger"><i class="fa fa-times"></i> Batalkan</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="content">
            <form action="<?=base_url('Home/registering')?>" class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="callout callout-info">
                            <h5>Catatan</h5>
                            <p>Silahkan untuk mengisi formulir di bawah ini.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nisn">No. Induk Siswa Nasional (NISN)</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group mb-3">
                                        <input type="text" value="" class="form-control inputmask is-required" id="nisn" name="nisn" placeholder="Terdiri dari 10 digit angka" maxlength="10" data-inputmask='"mask": "9999999999"' required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="no-telpon">No. Telpon Siswa (HP)</label><small><i class="fa ml-2 mr-2 fa-info-circle"></i>Tanpa menggunakan kode negara (+62)</small>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group mb-3">
                                        <input type="text" value="" class="form-control inputmask num-validator" data-min="13" data-max="15" id="no-telpon" name="no-telpon" data-inputmask="'mask': '9999 9999 9999'" placeholder="Terdiri dari 15 digit angka" maxlength="15" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nama-depan">Nama Depan</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group mb-3">
                                        <input type="text" value="" class="form-control text-capitalize" id="nama-depan" name="nama-depan" placeholder="Maksimal 20 karakter" maxlength="20" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nama-belakang">Nama Tengah dan Belakang (Optional)</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <input type="text" value="" class="form-control text-capitalize" id="nama-belakang" name="nama-belakang" maxlength="30" placeholder="Maksimal 30 karakter">
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="jenis-kelamin">Jenis Kelamin</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group mb-3">
                                        <select class="form-control select2-nosearch" name="jenis-kelamin" id="jenis-kelamin"   data-placeholder="Pilih Jenis Kelamin..." required>
                                            <option value="">Pilih Jenis Kelamin...</option>
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tempat-lahir">Tempat Lahir</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group mb-3">
                                        <input type="text" value="" class="form-control text-capitalize is-required" id="tempat-lahir" name="tempat-lahir" maxlength="20" placeholder="Maksimal 20 karakter" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tanggal-lahir">Tanggal Lahir</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group mb-3">
                                        <input type="date" value="" class="form-control date" id="tanggal-lahir" name="tanggal-lahir" autocomplete="off" placeholder="Pilih tanggal lahir" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="pendidikan-terakhir">Pendidikan terakhir</label><small><i class="fa ml-2 mr-2 fa-info-circle"></i>Jika nama sekolah tidak ada, silahkan pilih 'Lainnya...'</small>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group">
                                        <select class="form-control flat select2" name="pendidikan-terakhir" data-ids="" id="pendidikan-terakhir" data-placeholder="Pilih Jenjang..." required>
                                            <option value="" selected>Jenjang...</option>
                                            <option value="PAUD" >PAUD</option>
                                            <option value="TK" >TK</option>
                                            <option value="SD" >SD</option>
                                            <option value="MI" >MI</option>
                                            <option value="SMP" >SMP</option>
                                            <option value="MTS" >MTS</option>
                                            <option value="SMK" >SMK</option>
                                            <option value="SMA" >SMA</option>
                                            <option value="MA" >MA</option>
                                        </select>
                                        <select class="form-control flat" name="asal-sekolah" id="asal-sekolah" data-ids="sekolah" data-placeholder="Pilih Sekolah..." style="width:calc(100% - 200px)" required>
                                            <option value="" selected>Pilih Sekolah...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tahun-lulus">Tahun Lulus</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group">
                                        <input type="text" value="" data-min="4" data-max="4" max-length="2" class="form-control inputmask num-validator" data-inputmask='"mask": "9999"'  placeholder="Tahun lulus pendidikan terakhir" id="tahun-lulus" name="tahun-lulus" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Surel/E-Mail</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group mb-3">
                                        <input type="email" value="" class="form-control" id="email" name="email" placeholder="Masukan surel/E-Mail siswa, contoh: siswa@gmail.com" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="jurusan-pilih">Jurusan yang dipilih</label>
                                    <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="jurusan-pilih" id="jurusan-pilih" data-ids="jurusan"  data-placeholder="Pilih jurusan yang diminati.." required>
                                            <option value="" selected>Pilih jurusan yang diminati..</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="btn btn-primary btn-lg btn-block btn-flat" id="btn-submit" style="cursor:pointer"><i class="fa fa-pen mr-2"></i>Daftar</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    var required_fields = $('.form-control[required]');
    var form = $('form');
    var btn_submit = $('#btn-submit');
    (function($) {
        $.fn.field_correction = function() {
            var ini = this;
            var ids = ini.attr('id');
            var count = ini.attr('maxlength');
            var parent = ini.closest('.form-group');
            let label = parent.find('label');
            let error_dialog = parent.find('small.text-danger');
            var nilai = ini.val();

            var numValidator = function () {
                if (ini.hasClass('num-validator')) {
                    var p = ini.val().length;
                    var min = ini.attr('data-min');
                    var max = ini.attr('data-max');
                    return p>=min&&p<=max ? true : false;
                } else {
                    return true;
                }
            }

            var emailValid = function(ini) {
                if (ini.attr('type')=='email') {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(String(ini.val()).toLowerCase());
                } else {
                    return true;
                }
            };

            var isValid = (nilai!=="" && emailValid(ini) && numValidator());
            
            if (isValid) {
                ini.addClass('is-valid').removeClass('is-invalid');
                error_dialog.removeClass('d-block');
                return true;
            } else {
                ini.addClass('is-invalid').removeClass('is-valid');
                error_dialog.addClass('d-block');
                return false;
            }
        }
    }(jQuery));

    btn_submit.on('click',function () {
        var isValid = true;
        $('.form-control[required]').each(function (i, e) {
            var itu = $(this);
            if (!itu.field_correction()) {
                itu.focus();
                isValid = false;
            }
            if (i >= $('.form-control[required]').length-1) {
                if (isValid) {
                    form.trigger('submit');
                } else {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'error',
                        title: 'Masih ada data yang tidak valid'
                    })
                }
            };
        })
    })

    form.on('submit',function (event) {
        event.preventDefault();
        var data = form.serializeArray();
        var submit_form = function (data) {
            $.post(form.attr('action'), data, function (data, textStatus, jqXHR) {
                var showCancel = true;
                var iconType='error';
                var html='<h2>Registrasi gagal</h2><p>Silahkan periksa error di bawah ini</p>';
                if (data.success) {
                    if (data.response.success) {
                        var iconType = 'success';
                        var html = '<h2>Registrasi berhasil.</h2><p>Anda berhasil melakukan pendaftaran, Anda akan di arahkan menuju halaman utama...</p>';
                        var showCancel = false;
                        setTimeout(() => {
                            window.location.href = base_url('?trigger-login=on');
                        }, 1500);
                    } else {
                        for (let index = 0; index < data.response.errors.length; index++) {
                            html += '<h4 class="bg-dark text-light">'+data.response.errors[index]+'</h4>';
                        }
                        html += '<p>Silahkan untuk menutup dialog ini dan perbaiki. Setelah itu dipersilahkan untuk mencoba kembali</p>';
                    }
                } else {
                    html += '<h4 class="bg-dark text-light">Boob Beep Bee Boop?</h4>';
                }
                Swal.fire({
                    icon: iconType,
                    html: html,
                    showCloseButton: false,
                    showCancelButton: showCancel,
                    showConfirmButton:false,
                    cancelButtonText:'<i class="fa fa-times"></i> Kembali',
                    cancelButtonAriaLabel: 'Tutup',
                })
            },"JSON");
        }
        if (typeof grecaptcha !== 'undefined') {
            grecaptcha.ready(function() {
                grecaptcha.execute('<?=getenv('CAPTCHA_KEYS')?>', {action:'validate_captcha'}).then(function(token) {
                    data.push({name: 'token', value: token});
                }).then(function (param) {
                    submit_form(data);
                });
            });
        } else {
            submit_form(data);
        }
    })

    $('.select2').select2();
    $('.select2-nosearch').select2({
        minimumResultsForSearch: -1
    });
    $('#asal-sekolah').select2({
        ajax: {
            url: '<?=getenv('SAS_URL')?>AJAX/PSB_getsekolah',
            dataType: 'json',
            delay: 450
        }
    });

    $('#jurusan-pilih').select2({
        ajax: {
            url: '<?=getenv('SAS_URL')?>AJAX/PSB_getjurusan',
            dataType: 'json',
            delay: 450
        },
        minimumResultsForSearch: -1
    });

    $('.date').datepicker({
        autoclose: true,
        format:'yyyy-mm-dd'
    });

    required_fields.on('keyup',function (param) {
        $(this).field_correction();
    }).on('focus',function (param) {
        $(this).field_correction();
    }).on('change',function (param) {
        $(this).field_correction();
    });



    $('.inputmask').inputmask({
        placeholder: ''
    });

});
</script>