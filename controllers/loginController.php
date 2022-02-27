<?php 
    include_once '../repository/userRepository.php';

    if(isset($_POST['login'])){
        if(empty($_POST['emailL']) || empty($_POST['passwordL'])){
            echo "<script> alert('Ju letemi jepini te dhenat e juaja!'); </script>";
        }else{
            $email = $_POST['emailL'];
            $password = $_POST['passwordL'];
            
            $userRepo = new UserRepository;
            $user = $userRepo->getUserByEmail($email, $password);

            if($user){
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['role'] = $user['role'];
                header("location:../index.php");
            }else{
                echo "<script> alert('Email dhe Password nuk jan te sakta!'); </script>";
            }
     
        }
    }

?>