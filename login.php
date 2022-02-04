<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>LOGIN</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-4 m-auto bg-light mt-5 p-5 shadow" style="border-radius: 30px;">
                <center><img src="images/logo.PNG" width="200"></center>
                <?php
                if (isset($_GET['n'])) {
                    if ($_GET['n'] == 1) {
                        echo "<div class='alert bg-danger text-white'>Maaf, data sudah ada!</div>";
                    } elseif ($_GET['n'] == 2) {
                        echo "<div class='alert bg-success text-white'>Data berhasil ditambahkan, seilahkan login!</div>";
                    } else {
                        echo "<div class='alert bg-danger text-white'>Maaf, anda gagal login!</div>";
                    }
                }
                ?>
                <form action="proses_login.php" method="POST">
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" name="nik" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <a href="daftar.php" class="btn btn-success">SAYA PENGGUNA BARU</a>
                        <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>