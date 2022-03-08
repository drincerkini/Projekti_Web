<?php 
    $pid = $_GET['id'];
    include_once '../repository/menRepository.php';

    $prod = new MenRepository();
    $prod->delete($pid);
    header('location: menDashbord.php');
?>