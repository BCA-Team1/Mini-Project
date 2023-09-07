<?php
session_start();

session_destroy();

echo '<script>alert("Logout completed")</script>';
echo '<script>window.open("login.php","_self")</script>';

?>
