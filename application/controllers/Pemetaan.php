<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemetaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
    }
    public function index()
    {
        $this->load->view('menu/v_map');
    }
    public function absen_json()
    {
        $data = $this->db->get('tempat')->result();
        echo json_encode($data);
    }
}
