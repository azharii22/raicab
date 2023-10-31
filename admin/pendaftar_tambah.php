<?php
$title = 'pendaftar';
require'functions.php';

if(isset($_POST['btn-simpan'])){
    $nama_lengkap   = $_POST['nama_lengkap'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $no_hp          = $_POST['no_hp'];
    $email          = $_POST['email'];

    $foto  = $_FILES['foto'];
    $namaFile = $_FILES['foto']['name'];
    if ($foto == '' || $_FILES['foto']['tmp_name'] == ''){
        echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'pendaftar_tambah.php';
		</script>
		";
        exit();
    }
    $ekstensiValid = ['jpg','jpeg','png'];
    $ekstensi     = explode('.', $namaFile);
    $ekstensi     = strtolower(end($ekstensi));
    if (!in_array($ekstensi, $ekstensiValid) ) {
        echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
        exit();
    }else {
        $filePath  = uniqid();
        $filePath .= '.';
        $filePath .= $ekstensi;

        move_uploaded_file($_FILES['foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/raicab/assets/img/' . $filePath);

        $foto = $filePath;
    }
    
    $vaksin  = $_FILES['vaksin'];
    $namaFile = $_FILES['vaksin']['name'];
    if ($vaksin == '' || $_FILES['vaksin']['tmp_name'] == ''){
        echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'pendaftar_tambah.php';
		</script>
		";
        exit();
    }
    $ekstensiValid = ['jpg','jpeg','png'];
    $ekstensi     = explode('.', $namaFile);
    $ekstensi     = strtolower(end($ekstensi));
    if (!in_array($ekstensi, $ekstensiValid) ) {
        echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
        exit();
    }else {
        $filePath  = uniqid();
        $filePath .= '.';
        $filePath .= $ekstensi;

        move_uploaded_file($_FILES['vaksin']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/raicab/assets/img/' . $filePath);

        $vaksin = $filePath;
    }

    $asuransi  = $_FILES['asuransi'];
    $namaFile = $_FILES['asuransi']['name'];
    if ($asuransi == '' || $_FILES['asuransi']['tmp_name'] == ''){
        echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'pendaftar_tambah.php';
		</script>
		";
        exit();
    }
    $ekstensiValid = ['jpg','jpeg','png'];
    $ekstensi     = explode('.', $namaFile);
    $ekstensi     = strtolower(end($ekstensi));
    if (!in_array($ekstensi, $ekstensiValid) ) {
        echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
        exit();
    }else {
        $filePath  = uniqid();
        $filePath .= '.';
        $filePath .= $ekstensi;

        move_uploaded_file($_FILES['asuransi']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/raicab/assets/img/' . $filePath);

        $asuransi = $filePath;
    }
    $ket_dokter  = $_FILES['ket_dokter'];
    $namaFile = $_FILES['ket_dokter']['name'];
    if ($ket_dokter == '' || $_FILES['ket_dokter']['tmp_name'] == ''){
        echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'pendaftar_tambah.php';
		</script>
		";
        exit();
    }
    $ekstensiValid = ['jpg','jpeg','png'];
    $ekstensi     = explode('.', $namaFile);
    $ekstensi     = strtolower(end($ekstensi));
    if (!in_array($ekstensi, $ekstensiValid) ) {
        echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
        exit();
    }else {
        $filePath  = uniqid();
        $filePath .= '.';
        $filePath .= $ekstensi;

        move_uploaded_file($_FILES['ket_dokter']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/raicab/assets/img/' . $filePath);

        $ket_dokter = $filePath;
    }
    $kta  = $_FILES['kta'];
    $namaFile = $_FILES['kta']['name'];
    if ($kta == '' || $_FILES['kta']['tmp_name'] == ''){
        echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'pendaftar_tambah.php';
		</script>
		";
        exit();
    }
    $ekstensiValid = ['jpg','jpeg','png'];
    $ekstensi     = explode('.', $namaFile);
    $ekstensi     = strtolower(end($ekstensi));
    if (!in_array($ekstensi, $ekstensiValid) ) {
        echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
        exit();
    }else {
        $filePath  = uniqid();
        $filePath .= '.';
        $filePath .= $ekstensi;

        move_uploaded_file($_FILES['kta']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/raicab/assets/img/' . $filePath);

        $kta = $filePath;
    }
    $biodata  = $_FILES['biodata'];
    $namaFile = $_FILES['biodata']['name'];
    if ($biodata == '' || $_FILES['biodata']['tmp_name'] == ''){
        echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'pendaftar_tambah.php';
		</script>
		";
        exit();
    }
    $ekstensiValid = ['jpg','jpeg','png'];
    $ekstensi     = explode('.', $namaFile);
    $ekstensi     = strtolower(end($ekstensi));
    if (!in_array($ekstensi, $ekstensiValid) ) {
        echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
        exit();
    }else {
        $filePath  = uniqid();
        $filePath .= '.';
        $filePath .= $ekstensi;

        move_uploaded_file($_FILES['biodata']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/raicab/assets/img/' . $filePath);

        $biodata = $filePath;
    }
    $bukti_bayar  = $_FILES['bukti_bayar'];
    $namaFile = $_FILES['bukti_bayar']['name'];
    if ($bukti_bayar == '' || $_FILES['bukti_bayar']['tmp_name'] == ''){
        echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'pendaftar_tambah.php';
		</script>
		";
        exit();
    }
    $ekstensiValid = ['jpg','jpeg','png'];
    $ekstensi     = explode('.', $namaFile);
    $ekstensi     = strtolower(end($ekstensi));
    if (!in_array($ekstensi, $ekstensiValid) ) {
        echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
        exit();
    }else {
        $filePath  = uniqid();
        $filePath .= '.';
        $filePath .= $ekstensi;

        move_uploaded_file($_FILES['bukti_bayar']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/raicab/assets/img/' . $filePath);

        $bukti_bayar = $filePath;
    }

    $query = "INSERT INTO pendaftar (nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, no_hp, email, foto, vaksin, asuransi, ket_dokter, kta,biodata, bukti_bayar) values ('$nama_lengkap','$jenis_kelamin','$tempat_lahir','$tanggal_lahir', '$no_hp', '$email', '$foto', '$vaksin', '$asuransi', '$ket_dokter', '$kta', '$biodata', '$bukti_bayar')";

    // var_dump($query);
    // die;

    $execute = bisa($conn,$query);
    if($execute == 1){
        $success = 'true';
        $title = 'Berhasil';
        $message = 'Berhasil menambahkan data baru';
        $type = 'success';
        header('location: pendaftar.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
    }else{
        echo "Gagal Tambah Data";
    }
}


require'layout_header.php';
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Master Pengguna</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="outlet.php">Pengguna</a></li>
                <li><a href="#">Tambah Pengguna</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                          <a href="javascript:void(0)" onclick="window.history.back();" class="btn btn-primary box-title"><i class="fa fa-arrow-left fa-fw"></i> Kembali</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form enctype="multipart/form-data" method="post" action="">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control">
                </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control">
                </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No Ponsel</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Dokumen Vaksin</label>
                        <input type="file" name="vaksin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Dokumen Asuransi</label>
                        <input type="file" name="asuransi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan Dokter</label>
                        <input type="file" name="ket_dokter" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>KTA</label>
                        <input type="file" name="kta" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Biodata</label>
                        <input type="file" name="biodata" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Bukti Pembayaran</label>
                        <input type="file" name="bukti_bayar" class="form-control">
                    </div>
                <div class="text-right">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" name="btn-simpan" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require'layout_footer.php';
?> 