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
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logo-11.png" width="150px"></a>
            </div>
           <!-- <div class="tituli">
                <h1>DF Store</h1>
            </div>
        -->
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="men.html">Men</a></li>
                    <li><a href="women.html">Women</a></li>
                    <li><a href="kids.html">Kids</a></li>
                    <li><a href="loginForm.html">Login</a></li>
                </ul>
            </nav>

            <img src="images/icona-buy.png" width="30px" height="30px">
 
        </div>
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

        <div class="footer-container">

            <div class="row">

                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" >
                        <img src="images/app-store.png" >
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="images/logo-11.png" >
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam rerum libero architecto sequi, numquam consequuntur placeat molestias, atque a fuga id magni! Et fugiat, a provident explicabo ducimus numquam voluptates! </p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Coupons</li>
                       <li>Return Policy</li>
                       <li>Blog Post</li>
                       <li>Join Affiliate</li>
                   </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>instagram</li>
                       <li>Youtube</li>
                   </ul>
                </div>

            </div>
            <hr>
            <p class="copyright">Copyright 2021 - DF Store </p>

        </div>

    </div>

    <!-- javascript per login form-->
    <script src="JavaScript/loginForm.js"> </script>

</body>
</html>