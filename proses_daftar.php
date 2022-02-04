<?php
if (isset($_POST['daftar'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $data = $nik . "|" . $nama . "\n";

    $succes = false;
    $cek = file('data/config.txt');
    foreach ($cek as $r) {
        $h = explode('|', $r);
        if ($h[0] == $nik) {
            $succes = true;
            break;
        }
    }

    if ($succes == true) {
        header('location:login.php?n=1');
    } else {
        $file = fopen('data/config.txt', 'a');
        fwrite($file, $data);
        fclose($file);
        header('location:login.php?n=2');
    }
}
