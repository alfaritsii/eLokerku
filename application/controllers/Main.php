<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $this->load->view('template/v_head');
        $this->load->view('v_home');
        $this->load->view('template/v_foot');

    }
    public function loker(){
        $this->load->view('template/v_head');
        $this->load->view('v_loker');
        $this->load->view('template/v_foot');
    }
    public function pelatihan(){
        $this->load->view('template/v_head');
        $this->load->view('home');
        $this->load->view('template/v_foot');
    }
    public function magang(){
        $this->load->view('template/v_head');
        $this->load->view('home');
        $this->load->view('template/v_foot');
    }
    public function bimbingan(){
        $this->load->view('template/v_head');
        $this->load->view('home');
        $this->load->view('template/v_foot');
    }

}

/* End of file Controllername.php */
