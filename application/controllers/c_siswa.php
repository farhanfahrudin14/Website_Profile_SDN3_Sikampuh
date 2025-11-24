<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_login(); // auth check (sama kayak ekskul)
        $this->load->model('Siswa_model', 'siswa');
        $this->load->model('menu_model', 'menu');
    }

    public function index()
    {
        $data['title']   = 'Daftar Kelas / Siswa';
        $data['page']    = 'siswa/v_index';
        $data['siswa']   = $this->siswa->get_all();

        $this->load->view('back/layouts/main', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Data Siswa';
        $data['page']  = 'siswa/v_tambah';

        $this->load->view('back/layouts/main', $data);
    }

    public function store()
    {
        $insert = [
            'tahun_ajaran' => $this->input->post('tahun_ajaran', true),
            'nama_kelas'   => $this->input->post('nama_kelas', true),
            'jumlah_siswa' => $this->input->post('jumlah_siswa', true),
            'wali_kelas'   => $this->input->post('wali_kelas', true),
        ];

        $save = $this->siswa->insert($insert);

        $this->session->set_flashdata(
            $save ? 'success' : 'error',
            $save ? 'Data siswa berhasil ditambahkan!' : 'Data siswa gagal ditambahkan!'
        );

        redirect('c_siswa');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Siswa';
        $data['page']  = 'siswa/v_edit';
        $data['siswa'] = $this->siswa->get_by_id($id);

        $this->load->view('back/layouts/main', $data);
    }

    public function update($id)
    {
        $update = [
            'tahun_ajaran' => $this->input->post('tahun_ajaran', true),
            'nama_kelas'   => $this->input->post('nama_kelas', true),
            'jumlah_siswa' => $this->input->post('jumlah_siswa', true),
            'wali_kelas'   => $this->input->post('wali_kelas', true),
        ];

        $save = $this->siswa->update($id, $update);

        $this->session->set_flashdata(
            $save ? 'success' : 'error',
            $save ? 'Data siswa berhasil diupdate!' : 'Data siswa gagal diupdate!'
        );

        redirect('c_siswa');
    }

    public function delete($id)
    {
        $data['title'] = 'Hapus Data Siswa';
        $data['page']  = 'siswa/v_hapus';
        $data['siswa'] = $this->siswa->get_by_id($id);

        $this->load->view('back/layouts/main', $data);
    }

    public function destroy($id)
    {
        $delete = $this->siswa->delete($id);

        $this->session->set_flashdata(
            $delete ? 'success' : 'error',
            $delete ? 'Data siswa berhasil dihapus!' : 'Data siswa gagal dihapus!'
        );

        redirect('c_siswa');
    }
}
