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
      <div class="navbar">
          <div class="logo">
              <img src="../images/logo-11.png" width="150px">
          </div>
          
          <nav>
              <ul>
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="produktet.php">Men Products</a></li>
                  <li><a href="womenProducts.php">Women Products</a></li>
                  <li><a href="kids.php">Kids</a></li>
                  <li><a href="register.php">Login</a></li>
                  <li><a href="logout.php">Log out</a></li>
              </ul>
          </nav>

          <img src="../images/icona-buy.png" width="30px" height="30px">

      </div>
    </div>

<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>ID</th>
              <th>IMAGE</th>
              <th>DESCRIPTION</th>
              <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                include_once '../repository/womenRepository.php';
                $prodRepo = new WomenRepository;
                $products = $prodRepo->getAllProducts();

              foreach($products as $prod){
                echo
                "
                  <tr>
                      <td> $prod[pid] </td>
                      <td> $prod[image] </td>
                      <td> $prod[description] </td>
                      <td> $prod[price] </td>
                      
                  </tr>
                ";
              }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>