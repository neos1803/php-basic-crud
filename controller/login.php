<?php
include 'connect.php';
session_start();
if (isset($_POST['masuk']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM data where username = '$username' and password = '$password'" );

    if ( mysqli_num_rows($query) != 0)
    {
        echo "<script>alert('Welcome Back')</script>";
        echo "<meta http-equiv='refresh' content='0 url=../view/menu.html'>";
    }
    else
    {
        echo "<script>alert('Wrong password or username')</script>";
    }
}
else {

}
?>