<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Buku
    public function index()
    {
        $data['armada'] = 'Data Tiket';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['tiket'] = $this->ModelTiket->getTiket()->result_array();
        $data['kategori'] = $this->ModelTiket->getKategori()->result_array();

        $this->form_validation->set_rules('armada', 'Armada', 'required|min_length[3]', [
            'required' => 'Armada harus diisi',
            'min_length' => 'Armada terlalu pendek'
        ]);
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', [
            'required' => 'Nama pengarang harus diisi',
        ]);
        $this->form_validation->set_rules('tujuan_wisata', 'Tujuan Wisata', 'required|min_length[3]', [
            'required' => 'Tujuan Wisata harus diisi',
            'min_length' => 'Tujuan Wisata terlalu pendek'
        ]);
        $this->form_validation->set_rules('panitia', 'Nama Panitia', 'required|min_length[3]', [
            'required' => 'Nama panitia harus diisi',
            'min_length' => 'Nama panitia terlalu pendek'
        ]);
        $this->form_validation->set_rules('tahun', 'Jadwal Keberangkatan', 'required|min_length[3]|max_length[4]|numeric', [
            'required' => 'Jadwal Keberangkatan harus diisidddddd',
            'min_length' => 'Jadwal Keberangkatan terlalu pendek',
            'max_length' => 'Jadwal Keberangkatan terlalu panjang',
            'numeric' => 'Hanya boleh diisi angka'
        ]);
        $this->form_validation->set_rules('id_armada', 'Id Arada', 'required|min_length[3]|numeric', [
            'required' => 'Id armada harus diisi',
            'min_length' => 'Id armada terlalu pendek',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tiket/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }

            $data = [
                'armada' => $this->input->post('armada', true),
                'id_kategori' => $this->input->post('id_kategori', true),
                'tujuan_wisata' => $this->input->post('tujuan_wisata', true),
                'panitia' => $this->input->post('panitia', true),
                'jadwal_keberangkatan' => $this->input->post('tahun', true),
                'id_armada' => $this->input->post('id_armada', true),
                'stok' => $this->input->post('stok', true),
                'dipesan' => 0,
                'dibooking' => 0,
                'image' => $gambar
            ];

            $this->ModelTiket->simpanTiket($data);
            redirect('tiket');
        }
    }

    public function hapusTiket()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelTiket->hapusTiket($where);
        redirect('tiket');
    }

    public function ubahTiket()
    {
        $data['armada'] = 'Ubah Data Tiket';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['tiket'] = $this->ModelTiket->tiketWhere(['id' => $this->uri->segment(3)])->result_array();
        $kategori = $this->ModelTiket->joinKategoriTiket(['tiket.id' => $this->uri->segment(3)])->result_array();
        foreach ($kategori as $k) {
            $data['id'] = $k['id_kategori'];
            $data['k'] = $k['kategori'];
        }
        $data['kategori'] = $this->ModelTiket->getKategori()->result_array();

        $this->form_validation->set_rules('armada', 'Armada', 'required|min_length[3]', [
            'required' => 'Armada harus diisi',
            'min_length' => 'Armada terlalu pendek'
        ]);
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', [
            'required' => 'Nama pengarang harus diisi',
        ]);
        $this->form_validation->set_rules('tujuan_wisata', 'Tujuan Wisata', 'required|min_length[3]', [
            'required' => 'Tujuan Wisata harus diisi',
            'min_length' => 'Tujuan Wisata terlalu pendek'
        ]);
        $this->form_validation->set_rules('panitia', 'Nama Panitia', 'required|min_length[3]', [
            'required' => 'Nama panitia harus diisi',
            'min_length' => 'Nama panitia terlalu pendek'
        ]);
        $this->form_validation->set_rules('tahun', 'Jadwal Keberangkatan', 'required|min_length[3]|max_length[4]|numeric', [
            'required' => 'Jadwal Keberangkatan harus diisiiiiiiiiiiiiiiiiii',
            'min_length' => 'Jadwal Keberangkatan terlalu pendek',
            'max_length' => 'Jadwal Keberangkatan terlalu panjang',
            'numeric' => 'Hanya boleh diisi angka'
        ]);
        $this->form_validation->set_rules('id_armada', 'Id Armada', 'required|min_length[3]|numeric', [
            'required' => 'Id Armada harus diisi',
            'min_length' => 'Id Armada terlalu pendek',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        //memuat atau memanggil library upload
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tiket/ubah_tiket', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'armada' => $this->input->post('armada', true),
                'id_kategori' => $this->input->post('id_kategori', true),
                'tujuan_wisata' => $this->input->post('tujuan_wisata', true),
                'panitia' => $this->input->post('panitia', true),
                'jadwal_keberangkatan' => $this->input->post('tahun', true),
                'id_armada' => $this->input->post('id_armada', true),
                'stok' => $this->input->post('stok', true),
                'image' => $gambar
            ];

            $this->ModelTiket->updateTiket($data, ['id' => $this->input->post('id')]);
            redirect('tiket');
        }
    }

    //manajemen kategori
    public function kategori()
    {
        $data['armada'] = 'Kategori Tiket';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelTiket->getKategori()->result_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Judul Buku harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tiket/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori', TRUE)
            ];

            $this->ModelTiket->simpanKategori($data);
            redirect('tiket/kategori');
        }
    }

    public function ubahKategori()
    {
        $data['armada'] = 'Ubah Data Kategori';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelTiket->kategoriWhere(['id' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required|min_length[3]', [
            'required' => 'Nama Kategori harus diisi',
            'min_length' => 'Nama Kategori terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tiket/ubah_kategori', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'kategori' => $this->input->post('kategori', true)
            ];

            $this->ModelTiket->updateKategori(['id' => $this->input->post('id')], $data);
            redirect('tiket/kategori');
        }
    }

    public function hapusKategori()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelTiket->hapusKategori($where);
        redirect('tiket/kategori');
    }
}
