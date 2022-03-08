<?php 
    $pid = $_GET['id'];
    include_once '../repository/womenRepository.php';

    $prod = new WomenRepository();
    $prod->delete($pid);
    header('location: womenDashbord.php');
?>