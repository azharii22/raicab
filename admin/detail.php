<?php
$title = 'pendaftar';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM pendaftar';
$data = ambildata($conn,$query);
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Master Pendaftar</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Pendaftar</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
            <div class="row">
            </div>
            <div class="table-responsive">
                <table class="table table-bordered thead-dark" id="table">
                    <thead class="thead-dark">
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nomor Ponsel</th>
                            <th>Email</th>
                            <th>Foto</th>
                            <th>Dokumen Vaksin</th>
                            <th>Dokumen Asuransi</th>
                            <th>Keterangan Dokter</th>
                            <th>KTA</th>
                            <th>Biodata</th>
                            <th>Bukti Pembayaran</th>            
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($data)) {
                            foreach($data as $pendaftar): ?>
                                <tr>
                                    <td></td>
                                    <td><?= $pendaftar['nama_lengkap'] ?></td>
                                    <td><?= $pendaftar['jenis_kelamin'] ?></td>
                                    <td><?= $pendaftar['tempat_lahir'] ?></td>
                                    <td><?= $pendaftar['tanggal_lahir'] ?></td>
                                    <td><?= $pendaftar['no_hp'] ?></td>
                                    <td><?= $pendaftar['email'] ?></td>
                                    <td class="text-center">
                                      <a href="#" data-toggle="modal" data-target="#modalFoto<?= $pendaftar['id_pendaftar']; ?>" title="Lihat Foto" class="btn btn-info"><i class="fa fa-image"></i></a>
                                    </td>
                                    <td class="text-center">
                                      <a href="#" data-toggle="modal" data-target="#modalVaksin<?= $pendaftar['id_pendaftar']; ?>" title="Lihat Foto" class="btn btn-info"><i class="fa fa-image"></i></a>
                                    </td>
                                    <td class="text-center">
                                      <a href="#" data-toggle="modal" data-target="#modalAsuransi<?= $pendaftar['id_pendaftar']; ?>" title="Lihat Foto" class="btn btn-info"><i class="fa fa-image"></i></a>
                                    </td>
                                    <td class="text-center">
                                      <a href="#" data-toggle="modal" data-target="#modalKetDokter<?= $pendaftar['id_pendaftar']; ?>" title="Lihat Foto" class="btn btn-info"><i class="fa fa-image"></i></a>
                                    </td>
                                    <td class="text-center">
                                      <a href="#" data-toggle="modal" data-target="#modalKTA<?= $pendaftar['id_pendaftar']; ?>" title="Lihat Foto" class="btn btn-info"><i class="fa fa-image"></i></a>
                                    </td>
                                    <td class="text-center">
                                      <a href="#" data-toggle="modal" data-target="#modalBiodata<?= $pendaftar['id_pendaftar']; ?>" title="Lihat Foto" class="btn btn-info"><i class="fa fa-image"></i></a>
                                    </td>
                                    <td class="text-center">
                                      <a href="#" data-toggle="modal" data-target="#modalBayar<?= $pendaftar['id_pendaftar']; ?>" title="Lihat Foto" class="btn btn-info"><i class="fa fa-image"></i></a>
                                    </td>
                                    <td align="center">
                                    </td>
                                </tr>

                                <!-- Modal untuk menampilkan gambar -->
                                <div class="modal fade" id="modalVaksin<?= $pendaftar['id_pendaftar']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">Dokumen Vaksin <?= $pendaftar['nama_lengkap']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="<?= './../assets/img/' . $pendaftar['vaksin'] ?>" width="500" height="500" style="margin-top: 10px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="modalAsuransi<?= $pendaftar['id_pendaftar']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelAsuransi<?= $pendaftar['id_pendaftar']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modalLabelAsuransi<?= $pendaftar['id_pendaftar']; ?>">Dokumen Asuransi <?= $pendaftar['nama_lengkap']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="<?= './../assets/img/' . $pendaftar['asuransi'] ?>" width="500" height="500" style="margin-top: 10px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="modalKetDokter<?= $pendaftar['id_pendaftar']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">Keterangan Dokter <?= $pendaftar['nama_lengkap']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="<?= './../assets/img/' . $pendaftar['ket_dokter'] ?>" width="500" height="500" style="margin-top: 10px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="modalKTA<?= $pendaftar['id_pendaftar']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">KTA <?= $pendaftar['nama_lengkap']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="<?= './../assets/img/' . $pendaftar['kta'] ?>" width="500" height="500" style="margin-top: 10px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="modalBiodata<?= $pendaftar['id_pendaftar']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">Biodata<?= $pendaftar['nama_lengkap']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="<?= './../assets/img/' . $pendaftar['biodata'] ?>" width="500" height="500" style="margin-top: 10px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="modalBayar<?= $pendaftar['id_pendaftar']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modalLabelVaksin<?= $pendaftar['id_pendaftar']; ?>">Bukti Pembayaran <?= $pendaftar['nama_lengkap']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="<?= './../assets/img/' . $pendaftar['bukti_bayar'] ?>" width="500" height="500" style="margin-top: 10px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tambahkan modal lain untuk komponen lainnya sesuai kebutuhan -->
                                <!-- Misalnya, modalKetDokter, modalKTA, modalBiodata, dan modalBayar -->

                                <!-- Modal untuk menampilkan gambar foto -->
                                <div class="modal fade" id="modalFoto<?= $pendaftar['id_pendaftar']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelFoto<?= $pendaftar['id_pendaftar']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modalLabelFoto<?= $pendaftar['id_pendaftar']; ?>">Foto <?= $pendaftar['nama_lengkap']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="<?= './../assets/img/' . $pendaftar['foto'] ?>" width="500" height="500" style="margin-top: 10px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- table -->
<!-- ============================================================== -->
<div class="row">

</div>
</div>
<?php
require 'layout_footer.php';
?>

