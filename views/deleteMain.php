<?php 
    $pid = $_GET['id'];
    include_once '../repository/mainRepository.php';

    $prod = new MainRepository();
    $prod->delete($pid);
    header('location: mainDashbord.php');
?>