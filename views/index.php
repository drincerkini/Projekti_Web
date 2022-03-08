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
    <title>DF Store</title>
    <link rel="stylesheet" href="../css/style.css">

    <style>
        .hide{
            display: none;
        }
    </style>
</head>
<body>

    <!--pjesa e header-->
    <div class="header">
        <?php  include '../HeaderFooter/header.php' ?>
    </div>

    <!--pjesa e cover page -->

    <div class="container">
        <div class="row">

            <div class="col-2">
                <h1>Coolest Trends <br> Are Here!</h1>
                <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit  quas maiores!</p>
                <button class="btn"><a href="" style="color: #fff;">Me shumë</a></button>
            </div>

            <div class="col-2">
                <img src="../images/index/category-3.jpg" >
            </div>

        </div>
    </div>

    <!-- llojet e reklamave te produkteve -->

    <div class="categories">

        <div class="small-container">
        <h2 class="title">Reklamë</h2>
            <div class="row">

                <div class="col-3">
                    <img src="../images/trend-6.jpg">
                </div>

                <div class="col-3">
                    <img src="../images/index/prod-2.png">
                </div>

                <div class="col-3">
                    <img src="../images/index/men-1.png">
                </div>
                
            </div>
        </div>
    </div>
    <!--pjesa e produkteve ne trend-->

    <div class="small-container">

        <h2 class="title">Produktet ne trend</h2>

        <div class="row">
        <?php 
                 include_once '../repository/mainRepository.php';

                $prodRepo =new MainRepository;
                $produktet = $prodRepo->getAllProducts();

                foreach($produktet as $prod){
                    echo "
                        <div class='col-4'> 
                            <img src='../images/index/$prod[image]' >
                            <h4>$prod[description]</h4>
                            <p>$prod[price]€</p>
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
                        <img src="../images/index/trend-1.jpg" class="offer-img">
                    </div>

                    <div class="col-2">
                        <p>Exclusively Available on DF Store</p>
                        <h1>OFERTA E DITES </h1>
                        <p class="p-oferta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, natus magnam odit tempora minima facere, temporibus excepturi, ex est maiores deserunt velit sint cum quisquam quas laudantium rerum ipsa accusamus.</p>
                        <button  class="btn"><a href="" style="color: #fff;">Buy Now</a></button>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- pjesa e vlersimeve te klienteve-->

    <div class="ratings">

        <div class="small-container">

            <div class="row">

                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta quos quod vero error rerum fugit quasi, necessitatibus voluptatem consectetur nihil harum aliquam laborum officia, deserunt eum dolores architecto ex.</p>
                    <img src="../images/user-1.png" >
                    <h3>Sean Parker</h3>
                </div>
                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta quos quod vero error rerum fugit quasi, necessitatibus voluptatem consectetur nihil harum aliquam laborum officia, deserunt eum dolores architecto ex.</p>
                    <img src="../images/user-2.png" >
                    <h3>Sean Parker</h3>
                </div>
                <div class="col-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta quos quod vero error rerum fugit quasi, necessitatibus voluptatem consectetur nihil harum aliquam laborum officia, deserunt eum dolores architecto ex.</p>
                    <img src="../images/user-3.png" >
                    <h3>Sean Parker</h3>
                </div>

            </div>

        </div>

    </div>

    
    <!--pjesa e footer-->
    <div class="footer">
        <?php  include '../HeaderFooter/footer.php' ?>
    </div>

</body>
</html>

<?php }?>