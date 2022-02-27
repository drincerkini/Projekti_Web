<?php 

include_once '../config/databaseConnection.php';
include_once '../models/user.php';

class UserRepository extends User{
    private $connection;

    public function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConncetion();
    }

    //pjesa e CRUD-it

    //Insertimi i  te dhenave te userit ne databaz
    public function insertUser($user){
        $conn = $this->connection;

        $uid = '';
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO users(uid, name, surname, email, password) VALUES(?, ?, ?, ?, ?)";
        $statment = $conn->prepare($sql);
        $statment->execute([$uid, $name, $surname, $email, $password]);
    
        
    }


    //Leximi i te dhenave te userave ne databaz(read)
    public function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statment = $conn->query($sql);
        $users = $statment->fetchAll();

        return $users;
    }

    //leximi i  te dhenave te nje user-i
    public function getUserById($uid){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE uid='$uid'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    //leximi i  te dhenave te nje user-i sipas email
    public function getUserByEmail($email, $password){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    //Update-imi i te dhenave
    public function updateUser($id,$name,$surname,$email,$password, $role){
        $conn = $this->connection;

        $sql = "UPDATE users SET name=?, surname=?, email=?, password=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name, $surname, $email, $password, $role]);
        echo "<script> alert('Updated successfuly!'); </script>";
    }

    //Fshirja e te dhenave
    public function deleteUser($uid){
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE uid=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$uid]);

        echo "<script>alert('delete was successful'); </script>";
    }


}

?>