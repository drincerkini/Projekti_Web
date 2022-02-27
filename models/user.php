<?php 

class User{
    private $uid;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $role;

    function __construct($uid, $name, $surname, $email, $password, $role){
        
        $this->uid=$uid;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    function getUid(){
        return $this->id;
    }
    function setUid($uid){
        $this->uid=$uid;
    }

    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }

    function getSurname(){
        return $this->surname;
    }
    function setSurname($surname){
        $this->surname = $surname;
    }

    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getPassword(){
        return $this->password;
    }
    function setPassword($password){
        $this->password = $password;
    }

    function getRole(){
        return $this->role;
    }
    function setRole($role){
        $this->role = $role;
    }

}

?>