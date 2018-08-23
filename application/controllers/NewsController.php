<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	
	}
	
	public function index()
	{
		$data ['news'] = $this->news_model->get_news();
		$data ['title'] = 'Arsip Berita';
		$data ['slug'] = 'Arsip Berita';
		// echo 'test';
		// print_r($data);die();
		$this->load->view('news/index', $data);
	
	}

	public function view($slug = NULL)
	{
		$data['news_item'] = $this->news_model->get_news($slug);
		// print_r('kaze');die();
		$this->load->view('news/view', $data);
	}
}
