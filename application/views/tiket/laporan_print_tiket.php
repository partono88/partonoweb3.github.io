<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
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
                    <td><?= $b['armada']; ?></td>
                    <td><?= $b['tujuan_wisata']; ?></td>
                    <td><?= $b['panitia']; ?></td>
                    <td><?= $b['jadwal_keberangkatan']; ?></td>
                    <td><?= $b['id_armada']; ?></td>
                    <td><?= $b['stok']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>