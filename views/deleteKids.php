<?php 
    $pid = $_GET['id'];
    include_once '../repository/kidsRepository.php';

    $prod = new KidsRepository();
    $prod->delete($pid);
    header('location: kidsDashbord.php');
?>