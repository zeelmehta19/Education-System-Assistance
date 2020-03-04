<?php
function generate_password($length = 8){
  $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

  $str = '';
  $max = strlen($chars) - 1;

  for ($i=0; $i < $length; $i++)
    $str .= $chars[random_int(0, $max)];

  return $str;
}




function insertintoSql($sql)
{
  require("./connect.php");
  //$sql = "INSERT INTO `$table`(`$inputs[0]`, `$inputs[1]`, `$inputs[2]`) VALUES ('$values[0]','$values[1]','00')";
  if ($conn->query($sql) === TRUE)
  {
      return True;
  }
  else
  {
      return False;
  }
  $conn->close();
}

function searchWhere($sql)
{
  require("./connect.php");
  $result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  return $row;
} else {
  return "Nullify";
}
$conn->close();
}




function updateCoins($coins,$username)
{
  require("./connect.php");
  $sql = "UPDATE `users` SET `coins`='$coins' WHERE `username` = '$username'; ";
  if ($conn->query($sql) === TRUE)
  {
      return True;
  }
  else
  {
      return False;
  }
  $conn->close();
}

function updateLoan($tobepaid,$username)
{
  require("./connect.php");
  $sql = "UPDATE `loantaken` SET `tobepaid`='$tobepaid' WHERE `username` = '$username'; ";
  if ($conn->query($sql) === TRUE)
  {
      return True;
  }
  else
  {
      return False;
  }
  $conn->close();
}
function deleterow($username)
{
  require("./connect.php");
  $sql = "DELETE FROM `loantaken` WHERE `username` = '$username'; ";
  if ($conn->query($sql) === TRUE)
  {
      return True;
  }
  else
  {
      return False;
  }
  $conn->close();
}
function getcoins($username)
{
  require("./connect.php");
  $sql = "SELECT * FROM `users`  WHERE `username` = '$username'; ";
  $result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  return $row['coins'];
} else {
  return "Nullify";
}
  $conn->close();
}

function getvalue($username,$table)
{
  require("./connect.php");
  $sql = "SELECT * FROM `scheme1taken`  WHERE `username` = '$username'; ";
  $result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  return $row['total'];
} else {
  return "Nullify";
}
  $conn->close();
}


function gameupdate($username,$wheat,$cow,$milk)
{
  require("./connect.php");
  $sql = "UPDATE `gamedata` SET `wheat`='$wheat',`cow`='$cow',`milk`='$milk' WHERE `username` = '$username'; ";
  if ($conn->query($sql) === TRUE)
  {
      return True;
  }
  else
  {
      return False;
  }
  $conn->close();

}



function getTeacherid($tname)
{
  require("./connect.php");
  $sql = "SELECT * FROM `teacherdetails`  WHERE `name` = '$tname'; ";
  $result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  return $row['teacherid'];
} else {
  return "Nullify";
}
  $conn->close();
}

function getTeacherRate($id)
{
  require("./connect.php");
  $sql = "SELECT * FROM `teacherpayment`  WHERE `teacherid` = '$id'; ";
  $result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  return $row['rate'];
} else {
  return "Nullify";
}
  $conn->close();
}




function updateLevel($level,$username)
{
  require("./connect.php");
  $sql = "UPDATE `users` SET `level`='$level' WHERE `username` = '$username'; ";
  if ($conn->query($sql) === TRUE)
  {
      return True;
  }
  else
  {
      return False;
  }
  $conn->close();
}

function nextlevel($level,$username)
{

  $level = $level+1;
  require("./connect.php");
  $sql = "UPDATE `users` SET `level`='$level' WHERE `username` = '$username'; ";
  if ($conn->query($sql) === TRUE)
  {
      $url = "location: ./levelup.php?lvl=".$level."&usr=".$username;

  }
  else
  {
    $url = "location: ../home.php?m=somethingiswrong";
  }
  header($url);
  $conn->close();
}
?>
