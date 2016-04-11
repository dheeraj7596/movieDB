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
                // $this->load->view('login_form.php');
                $this->load->view('login.html');
	}
            public function genre($genre)
            {
                $data['movieDetails'] = $this->movie_model->get_movie_by_genre($genre);
                $data['genre'] = $genre;
                $this->load->view('movie_genre_page.html',$data);
            }

            public function review_movie($movieid)
            {
                $data['reviews'] = $this->movie_model->get_review_by_movie($movieid);
                $this->load->view('movie_review.html',$data);
                // $this->load->view('blog-single.html',$data);
            }

            // public function read_review($reviewid)
            // {
            //     $data['read'] = $this->movie_model->get_full_review($reviewid);
            //     $this->load->view('full_review.html',$data);
            // }
            public function write_new_review()
            {
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

                //Validating Heading Field
                $this->form_validation->set_rules('dheading', 'heading', 'required');

                //Validating Body Field
                $this->form_validation->set_rules('dbody', 'body', 'required|max_length[1000]');


                if ($this->form_validation->run() == FALSE) {
                    $data['message'] = 'Review not written';
                    $this->load->view('write_review', $data);
                } else {
                  //Setting values for tabel columns
                    $data = array(
                    'heading' => $this->input->post('dheading'),
                    'movieid' => $this->input->post('dmovieid'),
                    'body' => $this->input->post('dbody'),
                    'rating' => $this->input->post('drating')
                    );
                    // $data['rating'] = 9;
                //     if(isset()){
                //     $this->load->view('admin_page');
                // }else{
                //     $this->load->view('login_form');
                // }
                    $data['userid'] = $this->session->userdata['logged_in']['id'];
                    // $data['movieid'] = ;
                    $this->movie_model->review_insert($data);
                    $data['message'] = 'Data Inserted Successfully';
                    //Loading View
                    $this->load->view('index');
                }

            }
            public function new_review_page($movieid)
            {
                $data['movieid'] = $movieid;
                $this->load->view('write_review', $data);
            }
            public function read_review($reviewid)
            {
                $data['read'] = $this->movie_model->get_full_review($reviewid);
                $data['comments'] = $this->movie_model->get_comments($reviewid);
                //$this->load->view('full_review.html',$data);
                $this->load->view('full_review2.html',$data);
            }

        // Show registration page
        public function user_registration_show() {
            $this->load->view('registration_form');
        }

        // Validate and store registration data in database
        public function new_user_registration() {

            // Check validation for user input in SignUp form
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            // $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login.html');
            } else {
                $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'age' => $this->input->post('age'),
                'country' => $this->input->post('country')
                );
                $result = $this->movie_model->registration_insert($data);
                if ($result == TRUE) {
                    $data['message_display'] = 'Registration Successfully !';
                    $this->load->view('login.html', $data);
                } else {
                    $data['message_display'] = 'Username already exist!';
                    $this->load->view('login.html', $data);
                }
            }
        }
        // Check for user login process
        public function user_login_process() {


            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                if(isset($this->session->userdata['logged_in'])){
                    $this->load->view('index');
                }else{
                    $this->load->view('login.html');
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
                    'id' => $result[0]->id
                    // 'email' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('index');
                    }
                } else {
                    $data = array(
                    'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('login.html', $data);
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
            $this->load->view('login.html', $data);
        }

        public function add_new_person(){
          $this->load->view('addperson.html');
        }
        // Add new person in person table
        public function new_person() {

            // Check validation for user input in SignUp form
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('country', 'Country', 'trim|required');
            $this->form_validation->set_rules('age', 'Age', 'trim|required');
            $this->form_validation->set_rules('picture', 'Picture', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('addperson.html');
            } else {
                $data = array(
                'name' => $this->input->post('name'),
                'picture' => $this->input->post('picture'),
                'age' => $this->input->post('age'),
                'country' => $this->input->post('country')
                );
                $result = $this->movie_model->person_insert($data);
                if ($result == TRUE) {
                    // $data['message_display'] = 'Registration Successfully !';
                    $this->load->view('login.html', $data);
                } else {
                    $data['message_display'] = 'Name already exist!';
                    $this->load->view('addperson.html', $data);
                }
            }
        }

        public function movie_info_name()
        {
            $data['movieDetails'] = $this->movie_model->get_movie_info($_POST["search-term"]);
            $this->load->view('movie_genre_page.html',$data);
        }
        public function new_movie()
        {
            $this->load->view('add_movie');
        }
        public function add_new_movie()
        {
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('dtitle', 'title', 'required|max_length[50]');

            if ($this->form_validation->run() == FALSE) {
                $data['message'] = 'Movie not added';
                $this->load->view('add_movie', $data);
            } else {
                $data = array(
                'title' => $this->input->post('dtitle'),
                'genre1' => $this->input->post('genre'),
                'language' => $this->input->post('language'),
                'country' => $this->input->post('country'),
                'year' => $this->input->post('dyear'),
                'image_name' => $this->input->post('dimgname')
                );
                if($this->movie_model->movie_insert($data))
                {
                    $data['message'] = 'Data Inserted Successfully';
                    $this->load->view('index');
                }
                else
                {
                    $data['message'] = 'Movie already present in database';
                    $this->load->view('add_movie', $data);
                }
                //Loading View

            }


        }
        public function your_review($userid)
        {
            $data['reviews'] = $this->movie_model->get_my_review($userid);
            $this->load->view('movie_review.html',$data);
        }
        public function write_comment()
        {
          // if (isset($this->session->userdata['logged_in'])) {
          // $id = ($this->session->userdata['logged_in']['id']);
          // } else {
          // $id = '2';
          // }
          $data = array(
          'body' => $this->input->post('message'),
          // 'userid' => $this->input->$id,
          'reviewid' => $this->input->post('reviewid')
          );
          $data['userid'] = $this->session->userdata['logged_in']['id'];
            if($this->movie_model->store_my_comment($data))
            {
              $this->read_review($data['reviewid']);
            }
        }
        public function add_watchlist()
        {
            $data = array(
                'movieid'=> $this->input->post('movieid')
                );
            $data['userid'] = $this->session->userdata['logged_in']['id'];
            if($this->movie_model->add_to_watchlist($data))
            {
                $data['message'] = 'Movie added to watchlist';
                $this->show_movie($data['movieid']);
            }
            else
            {
                echo "Already present in watch list";
            }
        }
        public function show_movie($movieid)
        {
            $var = array(
                'movieid'=> $movieid
                );
            $var['userid']=$this->session->userdata['logged_in']['id'];
            if ($this->movie_model->want_to_see($var))
            {
                // $data = array(

                //     );
                $data['message'] = 'Already in watchlist';
                $data['flag'] = 1;             
            }
            else
            {
                $data['message'] = 'Add to watchlist';                
                $data['flag'] = 0;
            }
            $data['movieDetails'] = $this->movie_model->get_movie_info_by_id($movieid);

            $this->load->view('product-details.html',$data);
        }
        // public function story($movieid)
        // {
        //     $data['story'] = $this->movie_model->get_story($movieid);
        //     $this->load->view('product-details.html',$data);   
        // }
}
