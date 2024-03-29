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
        public function get_allreview_of_id($id = FALSE)
        {
                if ($id === FALSE)
                {
                        $query = $this->db->get('review_table');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("review_table");
                $this->db->where('userid',$id);
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
                $sql = "SELECT R.reviewid, R.heading, R.body, U.username, R.movieid, R.rating FROM review_table AS R, test AS U WHERE R.reviewid=? AND U.id=R.userid";
                // $this->db->select("*");
                // $this->db->from("review_table");
                // $this->db->where('reviewid',$reviewid);
                // $query = $this->db->get();
                $query=$this->db->query($sql,$reviewid);
                return $query->result_array();
        }
        public function review_insert($data)
        {
// Inserting in Table(review) of Database(Movie)
                $this->db->insert('review_table', $data);
        }
        public function get_movie_info($name = FALSE)
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
        public function get_movie_info_by_pid($pid)
        {
            $sql = "SELECT M.id, M.title, M.genre1, M.language, M.country, M.year, M.story, M.image_name, M.video FROM movie as M, person as P, work as W Where P.id = ? and P.id = W.personid and W.movieid = M.id";
            $query=$this->db->query($sql, $pid);
            return $query->result_array();
        }
        public function get_avg_rating ($movieid)
        {
            $sql = "SELECT avg(rating) as aver FROM review_table Where movieid = ?";
            $query=$this->db->query($sql, $movieid);
            return $query->result_array();
        }
        public function get_movie_info_by_id($name = FALSE)
        {
            if ($name === FALSE)
            {
                $query = $this->db->get('movie');
                return $query->result_array();
            }
            $this->db->select("*");
            $this->db->from("movie");
            $this->db->where('id',$name);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function get_my_review($userid = FALSE)
        {
            if ($userid === FALSE)
            {
                $query = $this->db->get('review_table');
                return $query->result_array();
            }
            $this->db->select("*");
            $this->db->from("review_table");
            $this->db->where('userid',$userid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function want_to_see($data)
        {
            $condition = "userid =" . "'" . $data['userid'] . "' AND " . "movieid =" . "'" . $data['movieid'] . "'";
            $this->db->select('*');
            $this->db->from('watchlist');
            $this->db->where($condition);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {
               return false;
            }
            else {
               return true;
            }
        }
        public function get_comments($reviewid = FALSE)
        {
            if ($reviewid === FALSE)
            {
                $query = $this->db->get('comment');
                return $query->result_array();
            }
            $sql = "SELECT C.id, C.reviewid, U.username, C.body FROM comment AS C, test AS U WHERE C.reviewid=? AND U.id=C.userid";
            // $this->db->select("*");
            // $this->db->from("comment");
            // $this->db->where('reviewid',$reviewid);
            // $query = $this->db->get();
            $query=$this->db->query($sql,$reviewid);
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
            $this->db->insert('test', $data);
            if ($this->db->affected_rows() > 0) {
            return true;
            }
            } else {
            return false;
            }
        }
        public function add_to_watchlist($data)
        {
            $condition = "userid =" . "'" . $data['userid'] . "' AND " . "movieid =" . "'" . $data['movieid'] . "'";
            $this->db->select('*');
            $this->db->from('watchlist');
            $this->db->where($condition);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {

            // Query to insert data in database
            $this->db->insert('watchlist', $data);
            if ($this->db->affected_rows() > 0) {
            return true;
            }
            } else {
            return false;
            }
        }
        public function remove_from_watchlist($data)
        {
            $condition = "userid =" . "'" . $data['userid'] . "' AND " . "movieid =" . "'" . $data['movieid'] . "'";
            $this->db->select('*');
            $this->db->from('watchlist');
            $this->db->where($condition);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {

            // Query to insert data in database
            $this->db->delete('watchlist', $data);
            if ($this->db->affected_rows() > 0) {
            return true;
            }
            } else {
            return false;
            }
        }
        public function get_my_watchlist($id)
        {
            // $sql = "SELECT C.id, C.reviewid, U.username, C.body FROM comment AS C, test AS U WHERE C.reviewid=? AND U.id=C.userid";
            $sql = "SELECT M.id, M.title, M.genre1, M.language, M.country, M.year, M.story, M.image_name, M.video FROM movie as M, watchlist as W Where M.id=W.movieid and W.userid=?";
            $query=$this->db->query($sql,$id);
            return $query->result_array();
        }
        public function get_cast_by_id($movieid)
        {
            $sql = "SELECT person.id, person.name , T.plays from person, work as T  where T.movieid=? and T.role='actor' and person.id = T.personid";
            $query=$this->db->query($sql,$movieid);
            return $query->result_array();
        }
        public function get_director_id($movieid)
        {
            $sql = "SELECT person.id, person.name from person, work as T  where T.movieid=? and T.role='director' and person.id = T.personid";
            $query=$this->db->query($sql,$movieid);
            return $query->result_array();
        }
        public function get_about_person($pid)
        {
            $this->db->select("*");
            $this->db->from("person");
            $this->db->where('id',$pid);
            $query = $this->db->get();
            return $query->result_array();
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
        // Insert work data in database
        public function new_work($data) {

            // Query to check whether already exist or not
            $condition = "movieid =" . "'" . $data['movieid'] ."' AND " . "personid =" . "'" . $data['personid'] . "'";
            $this->db->select('*');
            $this->db->from('work');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {

            // Query to insert data in database
            $this->db->insert('work', $data);
            if ($this->db->affected_rows() > 0) {
            return true;
            }
            } else {
            return false;
            }
        }
        public function get_movieid($moviename){
          $this->db->select("id");
          $this->db->from("movie");
          $this->db->where('title',$moviename);
          $query = $this->db->get();
          // echo $query;
          if ($query->num_rows() == 0) {
            return 0;
          }
          else{
          return $query->result_array();
          // foreach($query->result() as $row) {
          //     return $row->id;
          // }
        }
        }
        public function get_personid($personname){
          $this->db->select("id");
          $this->db->from("person");
          $this->db->where('name',$personname);
          $query = $this->db->get();
          return $query->result_array();
          if ($query->num_rows() == 0) {
            return 0;
          }
          else{
          return $query->result_array();
          // foreach($query->result() as $row) {
          //     return $row("id");
          // }
          //
          // return $result;
        }
        }

        //query to get all users
        public function get_users($userid=FALSE){
          if ($userid === FALSE)
          {
              $query = $this->db->get('test');
              return $query->result_array();
          }
          $this->db->select("*");
          $this->db->from("test");
          $this->db->where('id',$userid);
          $query = $this->db->get();
          // $query=$this->db->query($sql,$reviewid);
          return $query->result_array();
        }

        //query to get all persons
        public function get_persons($userid=FALSE){
          if ($userid === FALSE)
          {
              $query = $this->db->get('person');
              return $query->result_array();
          }
          $this->db->select("*");
          $this->db->from("person");
          $this->db->where('id',$userid);
          $query = $this->db->get();
          // $query=$this->db->query($sql,$reviewid);
          return $query->result_array();
        }

        public function delete_user($id){
          $this->db->select("*");
          $this->db->from("test");
          $this->db->where('id',$id);
          $query = $this->db->get();
          if ($query->num_rows() == 1) {
            $sql = "UPDATE test set class=8,password='adminprotected' where id=?";
            $query=$this->db->query($sql,$id);
            return true;
          } else {
          return false;
          }
        }

        public function update_user_class($data){
          $this->db->select("*");
          $this->db->from("test");
          $this->db->where('id',$data['id']);
          $query = $this->db->get();
          if ($query->num_rows() == 1) {
            $sql = "UPDATE test set class=? where id=?";
            $query=$this->db->query($sql,array($data['class'],$data['id']));
            return true;
          } else {
          return false;
          }
        }
        public function update_person($id){
          $this->db->select("*");
          $this->db->from("person");
          $this->db->where('id',$id);
          $query = $this->db->get();
          if ($query->num_rows() == 1) {
            $sql = "UPDATE test set class=8,password='adminprotected' where id=?";
            $query=$this->db->query($sql,$id);
            return true;
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
        public function store_my_comment($data)
        {
            $this->db->insert('comment', $data);
            if ($this->db->affected_rows() > 0) {
            return true;
            } else {
              return false;
            }
        }
}
