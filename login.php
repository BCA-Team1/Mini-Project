<?php
    session_start();
?>
<html>
<head>
</head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <div class="login-container">
    <form method="POST">
        <center><h1>Login</h1></center><br>
            <div class="form-group">
                Role:<select name="role" length="2">
                    <option value="Admin">Admin</option>
                    <option value="Customer">Customer</option>
                </select><br>
            </div>
            <div class="form-group">
                Username: <input type="text" name="user" placeholder="Username" required>
            </div>
            <div class="form-group">
                Password: <input type="password" name="pass" placeholder="Password" required>
            </div>
            <button type="submit" name="login">Login</button><br>
         <center><a href="forgot.php">Forgot password?</a><br><br>
            Not a user?<a href="sam1.php">Sign up</a><br>
    </form>
    <?php
    if(isset($_REQUEST["login"]))
    {
        $con=mysqli_connect("localhost:3306","root","","Eshop");
        if(!$con)
            die("could not connect".mysqli_connect_error());
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $role=$_REQUEST['role'];
        $sql="SELECT * FROM login WHERE Username='$user' AND Password='$pass' AND Role='$role'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $_SESSION['user'] = $user;
            echo '<script type="text/JavaScript"> 
                alert("Login Successful");
                </script>';
            if($role=="Admin")
                echo "<script>window.open('admin_index.php','_self')</script>";
            else
                echo "<script>window.open('abc.php','_self')</script>";
        }
        else if(mysqli_num_rows($result) < 1)
            echo "<br>The record was not found<br>Invalid Credentials. Try again</center>";
    }
    ?>
    </div>
    </div>
</body>
</html>