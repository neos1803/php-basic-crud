<?php
include'connect.php';
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = mysqli_query($con, "INSERT into user(username, password) VALUES ('$username', '$password')");
    echo "<script>alert('Pendaftaran Berhasil')</script>";
	echo "<meta http-equiv='refresh' content='0 url=../view/index.html'>";
}
?>