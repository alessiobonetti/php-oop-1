<?php 

class User {
    public $name;
    public $lastname;
    public $eta;
    public $email;
    public $password;
    public $username

    public function __construct($_email, $_password, $_username){
        $this->email = $_email;
        $this->password = $_password;
        $this->username = $_username;
    }
}

$user1 = new User ("alesine87@gmail.com" , "ale87" , "sibert");