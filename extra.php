<?php

$host="localhost";
$user="root";
$password="";
$db="HospitalDBMS";

mysql_connect($host,$user,$password);

$mysqli_select_db($db);


if( isset ($_PosT['uname']))
{

  $uname=$_PosT['uname'];
  $password=$_PosT['psw'];

  $sql="SELECT * from  users where username = ' ". $uname." ' AND Password ='".$password ."' limit 1 ";

  $result=mysql_query($sql);
  if(mysql_num_rows($result)==1)
  {

    echo"You have successfully Logged in";

    exit();


  }

else
{


	echo"You have entered wrong password";
	exit();

}


}


?>
