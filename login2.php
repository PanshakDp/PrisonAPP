
<?php
include "config.php";
session_start();
if(isset($_POST['login'])){
  

$UserName=mysqli_real_escape_string($conn,$_POST['username']);
$Password=mysqli_real_escape_string($conn,$_POST['password']);
$UserType=mysqli_real_escape_string($conn,$_POST['cmbUser']);
if($UserType=='Admin'){
  

$sql = "SELECT * FROM admin_tbl WHERE Admin_Name='$UserName' AND Admin_Password='$Password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
   header("location:admin/adminpanel.php");
    $_SESSION['name']=$row['Admin_Name'];
    $_SESSION['pass']=$row['Admin_Password'];
   
  
  }

  }else{
  
  echo '<script type="text/javascript">alert("Wrong UserName or Password");
  window.location="index.php";</script>'.mysqli_error($conn);
  }
}

elseif($UserType=="Officer")
 {

  $sql="SELECT * FROM prisonwarder_tbl WHERE UserName='$UserName' AND `Password`='$Password'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
     $_SESSION['Station']=$row['Station_Name'];
     $_SESSION['Name']=$row['UserName'];
 header("location: officer/officerpanel.php");
}
}
else{
   echo '<script type="text/javascript">alert("Wrong UserName or Password");
  window.location="index.php";</script>'.mysqli_error($conn);
 
} 
 }

 else 
 {

$sql="SELECT * FROM user WHERE UserName='$UserName' AND `Password`='$Password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $_SESSION['Station']=$row['Station_Name'];
    $_SESSION['Name']=$row['UserName'];

header("location: user/userpanel.php");

}
} 
else 
{
  
 echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';

}


 }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nigerian_Prison</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body id="home">
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <img src="img/mlogo.png" width="50" height="50" alt=""><h3 class="d-inline align-middle">Nigerian_Correstional System</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="login2.php" class="nav-link">Login</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<form action="login2.php" method="post">
  <div class="form-group" >
    <label for="formGroupExampleInput">UserName</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="username" placeholder="UserName">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">PassWord</label>
    <input type="Password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="Password">
  </div>
  <div class="form-group">
      <label for="inputState">Type</label>
      <select id="inputState" class="form-control" select name="cmbUser">
        <option>Registrant</option>
     <option>Officer</option>
     <option>Admin</option>
      </select>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2" name="login" >Submit</button>
    </div>
</form>

</body>
</html>