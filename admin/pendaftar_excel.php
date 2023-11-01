<?php
include('functions.php');
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();





$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Kwarran');
$sheet->getColumnDimension('C')->setWidth(15);
$sheet->setCellValue('C1', 'Nama Lengkap');
$sheet->getColumnDimension('D')->setWidth(15);
$sheet->setCellValue('D1', 'Jenis Kelamin');
$sheet->getColumnDimension('E')->setWidth(15);
$sheet->setCellValue('E1', 'Kategori');
$sheet->getColumnDimension('F')->setWidth(15);
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->getColumnDimension('G')->setWidth(15);
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->getColumnDimension('H')->setWidth(15);
$sheet->setCellValue('H1', 'No HP');
$sheet->getColumnDimension('I')->setWidth(30);
$sheet->setCellValue('I1', 'Email');

$data = mysqli_query($conn,"SELECT pendaftar.*, user.nama_user FROM pendaftar
LEFT JOIN user ON pendaftar.user_id = user.id_user");
$i = 2;
$no = 1;
while($d = mysqli_fetch_array($data))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $d['nama_user']);
    $sheet->setCellValue('C'.$i, $d['nama_lengkap']);
    $sheet->setCellValue('D'.$i, $d['jenis_kelamin']);
    $sheet->setCellValue('E'.$i, $d['kategori']);
    $sheet->setCellValue('F'.$i, $d['tempat_lahir']);
    $sheet->setCellValue('G'.$i, $d['tanggal_lahir']);
    $sheet->setCellValue('H'.$i, $d['no_hp']);
    $sheet->setCellValue('I'.$i, $d['email']);
    $i++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('Data Pendaftar.xlsx');
echo "<script>window.location = 'Data Pendaftar.xlsx'</script>";

?>