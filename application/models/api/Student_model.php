<?php

class Student_model extends CI_Model{

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function get_students(){

    $this->db->select("*");
    $this->db->from("tbl_students");
    $query = $this->db->get();

    return $query->result();
  }
}

 ?>
