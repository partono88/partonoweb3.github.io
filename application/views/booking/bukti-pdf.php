<table border=1>
    <?php
    foreach ($useraktif as $u) {
    ?>
        <tr>
            <th>Nama Anggota : <?= $u->nama; ?></th>
        </tr>
        <tr>
            <th>Armada Yang dibooking:</th>
        </tr>
    <?php } ?>
    <tr>
        <td>
            <div class="table-responsive">
                <table border=1>
                    <tr>
                        <th>No.</th>
                        <th>Armada</th>
                        <th>Tujuan Wisata</th>
                        <th>panitia</th>
                        <th>Tahun</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($items as $i) {
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td>
                                <?= $i['armada']; ?>
                            </td>
                            <td><?= $i['tujuan_wisata']; ?></td>
                            <td><?= $i['panitia']; ?></td>
                            <td><?= $i['jadwal_keberangkatan']; ?></td>
                        </tr>
                    <?php $no++;
                    } ?>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td align="center">
            <?= md5(date('d M Y H:i:s')); ?>
        </td>
    </tr>
</table>