<?php
class Home extends CI_Controller {

	function index() {

	$this->load->model('Mmember');

	$this->load->view('header');
	$this->load->view('home');
	$this->load->view('footer');
	}
}
