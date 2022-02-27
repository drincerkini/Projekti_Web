<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DF STORE</title>
    <link rel="stylesheet" href="css/style-loginForm.css">
</head>
<body>
    
    <!-- pjesa e header -->

    <div class="header">
    <?php include "HeaderFooter/header.php" ?>
    </div>
<!--- pjesa e regjistrimit -->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/cover-foto.png" width="100%">
            </div>
            
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Kyçu</span>
                        <span onclick="register()">Regjistrohu</span>
                        <hr id="indicator">
                    </div>


                    
                    <form id="loginForm">

                        <input type="email" placeholder="Email" id="emailLF">
                        <input type="password" placeholder="Password" id="passwordLF">
                        <button type="submit" class="btn" id="btnLF">Kyçu</button>
                        <a href="">Harruat passwordin?</a>

                    </form>

                    <form id="registerForm" >
                        <input type="text" placeholder="Emri" id="emriRF">
                        <input type="text" placeholder="Mbiemri" id="mbiemriRF">
                        <input type="email" placeholder="Email" id="emailRF">
                        <input type="password" placeholder="Password" id="passRF">
                        <button type="submit" class="btn" id="btnRF">Regjistrohu</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   

    <!--pjesa e footer-it -->

    <div class="footer">

    <?php include "HeaderFooter/footer.php" ?>

    </div>

    <!-- javascript per login form-->
    <script src="JavaScript/loginForm.js"> </script>

</body>
</html>