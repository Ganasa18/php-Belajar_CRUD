<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermenu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('Mahasiswa_model');
    $this->load->model('Dosen_model');
  }
  public function data_mahasiswa()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'List Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('usermenu/list_mahasiswa', $data);
    $this->load->view('templates/footer');
  }

  public function data_dosen()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'List Dosen';
    $data['dosen'] = $this->Dosen_model->getAllDosen();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('usermenu/list_dosen', $data);
    $this->load->view('templates/footer');
  }
}
