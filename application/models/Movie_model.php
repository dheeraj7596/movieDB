<?php
class Movie_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_movie_by_genre($genre = FALSE)
        {
                if ($genre === FALSE)
                {
                        $query = $this->db->get('test1');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("test1");
                $this->db->where('genre',$genre);
                $query = $this->db->get();
                return $query->result_array();
        }
        public function get_review_by_movie($movieid = FALSE)
        {       
                if ($movieid === FALSE)
                {
                        $query = $this->db->get('test2');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("test2");
                $this->db->where('movieid',$movieid);
                $query = $this->db->get();
                return $query->result_array();
        }
        public function get_full_review($reviewid = FALSE)
        {
                if ($reviewid === FALSE)
                {
                        $query = $this->db->get('test2');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("test2");
                $this->db->where('reviewid',$reviewid);
                $query = $this->db->get();
                return $query->result_array();
        }
        public function review_insert($data)
        {
// Inserting in Table(review) of Database(Movie)
                $this->db->insert('test2', $data);
        }
        public function get_movie_info($name)
        {
            if ($name === FALSE)
            {
                $query = $this->db->get('moviedetails');
                return $query->result_array();
            }
            $this->db->select("*");
            $this->db->from("test1");
            $this->db->like('name',$name);
            $query = $this->db->get();
            return $query->result_array(); 
        }
        // public function get_book_info($isbn = FALSE)
        // {
        //         if ($isbn === FALSE)
        //         {
        //                 $query = $this->db->get('bookdetails');
        //                 return $query->result_array();
        //         }
        //         $this->db->select("*");
        //         $this->db->from("bookdetails");
        //         $this->db->where('isbn',$isbn);
        //         $query = $this->db->get();
        //         return $query->result_array();
        // }

        // public function get_book_info_name($title = FALSE)
        // {
        //         if ($title === FALSE)
        //         {
        //                 $query = $this->db->get('bookdetails');
        //                 return $query->result_array();
        //         }
        //         $this->db->select("*");
        //         $this->db->from("bookdetails");
        //         $this->db->like('title',$title);
        //         $query = $this->db->get();
        //         return $query->result_array();
        // }
        // public function get_author_books($author = FALSE)
        // {
        //         if ($author === FALSE)
        //         {
        //                 $query = $this->db->get('bookdetails');
        //                 return $query->result_array();
        //         }
        //         $this->db->select("*");
        //         $this->db->from("bookdetails");
        //         $this->db->where('author',urldecode($author));
        //         $query = $this->db->get();
        //         return $query->result_array();
        // }
        // public function get_author_info($author = FALSE)
        // {
        //         if ($author === FALSE)
        //         {
        //                 $query = $this->db->get('authordetails');
        //                 return $query->result_array();
        //         }
        //         $this->db->select("*");
        //         $this->db->from("authordetails");
        //         $this->db->where('name',urldecode($author));
        //         $query = $this->db->get();
        //         return $query->result_array();
        // }
        // Insert registration data in database
        public function registration_insert($data) {

            // Query to check whether username already exist or not
            $condition = "username =" . "'" . $data['username'] . "'";
            $this->db->select('*');
            $this->db->from('test');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {

            // Query to insert data in database
            $this->db->insert('usertest', $data);
            if ($this->db->affected_rows() > 0) {
            return true;
            }
            } else {
            return false;
            }
        }

        // Read data using username and password
        public function login($data) {

            $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
            $this->db->select('*');
            $this->db->from('test');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
            return true;
            } else {
            return false;
            }
        }

        // Read data from database to show data in admin page
        public function read_user_information($username) {

            $condition = "username =" . "'" . $username . "'";
            $this->db->select('*');
            $this->db->from('test');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
            return $query->result();
            } else {
            return false;
            }
        }
        public function movie_insert($data)
        {
// Inserting in Table(review) of Database(Movie)
                $this->db->insert('movie', $data);
        }
}
