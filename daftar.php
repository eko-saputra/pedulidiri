<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>DAFTAR</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-4 m-auto bg-white mt-5 p-5 shadow" style="border-radius: 30px;">
                <center><img src="images/logo.PNG" width="200"></center>
                <form action="proses_daftar.php" method="POST">
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="number" name="nik" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" name="daftar" class="btn btn-primary">DAFTAR</button>
                        <a href="login.php" class="btn btn-success">SUDAH PUNYA AKUN</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>