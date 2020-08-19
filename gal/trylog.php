<html>
    <title>Login</title>
    <body>
        <?php
        $usr = "admin";
        $psw = "password";
        $username = '$_POST[username]';
        $password = '$_POST[password]';
        session_start();
        if ($_POST['username']=="admin" && $_POST['password']=="password") {
            header("Location:details.php");
            $_SESSION['login']=true;
             unset($_SESSION['login']);
        }else {
        include 'adminlog.php';
        echo"<script type='text/javascript'>alert('Admin Details incorrect');</script>";

        }
        ?>
    </body>
</html>