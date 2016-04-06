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
<<<<<<< HEAD
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
=======
>>>>>>> 304b5d9d80c9594e2d90e05b4545010bdf48b9d6
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
}

