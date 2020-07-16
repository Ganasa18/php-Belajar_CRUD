<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model("Model_user");
    $this->load->model("Model_admin");
    $this->load->model("Mahasiswa_model");
    $this->load->model("Dosen_model");
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Dashboard';
    $data['graph_mahasiswa'] = $this->Mahasiswa_model->graph_mahasiswa();
    $data['graph_dosen'] = $this->Dosen_model->graph_dosen();
    $data['num_users'] = $this->Model_user->num_users();
    $data['num_mahasiswa'] = $this->Mahasiswa_model->num_mahasiswa();
    $data['num_dosen'] = $this->Dosen_model->num_dosen();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function role()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['title'] = 'Role';
    $data['role'] = $this->db->get('user_role')->result_array();

    $this->form_validation->set_rules('role', 'Role', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('admin/role', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_role', ['role' => $this->input->post('role')]);
      $this->session->set_flashdata('message', ' Ditambah ');
      redirect('admin/role');
    }
  }

  public function roleAccess($role_id)
  {
    $data['title'] = 'Role Access';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    $this->db->where('id !=', 1);
    $data['menu'] = $this->db->get('user_menu')->result_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/role-access', $data);
    $this->load->view('templates/footer');
  }

  public function ubahrole($role_id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = ' Ubah Data Role';
    $data['role'] = $this->Model_admin->getRoleById($role_id);

    $this->form_validation->set_rules('role', 'Role', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('admin/ubahrole', $data);
      $this->load->view('templates/footer');
    } else {
      $role = $this->input->post('role');
      $this->db->set('role', $role);

      $this->Model_admin->ubahDataRole();
      $this->session->set_flashdata('message', ' Diubah ');
      redirect('admin/role');
    }
  }

  public function changeAccess()
  {

    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id

    ];

    $result = $this->db->get_where('user_access_menu', $data);
    if ($result->num_rows() < 1) {

      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }
    $this->session->set_flashdata('message', ' Diubah ');
  }

  public function hapusRole($id)
  {
    $this->Model_admin->hapusRole($id);
    $this->session->set_flashdata('message', ' Dihapus ');
    redirect('admin/role');
  }
}
