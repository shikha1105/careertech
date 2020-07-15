<?php
// include "login.php";
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

        //get the user information

        $user_id = $_SESSION['user_id'];
        $sql = "SELECT mail FROM `register1` WHERE `user_id`= '$user_id' ";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
         //echo "mail". $row["mail"];
          $mail = $row["mail"];
        }
        /*$query = "SELECT user_id, mail FROM register1 WHERE user_id = 'user_id' ";
        $result = mysql_query($query);

        while($row=mysql_fetch_array($result)){
        $user_id=$row['user_id'];
       $mail=$row['mail'];
        }*/
}
?>
<!doctype html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
  <title>Kisaan</title>
  <link rel="stylesheet" href="style3.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
  <div class="header">
    <div class="container1">
      <div class="navbar">
        <div class="logo">
          <img src="Clipart-Email-5526302.png" width="100px" ; />
        </div>
        <nav>
          <ul>
            <li><a href="kisaan.php">Home</a></li>

            <li><a href="kisaan.php#footer">Contact</a></li>
            <li><a href="profile.php">Welcome <?php echo $_SESSION['user_id'] ; ?></a></li>
          </ul>
        </nav>


      </div>
<div class="form_box1" style="
    width: 400px;
    height:300px;
    position:relative;
    margin: 6% auto;
    background:white;
    padding: 5px;
    overflow:hidden;
    border-radius:30px;
" >
<div class="details">
  <form action="profile.php" method="post">
    <h3 text-align="center">Account</h3>
    <br />
    <br />
    User Id
  	<input class="input_field" type="text" name="user_id" value="<?php echo "$user_id" ?>" required>
    <br />
    <br />
    Mail
  	<input class="input_field" type="text" name="mail" value="<?php echo "$mail" ?>" required>
  </form>
</div>
	<!-- <button type="submit" name="submit">Submit</button> -->
</div>



    </div>

  </div>

</body>
</html>
