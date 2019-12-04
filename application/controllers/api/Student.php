<?php

require APPPATH.'libraries/REST_Controller.php';

class Student extends REST_Controller{

  public function __construct(){

    parent::__construct();
    //load database
    $this->load->database();
    $this->load->model(array("api/student_model"));
  }

  /*
    INSERT: POST REQUEST TYPE
    UPDATE: PUT REQUEST TYPE
    DELETE: DELETE REQUEST TYPE
    LIST: Get REQUEST TYPE
  */

  // POST: <project_url>/index.php/student
  public function index_post(){
    // insert data method

    echo "This is POST Method";
  }

  // PUT: <project_url>/index.php/student
  public function index_put(){
    // updating data method
    echo "This is PUT Method";
  }

  // DELETE: <project_url>/index.php/student
  public function index_delete(){
    // delete data method
    echo "This is DELETE Method";
  }

  // GET: <project_url>/index.php/student
  public function index_get(){
    // list data method
    //echo "This is GET Method";
    // SELECT * from tbl_students;
    $students = $this->student_model->get_students();

    //print_r($query->result());

    if(count($students) > 0){

      $this->response(array(
        "status" => 1,
        "message" => "Students found",
        "data" => $students
      ), REST_Controller::HTTP_OK);
    }else{

      $this->response(array(
        "status" => 0,
        "message" => "No Students found",
        "data" => $students
      ), REST_Controller::HTTP_NOT_FOUND);
    }



  }
}

 ?>
