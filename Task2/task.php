<?php 
if(isset($_POST['button1'])){
  include 'data.php'; 
  $q = "INSERT INTO panel (FORWORD) VALUES ('F')";
  $re= mysqli_query($con, $q);
}

if(isset($_POST['button2'])){
  include 'data.php'; 
  $q = "INSERT INTO panel (LEF) VALUES ('L')";
  $re= mysqli_query($con, $q);
}

if(isset($_POST['button3'])){
  include 'data.php'; 
  $q = "INSERT INTO panel (STO) VALUES ('S')";
  $re= mysqli_query($con, $q);
}

if(isset($_POST['button4'])){
  include 'data.php'; 
  $q = "INSERT INTO panel (RIGH) VALUES ('R')";
  $re= mysqli_query($con, $q);
}

if(isset($_POST['button5'])){
  include 'data.php'; 
  $q = "INSERT INTO panel (BACKWORD) VALUES ('B')";
  $re= mysqli_query($con, $q);
}
?>

<!DOCTYPE html>
<html>   
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="task.php">
<br><br><br>
<input type='submit' name='button1' value='FORWORD' ><br>
<input type='submit' name='button2' value='LEFT'>
<input type='submit' name='button3' value='STOP'>
<input type='submit' name='button4' value='RIGHT'><br>
<input type='submit' name='button5' value='BACKWORD'>
</form>
</body>
</html>
