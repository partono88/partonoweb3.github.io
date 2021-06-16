<div class="container">
    <center>
        <table>
            <?php foreach ($agt_booking as $ab) { ?>
                <tr>
                    <td>Data Anggota</td>
                    <td>:</td>
                    <th><?= $ab['nama']; ?></th>
                </tr>
                <tr>
                    <td>ID Booking</td>
                    <td>:</td>
                    <th><?= $ab['id_booking']; ?></th>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>ID Tiket</th>
                                <th>Armada</th>
                                <th>Tujuan Wisata</th>
                                <th>Panitia</th>
                                <th>Tahun</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($detail as $d) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $d['id_tiket']; ?></td>
                                    <td><?= $d['armada']; ?></td>
                                    <td><?= $d['tujuan_wisata']; ?></td>
                                    <td><?= $d['panitia']; ?></td>
                                    <td><?= $d['jadwal_keberangkatan']; ?></td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3"><a href="#" onclick="window.history.go(-1)" class="btn btn-outline-dark"><i class="fas fa-fw fa-reply"></i> Kembali</a></td>
            </tr>
        </table>
    </center>
</div>