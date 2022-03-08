<?php 
    $userId = $_GET['id'];
    include_once '../repository/userRepository.php';
    $userRepository = new UserRepository();
    $user = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">

    <style>

        #registerForm{
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
            align-items: center;
            align-content: center;
        }
        #ti{
            background-color:lightcoral;
            color: white;
            text-align: center;
            font-size: 50px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 40px;
            margin-bottom: 40px;
            margin-left: 20px;
            margin-right: 20px;
        }

    </style>
</head>
<body>

<h3 id="ti">Edito Userin</h3>

    <div>
        <form id="registerForm"  method="post">
            <?php include_once '../repository/userRepository.php';
                $userRepo = new UserRepository;
                $user = $userRepo->getUserById($userId);
            ?>
            <input type="number" value="<?=$user['uid']?>" id="idRF" name="uid" style="width: 400px;">
            <input type="text" value="<?=$user['name']?>" id="emriRF" name="name" style="width: 400px;">
            <input type="text" value="<?=$user['surname']?>" id="mbiemriRF" name="surname" style="width: 400px;">
            <input type="email" value="<?=$user['email']?>" id="emailRF" name="email" style="width: 400px;">
            <input type="password" value="<?=$user['password']?>" id="passRF" name="password" style="width: 400px;">
            <input type="text" value="<?=$user['role']?>" id="emailRF" name="role" style="width: 400px;">
            <button type="submit" class="btn" id="btnRF" name="editBtn" style="width: 400px;">Edito</button>
            
        </form>
    </div>

</body>
</html>

<?php 

    if(isset($_POST['editBtn'])){
        $id = $user['uid'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $userRepository->updateUser($id, $name, $surname, $email, $password, $role);
        header('location:userDashbord.php');
    }
?> 