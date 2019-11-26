<?php
class Blog extends CI_Controller {

        public function __construct(){
                parent::__construct();
                echo 'call to construct class';
                echo '</br>';
        }


        public function _output($content){
                echo $content;
        }

        public function index()
        {
                $this->load->view('blogview');
                $this->load->model('UserModel', 'user');
                $this->user->all();

                // load helper
                echo '</br>';
                echo 'use of helpers';
                echo '</br>';
                $this->load->helper('utils');
                scape_html('dfsdf');
        }

        public function comments(){
                echo 'this is comments';
        }


        public function shoes($type, $id){
                echo "$type</br>";
                echo $id;
        }

}