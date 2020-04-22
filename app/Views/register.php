<script src="https://www.google.com/recaptcha/api.js?render=<?=getenv('CAPTCHA_KEYS')?>"></script>

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
                        <h1 class="m-0 text-dark"> Pendaftaran Online</h1>
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
                <form id="form-register" class="row">
                    
                    <div class="col-12">
                        <div class="callout callout-info" id="note">
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
                                                <input type="text" value="" class="form-control" id="nisn" name="nisn" placeholder="Terdiri dari 10 digit angka" maxlength="15" data-inputmask='"mask": "9999999999"' data-mask required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fa fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="no-kipkps">No. KIP/KPS</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control" id="no-kipkps" name="no-kipkps" maxlength="14" placeholder="Isi jika memiliki, maksimal 14 karakter" data-inputmask='"mask": "999999999999999"' data-mask>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="no-un">No. Ujian Nasional</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control" id="no-un" name="no-un" maxlength="25" placeholder="Maksimal 25 karakter, contoh: 2-22-22-22-2222-2222-2" data-inputmask='"mask": "9-99-99-99-9999-9999-9"' data-mask>
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
                                            <label for="no-skhun">No. Ijazah</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <input type="text" value="" class="form-control" id="no-skhun" name="no-skhun" maxlength="20" placeholder="Maksimal 20 karakter">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="no-telpon">No. Telpon Siswa (HP)</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control" id="no-telpon" name="no-telpon" placeholder="Terdiri dari 15 digit angka" maxlength="15" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fa fa-asterisk"></i></span>
                                                </div>
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
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nama-belakang">Nama Belakang</label>
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
                                                <select class="form-control select2" name="jenis-kelamin" id="jenis-kelamin"  style="width: calc(100% - 100px);" data-placeholder="Pilih Jenis Kelamin..." required>
                                                    <option value="">Pilih Jenis Kelamin...</option>
                                                    <option value="L">Laki - Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="tempat-lahir">Tempat Lahir</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="tempat-lahir" name="tempat-lahir" maxlength="20" placeholder="Maksimal 20 karakter" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="tanggal-lahir">Tanggal Lahir (Tahun/Bulan/Tanggal)</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid, contoh valid: 1990/12/23 atau pilih dari daftar tanggal yang muncul</span></small>
                                            <div class="input-group mb-3">
                                                <input type="date" value="" class="form-control date" id="tanggal-lahir" name="tanggal-lahir" autocomplete="off" placeholder="Pilih tanggal lahir" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="agama-siswa">Agama</label>
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
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="kewarganegaraan" id="kewarganegaraan"  style="width: calc(100% - 100px);" data-placeholder="Pilih Kewarganegaraan..." required>
                                                    <option value="">Pilih Kewarganegaraan...</option>
                                                    <option value="Indonesia" >WNI</option>
                                                    <option value="Lainnya" >WNA</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
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
                                                <input type="number" value="" min="1" max="99" max-length="2" class="form-control" id="anak-ke" name="anak-ke" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Dari
                                                    </span>
                                                </div>
                                                <input type="number" value="" min="1" max="99" max-length="2" class="form-control" id="anak-dari" name="anak-dari" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">Bersaudara<i class="fa ml-1 fa-asterisk"></i></div>
                                                </div>
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
                                                <input type="number" value="" min="0" max="99" max-length="2" class="form-control" id="saudara-kandung" name="saudara-kandung" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Tiri
                                                    </span>
                                                </div>
                                                <input type="number" value="" min="0" max="99" max-length="2" class="form-control" id="saudara-tiri" name="saudara-tiri" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa ml-1 fa-asterisk"></i></div>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Angkat
                                                    </span>
                                                </div>
                                                <input type="number" value="" min="0" max="99" max-length="2" class="form-control" id="saudara-angkat" name="saudara-angkat" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa ml-1 fa-asterisk"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="status-keluarga">Status Keluarga</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="status-keluarga" id="status-keluarga"  style="width:calc(100% - 200px)" data-placeholder="Pilih Status..." required>
                                                    <option value="">Pilih Status...</option>
                                                    <option value="kandung" >Kandung</option>
                                                    <option value="yatim" >Yatim</option>
                                                    <option value="piatu" >Piatu</option>
                                                    <option value="yatimpiatu" >Yatim Piatu</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-asterisk" style="margin:0px;padding-left:0px"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="bahasa-rumah">Bahasa yang digunakan di rumah</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="bahasa-rumah" name="bahasa-rumah" maxlength="10" placeholder="Maksimal 10 karakter" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-asterisk" style="margin:0px;padding-left:0px"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="pendidikan-terakhir">Pendidikan terakhir</label><small><i class="fa ml-2 mr-2 fa-info-circle"></i>Jika nama sekolah tidak ada, silahkan pilih 'Lainnya...'</small>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small><br>
                                            <div class="input-group">
                                                <select class="form-control flat select2" name="pendidikan-terakhir" id="pendidikan-terakhir" style="width:100px" data-placeholder="Pilih Jenjang..." required>
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
                                                <select class="form-control flat select2" name="asal-sekolah" id="asal-sekolah" data-placeholder="Pilih Sekolah..." style="width:calc(100% - 200px)" required>
                                                    <option value="PAUD" >SMPN 1 Jalancagak</option>
                                                    <option value="TK" >Lainnnya...</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-asterisk" style="margin:0px;padding-left:0px"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="tahun-lulus">Tahun Lulus</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group">
                                                <input type="number" value="" min="1950" max="<?=date('Y')?>>" max-length="4" class="form-control" placeholder="Tahun lulus pendidikan terakhir" id="tahun-lulus" name="tahun-lulus" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-asterisk" style="margin:0px;padding-left:0px"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="callout callout-info" id="note">
                                            <h5 class="mb-0">Alamat</h5>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat">Jalan/kampung/dusun</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" class="form-control text-capitalize" id="alamat" name="alamat" maxlength="40" placeholder="Maksimal 40 karakter, contoh: Jl. Cagak RT. 16 RW. 02" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-provinsi">Provinsi</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                    <select class="form-control select2" name="alamat-provinsi" id="alamat-provinsi"  style="width: calc(100% - 100px);" data-placeholder="Pilih Provinsi..." required>
                                                    <option value="">Pilih Kewarganegaraan...</option>
                                                    <option value="Indonesia" >WNI</option>
                                                    <option value="Lainnya" >WNA</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-kota">Kabupaten/kota</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="alamat-kota" id="alamat-kota"  style="width: calc(100% - 100px);" data-placeholder="Pilih provinsi terlebih dahulu..." required>
                                                    <option value="">Pilih Kewarganegaraan...</option>
                                                    <option value="Indonesia" >WNI</option>
                                                    <option value="Lainnya" >WNA</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-kecamatan">Desa/kecamatan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="alamat-kecamatan" id="alamat-kecamatan"  style="width: calc(100% - 100px);" data-placeholder="Pilih Kota/kabupaten terlebih dahulu..." required>
                                                    <option value="">Pilih Kewarganegaraan...</option>
                                                    <option value="Indonesia" >WNI</option>
                                                    <option value="Lainnya" >WNA</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="alamat-desa">Kampung/desa</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <select class="form-control select2" name="alamat-desa" id="alamat-desa"  style="width: calc(100% - 100px);" data-placeholder="Pilih Desa/kecamatan terlebih dahulu..." required>
                                                    <option value="">Pilih Kewarganegaraan...</option>
                                                    <option value="Indonesia" >WNI</option>
                                                    <option value="Lainnya" >WNA</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="kode-pos">Kode POS</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="number" value="" class="form-control" id="kode-pos" name="kode-pos" maxlength="5" min="10000" max="99999" placeholder="Maksimal 5 karakter" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="callout callout-info" id="note">
                                            <h5 class="mb-0">Identitas tambahan</h5>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Surel/E-Mail</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="email" value="" class="form-control" id="email" name="email" placeholder="Masukan surel/E-Mail siswa, contoh: siswa@gmail.com" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="tinggal-bersama">Tinggal Bersama</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group mb-3">
                                                <input type="text" value="" maxlength="20" class="form-control" id="tinggal-bersama" name="tinggal-bersama" placeholder="Contoh: orang tua/kost/dll" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="tinggi-badan">Tinggi/Berat Badan</label>
                                            <small class="text-danger d-none"><i class="fa mr-2 fa-info-circle"></i><span class="error-dialog">Data invalid</span></small>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Tinggi
                                                    </span>
                                                </div>
                                                <input type="number" value="" min="1" max="999" max-length="3" class="form-control" id="tinggi-badan" name="tinggi-badan">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">CM</div>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Berat
                                                    </span>
                                                </div>
                                                <input type="number" value="" min="1" max="999" max-length="3" class="form-control" id="berat-badan" name="berat-badan">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">KG</div>
                                                </div>
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
                                                <select class="form-control select2" name="golongan-darah" id="golongan-darah"  style="width: 100%;" data-placeholder="Pilih Golongan Darah..">
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
                                                <select class="form-control select2" name="jurusan-pilih" id="jurusan-pilih"  style="width: calc(100% - 100px);" data-placeholder="Pilih jurusan yang diminati.." required>
                                                    <option value="">Pilih jurusan yang diminati..</option>
                                                    <option value="A+" >A+</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light"><i class="fas fa-asterisk"></i></span>
                                                </div>
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
                                        <div class="callout callout-info" id="note">
                                            <h5 class="mb-0">Catatan</h5>
                                            <p>Jika Anda hanya mempunyai informasi tentang wali. Dipersilahkan untuk mengisi identitas wali berdasarkan jenis kelaminnya.</p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="callout callout-info" id="note">
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
                                                <select class="form-control select2" name="pendidikan-ayah" id="pendidikan-ayah"  style="width: calc(100% - 100px);" data-placeholder="Pilih pendidikan terakhir..">
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
                                                <input type="number" value="" min="1" max="9999999999" class="form-control" id="penghasilan-ayah" name="penghasilan-ayah" placeholder="Masukan nominal penghasilan perbulan" maxlength="10">
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
                                        <div class="callout callout-info" id="note">
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
                                                <select class="form-control select2" name="pendidikan-ibu" id="pendidikan-ibu"  style="width: calc(100% - 100px);" data-placeholder="Pilih pendidikan terakhir..">
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
                                                <input type="number" value="" min="1" max="9999999999" class="form-control" id="penghasilan-ibu" name="penghasilan-ibu" placeholder="Masukan nominal penghasilan perbulan" maxlength="10">
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

                                    <div class="col-12">
                                        <button class="btn btn-lg btn-block btn-primary btn-flat" type="submit">Registrasi</button>
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
    $(document).ready(function () {
        

        //-------------- some functions
        (function($) {
            $.fn.field_correction = function() {
                var ini = this;
                var ids = ini.attr('id');
                var count = ini.attr('maxlength');
                var parent = ini.closest('.form-group');
                let label = parent.find('label');
                let error_dialog = parent.find('small');
                var nilai = ini.val();

                var emailValid = function(ini) {
                    var value = ini.val();
                    if (ini.attr('type')=='email') {
                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return re.test(String(value).toLowerCase());
                    } else {
                        return true;
                    }
                };

                var isValid = (nilai!=="" && emailValid(ini));
                
                if (isValid) {
                    ini.addClass('is-valid').removeClass('is-invalid');
                    error_dialog.removeClass('d-block');
                } else {
                    ini.addClass('is-invalid').removeClass('is-valid');
                    error_dialog.addClass('d-block');
                }
            }
        }(jQuery));
        //-------------- set main variables
        var required_fields = $('.form-control[required]');
        var fields = $('.form-control');
        var form = $('form#form-register');

        //-------------- some scripts?
        fields.each(function (index, element) {
            var ini = $(this);
            var kueh = $.cookie(ini.attr('id'));
            if (kueh!==null) {
                ini.val(kueh).trigger('change');
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

        form.on('submit',function (event) {
            event.preventDefault();
            var data = form.serialize();
            grecaptcha.ready(function() {
                grecaptcha.execute('<?=getenv('CAPTCHA_KEYS')?>', {action:'validate_captcha'}).then(function(token) {
                    data += '&token='+token;
                }).then(function (param) {
                    $.post('<?=base_url('Home/registering')?>', data,
                        function (data, textStatus, jqXHR) {
                            console.log(data);
                        }
                    );
                });
            });
        })

        //--------------- basic initialization scripts
        $('.select2').select2();
        $('.date').datepicker({
            autoclose: true,
            format:'yyyy-mm-dd'
		});
    });
</script>
<style>
    span.select2-selection {
        height: 39px!important;
    }
</style>