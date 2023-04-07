<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function pintu2()
	{
		$this->load->view('pintu2');
	}
	public function pintu4()
	{
		$this->load->view('pintu4');
	}
	public function pintu7()
	{
		$this->load->view('pintu7');
	}
	public function pintu9()
	{
		$this->load->view('pintu9');
	}
	public function himbau()
	{
		$this->load->view('himbau');
	}
	
	public function video()
	{
		$this->load->view('video');
	}
}
