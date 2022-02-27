<?php 
include_once '../repository/womenRepository.php';
include_once '../models/produkti.php';

session_start();

if(isset($_POST['submit'])){
    if(empty($_POST['image']) || empty($_POST['description']) || empty($_POST['price']) ){
        echo "<script> alert('Ju letemi mbushni te dhenat!!'); </script>";
    }else{
        $image = $_POST['image'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $produkti = new Produkti('', $image, $description, $price);
        $prodRepo = new KidsRepository();

        $prodRepo->insertProdukti($produkti);
        echo "<script> alert('Ju Upladuat me sukses!'); </script>";
 
    }
}

?>