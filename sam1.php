<?php
  session_start();
  if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
      echo "<script>window.open('index.php','_self')</script>";
  }
  ?>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <div class="login-container">
    <form method="post">
    <a href="http://localhost/Mini%20Project/samplelogin/login.php">Go back<a><center><h1>Sign Up</h1></center><br/>
    <div class="form-group">
      Fullname: <input type="text" name="full" placeholder="Fullname" required>
    </div>
    <div class="form-group">
      Username: <input type="text" name="User" placeholder="Username" required>
    </div>
    <div class="form-group">
      Email:<input type="email" name="Email" placeholder="Email" required>
    </div>
    <div class="form-group">
      Password:<input type="password" name="Pass" placeholder="Password" required>
    </div>
    <div class="form-group">
      Country:<input type="text" name="Country" placeholder="Country" required>
    </div>
    <div class="form-group">
      City:<input type="text" name="City" placeholder="City" required>
    </div>
    <div class="form-group">
      Contact:<input type="int" name="Contact" placeholder="contact number" required>
    </div>
    <div class="form-group">
      Address:<input type="text" name="Address" placeholder="Address" required>
    </div>
    <br>
      <button type="submit" name="sign">Sign Up</button>
  </form>
<?php
if(isset($_REQUEST["sign"]))
{
    $con=mysqli_connect("localhost:3306","root","","Eshop");
    if(!$con)
      die("could not connect".mysqli_connect_error());
    $full=$_REQUEST['full'];
    $user=$_REQUEST['User'];
    $email=$_REQUEST['Email'];
    $pass=$_REQUEST['Pass'];
    $country=$_REQUEST['Country'];
    $city=$_REQUEST['City'];
    $contact=$_REQUEST['Contact'];
    $address=$_REQUEST['Address'];
    $sql="INSERT INTO customer VALUES (DEFAULT,'$full','$user','$email','$pass','$country','$city','$contact','$address')";
    $result=mysqli_query($con,$sql);
    if(!$result)
      die("Cannot create account");
    echo "Account Created ".$user;
    $sql="INSERT INTO login VALUES('$user','$pass','Customer')";
    $result=mysqli_query($con,$sql);
    if($result)
      echo "<br>You can login now<script>window.open('login.php','_self')</script>";
}
?>
</div>
</div>
</body>
</html>