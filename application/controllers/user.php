<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class User extends CI_Controller {

  public function index() {
    if(loggedin()) {
      redirect('/todos', 'refresh');
    }
    $this->load->view('login');
  }

  public function register() {
    if ($this->input->post()) {
      $user = $this->doctrine->em->getRepository('Entities\User')
                  ->findOneBy(array('email' => $this->input->post('user_email')));
      if (!$user) {
        $user = new Entities\User;
        $user->setName($this->input->post('user_name'));
        $user->setEmail($this->input->post('user_email'));
        $user->setGender($this->input->post('gender'));
        $user->setPassword(sha1($this->input->post('pwd')));
        $user->setDeleted(0);
        $user->setLastLogin(new \DateTime("now"));
        $this->doctrine->em->persist($user);
        $this->doctrine->em->flush();
        $this->load->view('login');
      } else {
        $data['message'] = "User already exists!";
        $this->load->view('register', $data);
      }
    } else {
      $this->load->view('register');
    }
  }

  public function login() {
    if ($this->input->post()) {
      $user = $this->doctrine->em->getRepository('Entities\User')
                  ->findOneBy(array('email' => $this->input->post('user_email')));
      if($user) {
        if(sha1($this->input->post('pwd')) == $user->getPassword()) {
          $this->session->set_userdata('loggedin', TRUE);
          $this->session->set_userdata('name', $user->getName());
          redirect('/todos', 'refresh');
        } else {
          $data['message'] = "Either the email doesn't exist or the password was wrong!";
          $this->load->view('login', $data);
        }
      } else {
        $data['message'] = "Either the email doesn't exist or the password was wrong!";
        $this->load->view('login', $data);
      }
    } else {
      redirect('/user', 'refresh');
    }
  }
  
  public function logout() {
    $this->session->set_userdata('loggedin', FALSE);
    redirect('/user', 'refresh');
  }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
