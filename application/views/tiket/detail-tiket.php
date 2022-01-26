<div class="x_panel" align="center">
    <div class="x_content">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="thumbnail" style="height: auto; position: relative; left: 100%; width: 200%;">
                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $gambar; ?>" style="max-width:100%; max-height: 100%; height: 300px; width: 500px">
                    <div class="caption">
                        <h5 style="min-height:40px;" align="center"><?= $tujuan_wisata ?></h5>
                        <center>
                            <table class="table table-stripped">
                                <tr>
                                    <th nowrap>Armada: </th>
                                    <td nowrap><?= $armada; ?></td>
                                    <td>&nbsp;</td>
                                    <th>Kategori: </th>
                                    <td><?= $kategori ?></td>
                                </tr>
                                <tr>
                                    <th nowrap>Panitia: </th>
                                    <td><?= $panitia ?></td>
                                    <td>&nbsp;</td>
                                    <th>Dipesan: </th>
                                    <td><?= $dipesan ?></td>
                                </tr>
                                <tr>
                                    <th nowrap>jadwal_keberangkatan: </th>
                                    <td><?= substr($tahun, 0, 4) ?></td>
                                    <td>&nbsp;</td>
                                    <th>Dibooking: </th>
                                    <td><?= $dibooking ?></td>
                                </tr>
                                <tr>
                                    <th>Id Armada: </th>
                                    <td><?= $id_armada ?></td>
                                    <td>&nbsp;</td>
                                    <th>Tersedia: </th>
                                    <td><?= $stok ?></td>
                                </tr>
                            </table>
                        </center>
                        <p>
                            <a class="btn btn-outline-primary fas fw fa-shopping-cart" href="<?= base_url('booking/tambahBooking/' . $id); ?>"> Booking</a>
                            <span class="btn btn-outline-secondary fas fw fa-reply" onclick="window.history.go(-1)"> Kembali</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- batas -->
<section id="contact" class="contact mb-5">
    <div class="container">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <h2>Contact Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card text-white bg-primary mb-3 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <p class="card-text">Hubungi kami dengan sopan dan aman agar sam sama menyenangakan</p>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                        <h1>Location</h1>
                    </li>
                    <li class="list-group-item">My office</li>
                    <li class="list-group-item">Jl Kh Ahmaddahlan No.4 Palmeriam Mtraman Jakarta Timur</li>
                    <li class="list-group-item">Wesgt Java indonesia</li>

                </ul>
            </div>

            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="nomor">No Tlpon</label>
                        <input type="text" class="form-control" id="nomor">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Kirim Pesan</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
<!-- batas -->


<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Partono 12191367 UBSI 2021</p>
    </div>
    <!-- /.container -->
</footer>