<?php

class Dosen_model extends CI_Model
{

  public function getAllDosen()
  {

    return $this->db->get('dosen')->result_array();
  }

  public function tambahDataDosen()
  {
    $data = [
      "nama" => $this->input->post('nama', true),
      "kd" => $this->input->post('kd', true),
      "email" => $this->input->post('email', true),
      "matakuliah" => $this->input->post('matakuliah', true)
    ];

    $this->db->insert('dosen', $data);
  }

  public function hapusDataDosen($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('dosen');
  }
  public function getDosenById($id)
  {
    return $this->db->get_where('dosen', ['id' => $id])->row_array();
  }

  public function ubahDataDosen()
  {
    $data = [
      "nama" => $this->input->post('nama', true),
      "kd" => $this->input->post('kd', true),
      "email" => $this->input->post('email', true),
      "matakuliah" => $this->input->post('matakuliah', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('dosen', $data);
  }

  function num_dosen()
  {
    $query = $this->db->get('dosen');
    return $query->num_rows();
  }

  public function graph_dosen()
  {
    $query = $this->db->get('dosen');
    return $query->num_rows();
  }
}
