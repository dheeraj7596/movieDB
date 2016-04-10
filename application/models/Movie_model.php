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
                        $query = $this->db->get('movie');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("movie");
                $this->db->where('genre1',$genre);
                $query = $this->db->get();
                return $query->result_array();
        }
        public function get_review_by_movie($movieid = FALSE)
        {
                if ($movieid === FALSE)
                {
                        $query = $this->db->get('review_table');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("review_table");
                $this->db->where('movieid',$movieid);
                $query = $this->db->get();
                return $query->result_array();
        }
        public function get_full_review($reviewid = FALSE)
        {
                if ($reviewid === FALSE)
                {
                        $query = $this->db->get('review_table');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("review_table");
                $this->db->where('reviewid',$reviewid);
                $query = $this->db->get();
                return $query->result_array();
        }
        public function review_insert($data)
        {
// Inserting in Table(review) of Database(Movie)
                $this->db->insert('review_table', $data);
        }
        public function get_movie_info($name)
        {
            if ($name === FALSE)
            {
                $query = $this->db->get('movie');
                return $query->result_array();
            }
            $this->db->select("*");
            $this->db->from("movie");
            $this->db->like('title',$name);
            $query = $this->db->get();
            return $query->result_array();
        }
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
            $this->db->insert('test', $data);
            if ($this->db->affected_rows() > 0) {
            return true;
            }
            } else {
            return false;
            }
        }

        // Insert person data in database
        public function person_insert($data) {

            // Query to check whether username already exist or not
            $condition = "name =" . "'" . $data['name'] . "'";
            $this->db->select('*');
            $this->db->from('person');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {

            // Query to insert data in database
            $this->db->insert('person', $data);
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
                $condition = "title =" . "'" . $data['title'] . "' AND " . "genre1 =" . "'" . $data['genre1'] . "' AND " ."language =" . "'" . $data['language'] . "' AND " ."country =" . "'" . $data['country'] . "' AND " ."image_name =" . "'" . $data['image_name']     . "'";
                $this->db->select("*");
                $this->db->from("movie");
                $this->db->where($condition);
                $query = $this->db->get();
                if ($query->num_rows() == 0)
                {
                     $this->db->insert('movie', $data);
                     return true;
                }
                else
                {
                    return false;
                }
        }
}
