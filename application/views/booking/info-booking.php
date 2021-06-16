<div class="container">
    <center>
        <table>
            <?php
            foreach ($useraktif as $u) {
            ?>
                <tr>
                    <td nowrap>Terima Kasih <b><?= $u->nama; ?></b>
                    </td>
                </tr>
                <tr>
                    <td>Armada Yang ingin Anda Gunakan Adalah Sebagai berikut:</td>
                </tr>
            <?php } ?>
            <tr>
                <td>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>Armada</th>
                                <th>Tujuan Wisata</th>
                                <th>Panitia</th>
                                <th>Tahun</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($items as $i) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/upload/' . $i['image']); ?>" class="rounded" alt="No Picture" width="10%">
                                    </td>
                                    <td nowrap><?= $i['tujuan_wisata']; ?></td>
                                    <td nowrap><?= $i['panitia']; ?></td>
                                    <td nowrap><?= $i['jadwal_keberangkatan']; ?></td>
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
                <td>
                    <a class="btn btn-sm btn-outline-danger" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking!!!')" href="<?php echo base_url() . 'booking/exportToPdf/' . $this->session->userdata('id_user'); ?>"><span class="far fa-lg fa-fw fa-file-pdf"></span> Pdf</a>
                </td>
            </tr>
        </table>
    </center>
</div>
<br>



<!-- Footer -->
<footer class="py-3 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Partono 12191367 UBSI Semester 4 2021</p>
    </div>
    <!-- /.container -->
</footer>

<!-- End of Footer -->