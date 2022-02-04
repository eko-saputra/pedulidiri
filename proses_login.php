<?php
session_start();
if (isset($_POST['masuk'])) {
    $nik = $_POST['nik'];
    $file = file('data/config.txt');

    $success = false;
    foreach ($file as $r) {
        $data = explode('|', $r);
        if ($data[0] == $nik) {
            $_SESSION['nik'] = $data[0];
            $_SESSION['nama'] = $data[1];
            $file = fopen('data/data-' . $data[0] . '.txt', 'a');
            fclose($file);
            $success = true;
            break;
        }
    }

    if ($success) {
        header('location:beranda.php');
    } else {
        header('location:login.php?h=0');
    }
}
