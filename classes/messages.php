<?php
    class message {
        public static function setMsg($text, $type) {
            if($type == 'error') {
                $_SESSION['error_msg'] = $text;
            } else {
                $_SESSION['success_msg'] = $text;
            }
        }

        public static function display() {
            if(isset($_SESSION['error_msg'])) {
                echo '<div class="alert alert-warning">'.$_SESSION['error_msg'].'</div>';
                unset($_SESSION['error_msg']);
            } else if(isset($_SESSION['success_msg'])) {
                echo '<div class="alert alert-success">'.$_SESSION['success_msg'].'</div>';
                unset($_SESSION['success_msg']);            
            }
        }
    }

?>