


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DF STORE</title>
    <link rel="stylesheet" href="../css//register.css">
</head>
<body>
    
    <!-- pjesa e header -->

    <div class="header">
        <?php include '../HeaderFooter/headerProduct.php';?>
    </div>


<!--- pjesa e regjistrimit -->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="../images/cover-foto.png" width="100%">
            </div>
            
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Kyçu</span>
                        <span onclick="register()">Regjistrohu</span>
                        <hr id="indicator">
                    </div>


                    
                    <?php include '../views/login.php'?>

                    <?php require_once '../controllers/registerController.php';?>

                    <form id="registerForm" action="" method="POST">
                        <input type="text" placeholder="Emri" id="emriRF" name="name">
                        <input type="text" placeholder="Mbiemri" id="mbiemriRF" name="surname">
                        <input type="email" placeholder="Email" id="emailRF" name="email">
                        <input type="password" placeholder="Password" id="passRF" name="password">
                        <button type="submit" class="btn" id="btnRF" name="register">Regjistrohu</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
<?php include_once '../controllers/registerController.php';?>

    <!--pjesa e footer-it -->

    <div class="footer">
        <?php include '../HeaderFooter/footer.php';?>

    </div>

    <!-- javascript per login form-->
    <script src="../js/loginForm.js"> </script>

    <?php include_once '../repository/userRepository.php';
            include_once '../controllers/userController.php';
    ?>
</body>
</html>