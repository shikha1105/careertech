<?php
// header('location:regpage.php');
session_start();
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
else{
  $user_id=$_POST['user_id'];
  $password=$_POST['password'];
  $query="SELECT * from register1 where user_id='".$user_id."' and password='".$password."'limit 1";
  $result=mysqli_query($conn,$query);

     if(mysqli_num_rows($result)==1)
    {
          $_SESSION['user_id'] = $user_id;
          if(isset($_SESSION['user_id']))
          {
            header("location:kisaan.php");
          }
        }
         else
   {
     echo"you have entered invalid email or password";
   }

      // include 'kisaan.html';
   }
  

mysqli_close($conn);

?>
