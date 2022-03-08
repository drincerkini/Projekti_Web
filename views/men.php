<?php session_start(); 


    $hide = "";
    if(!isset($_SESSION['email'])){
        header("location: register.php");
    }
    else {

        if($_SESSION['role'] == 'admin'){
            $hide = "";
        }else{
            $hide = "hide";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/products.css">
</head>
<body>
    
<!-- pjesa e header -->
    <div class="header">
        <?php  include '../HeaderFooter/header.php' ?>
    </div>


<!--pjesa e cover page -->
    <div class="container" style="background: radial-gradient(#fff, #2E2C2F);">
        <div class="row">

            <div class="col-2">
                <h1>Men's Best Collection<br> Are Here!</h1>
                <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit  quas maiores!</p>
                <button class="btn"><a href="" style="color: #fff;">Me shumë</a></button>
            </div>

            <div class="col-2">
                <img src="../images/men/men-5.png" >
            </div>

        </div>
    </div>

    <!-- llojet e reklamave te produkteve -->

    <div class="categories">

        <div class="small-container">

        <h2 class="title">Reklamë</h2>
            <div class="row">

                <div class="col-3">
                    <img src="../images/men/nike-10.png">
                </div>
                <div class="col-3">
                    <img src="../images/men/men-2.png">
                </div>
                <div class="col-3">
                    <img src="../images/men/nike-11.png">
                </div>
                
            </div>
        </div>
    </div>
    <!--pjesa e produkteve ne trend-->

    <div class="small-container">

        <h2 class="title">Produktet ne trend</h2>

        <div class="row">
            
            <?php 
                 include_once '../repository/menRepository.php';

                $prodRepo = new MenRepository;
                $prod = $prodRepo->getAllProducts();

                foreach($prod as $produktet){
                    echo "
                        <div class='col-4'> 
                            <img src='../images/men/$produktet[image]' >
                            <h4>$produktet[description]</h4>
                            <p>$produktet[price]€</p>
                        </div>
                    ";
                }
            ?>

        </div>

        
        <!-- pjesa e ofertes -->

        <div class="oferta">

            <div class="small-container">

                <div class="row">

                    <div class="col-2">
                        <img src="../images/men/offer-3.png" class="offer-img">
                    </div>

                    <div class="col-2">
                        <p>Exclusively Available on DF Store</p>
                        <h1>OFERTA DITORE</h1>
                        <p class="p-oferta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, natus magnam odit tempora minima facere, temporibus excepturi, ex est maiores deserunt velit sint cum quisquam quas laudantium rerum ipsa accusamus.</p>
                        <button  class="btn"><a href="" style="color: #fff;">Buy Now</a></button>
                    </div>

                </div>

            </div>

        </div>

    </div>

<!--pjesa e footer-it -->
    <div class="footer">
        <?php  include '../HeaderFooter/footer.php' ?>
    </div>


</body>
</html>

<?php }?>