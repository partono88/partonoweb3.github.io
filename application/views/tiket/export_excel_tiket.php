<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<h3>
    <center>Laporan Data Tiket Khatulistiwa Hijau Travel</center>
</h3>
<br />
<table class="table-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Armada</th>
            <th>Tujuan Wisata</th>
            <th>Panitia</th>
            <th>Jadwal Keberangkatan</th>
            <th>Id Armada</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($tiket as $b) {
        ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <th><?= $b['armada']; ?></th>
                <th><?= $b['tujuan_wisata']; ?></th>
                <th><?= $b['panitia']; ?></th>
                <th><?= $b['jadwal_keberangkatan']; ?></th>
                <th><?= $b['id_armada']; ?></th>
                <th><?= $b['stok']; ?></th>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>