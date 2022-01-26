<?= $this->session->flashdata('pesan'); ?>
<!-- batasbatas -->

<div class="jumbotron">
    <link rel="stylesheet" href="/assets/css/style.css">
    <div class="container">
        <h1 class="display-4 font-weight-bold">Khatulistiwa Nusantara Hijau Travel</h1>
        <p class="lead">Booking Online Terlengkap - Pesan Tiket BussTerbaik Tanpa Takut Harga Naik. </p>
        <p class="lead">Pesan Tiket Buss Banyak Mudahnya, Banyak Untungnya - Dapatkan di telolettravel.com! Hemat dengan Tix Point. Cicilan 3/6/12. Rute Terlengkap Up 17K+..</p>
    </div>

</div>
<!-- grit sistem -->
<div class="row">
    <div class="col-sm-8">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/4saja.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/5saja.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/6saja.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="assets/img/card.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">e card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>
<!-- batasbatas -->


<div style="padding: 25px;">
    <div class="x_panel">
        <div class="x_content">
            <!-- Tampilkan semua produk -->
            <div class="row">
                <!-- looping products -->
                <?php foreach ($tiket as $tiket) { ?>
                    <div class="col-md-2 col-md-3">
                        <div class="thumbnail" style="height: 370px;">
                            <img src="<?php echo base_url(); ?>assets/img/upload/<?= $tiket->image; ?>" style="max-width:100%; max-height: 100%; height: 180px; width: 300px">
                            <div class="caption">
                                <h5 style="min-height:30px;"><?= $tiket->tujuan_wisata ?></h5>
                                <h5><?= $tiket->panitia ?></h5>
                                <h5><?= substr($tiket->id_armada, 0, 4) ?></h5>
                                <p>
                                    <?php
                                    if ($tiket->stok < 1) {
                                        echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking&nbsp;&nbsp 0</>";
                                    } else {
                                        echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href='" . base_url('booking/tambahBooking/' . $tiket->id) . "'> Booking</a>";
                                    }
                                    ?>
                                    <a class="btn btn-outline-warning fas fw fa-search" href="<?= base_url('home/detailTiket/' . $tiket->id); ?>"> Detail</a>
                                </p>
                            </div>
                        </div>
                    </div> <?php } ?>
                <!-- end looping -->
            </div>
        </div>
    </div>
</div>
<!-- texs -->
<!-- About Us -->
<section id="contact" class="contact mb-5">
    <div class="col text-center">
        <h2>Services</h2>
    </div>
    <div class=" container">
        <div class="row pt-4 mb-4">



            <div class="col m6 light">
                <h5>We Are Professionals</h5>
                <p>Khatulistiwa Nusantara Hijau Travel Merupakan sebuah perusahaan yang bergerak pada bidang jasa transportasi travel & tour. Perusahaan ini telah melayani berbagai transportasi darat lintas provinsi indonesia. Sebagai sebuah mitra yang melayani masyarakat umum, Khatulistiwa Nusantara Hijau Travel harus turut mengikuti perkembangan teknologi yang ada pada saat ini, agar konsumen pun semakin puas atas apa yang perusahaan ini berikan. Salah satunya adalah dengan menyediakan akses yang mudah dan cepat dalam pemesanan tiketnya.</p>
            </div>
            <div class="col m6 light">
                <p>CLAS BISNIS</p>
                <div class="progress">
                    <div class="determinate blue" style="width: 95%"></div>
                </div>
                <p>CLAS EXSEKUTIF</p>
                <div class="progress">
                    <div class="determinate blue" style="width: 85%"></div>
                </div>
                <p>CLAS EKONOMI</p>
                <div class="progress">
                    <div class="determinate blue" style="width: 90%"></div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Clients -->

<!-- tes lis group -->
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

<!-- Footer -->
<footer class="py-3 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Partono 12191367 UBSI Semester 4 2021</p>
    </div>
    <!-- /.container -->
</footer>

<!-- End of Footer -->