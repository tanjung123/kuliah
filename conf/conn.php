<?php
$con = mysqli_connect('localhost','root','') or die('Connect Failed !!!');
mysqli_select_db($con, 'nurdi') or die(mysqli_error($con));
?>