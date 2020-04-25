<?php
if (getenv('CAPTCHA_ENABLE')==="Y") {?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?=getenv('CAPTCHA_KEYS')?>"></script>
<?php }?>

<div class="wrapper bg-light">
    <!-- navbar start -->
	<?=view('templates/navbar')?>
    <!-- navbar end -->
    <div class="content-wrapper" style="min-height: 819.297px;">
    <!-- Content Header (Page header) -->
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
            <!-- /.content-header -->

            <!-- Main content -->
        <div class="content">
            <div class="container">
                <form action="<?=base_url('Home/registering')?>" id="form-register" role="form" class="row">
                    
                    <div class="col-12">
                        <div class="callout callout-info elevation-1" id="note">
                            <h5>Catatan</h5>
                            <p>Silahkan untuk mengisi formulir di bawah ini. Kolom isian yang disampingnya terdapat <kbd> tanda '<i class="fa fa-asterisk"></i>' wajib diisi</kbd>. Anda dapat mengosongkannya jika ada kolom isian yang tidak diketahui dan/atau tidak terdapat tanda '<i class="fa fa-asterisk"></i>'</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="mb-0">Nomor Identitas Siswa</h4>
                            </div>
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
                                            <label for="no-kipkps">No. KIP/KPS</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control is-required" id="no-kipkps" name="no-kipkps" maxlength="14" placeholder="Isi jika memiliki, maksimal 14 karakter" data-inputmask='"mask": "999999999999999"'>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="no-un">No. Ujian Nasional</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control" id="no-un" name="no-un" maxlength="25" placeholder="Maksimal 25 karakter, contoh: 2-22-22-22-2222-2222-2" data-inputmask='"mask": "9-99-99-99-9999-9999-9"'>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="no-ijazah">No. Ijazah</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control" id="no-ijazah" name="no-ijazah" maxlength="20" placeholder="Maksimal 20 karakter">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="no-skhun">No. Surat Keterangan Hasil Ujian Nasional</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control" id="no-skhun" name="no-skhun" maxlength="20" placeholder="Maksimal 20 karakter">
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
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="mb-0">Identitas Dasar Siswa</h4>
                            </div>
                            <div class="card-body">

                                <div class="row">
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
                                            <label for="nama-belakang">Nama Tengah dan Belakang</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control text-capitalize" id="nama-belakang" name="nama-belakang" maxlength="30" placeholder="Maksimal 30 karakter">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nama-panggilan">Nama Panggilan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control text-capitalize" id="nama-panggilan" name="nama-panggilan" maxlength="10" placeholder="Maksimal 10 karakter">
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
                                            <label for="agama-siswa">Agama <i class="fa fa-asterisk"></i></label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="agama-siswa" id="agama-siswa"  style="width:calc(100% - 70px);" data-placeholder="Pilih Agama..." required>
                                                    <option value="">Pilih Agama...</option>
                                                    <option value="islam" >Islam</option>
                                                    <option value="kristen" >Kristen</option>
                                                    <option value="katolik" >Katolik</option>
                                                    <option value="hindu"> Hindu</option>
                                                    <option value="budha" >Budha</option>
                                                    <option value="konghuchu" >Konghuchu</option>
                                                    <option value="lainnya" >Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="kewarganegaraan">Kewarganegaraan <i class="fa fa-asterisk"></i></label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2-nosearch" name="kewarganegaraan" id="kewarganegaraan"   data-placeholder="Pilih Kewarganegaraan..." required>
                                                    <option value="">Pilih Kewarganegaraan...</option>
                                                    <option value="Indonesia" >WNI</option>
                                                    <option value="Lainnya" >WNA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="anak-ke">Urutan kelahiran</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Anak Ke
                                                    </span>
                                                </div>
                                                <input type="text" value="" data-min="1" data-max="99" max-length="2" class="form-control inputmask num-validator" data-inputmask='"mask": "99"' id="anak-ke" name="anak-ke" required placeholder="Anak ke">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Dari
                                                    </span>
                                                </div>
                                                <input type="text" value="" data-min="1" data-max="99" max-length="2" class="form-control inputmask num-validator" data-inputmask='"mask": "99"' id="anak-dari" name="anak-dari" placeholder="Anak dari" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="saudara-kandung">Jumlah Saudara</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Kandung
                                                    </span>
                                                </div>
                                                <input type="text" value="" data-min="0" data-max="99" max-length="2" class="form-control inputmask num-validator" data-inputmask='"mask": "99"' id="saudara-kandung" name="saudara-kandung" placeholder="Kandung" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Tiri
                                                    </span>
                                                </div>
                                                <input type="text" value="" data-min="0" data-max="99" max-length="2" class="form-control inputmask num-validator" data-inputmask='"mask": "99"' id="saudara-tiri" name="saudara-tiri" placeholder="Tiri" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Angkat
                                                    </span>
                                                </div>
                                                <input type="text" value="" data-min="0" data-max="99" max-length="2" class="form-control inputmask num-validator" data-inputmask='"mask": "99"' id="saudara-angkat" placeholder="Angkat" name="saudara-angkat" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="status-keluarga">Status Keluarga <i class="fa fa-asterisk"></i></label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="status-keluarga" id="status-keluarga"  style="width:calc(100% - 200px)" data-placeholder="Pilih Status..." required>
                                                    <option value="">Pilih Status...</option>
                                                    <option value="kandung" >Kandung</option>
                                                    <option value="yatim" >Yatim</option>
                                                    <option value="piatu" >Piatu</option>
                                                    <option value="yatimpiatu" >Yatim Piatu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="bahasa-rumah">Bahasa yang digunakan di rumah</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="bahasa-rumah" name="bahasa-rumah" maxlength="10" placeholder="Maksimal 10 karakter" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="pendidikan-terakhir">Pendidikan terakhir <i class="fa fa-asterisk"></i></label><small><i class="fa ml-2 mr-2 fa-info-circle"></i>Jika nama sekolah tidak ada, silahkan pilih 'Lainnya...'</small>
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
                                                <select class="form-control flat select2" name="asal-sekolah" id="asal-sekolah" data-ids="sekolah" data-placeholder="Pilih Sekolah..." style="width:calc(100% - 200px)" required>
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

                                    <div class="col-12">
                                        <div class="callout callout-info elevation-1" id="note">
                                            <h5 class="mb-0">Alamat</h5>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat">Jalan/kampung/dusun</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="alamat" name="alamat" maxlength="40" placeholder="Maksimal 40 karakter, contoh: Jl. Cagak RT. 16 RW. 02" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-provinsi">Provinsi</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                    <select class="form-control select2" name="alamat-provinsi" id="alamat-provinsi" data-ids="province_id"  data-placeholder="Pilih Provinsi..." required>
                                                    <option value="" selected>Pilih Provinsi...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-kota">Kabupaten/kota</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="alamat-kota" id="alamat-kota" data-ids="regency_id"  data-placeholder="Pilih provinsi terlebih dahulu..." required disabled>
                                                    <option value="" selected>Pilih provinsi terlebih dahulu...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-kecamatan">Desa/kecamatan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="alamat-kecamatan" id="alamat-kecamatan" data-ids="district_id"  data-placeholder="Pilih Kota/kabupaten terlebih dahulu..." required disabled>
                                                    <option value="" selected>Pilih Kota/kabupaten terlebih dahulu...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-desa">Kampung/desa</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="alamat-desa" id="alamat-desa" data-ids="village_id"  data-placeholder="Pilih Desa/kecamatan terlebih dahulu..." required disabled>
                                                <option value="" selected>Pilih Desa/kecamatan terlebih dahulu...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="kode-pos">Kode POS</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control inputmask num-validator" data-min="5" data-max="5" id="kode-pos" name="kode-pos" maxlength="5" data-inputmask="'mask': '99999'" placeholder="Maksimal 5 karakter" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="callout callout-info elevation-1" id="note">
                                            <h5 class="mb-0">Identitas tambahan</h5>
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

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="tinggal-bersama">Tinggal Bersama</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" maxlength="20" class="form-control text-capitalize" id="tinggal-bersama" name="tinggal-bersama" placeholder="Contoh: orang tua/kost/dll" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="tinggi-badan">Tinggi/Berat Badan (CM/KG)</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Tinggi
                                                    </span>
                                                </div>
                                                <input type="number" value="" min="1" max="999" max-length="3" class="form-control" id="tinggi-badan" name="tinggi-badan">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Berat
                                                    </span>
                                                </div>
                                                <input type="number" value="" min="1" max="999" max-length="3" class="form-control" id="berat-badan" name="berat-badan">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="jarak-sekolah">Jarak ke sekolah</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="number" min="1" max="9999" maxlength="4" value="" class="form-control" id="jarak-sekolah" name="jarak-sekolah" placeholder="Jarak tempuh dari rumah/tempat tinggal ke sekolah (satuan kilometer)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light">Kilometer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="golongan-darah">Golongan darah</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2-nosearch" name="golongan-darah" id="golongan-darah"  style="width: 100%;" data-placeholder="Pilih Golongan Darah..">
                                                    <option value="">Pilih Golongan Darah..</option>
                                                    <option value="A+" >A+</option>
                                                    <option value="A-" >A-</option>
                                                    <option value="B+" >B+</option>
                                                    <option value="B-" >B-</option>
                                                    <option value="O+" >O+</option>
                                                    <option value="O-" >O-</option>
                                                    <option value="AB+" >AB+</option>
                                                    <option value="AB-" >AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="penyakit-berat">Penyakit berat yang pernah diderita</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control" id="penyakit-berat" name="penyakit-berat" maxlength="45" placeholder="Penyakit berat yang pernah diderita...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="penyakit-kambuhan">Penyakit kambuhan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control" id="penyakit-kambuhan" name="penyakit-kambuhan" maxlength="45" placeholder="Penyakit yang di derita yang dapat kambuh...">
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
                    </div>

                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="mb-0">Identitas Orang Tua/Wali</h4>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12">
                                        <div class="callout callout-info elevation-1" id="note">
                                            <h5 class="mb-0">Catatan</h5>
                                            <p>Jika Anda hanya mempunyai informasi tentang wali. Dipersilahkan untuk mengisi identitas wali berdasarkan jenis kelaminnya.</p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="callout callout-info elevation-1" id="note">
                                            <h5 class="mb-0">Identitas Ayah/Wali Laki - Laki</h5>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nama-ayah">Nama Lengkap</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="nama-ayah" name="nama-ayah" placeholder="Maksimal 50 karakter" maxlength="50">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="ttl-ayah">Tempat, tanggal lahir</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="ttl-ayah" name="ttl-ayah" placeholder="Maksimal 30 karakter" maxlength="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="kewarganegaraan-ayah">Kewarganegaraan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="kewarganegaraan-ayah" name="kewarganegaraan-ayah" placeholder="Maksimal 30 karakter" maxlength="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="pendidikan-ayah">Pendidikan terakhir</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="pendidikan-ayah" id="pendidikan-ayah" data-placeholder="Pilih pendidikan terakhir..">
                                                    <option value="">Pilih Pendidikan Terakhir...</option>
                                                    <option value="PAUD" >PAUD</option>
                                                    <option value="TK" >TK</option>
                                                    <option value="SD" >SD</option>
                                                    <option value="MI" >MI</option>
                                                    <option value="SMP" >SMP</option>
                                                    <option value="MTS" >MTS</option>
                                                    <option value="SMK" >SMK</option>
                                                    <option value="SMA" >SMA</option>
                                                    <option value="MA" >MA</option>
                                                    <option value="D1" >D1</option>
                                                    <option value="D2" >D2</option>
                                                    <option value="D3" >D3</option>
                                                    <option value="S1" >S1</option>
                                                    <option value="S2" >S2</option>
                                                    <option value="S3" >S3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="pekerjaan-ayah">Pekerjaan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="pekerjaan-ayah" name="pekerjaan-ayah" placeholder="Maksimal 20 karakter" maxlength="20">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="penghasilan-ayah">Penghasilan perbulan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control inputmask is-currency text-left" id="penghasilan-ayah" name="penghasilan-ayah" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digitsOptional': false,'digits':'2', 'prefix': 'Rp. ', 'placeholder': '0','max':'999999999','reverse':true,'clearMaskOnLostFocus': 'true'" placeholder="Masukan nominal penghasilan perbulan" maxlength="20">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-ayah">Alamat Lengkap</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="alamat-ayah" name="alamat-ayah" placeholder="Maksimal 75 karakter" maxlength="75">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="callout callout-info elevation-1" id="note">
                                            <h5 class="mb-0">Identitas Ibu/Wali Perempuan</h5>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nama-ibu">Nama Lengkap</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="nama-ibu" name="nama-ibu" placeholder="Maksimal 50 karakter" maxlength="50">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="ttl-ibu">Tempat, tanggal lahir</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="ttl-ibu" name="ttl-ibu" placeholder="Maksimal 30 karakter" maxlength="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="kewarganegaraan-ibu">Kewarganegaraan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="kewarganegaraan-ibu" name="kewarganegaraan-ibu" placeholder="Maksimal 30 karakter" maxlength="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="pendidikan-ibu">Pendidikan terakhir</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="pendidikan-ibu" id="pendidikan-ibu"   data-placeholder="Pilih pendidikan terakhir..">
                                                    <option value="">Pilih Pendidikan Terakhir...</option>
                                                    <option value="PAUD" >PAUD</option>
                                                    <option value="TK" >TK</option>
                                                    <option value="SD" >SD</option>
                                                    <option value="MI" >MI</option>
                                                    <option value="SMP" >SMP</option>
                                                    <option value="MTS" >MTS</option>
                                                    <option value="SMK" >SMK</option>
                                                    <option value="SMA" >SMA</option>
                                                    <option value="MA" >MA</option>
                                                    <option value="D1" >D1</option>
                                                    <option value="D2" >D2</option>
                                                    <option value="D3" >D3</option>
                                                    <option value="S1" >S1</option>
                                                    <option value="S2" >S2</option>
                                                    <option value="S3" >S3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="pekerjaan-ibu">Pekerjaan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="pekerjaan-ibu" name="pekerjaan-ibu" placeholder="Maksimal 20 karakter" maxlength="20">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="penghasilan-ibu">Penghasilan perbulan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control inputmask is-currency text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digitsOptional': false,'digits':'2', 'prefix': 'Rp. ', 'placeholder': '0','max':'999999999','reverse':true" id="penghasilan-ibu" name="penghasilan-ibu" placeholder="Masukan nominal penghasilan perbulan" maxlength="20">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-ibu">Alamat Lengkap</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="alamat-ibu" name="alamat-ibu" placeholder="Maksimal 75 karakter" maxlength="75">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-lg btn-block btn-primary btn-flat" id="btn-submit"><i class="fa fa-sign-in-alt mr-2"></i>Registrasi</button>
                                        <button class="sr-only" type="submit"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- /.content -->
    </div>
</div>
<script>

    const base_url = function (path='') {
        return '<?=base_url()?>'+path;
    }
    //-------------- set main variables
    var required_fields = $('.form-control[required]');
    var fields = $('.form-control');
    var form = $('form#form-register');
    var field_provinces = $('#alamat-provinsi');
    var field_regencies = $('#alamat-kota');
    var field_districts = $('#alamat-kecamatan');
    var field_villages = $('#alamat-desa');
    var btn_submit = form.find('button#btn-submit');
    const btn_submit_label = btn_submit.html();
    var address_ids = {    
        province_id : field_provinces.val(),
        regency_id : field_regencies.val(),
        district_id : field_districts.val(),
        village_id : field_villages.val(),
    }

    $(document).ready(function () {
        
        $('.inputmask').inputmask({
            placeholder: ''
        });

        //-------------- some functions
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

        //-------------- some scripts?
        $("body").overlayScrollbars({ className : "os-theme-dark" });

        //get kueh
        fields.each(function (index, element) {
            var ini = $(this);
            var kueh = $.cookie(ini.attr('id'));
            var address = ini.attr('data-ids');
            if (kueh!==null) {
                if (address !== undefined && address!=='') {
                    if (ini.hasClass('is-currency')) {
                        kueh = kueh.replace('Rp. ','').replace(',','');
                        kueh = kueh.substring(0, kueh.length-3);
                    }
                    ini.find('option').val(kueh).html('Terpilih');
                    ini.trigger('change').removeAttr('disabled');
                } else {
                    ini.val(kueh).trigger('change');
                }
            }
        }).on('keyup',function (param) {
            $.cookie($(this).attr('id'), $(this).val());
        }).on('change',function (param) {
            $.cookie($(this).attr('id'), $(this).val());
        });

        required_fields.on('keyup',function (param) {
            $(this).field_correction();
        }).on('focus',function (param) {
            $(this).field_correction();
        }).on('change',function (param) {
            $(this).field_correction();
        });


        btn_submit.on('click',function (event) {
            var ini = $(this);
            ini.html('<i class="fa fa-spinner mr-2 fa-spin"></i>Memproses...').attr('disabled','disabled');
            var btn_submit_label_changeable = ini.html();
            var isValid = true;
            required_fields.each(function (i, e) {
                var itu = $(this);
                if (!itu.field_correction()) {
                    itu.focus();
                    isValid = false;
                }
                if (i >= required_fields.length-1) {
                    if (!isValid) {
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
                    } else {
                        form.find('button[type="submit"]').trigger('click');
                    }
                };
            })
            ini.html(btn_submit_label).removeAttr('disabled');
        })

        form.on('submit',function (event) {
            event.preventDefault();
            var data = form.serializeArray();
            $.each(data, function (i,field) {
                var currency = ['penghasilan-ibu','penghasilan-ayah'];
                if ($.inArray(field.name, currency) !== -1) {
                    var val = data[i].value;
                    val = val.replace('Rp. ','').replace(',','');
                    val = val.substr(0,val.length-3);
                    data[i].value = val;
                }
            });
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
                            window.location.href = base_url();
                            clear_kueh();
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
                    btn_submit.removeAttr('disabled').html(btn_submit_label);
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

        switch_address(field_provinces,field_regencies);
        switch_address(field_regencies,field_districts);
        switch_address(field_districts,field_villages);

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

        field_provinces.select2({
            ajax: {
                url: '<?=getenv('SAS_URL')?>AJAX/Address_provinces',
                dataType: 'json',
                delay: 450
            }
        })
        
        field_provinces.on('change',function () {
            field_regencies.select2('destroy');
            field_regencies.select2({
                ajax: {
                    url: '<?=getenv('SAS_URL')?>AJAX/Address_regencies',
                    data: function (param) {
                        var send = {
                            id: address_ids['province_id'],
                            q: param.term
                        }
                        return send;
                    },
                    delay: 450,
                    dataType: 'json'
                }
            })
        });

        field_regencies.on('change',function () {
            field_districts.select2('destroy');
            field_districts.select2({
                ajax: {
                    url: '<?=getenv('SAS_URL')?>AJAX/Address_districts',
                    data: function (param) {
                        var send = {
                            id: address_ids['regency_id'],
                            q: param.term
                        }
                        return send;
                    },
                    delay: 450,
                    dataType: 'json'
                }
            })
        });

        field_districts.on('change',function () {
            field_villages.select2({
                ajax: {
                    url: '<?=getenv('SAS_URL')?>AJAX/Address_villages',
                    data: function (param) {
                        var send = {
                            id: address_ids['district_id'],
                            q: param.term
                        }
                        return send;
                    },
                    delay: 450,
                    dataType: 'json'
                }
            })
        });

        $('.date').datepicker({
            autoclose: true,
            format:'yyyy-mm-dd'
		});
    });
    function switch_address(parent,child) {
        parent.on('change',function () {
            if (parent.val()!=null) {
                child.removeAttr('disabled');
                child.val('').trigger('change');
                if (parent.attr('data-ids')!=null) {
                    address_ids[parent.attr('data-ids')] = parent.val();
                }
            }
        })
    }

    function clear_kueh() {
        fields.each(function (index, element) {
            var ini = $(this);
            $.removeCookie(ini.attr('id'));
        });
    }
</script>
<style>
    span.select2-selection {
        height: 39px!important;
    }
    .form-control[required] {
        padding-right: 2.25rem;
        background-image: url("data:image/svg+xml,%3Csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='asterisk' class='svg-inline--fa fa-asterisk fa-w-16' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='currentColor' d='M478.21 334.093L336 256l142.21-78.093c11.795-6.477 15.961-21.384 9.232-33.037l-19.48-33.741c-6.728-11.653-21.72-15.499-33.227-8.523L296 186.718l3.475-162.204C299.763 11.061 288.937 0 275.48 0h-38.96c-13.456 0-24.283 11.061-23.994 24.514L216 186.718 77.265 102.607c-11.506-6.976-26.499-3.13-33.227 8.523l-19.48 33.741c-6.728 11.653-2.562 26.56 9.233 33.037L176 256 33.79 334.093c-11.795 6.477-15.961 21.384-9.232 33.037l19.48 33.741c6.728 11.653 21.721 15.499 33.227 8.523L216 325.282l-3.475 162.204C212.237 500.939 223.064 512 236.52 512h38.961c13.456 0 24.283-11.061 23.995-24.514L296 325.282l138.735 84.111c11.506 6.976 26.499 3.13 33.227-8.523l19.48-33.741c6.728-11.653 2.563-26.559-9.232-33.036z'%3E%3C/path%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center right calc(.375em + .1875rem);
        background-size: calc(.75em + .375rem) calc(.75em + .375rem);
    }
</style>