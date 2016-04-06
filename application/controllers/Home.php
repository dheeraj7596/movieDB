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
<<<<<<< HEAD
            {
=======
<<<<<<< HEAD
            {
=======
        {
>>>>>>> 304b5d9d80c9594e2d90e05b4545010bdf48b9d6
>>>>>>> d6003eaac46c4dbfa5ac413d5b07d37536ba055a
                $data['movieDetails'] = $this->movie_model->get_movie_by_genre($genre);
                $data['genre'] = $genre;
                $this->load->view('movie_genre_page.html',$data);
//                echo implode(" ",$data['bookdetails'][1]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d6003eaac46c4dbfa5ac413d5b07d37536ba055a
            }

            public function review_movie($movieid)
            {
                $data['reviews'] = $this->movie_model->get_review_by_movie($movieid);
                $this->load->view('movie_review.html',$data);
            }
<<<<<<< HEAD

            public function read_review($reviewid)
            {
                $data['read'] = $this->movie_model->get_full_review($reviewid);
                $this->load->view('full_review.html',$data);
            }
            public function write_review($asd)
            {
                $dbconnect = $this->load->database();
                $this->load->model('movie_model');


=======
=======
        }
>>>>>>> 304b5d9d80c9594e2d90e05b4545010bdf48b9d6

            public function read_review($reviewid)
            {
                $data['read'] = $this->movie_model->get_full_review($reviewid);
                $this->load->view('full_review.html',$data);
>>>>>>> d6003eaac46c4dbfa5ac413d5b07d37536ba055a
            }

}
