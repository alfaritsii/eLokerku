<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('login')==True){
            redirect('Main');
        }else{
            $this->load->view('template/v_head');
            $this->load->view('login');
        }
    }
    public function register()
    {
        $this->load->view('template/v_head');
        $this->load->view('register');
    }
    public function test()
    {
        $this->load->view('template/v_head');
        $this->load->view('regisberhasil');
    }
    public function actionregister()
    {
        if($this->session->userdata('login')==True){
            redirect('Main');
        }else{
            $data = array(
                'nik' => $_POST['nik'],
                'namalengkap' => $_POST['namalengkap'],
                'alamat' => $_POST['alamat'],
                'jenis_kelamin' => $_POST['jenis_kelamin'],
                'tanggal_lahir' => $_POST['tanggal_lahir'],
                'tempat_lahir' => $_POST['tempatlahir'],
                'email' => $_POST['email'],
                'telp' => $_POST['telp'],
                'password' => $_POST['password']
            );
            if($this->db->insert('users', $data)){
                $this->load->view('template/v_head');
                $this->load->view('regisberhasil');
            }else{
                $this->load->view('template/v_head');
                $this->load->view('regisgagal');
            }
                        
        }
    }
    function aksilogin()
    {
        if($this->input->method(TRUE) == 'POST' && !empty($_POST)){
            $input['username'] = $this->input->post('username');
            $input['password'] = $this->input->post('password');
            $this->Auth_models->ceklogin($input);
        }else {
            $this->session->set_flashdata('logingagal','login hahaha');
            $this->load->view('template/v_head');
            $this->load->view('login');
        }
    }

}

/* End of file Auth.php */
