<?php
$servername="localhost";
$username="root";
$password="";
$dbname="agri";

$conn=new mysqli($servername, $username, $password,$dbname);
echo "";
if ($conn->connect_error)
{
  die("Connection Failed".$conn->connect_error);
}
?>
