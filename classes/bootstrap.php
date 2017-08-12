<?php
    class Bootstrap {

        private $controller;
        private $action;
        private $request;

        public function __construct($request) {
            $this->request = $request;
            if ($this->request['controller'] == "") {
                $this->controller = 'home';
            } else {
                $this->controller = $this->request['controller'];
            }
            if($this->request['action'] == "") {
                $this->action = 'index';
            } else {
                $this->action = $this->request['action'];
            }
        }

        public function createController() {
            if(class_exists($this->controller)) {
                $parent = class_parents($this->controller);
                if (in_array("controller", $parent)) {
                    if(method_exists($this->controller, $this->action)) {
                        return new $this->controller($this->action, $this->request);
                    } else {
                        echo '<h1>method doesn\'t exist</h1>';
                        return;
                    }
                } else {
                    echo '<h1>Base controller doesn\'t exist</h1>';
                    return;
                }
            } else {
                echo '<h1>controller class doesn\'t exist</h1>';
                return;
            }
        }
    }
?>