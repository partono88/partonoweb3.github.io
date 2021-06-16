<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'armada' => "Tiket",
            'tiket' => $this->ModelTiket->getTiket()->result(),
        ];
        //jika sudah login dan jika belum login10
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('tiket/daftartiket', $data);
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('tiket/daftartiket', $data);
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/templates-user/footer', $data);
        }
    }
    public function detailTiket()
    {
        $id = $this->uri->segment(3);
        $tiket = $this->ModelTiket->joinKategoriTiket(['tiket.id' => $id])->result();
        $data['user'] = "Pengunjung";
        $data['title'] = "Detail Tiket";
        foreach ($tiket as $fields) {
            $data['armada'] = $fields->armada;
            $data['tujuan_wisata'] = $fields->tujuan_wisata;
            $data['panitia'] = $fields->panitia;
            $data['kategori'] = $fields->kategori;
            $data['tahun'] = $fields->jadwal_keberangkatan;
            $data['id_armada'] = $fields->id_armada;
            $data['gambar'] = $fields->image;
            $data['dipesan'] = $fields->dipesan;
            $data['dibooking'] = $fields->dibooking;
            $data['stok'] = $fields->stok;
            $data['id'] = $id;
        }
        $this->load->view('templates/templates-user/header', $data);
        $this->load->view('tiket/detail-tiket', $data);
        $this->load->view('templates/templates-user/modal');
        $this->load->view('templates/templates-user/footer');
    }
}
