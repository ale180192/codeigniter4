<?php

class User extends CI_Controller{


    public function list(){
        $this->load->model('UserModel', 'user');
        $users = $this->user->all();
        $this->load->view('users/list', array('users' => $users ));
    }

    public function detail($num){
        echo "call to detail model";
        var_dump($num);
        $this->load->model('UserModel', 'user');
        $user = $this->user->get($pk);
        $this->load->view('users/detail', array('user' => $user ));    
    }


}