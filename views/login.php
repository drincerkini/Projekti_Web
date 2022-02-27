
   
   <form id="loginForm" action="" method="POST">
        <input type="email" placeholder="Email" id="emailLF" name="emailL">
        <input type="password" placeholder="Password" id="passLF" name="passwordL">
        <button type="submit" class="btn" id="btn" name="login">Kycu</button>
        
    </form>

    <?php 
        require_once '../controllers/loginValidate.php';
    ?>