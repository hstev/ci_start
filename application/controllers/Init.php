<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("templates/head");
    $this->load->view("landing/index");
    $this->load->view("templates/footer");
  }
}