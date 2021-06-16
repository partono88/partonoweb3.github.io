<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function laporan_tiket()
    {
        $data['armada'] = 'Laporan Data Tiket';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['tiket'] = $this->ModelTiket->getTiket()->result_array();
        $data['kategori'] = $this->ModelTiket->getKategori()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tiket/laporan_tiket', $data);
        $this->load->view('templates/footer');
    }
    public function cetak_laporan_tiket()
    {
        $data['tiket'] = $this->ModelTiket->getTiket()->result_array();
        $data['kategori'] = $this->ModelTiket->getKategori()->result_array();
        $this->load->view('tiket/laporan_print_tiket', $data);
    }
    public function laporan_tiket_pdf()
    { {
            $this->load->library('pdf');
            $data['tiket'] = $this->ModelTiket->getTiket()->result_array();
            $this->load->view('tiket/laporan_pdf_tiket', $data);

            $paper_size = 'A4'; // ukuran kertas
            $orientation = 'landscape'; //tipe format kertas potrait atau landscape
            $html = $this->output->get_output();

            $this->pdf->set_paper($paper_size, $orientation);
            //convert to Pdf
            $this->pdf->load_html($html);
            $this->pdf->render($html);
            $this->pdf->stream("laporan_data_tiket.pdf", array('Attacment' => 0));
            //nama file pdf yang di hasilkan
        }
    }
    public function export_excel()
    {
        $data = array('title' => 'Laporan Tiket', 'tiket' => $this->ModelTiket->getTiket()->result_array());
        $this->load->view('tiket/export_excel_tiket', $data);
    }
    public function laporan_pinjam()
    {
        $data['armada'] = 'Laporan Data Pemesanan Tiket';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,tiket b,user u where d.id_tiket=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pinjam/laporan-pinjam', $data);
        $this->load->view('templates/footer');
    }
    public function laporan_pinjam_pdf()
    { {
            $this->load->library('pdf');

            $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,tiket b,user u where d.id_tiket=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();

            $this->load->view('pinjam/laporan-pdf-pinjam', $data);

            $paper_size = 'A4'; // ukuran kertas
            $orientation = 'landscape'; //tipe format kertas potrait atau landscape
            $html = $this->output->get_output();

            $this->pdf->set_paper($paper_size, $orientation);
            //Convert to PDF
            $this->pdf->load_html($html);
            $this->pdf->render();
            $this->pdf->stream("laporan data peminjaman.pdf", array('Attachment' => 0));
            // nama file pdf yang di hasilkan
        }
    }
    public function cetak_laporan_pinjam()
    {
        $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,tiket b,user u where d.id_tiket=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
        $this->load->view('pinjam/laporan-print-pinjam', $data);
    }
    public function export_excel_pinjam()
    {
        $data = array('title' => 'Laporan Data Peminjaman Tiket', 'laporan' => $this->db->query("select * from pinjam p,detail_pinjam d, tiket b,user u where d.id_tiket=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array());
        $this->load->view('pinjam/export-excel-pinjam', $data);
    }
}
