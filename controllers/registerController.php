<?php 


include_once '../repository/userRepository.php';
include_once '../models/user.php';

session_start();

if(isset($_POST['register'])){
    if( empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password']) ){
        echo "<script> alert('Ju letemi jepini te dhenat e juaja!'); </script>";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User('', $name, $surname, $email, $password, '');
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
        
    }
}
?>