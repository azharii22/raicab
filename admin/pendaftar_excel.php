<?php
include('functions.php');
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\WorkSheet\Drawing;

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
$sheet->getColumnDimension('J')->setWidth(30);
$sheet->setCellValue('J1', 'Foto');
$sheet->getColumnDimension('K')->setWidth(30);
$sheet->setCellValue('K1', 'Vaksin');
$sheet->getColumnDimension('L')->setWidth(30);
$sheet->setCellValue('L1', 'Asuransi');
$sheet->getColumnDimension('M')->setWidth(30);
$sheet->setCellValue('M1', 'Keterangan Dokter');
$sheet->getColumnDimension('N')->setWidth(30);
$sheet->setCellValue('N1', 'KTA');
$sheet->getColumnDimension('O')->setWidth(30);
$sheet->setCellValue('O1', 'Bio Data');
$sheet->getColumnDimension('P')->setWidth(30);
$sheet->setCellValue('P1', 'Bukti Bayar');

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

    // Check if the image file exists in the specified folder
    $imagePath = '/raicab/assets/img/' . $d['foto'];
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
        // Create the Drawing object
        $drawing = new Drawing();
        $drawing->setName('Foto');
        $drawing->setDescription('Foto');
        $drawing->setPath($_SERVER['DOCUMENT_ROOT'] . $imagePath); // Full server path to the image

        // Load the image to get its dimensions
        list($imageWidth, $imageHeight, $imageType) = getimagesize($drawing->getPath());

        // Set the maximum width and height for the image
        $maxWidth = 100; // Change this to your desired maximum width
        $maxHeight = 100; // Change this to your desired maximum height

        // Calculate new dimensions while maintaining aspect ratio
        $ratio = min($maxWidth / $imageWidth, $maxHeight / $imageHeight);
        $newWidth = $imageWidth * $ratio;
        $newHeight = $imageHeight * $ratio;

        // Set the width and height of the column and row to match the resized image dimensions
        $sheet->getColumnDimension('J')->setWidth($newWidth / 7); // Adjust the division factor as needed
        $sheet->getRowDimension($i)->setRowHeight($newHeight);

        // Set the image properties
        $drawing->setWidth($newWidth);
        $drawing->setHeight($newHeight);
        $drawing->setCoordinates('J' . $i); // Column J for the image
        $drawing->setOffsetX(5);
        $drawing->setOffsetY(5);
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
    }

    $imagePath = '/raicab/assets/img/' . $d['vaksin'];
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
        // Create the Drawing object
        $drawing = new Drawing();
        $drawing->setName('vaksin');
        $drawing->setDescription('vaksin');
        $drawing->setPath($_SERVER['DOCUMENT_ROOT'] . $imagePath); // Full server path to the image

        // Load the image to get its dimensions
        list($imageWidth, $imageHeight, $imageType) = getimagesize($drawing->getPath());

        // Set the maximum width and height for the image
        $maxWidth = 100; // Change this to your desired maximum width
        $maxHeight = 100; // Change this to your desired maximum height

        // Calculate new dimensions while maintaining aspect ratio
        $ratio = min($maxWidth / $imageWidth, $maxHeight / $imageHeight);
        $newWidth = $imageWidth * $ratio;
        $newHeight = $imageHeight * $ratio;

        // Set the width and height of the column and row to match the resized image dimensions
        $sheet->getColumnDimension('K')->setWidth($newWidth / 7); // Adjust the division factor as needed
        $sheet->getRowDimension($i)->setRowHeight($newHeight);

        // Set the image properties
        $drawing->setWidth($newWidth);
        $drawing->setHeight($newHeight);
        $drawing->setCoordinates('K' . $i); // Column K for the image
        $drawing->setOffsetX(5);
        $drawing->setOffsetY(5);
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
    }

    $imagePath = '/raicab/assets/img/' . $d['asuransi'];
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
        // Create the Drawing object
        $drawing = new Drawing();
        $drawing->setName('Asuransi');
        $drawing->setDescription('Asuransi');
        $drawing->setPath($_SERVER['DOCUMENT_ROOT'] . $imagePath); // Full server path to the image

        // Load the image to get its dimensions
        list($imageWidth, $imageHeight, $imageType) = getimagesize($drawing->getPath());

        // Set the maximum width and height for the image
        $maxWidth = 100; // Change this to your desired maximum width
        $maxHeight = 100; // Change this to your desired maximum height

        // Calculate new dimensions while maintaining aspect ratio
        $ratio = min($maxWidth / $imageWidth, $maxHeight / $imageHeight);
        $newWidth = $imageWidth * $ratio;
        $newHeight = $imageHeight * $ratio;

        // Set the width and height of the column and row to match the resized image dimensions
        $sheet->getColumnDimension('L')->setWidth($newWidth / 7); // Adjust the division factor as needed
        $sheet->getRowDimension($i)->setRowHeight($newHeight);

        // Set the image properties
        $drawing->setWidth($newWidth);
        $drawing->setHeight($newHeight);
        $drawing->setCoordinates('L' . $i); // Column L for the image
        $drawing->setOffsetX(5);
        $drawing->setOffsetY(5);
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
    }

    $imagePath = '/raicab/assets/img/' . $d['ket_dokter'];
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
        // Create the Drawing object
        $drawing = new Drawing();
        $drawing->setName('Keterangan Dokter');
        $drawing->setDescription('Keterangan Dokter');
        $drawing->setPath($_SERVER['DOCUMENT_ROOT'] . $imagePath); // Full server path to the image

        // Load the image to get its dimensions
        list($imageWidth, $imageHeight, $imageType) = getimagesize($drawing->getPath());

        // Set the maximum width and height for the image
        $maxWidth = 100; // Change this to your desired maximum width
        $maxHeight = 100; // Change this to your desired maximum height

        // Calculate new dimensions while maintaining aspect ratio
        $ratio = min($maxWidth / $imageWidth, $maxHeight / $imageHeight);
        $newWidth = $imageWidth * $ratio;
        $newHeight = $imageHeight * $ratio;

        // Set the width and height of the column and row to match the resized image dimensions
        $sheet->getColumnDimension('M')->setWidth($newWidth / 7); // Adjust the division factor as needed
        $sheet->getRowDimension($i)->setRowHeight($newHeight);

        // Set the image properties
        $drawing->setWidth($newWidth);
        $drawing->setHeight($newHeight);
        $drawing->setCoordinates('M' . $i); // Column M for the image
        $drawing->setOffsetX(5);
        $drawing->setOffsetY(5);
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
    }

    $imagePath = '/raicab/assets/img/' . $d['kta'];
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
        // Create the Drawing object
        $drawing = new Drawing();
        $drawing->setName('KTA');
        $drawing->setDescription('KTA');
        $drawing->setPath($_SERVER['DOCUMENT_ROOT'] . $imagePath); // Full server path to the image

        // Load the image to get its dimensions
        list($imageWidth, $imageHeight, $imageType) = getimagesize($drawing->getPath());

        // Set the maximum width and height for the image
        $maxWidth = 100; // Change this to your desired maximum width
        $maxHeight = 100; // Change this to your desired maximum height

        // Calculate new dimensions while maintaining aspect ratio
        $ratio = min($maxWidth / $imageWidth, $maxHeight / $imageHeight);
        $newWidth = $imageWidth * $ratio;
        $newHeight = $imageHeight * $ratio;

        // Set the width and height of the column and row to match the resized image dimensions
        $sheet->getColumnDimension('N')->setWidth($newWidth / 7); // Adjust the division factor as needed
        $sheet->getRowDimension($i)->setRowHeight($newHeight);

        // Set the image properties
        $drawing->setWidth($newWidth);
        $drawing->setHeight($newHeight);
        $drawing->setCoordinates('N' . $i); // Column N for the image
        $drawing->setOffsetX(5);
        $drawing->setOffsetY(5);
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
    }

    $imagePath = '/raicab/assets/img/' . $d['biodata'];
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
        // Create the Drawing object
        $drawing = new Drawing();
        $drawing->setName('Biodata');
        $drawing->setDescription('Biodata');
        $drawing->setPath($_SERVER['DOCUMENT_ROOT'] . $imagePath); // Full server path to the image

        // Load the image to get its dimensions
        list($imageWidth, $imageHeight, $imageType) = getimagesize($drawing->getPath());

        // Set the maximum width and height for the image
        $maxWidth = 100; // Change this to your desired maximum width
        $maxHeight = 100; // Change this to your desired maximum height

        // Calculate new dimensions while maintaining aspect ratio
        $ratio = min($maxWidth / $imageWidth, $maxHeight / $imageHeight);
        $newWidth = $imageWidth * $ratio;
        $newHeight = $imageHeight * $ratio;

        // Set the width and height of the column and row to match the resized image dimensions
        $sheet->getColumnDimension('O')->setWidth($newWidth / 7); // Adjust the division factor as needed
        $sheet->getRowDimension($i)->setRowHeight($newHeight);

        // Set the image properties
        $drawing->setWidth($newWidth);
        $drawing->setHeight($newHeight);
        $drawing->setCoordinates('O' . $i); // Column O for the image
        $drawing->setOffsetX(5);
        $drawing->setOffsetY(5);
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
    }

    $imagePath = '/raicab/assets/img/' . $d['bukti_bayar'];
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
        // Create the Drawing object
        $drawing = new Drawing();
        $drawing->setName('Bukti Bayar');
        $drawing->setDescription('Bukti Bayar');
        $drawing->setPath($_SERVER['DOCUMENT_ROOT'] . $imagePath); // Full server path to the image

        // Load the image to get its dimensions
        list($imageWidth, $imageHeight, $imageType) = getimagesize($drawing->getPath());

        // Set the maximum width and height for the image
        $maxWidth = 100; // Change this to your desired maximum width
        $maxHeight = 100; // Change this to your desired maximum height

        // Calculate new dimensions while maintaining aspect ratio
        $ratio = min($maxWidth / $imageWidth, $maxHeight / $imageHeight);
        $newWidth = $imageWidth * $ratio;
        $newHeight = $imageHeight * $ratio;

        // Set the width and height of the column and row to match the resized image dimensions
        $sheet->getColumnDimension('P')->setWidth($newWidth / 7); // Adjust the division factor as needed
        $sheet->getRowDimension($i)->setRowHeight($newHeight);

        // Set the image properties
        $drawing->setWidth($newWidth);
        $drawing->setHeight($newHeight);
        $drawing->setCoordinates('P' . $i); // Column P for the image
        $drawing->setOffsetX(5);
        $drawing->setOffsetY(5);
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
    }

    $i++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('Data Pendaftar.xlsx');
echo "<script>window.location = 'Data Pendaftar.xlsx'</script>";

?>