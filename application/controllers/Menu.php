<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Menu_model');
  }
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Menu Management';
    $data['menu'] = $this->db->get('user_menu')->result_array();
    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
      $this->session->set_flashdata('message', ' Tambah ');
      redirect('menu');
    }
  }

  public function ubahmenu($menu_id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Ubah Menu Management';
    $data['menu'] = $this->Menu_model->getMenuById($menu_id);
    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('menu/ubahmenu', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Menu_model->ubahDataMenu();
      $this->session->set_flashdata('message', ' Diubah ');
      redirect('menu');
    }
  }



  public function hapusMenu($id)
  {
    $this->Menu_model->hapusMenu($id);
    $this->session->set_flashdata('message', ' Dihapus ');
    redirect('menu');
  }


  public function submenu()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Submenu Management';
    $this->load->model('Menu_model', 'menu');

    $data['submenu'] = $this->menu->getSubMenu();
    $data['menu'] = $this->db->get('user_menu')->result_array();
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'Url', 'required');
    $this->form_validation->set_rules('icon', 'Icon', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('menu/submenu', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'title' => $this->input->post('title'),
        'menu_id' => $this->input->post('menu_id'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active')
      ];
      $this->db->insert('user_sub_menu', $data);
      $this->session->set_flashdata('message', ' Tambah ');
      redirect('menu/submenu');
    }
  }

  public function hapusSubMenu($id)
  {
    $this->Menu_model->hapusSubMenu($id);
    $this->session->set_flashdata('message', ' Dihapus ');
    redirect('menu/submenu');
  }

  public function ubahsubmenu($submenu_id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Ubah Submenu';
    $data['submenu'] = $this->Menu_model->getSubMenuById($submenu_id);

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'Url', 'required');
    $this->form_validation->set_rules('icon', 'Icon', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('menu/ubahsubmenu', $data);
      $this->load->view('templates/footer');
    } else {

      $this->Menu_model->ubahDataSubMenu();
      $this->session->set_flashdata('message', ' Diubah ');
      redirect('menu/submenu');
    }
  }

  public function blocked()
  {
    $this->load->view('auth/blocked');
  }
}
