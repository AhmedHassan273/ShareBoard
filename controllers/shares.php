<?php
    class shares extends controller {
        protected function index() {
            $viewmodel = new ShareModel();
            $this->returnView($viewmodel->index(), true);
        }

        protected function add() {
            if(!isset($_SESSION['is_logged_in'])) {
                header('location: '. ROOT_URL);
            }
            $viewmodel = new ShareModel();
            $this->returnView($viewmodel->add(), true);
        }
    }
?>