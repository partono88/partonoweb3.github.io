<?= $this->session->flashdata('pesan'); ?>
<!-- batasbatas -->



<div class="jumbotron jumbotron-fluid">

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
                                        echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking&nbsp;&nbsp 0</i>";
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
<p class="font-weight-bold">TENTANG KAMI.</p>
<p class="font-weight-normal">Tour and Travel Organizer merupakan usaha jasa yang memberi jasa berupa pelayanantour dan travel domestik. Usaha ini bergerak di bidang pariwisata. Pelayanan yang diberikankepada konsumen dapat disesuaikan dengan paket dan fasilitas yang diinginkan konsumen.Fasilitas yang diberikan kepada konsumen antara lain akomodasi kendaraan (bus, minibus, pesawat terbang), reservasi hotel, reservasi rumah makan/restoran/catering, tiket masuk tempatwisata, tour leader dan tour guide serta fasilitas lainnya sesuai keinginan konsumen. Usaha inimelayani tour ke beberapa tujuan seperti wisata pulau jawa, bali, lombok dan wisatareligi/ziarah</p>
<p class="font-weight-light">Light weight text.</p>
<p class="font-italic">Italic text.</p>

<!-- tes lis group -->
<div class="row">
    <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Alamat</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
        </div>
    </div>
    <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">akuPariwisata atau turisme adalah suatu perjalanan yang dilakukan untuk rekreasi atau liburan dan juga persiapan yang dilakukan untuk aktivitas ini. Seorang .Pariwisata atau turisme adalah suatu perjalanan yang dilakukan untuk rekreasi atau liburan dan juga persiapan yang dilakukan untuk aktivitas ini. Seorang .Pariwisata atau turisme adalah suatu perjalanan yang dilakukan untuk rekreasi atau liburan dan juga persiapan yang dilakukan untuk aktivitas ini. Seorang .Pariwisata atau turisme adalah suatu perjalanan yang dilakukan untuk rekreasi atau liburan dan juga persiapan yang dilakukan untuk aktivitas ini. Seorang .Pariwisata atau turisme adalah suatu perjalanan yang dilakukan untuk rekreasi atau liburan dan juga persiapan yang dilakukan untuk aktivitas ini. Seorang .Pariwisata atau turisme adalah suatu perjalanan yang dilakukan untuk rekreasi atau liburan dan juga persiapan yang dilakukan untuk aktivitas ini. Seorang . adaalah kalakmat</div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="container">
                    <h3 class="display-4 font-weight-bold">TELOLET TRAVEL</h3>
                    <p class="lead">Jln Kh Ahmaddahlan No 4 Palmeriam Mataman Jakarta Timur </p>
                    <p class="lead">081295591063/ 085100725418</p>
                </div>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <div class="container">
                    <h3 class="display-4 font-weight-bold">TELOLET TRAVEL</h3>
                    <p class="lead">Untuk lebih jelasnya bisa hubungi kami di layanan ini </p>
                    <p class="lead">081295591063/ 085100725418</p>
                </div>
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
        </div>
    </div>
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