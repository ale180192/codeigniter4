<?php
class UserModel extends CI_Model{

    public function all(){
        $users = array(array('username' => 'ale1801912', 'id' => 1),
                    array('username' => 'asddsa', 'id' => 2)
                        );  
        return $users;
    }

    public function get($pk){
        $user = array('username' => 'ale1801912', 'id' => 1);
        return $user;
    }

}