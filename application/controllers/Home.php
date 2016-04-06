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
                $this->load->view('movie_genre_page.html',$data);
//                echo implode(" ",$data['bookdetails'][1]);
            }

            public function review_movie($movieid)
            {
                $data['reviews'] = $this->movie_model->get_review_by_movie($movieid);
                $this->load->view('movie_review.html',$data);
            }

            public function read_review($reviewid)
            {
                $data['read'] = $this->movie_model->get_full_review($reviewid);
                $this->load->view('full_review.html',$data);
            }

}
