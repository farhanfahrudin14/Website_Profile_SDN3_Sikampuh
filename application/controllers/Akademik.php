<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('Materi_model', 'materi');
        $this->load->model('Ekskul_model', 'ekskul');
        $this->load->model('Prestasi_model', 'prestasi');
        $this->load->model('Siswa_model', 'siswa'); // ✅ load model siswa
    }

    // ==============================
    // 📚 Fitur Materi
    // ==============================

    // ✅ Halaman pilih kelas
    // public function materi() {
    //     $data['title'] = 'Pilih Kelas';
    //     $data['page']  = 'materi/v_kelas';
    //     $this->load->view('front/layouts/main', $data);
    // }

    // // ✅ Halaman materi per kelas
    // public function materi_kelas($kelas) {
    //     $data['title']   = "Materi Kelas $kelas";
    //     $data['page']    = 'materi/v_index';
    //     $data['kelas']   = $kelas;
    //     $data['materi']  = $this->materi->get_by_kelas($kelas);

    //     $this->load->view('front/layouts/main', $data);
    // }

    // ==============================
    // 🎭 Fitur Ekskul
    // ==============================
    public function ekskul() {
        $data['title']   = 'Ekstrakurikuler';
        $data['page']    = 'ekskul/v_index';
        $data['ekskul']  = $this->ekskul->get_all();
        $this->load->view('front/layouts/main', $data);
    }

    // ==============================
    // 🏆 Fitur Prestasi
    // ==============================
    public function prestasi() {
        $data['title']    = 'Prestasi';
        $data['page']     = 'prestasi/v_index';
        $data['prestasi'] = $this->prestasi->get_all();
        $this->load->view('front/layouts/main', $data);
    }

    public function prestasi_detail($id) {
        $data['prestasi'] = $this->prestasi->get_by_id($id);
        if (!$data['prestasi']) {
            show_404();
        }
        $data['title'] = $data['prestasi']->judul;
        $data['page']  = 'prestasi/v_detail';
        $this->load->view('front/layouts/main', $data);
    }

    // ==============================
    // 👨‍🎓 Fitur Siswa
    // ==============================

    // ✅ Halaman daftar semua siswa
    public function siswa() {
        $data['title']   = 'Data Siswa';
        $data['page']    = 'siswa/v_index';
        $data['siswa']   = $this->siswa->get_all();

        $this->load->view('front/layouts/main', $data);
    }

    // ✅ Halaman daftar siswa per kelas
    public function siswa_kelas($kelas) {
        $data['title']   = "Data Siswa Kelas $kelas";
        $data['page']    = 'siswa/v_index';
        $data['siswa']   = $this->siswa->get_by_kelas($kelas);
        $data['kelas']   = $kelas;

        $this->load->view('front/layouts/main', $data);
    }
}
