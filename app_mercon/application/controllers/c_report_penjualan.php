<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_report_penjualan extends CI_Controller {

    public function index()
    {
        $this->load->view('report_penjualan');    
    }

 }
