<?php

require APPPATH.'libraries/REST_Controller.php';

class Student extends REST_Controller{

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
    echo "This is GET Method";
  }
}

 ?>
