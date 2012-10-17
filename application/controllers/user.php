<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class User extends CI_Controller {

  public function index() {
    $this -> load -> view('login');
  }

  public function register() {
    if($this->input->post()) {
      echo "Not implemented yet!";
    } else {
      $this->load->view('register');
    }
  }

  public function login() {
    if($this->input->post()) {
      echo "logging in";
    }
  }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
