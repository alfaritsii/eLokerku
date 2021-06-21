<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_models extends CI_Model{

  public function ceklogin($input)
  {
    $username = $this->db->escape($input['username']);
    $password = $this->db->escape($input['password']);
    $q_login = $this->db->query("SELECT * FROM users WHERE email=$username AND password=$password");
    if($q_login->num_rows()>0){
      foreach ($q_login->result() as $data) {
        $session['username'] = $data->email;
        $session['nama_user'] = $data->nama;
        $session['login'] = TRUE;
        $this->session->set_userdata($session);

                                            }
    }if($this->session->userdata('login')==True){
      redirect('Main');
    }else{
      $this->session->set_flashdata("logingagal","logingagal");
      redirect('Auth');
    }
  }
//   Public function loginadmin($input){
//     $username = $this->db->escape($input['username']);
//     $password = $this->db->escape($input['password']);
//     $q_login = $this->db->query("SELECT * FROM users WHERE nip=$username AND pass=$password");
//     if($q_login->num_rows()>0){
//       foreach ($q_login->result() as $data) {
//         $session['username'] = $data->nip;
//         $session['nama_user'] = $data->nama;
//         $session['jabatan_user'] = $data->jabatan;
//         $session['login'] = TRUE;
//         $session['siswa'] = FALSE;
//         $session['admin'] = TRUE;
//         $session['level'] = $data->admin_su;
//         $this->session->set_userdata($session);

//         }
//     }if($this->session->userdata('login')==True){
//       redirect('Admin');
//     }else{
//       $this->session->set_flashdata("logingagal","logingagal");
//       $this->load->view('admin/login_admin');
//     }
//   }
}
