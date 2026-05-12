<?php
// SET ZONA WAKTU KE INDONESIA (WITA)
date_default_timezone_set('Asia/Makassar');
// Mengambil data hari saat ini (format 'l' untuk nama hari lengkap)
$hari_inggris = date('l');
// Mengambil data tanggal, bulan (angka), dan tahun
$tanggal = date('d');
$bulan_angka = date('m');
$tahun = date('Y');

// Struktur Switch untuk menerjemahkan hari ke Bahasa Indonesia
switch ($hari_inggris) {
    case 'Sunday':    $hari_indo = "Minggu"; break;
    case 'Monday':    $hari_indo = "Senin";  break;
    case 'Tuesday':   $hari_indo = "Selasa"; break;
    case 'Wednesday': $hari_indo = "Rabu";   break;
    case 'Thursday':  $hari_indo = "Kamis";  break;
    case 'Friday':    $hari_indo = "Jumat";  break;
    case 'Saturday':  $hari_indo = "Sabtu";  break;
    default:          $hari_indo = "Tidak Diketahui"; break;
}
// Struktur Switch untuk menerjemahkan bulan ke Bahasa Indonesia
switch ($bulan_angka) {
    case '01': $bulan_indo = "Januari";   break;
    case '02': $bulan_indo = "Februari";  break;
    case '03': $bulan_indo = "Maret";     break;
    case '04': $bulan_indo = "April";     break;
    case '05': $bulan_indo = "Mei";       break;
    case '06': $bulan_indo = "Juni";      break;
    case '07': $bulan_indo = "Juli";      break;
    case '08': $bulan_indo = "Agustus";   break;
    case '09': $bulan_indo = "September"; break;
    case '10': $bulan_indo = "Oktober";   break;
    case '11': $bulan_indo = "November";  break;
    case '12': $bulan_indo = "Desember";  break;
    default:   $bulan_indo = "";          break;
}
echo "Hari ini <strong>$hari_indo, $tanggal $bulan_indo $tahun</strong>";
?>