<?php include "layout/header.php"; ?>
<div class="container bg-white mt-3 rounded p-3">
    <h4><b class="text-primary">ISI DATA</b> <i class="text-muted">Catatan Perjalanan</i></h4>
    <hr>
    <div class="row">
        <div class="col-6">
            <?php
            if (isset($_GET['h'])) {
                if ($_GET['h'] == 1) {
                    echo "<div class='alert bg-success text-white'>Data berhasil ditambahkan!</div>";
                }
            }
            ?>
            <form action="proses_simpan_data.php" method="POST">
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tgl" class="form-control">
                </div>
                <div class=" form-group">
                    <label for="">Jam</label>
                    <input type="time" name="jam" class="form-control my-1">
                </div>
                <div class="form-group">
                    <label for="">Lokasi Yang Dikunjungi</label>
                    <input type="text" name="lokasi" class="form-control my-1">
                </div>
                <div class="form-group">
                    <label for="">Suhu Tubuh</label>
                    <input type="text" name="suhu" class="form-control my-1">
                </div>
                <div class="form-group">
                    <button type="submit" name="simpan" class="btn btn-success my-1">Simpan</button>
                </div>
            </form>
        </div>
        <div class="col-6 text-center">
            <img src="https://img.freepik.com/free-vector/checking-body-temperature-public-area_23-2148510806.jpg?size=338&ext=jpg" width="60%">
        </div>
    </div>
</div>
<?php include "layout/footer.php"; ?>