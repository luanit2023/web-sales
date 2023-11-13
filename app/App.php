<?php
    class App {
        private $__controller, $__action, $__params;
        function __construct() {
            global $routes;
            if (!empty($routes['default_controller'])) {
                $this->__controller = $routes['default_controller'];
            }
            
            $this->__action = "index";
            $this->__params = array();

            $this->handleUrl();
        }
        function getUrl() {
            if (!empty($_SERVER['PATH_INFO'])) {
                $url = $_SERVER['PATH_INFO'];
            } else {
                $url = '/';
            }
            return $url;
        }

        public function handleUrl() {
            $url = $this->getUrl();
            $urlArr = array_filter(explode('/', $url));
            $urlArr = array_values($urlArr);

            // xu ly controller
            if (!empty($urlArr[0])) {
                $this->__controller = ucfirst($urlArr[0]);
            } else {
                $this->__controller = ucfirst($this->__controller);
            }

            if (file_exists('app/controller/'.($this->__controller).'.php')) {
                require_once 'controller/'.($this->__controller).'.php';
                
                // Kiem tra class $this->__controller ton tai
                if (class_exists($this->__controller)) {
                    $this->__controller = new $this->__controller();
                    unset($urlArr[0]);
                } else {
                    $this->loadError();
                }
                
            } else {
                $this->loadError();
            }

            // xu ly action
            if (!empty($urlArr[1])) {
                $this->__action = $urlArr[1];
                unset($urlArr[1]);
            }
            
            
            // xu ly param
            $this->__params = array_values($urlArr);
            
            // Kiem tra method ton tai
            if (method_exists($this->__controller, $this->__action)) {
                call_user_func_array(array($this->__controller, $this->__action), $this->__params);
            } else {
                $this->loadError();
            }
            
        }

        public function loadError($name='404') {
            require_once 'errors/'.$name.'.php';
        }
    }
?>