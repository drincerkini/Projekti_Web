<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<h1 style="text-align: center; color: orangered; background-color: lightgrey; margin: 50px;" >Shto produktin</h1>
        <div class="account-page">
            <div class="container">
                <div class="row">
            

                    <form id="registerForm" action="" method="POST">
                    <div class="form-btn">
                        
                    </div>
                        
                        <input type="file" name="image" id="emriRF" style="border: none;" > 
                        <br>
                    
                        <input type="text" name="description" id="emriRF" placeholder="Titulli">
                        <br>
                        
                        <input type="text" name="price" id="emailRF" placeholder="Çmimi">
                        <br>
                        <input type="submit" name="submit" value="Shto" class="btn" id="btnRF" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>

<?php 
include_once 'repository/mainRepository.php';
include_once 'controllers/mainController.php';


?>