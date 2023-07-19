<?php
require '../../vendor/autoload.php';
require '../../config/conn.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'NAMA LENGKAP');
$sheet->setCellValue('C1', 'ALAMAT');
$sheet->setCellValue('D1', 'KONTAK');
$sheet->setCellValue('E1', 'GAMBAR');
$data = mysqli_query($conn, "SELECT * FROM vendor");
$i = 2;
$no = 1;
while ($d = mysqli_fetch_array($data)) {
  $sheet->setCellValue('A' . $i, $no++);
  $sheet->setCellValue('B' . $i, $d['nama']);
  $sheet->setCellValue('C' . $i, $d['alamat']);
  $sheet->setCellValue('D' . $i, $d['kontak']);
  $sheet->setCellValue('E' . $i, $d['gambar']);
  $i++;
}
$fileName = 'Data Vendor_' . date('YmdHis') . '.xlsx';
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $fileName . '"');
header('Cache-Control: max-age=0');
$objWriter = new Xlsx($spreadsheet);;
$objWriter->save('php://output');

// $writer = new Xlsx($spreadsheet);
// $filePath = '../Inventory/dummy/' . $fileName;
// $writer->save('php://output');
// $filename = 'REPORT DEPOSIT.xlsx';
// // // $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
// echo '<script>
//   const downloadLink = document.createElement("a");
//   downloadLink.href = "' . $filePath . '";
//   downloadLink.download = "' . $fileName . '";
//   document.body.appendChild(downloadLink);
//   downloadLink.click();
//   document.body.removeChild(downloadLink);
//   window.location.href = "../Inventory/index.php?nav=master";
// </script>';
/* 
const downloadLink = document.createElement("a"); - Ini adalah langkah pertama dalam membuat elemen <a> baru yang akan digunakan sebagai tautan pengunduhan.

downloadLink.href = "' . $filePath . '"; - Di sini, kita mengatur atribut href dari elemen <a> untuk menentukan lokasi file Excel yang akan diunduh. Variabel $filePath berisi path file Excel yang telah disimpan sebelumnya.

downloadLink.download = "Data karyawan.xlsx"; - Langkah ini mengatur atribut download dari elemen <a> yang akan menentukan nama file saat diunduh. Dalam contoh ini, nama file yang diunduh adalah "Data karyawan.xlsx".

document.body.appendChild(downloadLink); - Di sini, kita menambahkan elemen <a> yang telah dibuat ke dalam elemen body dokumen.

downloadLink.click(); - Ini adalah cara untuk memicu klik pada elemen <a>, yang akan memulai proses pengunduhan file.

document.body.removeChild(downloadLink); - Setelah selesai mengunduh file, kita menghapus elemen <a> yang telah digunakan dari body dokumen.

window.location.href = "../Inventory/index.php?nav=master"; - Langkah terakhir ini mengarahkan kembali ke halaman tujuan yang diinginkan. Dalam contoh ini, halaman tujuan adalah "../Inventory/index.php?nav=master".
*/
