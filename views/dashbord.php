<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="../css/style.css">

    <style>
        .kontent{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            justify-items: center;
            align-items: center;
            align-content: center;
        }

        .kont{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    
    <!--pjesa e header-->
    <div class="header">
        <?php  include '../HeaderFooter/header.php' ?>
    </div>

    <div class="kontent">

        <div class="kont">
            <a href="userDashbord.php"> <img src="../images/usersetings.png"> </a>
            <h3>User settings</h3>
        </div>

        <div class="kont">
            <a href="mainDashbord.php"> <img src="../images/prodo.png"> </a>
            <h3>Main settings</h3>
        </div>

        <div class="kont">
            <a href="menDashbord.php"> <img src="../images/manicon.png"> </a>
            <h3>Men products settings</h3>
        </div>

        <div class="kont">
            <a href="womenDashbord.php"> <img src="../images/womenicon.png"> </a>
            <h3>Women products settings</h3>
        </div>

        <div class="kont">
            <a href="kidsDashbord.php"> <img src="../images/kidicon.png"> </a>
            <h3>Kids products settings</h3>
        </div>

    </div>


</body>
</html>