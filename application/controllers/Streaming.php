<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Streaming extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url_helper']);
		$this->load->model('Video_streaming_model');
		$this->Video_streaming_model->start();
	   exit;
		//$this->load->library('session');
	}

	public function index()
	{
	    $this->Video_streaming_model->start();
	   exit;

	}

	public function video()
	{
		$file_url = 'assets/video/7_como_es_tu_historia.mp4';
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary"); 
		header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
		readfile($file_url); 

	}
}
