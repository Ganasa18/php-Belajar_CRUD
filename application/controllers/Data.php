<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('Mahasiswa_model');
    $this->load->model('Dosen_model');
  }

  public function mahasiswa()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['title'] = 'Data Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
    $this->form_validation->set_rules('email', 'email', 'required|valid_email');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('data/mahasiswa', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Mahasiswa_model->tambahDataMahasiswa();
      $this->session->set_flashdata('message', ' Ditambah ');
      redirect('data/mahasiswa');
    }
  }

  public function ubahsiswa($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Ubah Data Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
    $data['jurusan'] = ['Teknik Infromatika', 'Sistem Informasi', 'Bahasa Inggris', 'Sastra Jepang', 'Sistem Akuntasi'];

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
    $this->form_validation->set_rules('email', 'email', 'required|valid_email');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('data/ubahsiswa', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Mahasiswa_model->ubahDataMahasiswa();
      $this->session->set_flashdata('message', ' Diubah ');
      redirect('data/mahasiswa');
    }
  }

  public function hapusmahasiswa($id)
  {
    $this->Mahasiswa_model->hapusDataMahasiswa($id);
    $this->session->set_flashdata('message', ' Dihapus ');
    redirect('data/mahasiswa');
  }

  public function dosen()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['title'] = 'Data Dosen';
    $data['dosen'] = $this->Dosen_model->getAllDosen();

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('kd', 'Kd', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('data/dosen', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Dosen_model->tambahDataDosen();
      $this->session->set_flashdata('message', ' Ditambah ');
      redirect('data/dosen');
    }
  }

  public function ubahdosen($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = ' Ubah Data Dosen';
    $data['dosen'] = $this->Dosen_model->getDosenById($id);
    $data['matakuliah'] = ['Pemodelan Sistem', 'Akuntasi Dasar', 'Bahasa Inggris', 'Web Programing', 'Statistika', 'Pemodelan Database'];

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('kd', 'Kd', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('data/ubahdosen', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Dosen_model->ubahDataDosen();
      $this->session->set_flashdata('message', ' Diubah ');
      redirect('data/dosen');
    }
  }

  public function hapusdosen($dosen_id)
  {
    $this->Dosen_model->hapusDataDosen($dosen_id);
    $this->session->set_flashdata('message', ' Dihapus ');
    redirect('data/dosen');
  }
}
