<?php include "layout/header.php"; ?>
<div class="container bg-white mt-3 rounded p-3">
    <h4><b class="text-primary">DATA</b> <i class="text-muted">Catatan Perjalanan</i></h4>
    <hr>
    <table class="table table-striped shadow border" id="example">
        <thead>
            <th>No</th>
            <th>Tanggal Perjalanan</th>
            <th>Jam</th>
            <th>Lokasi</th>
            <th>Suhu Tubuh</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $nik = $_SESSION['nik'];
            $file = file('data/data-' . $nik . '.txt');

            foreach ($file as $r) {
                $data = explode('|', $r);
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $data[0]; ?></td>
                    <td><?= $data[1]; ?></td>
                    <td><?= $data[2]; ?></td>
                    <td><?= $data[3]; ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>

</div>
<?php include "layout/footer.php"; ?>