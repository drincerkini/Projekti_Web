<?php 
include_once '../config/databaseConnection.php';
include_once '../models/produkti.php';

class WomenRepository extends Produkti{
    private $connection;

    public function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConncetion();
    }

    //pjesa e CRUD

    public function insertProdukti($produkti){
        $conn = $this->connection;

        $pid = '';
        $image = $produkti->getImage();
        $description = $produkti->getDescription();
        $price = $produkti->getPrice();
        

        $sql = "INSERT INTO womenProducts(pid, image, description, price) VALUES(?, ?, ?, ?)";

        $stament = $conn->prepare($sql);
        $stament->execute([$pid, $image, $description, $price]);
    }

    //leximi i te dhenave ne databazen produkti
    public function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM womenProducts";

        $statment = $conn->query($sql);
        $products = $statment->fetchAll();

        return $products;
    }

    //Fshirja e produkteve
    public function delete($pid){
        $conn = $this->connection;

        $sql = "DELETE FROM womenproducts WHERE pid=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$pid]);

        echo "<script>alert('delete was successful'); </script>";
    }
}




?>