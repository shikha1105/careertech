<?php
include "connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $user_id=$_POST['user_id'];
  $mail=$_POST['mail'];
  $password=$_POST['password'];
  $msg1=$msg2=$msg3="";

if(empty($user_id))
{
  $msg1="please make your id";
}
elseif(!preg_match("/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/",$_POST['user_id']))
{
  $msg1="Enter alphabets, underscore, numbers only and start with alphabets only";
}
elseif(empty($mail))
{
  $msg2="Please enter your email id.";
}
elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})*$/",$_POST['mail']))
{
  $msg2="Enter valid e-mail id only";
}
elseif(empty($password))
{
  $msg3="Please enter your password";
}


else{
  $s="SELECT * FROM register1 where user_id='$user_id'";
  $result=mysqli_query($conn,$s);
  $num=mysqli_num_rows($result);

  if($num == 1){
    echo "username already taken";
  }

  else{
    $sq = "INSERT INTO register1 (user_id, mail, password) VALUES('$_POST[user_id]','$_POST[mail]','$_POST[password]')";
                if(mysqli_query($conn,$sq) == TRUE)
                {
                 echo "Registration Successful";
                }
                else{
                  echo "Mail already taken";
                }
  }

}

$conn->close();
}
?>
<!doctype html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <title>Kisaan</title> -->
  <link rel="stylesheet" href="style3.css" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Sacramento" rel="stylesheet">
</head>

<body>

<div class="container1">
  <div class="form_box">
    <div class="button_box">
      <div id="btn">
      </div>
      <button type="button" class="toggle_button" onclick="login()">Log In</button>
      <button type="button" class="toggle_button" onclick="register()">Register</button>
    </div>
    <center>
      <h1>kisaan</h1>
    </center>
<form  method="post" action="login.php" id="login" class="input" >
<label for="user_id" required>
  <input type="text" name="user_id" id="user_id" class="input_field" placeholder="User Id"  value="<?php echo isset($_POST["user_id"]) ? $_POST["user_id"] : ''; ?>"/>
  <!--<?php echo $msg1; ?>-->

 <?php if(isset($msg1))
 {
  echo"<font color='red'; font size='3'>". $msg1."</font>";
  }
 ?>
</label>
<label for="password" required>
    <input type="password" name="password" id="password" class="input_field" placeholder="User Password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>"  />
    <!--<?php echo $msg3; ?>-->
   <?php if(isset($msg3))
   {
    echo"<font color='red'; font size='3'>". $msg3."</font>";
    }
   ?>

</label>

  <p>

  </p>
  <button type="submit" class="submit_btn">Log In</button>
</form>
<form  method="post" action="regpage.php"  id="register" class="input">

<label for="user_id" required>
  <input type="text" name="user_id" class="input_field" id="user_id" placeholder="User Id" value="<?php echo isset($_POST["user_id"]) ? $_POST["user_id"] : ''; ?>"  />
  <!--<?php echo $msg1; ?>-->
 <?php if(isset($msg1))
 {
   echo"<font color='red'; font size='3'>". $msg1."</font>";
   }
 ?>
</label>

  <label for="mail" required>
  <input type="email" name="mail" class="input_field" id="mail" placeholder="Email ID" value="<?php echo isset($_POST["mail"]) ? $_POST["mail"] : ''; ?>"  />
  <!--<?php echo $msg2; ?>-->
 <?php if(isset($msg2))
 {
   echo"<font color='red'; font size='3'>". $msg2."</font>";
   }
 ?>

    </label>

    <label for="password" required>
  <input type="password" name="password" class="input_field" id="password" placeholder="User Password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>"  />
  <!--<?php echo $msg3; ?>-->
 <?php if(isset($msg3))
 {
   echo"<font color='red'; font size='3'>". $msg3."</font>";
   }
 ?>
    </label>
  <p>

  </p>
  <label for="click">
    <button id="click" type="submit" class="submit_btn">Register</button>
  </label>

</form>
  </div>
</div>
<script>
  var x=document.getElementById("login");
  var y=document.getElementById("register");
  var z=document.getElementById("btn");
  function register()
  {
    x.style.left="-400px";
      y.style.left="50px";
        z.style.left="110px";
  }
  function login()
  {
    x.style.left="50px";
      y.style.left="450px";
        z.style.left="0";
  }
</script>
</body>
</html>
