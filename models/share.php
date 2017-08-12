<?php
    class ShareModel extends model {
        public function index() {
            $this->query('SELECT * FROM shares ORDER BY create_date DESC');
            $rows = $this->resultSet();
            return $rows;
       }

       public function add()
       {
           $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           if($post['submit']) {
               if($post['title'] == "" || $post['body'] == "" || $post['link'] == "") {
                    message::setMsg('some fields are empty, please fill them all and try again.', 'error');
                    return;
               }
               $this->query('INSERT INTO shares (title, body, link, user_id) values(:title, :body, :link, :user_id)');
               $this->bind(':title', $post['title']);
               $this->bind(':body', $post['body']);
               $this->bind(':link', $post['link']);
               $this->bind(':user_id', 1);
               $this->execute();

               if($this->lastinsertid()) {
                   header('location: '. ROOT_URL.'shares');
               }
           }
           return;
       }
       public function __construct() {}
    }
?>