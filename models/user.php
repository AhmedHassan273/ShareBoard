<?php
    class UserModel extends model {
        public function register() {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $password = md5($post['password']);
            if($post['submit']) {
               if($post['name'] == "" || $post['email'] == "" || $post['password'] == "") {
                    message::setMsg('some fields are empty, please fill them all and try again.', 'error');
                    return;
               }
               $this->query('INSERT INTO users (name, email, password) values(:name, :email, :password)');
               $this->bind(':name', $post['name']);
               $this->bind(':email', $post['email']);
               $this->bind(':password', $password);
               $this->execute();

               if($this->lastinsertid()) {
                   message::setMsg('Ok, Welcome To Community', 'success');
                   header('location: '. ROOT_URL.'users/login');
               }
           }
           return;
        }

        public function login() {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $password = md5($post['password']);
            if($post['submit']) {
               $this->query('SELECT * FROM users WHERE email =:email AND password =:password');
               $this->bind(':email', $post['email']);
               $this->bind(':password', $password);
               $row = $this->single();
               if ($row) {
                   $_SESSION['is_logged_in'] = true;
                   $_SESSION['user_data'] = array(
                       "id" => $row['id'],
                       "name" => $row['name'],
                       "email" => $row['email']
                   );
                   header('location: '. ROOT_URL.'shares');     
               } else {
                   message::setMsg('Incorrect email or password','error');
               }
           }
           return;
        }
       
       public function __construct() {}
    }
?>