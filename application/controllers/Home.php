<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


        public function __construct()
        {
                parent::__construct();
                $this->load->model('movie_model');
                $this->load->helper('url_helper');
        }
        public function index()
	{

//                $data['title'] = 'Books archive';
//		$this->load->view('template/header',$data);
//		$this->load->view('displayBook',$data);
//		$this->load->view('template/footer');
                $this->load->view('index.php');
	}
            public function genre($genre)
        {
                $data['movieDetails'] = $this->movie_model->get_movie_by_genre($genre);
                $data['genre'] = $genre;
<<<<<<< HEAD
                $this->load->view('movie_genre_page.html',$data);
=======
                $this->load->view('test.html',$data);
>>>>>>> fde2a1402d7a0ceaf578e40eb618709ac743fc51
//                echo implode(" ",$data['bookdetails'][1]);
        }


}
