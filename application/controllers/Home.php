<?php
// session_start();
class Home extends CI_Controller {


        public function __construct()
        {
                parent::__construct();
                $this->load->model('movie_model');
                $this->load->helper('url_helper');
                $this->load->helper('form');
                $this->load->helper('file');
                // Load form validation library
                $this->load->library('form_validation');

                // Load session library
                $this->load->library('session');

                // Load database
                $this->load->model('movie_model');
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

            // public function read_review($reviewid)
            // {
            //     $data['read'] = $this->movie_model->get_full_review($reviewid);
            //     $this->load->view('full_review.html',$data);
            // }
            public function write_review($asd)
            {
                $dbconnect = $this->load->database();
                $this->load->model('movie_model');

        }
            public function read_review($reviewid)
            {
                $data['read'] = $this->movie_model->get_full_review($reviewid);
                $this->load->view('full_review.html',$data);
            }

        // Show registration page
        public function user_registration_show() {
            $this->load->view('registration_form');
        }

        // Validate and store registration data in database
        public function new_user_registration() {

            // Check validation for user input in SignUp form
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('registration_form');
            } else {
                $data = array(
                'username' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'password' => $this->input->post('password')
                );
                $result = $this->movie_model->registration_insert($data);
                if ($result == TRUE) {
                    $data['message_display'] = 'Registration Successfully !';
                    $this->load->view('login_form', $data);
                } else {
                    $data['message_display'] = 'Username already exist!';
                    $this->load->view('registration_form', $data);
                }
            }
        }

        // Check for user login process
        public function user_login_process() {


            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                if(isset($this->session->userdata['logged_in'])){
                    $this->load->view('admin_page');
                }else{
                    $this->load->view('login_form');
                }
            } else {
                $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
                );
                $result = $this->movie_model->login($data);
                if ($result == TRUE) {

                    $username = $this->input->post('username');
                    $result = $this->movie_model->read_user_information($username);
                    if ($result != false) {
                    $session_data = array(
                    'username' => $result[0]->username,
                    // 'email' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('admin_page');
                    }
                } else {
                    $data = array(
                    'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('login_form', $data);
                }
            }
        }


        // Logout from admin page
        public function logout() {

            // Removing session data
            $sess_array = array(
            'username' => ''
            );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully Logout';
            $this->load->view('login_form', $data);
        }



            // public function review_submit($page = 'insert')

}
