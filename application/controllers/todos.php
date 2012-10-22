<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Todos extends CI_Controller {

  public function index() {
    if(loggedin()) {
      $this->load->view('todos');
    } else {
      echo "You are not logged in!";
    }
  }
  
  public function newTodo() {
    if(loggedin()) {
      $data['body'] = 'newTodo';
      $this->load->view('template', $data);
    } else {
      redirect('/user', 'refresh');
    }
  }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
