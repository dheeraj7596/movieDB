<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


        public function __construct()
        {
                parent::__construct();
                // $this->load->model('books_model');
                // $this->load->helper('url_helper');
        }
        public function index()
	{
//                $data['bookdetails'] = $this->books_model->get_books();
//                $data['title'] = 'Books archive';
//		$this->load->view('template/header',$data);
//		$this->load->view('displayBook',$data);
//		$this->load->view('template/footer');
                $this->load->view('index.html');
	}


}
