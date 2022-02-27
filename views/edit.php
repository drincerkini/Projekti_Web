<?php 
    $userId = $_GET['uid'];
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
</head>
<body>

    <div>
        <form id="registerForm"  method="post">

        <input type="text" placeholder="Emri" id="emriRF" name="uid">

            <input type="text" placeholder="Emri" id="emriRF" name="name">
            <input type="text" placeholder="Mbiemri" id="mbiemriRF" name="surname">
            <input type="email" placeholder="Email" id="emailRF">
            <input type="password" placeholder="Password" id="passRF">
            <input type="text" placeholder="Email" id="emailRF" name="role">
            <button type="submit" class="btn" id="btnRF" name="editBtn">Regjistrohu</button>
            
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
        header('userDashbord.php');
    }
?> 