<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_videos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_login(); // cek login
        $this->load->model('Videos_model', 'videos');
        $this->load->model('Menu_model', 'menu'); // sidebar
    }

    public function index()
    {
        $data['title']  = 'Data Video';
        $data['page']   = 'videos/v_index';
        $data['videos'] = $this->videos->get_all();
        $this->load->view('back/layouts/main', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Video';
        $data['page']  = 'videos/v_tambah';
        $this->load->view('back/layouts/main', $data);
    }

    public function store()
    {
        $judul = $this->input->post('judul', true);
        $link  = $this->input->post('link', true);

        // Konfigurasi upload thumbnail
        $config['upload_path']   = './uploads/videos/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 2048; // max 2MB
        $config['encrypt_name']  = TRUE; // nama unik

        $this->load->library('upload', $config);

        $thumbnail = null;
        if ($this->upload->do_upload('thumbnail')) {
            $uploadData = $this->upload->data();
            $thumbnail  = $uploadData['file_name'];
        } elseif (!empty($_FILES['thumbnail']['name'])) {
            // Upload gagal
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('c_videos/create');
            return;
        }

        $data = [
            'judul'     => $judul,
            'link'      => $link,
            'thumbnail' => $thumbnail
        ];

        $insert = $this->videos->insert($data);

        if ($insert) {
            $this->session->set_flashdata('success', 'Video berhasil ditambahkan!');
        } else {
            $this->session->set_flashdata('error', 'Video gagal ditambahkan!');
        }

        redirect('c_videos');
    }

    public function edit($id)
    {
        $data['title']  = 'Edit Video';
        $data['page']   = 'videos/v_edit';
        $data['video']  = $this->videos->get_by_id($id);
        $this->load->view('back/layouts/main', $data);
    }

    public function update($id)
    {
        $judul = $this->input->post('judul', true);
        $link  = $this->input->post('link', true);

        // Konfigurasi upload thumbnail baru
        $config['upload_path']   = './uploads/videos/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 2048;
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);

        $video     = $this->videos->get_by_id($id);
        $thumbnail = $video->thumbnail; // default pakai lama

        if ($this->upload->do_upload('thumbnail')) {
            $uploadData = $this->upload->data();
            $thumbnail  = $uploadData['file_name'];

            // hapus file lama
            if (!empty($video->thumbnail) && file_exists('./uploads/videos/'.$video->thumbnail)) {
                unlink('./uploads/videos/'.$video->thumbnail);
            }
        } elseif (!empty($_FILES['thumbnail']['name'])) {
            // Upload gagal
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('c_videos/edit/'.$id);
            return;
        }

        $data = [
            'judul'     => $judul,
            'link'      => $link,
            'thumbnail' => $thumbnail
        ];

        $update = $this->videos->update($id, $data);

        if ($update) {
            $this->session->set_flashdata('success', 'Video berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('error', 'Video gagal diperbarui!');
        }

        redirect('c_videos');
    }

    public function delete($id)
    {
        $data['title'] = 'Hapus Video';
        $data['page']  = 'videos/v_hapus';
        $data['video'] = $this->videos->get_by_id($id);
        $this->load->view('back/layouts/main', $data);
    }

    public function destroy($id)
    {
        $video = $this->videos->get_by_id($id);

        // hapus thumbnail kalau ada
        if (!empty($video->thumbnail) && file_exists('./uploads/videos/'.$video->thumbnail)) {
            unlink('./uploads/videos/'.$video->thumbnail);
        }

        $delete = $this->videos->delete($id);

        if ($delete) {
            $this->session->set_flashdata('success', 'Video berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Video gagal dihapus!');
        }

        redirect('c_videos');
    }
}
