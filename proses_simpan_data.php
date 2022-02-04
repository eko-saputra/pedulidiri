<?php
session_start();
if (isset($_POST['simpan'])) {
    $nik = trim($_SESSION['nik']);
    $tgl = trim($_POST['tgl']);
    $jam = trim($_POST['jam']);
    $lokasi = trim($_POST['lokasi']);
    $suhu = trim($_POST['suhu']);
    $data =  $tgl . "|" . $jam . "|" . $lokasi . "|" . $suhu . "\n";
    $namafile = "data-" . $nik . ".txt";

    $file = fopen('data/' . $namafile, 'a');
    fwrite($file, $data);
    fclose($file);
    header('location:isi_data.php?h=1');
}
