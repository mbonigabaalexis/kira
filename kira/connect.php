<?php
$server= "localhost";
$username= "root";
$passward= "";
$db= "kira";
$conn=mysqli_connect("localhost","root","","kira");

if(!$conn){
die("connected fail:".mysqli_connect_error());
}
echo"";

?>