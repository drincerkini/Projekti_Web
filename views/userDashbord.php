<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/products.css">
    <style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
</head>
<body>

  <!-- pjesa e header -->
  <div class="header">
        <?php  include '../HeaderFooter/headerProduct.php' ?>
    </div>

<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>SURNAME</th>
              <th>EMAIL</th>
              <th>PASSWORD</th>
              <th>ROLE</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                include_once '../repository/userRepository.php';
                $userRepository = new UserRepository;
                $users = $userRepository->getAllUsers();

              foreach($users as $user){
                echo
                "
                  <tr>
                      <td> $user[uid] </td>
                      <td> $user[name] </td>
                      <td> $user[surname] </td>
                      <td> $user[email] </td>
                      <td> $user[password] </td>
                      <td> $user[role] </td>
                      <td> <a href='edit.php?id=$user[uid]' >Edit </a> </td>
                      <td> <a href='delete.php?id=$user[uid]' >Delete </a> </td>
                  </tr>
                ";
              }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>