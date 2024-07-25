<?php
    class Index extends Controller{

        public function __construct(){
        }

        public function index(){
            $data = [];

            $this->view('layout', 'pages/index', $data);
        }
    }
?>