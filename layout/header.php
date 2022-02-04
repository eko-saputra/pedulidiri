<?php
session_start();
if (!isset($_SESSION['nik'])) {
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css" />


    <title>PEDULIDIRI</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="bg-white shadow">
        <div class="container py-3">
            <div class="row">
                <div class="col-1">
                    <img src="images/logo.PNG" width="100">
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col">
                            <h1><b class="text-primary">PEDULI</b><b class="text-success">Diri</b></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><a href="beranda.php">Beranda</a> | <a href="catatan_perjalanan.php">Catatan Perjalanan</a> | <a href="isi_data.php">Isi Data</a></div>
                    </div>
                </div>
                <div class="col-3">
                    <b>Welcome, <?= $_SESSION['nama']; ?> | <a href="logout.php" class="text-danger">Keluar</a></b>
                </div>
            </div>
        </div>
    </div>