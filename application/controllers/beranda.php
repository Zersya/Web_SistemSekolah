<?php
  /**
   *
   */
  class Beranda extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
    }

    function index(){
      $this->load->view('v_muridutama_beranda');
    }

    
  }

 ?>