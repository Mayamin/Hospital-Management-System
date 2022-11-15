<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px ;
    box-sizing: border-box;
}
body {background-color:powderblue;}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.name {
  display: inline-block;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 5px;
}
</style>

<body>


<h1 style="color:green;">     Patient Initial Investigation Form</h1>

<form action="2ndAttempt.php" method="post">

<?php
$connection = mysqli_connect('localhost', 'root', '', 'hospital_management_system');

if(!$connection){
  echo "Sorry";
}
else{
  echo "Connection Successful<br>";
}

//$quer1="SELECT count(*) as 'No.' FROM Patient";
$Last_ID = mysqli_query($connection, "SELECT count(*) as 'No.' FROM Patient");

$data=mysqli_fetch_assoc($Last_ID);

//var_dump($data);


//$query2="SELECT *  from Patient where ID = ".($data['No.']+1) ";
$result=mysqli_query($connection,"SELECT *  from Patient where ID = ".($data['No.']));

while ($row = mysqli_fetch_assoc($result)) {
  echo "<br>Patient Id : ". $row['ID']."<br>";
  echo"<br> Date of Admission :".$row['Admission_date']."<br>";
  
  echo "<br>Name : ". $row['First_name']." ".$row['Middle_name']." " .$row['Last_name']."<br>";
  echo "<br>Date of Birth : ". $row['Birth_date']."<br>";

}
 $connection->close();
?>




   <h3>Patient personal information</h3>
  
<form action="2ndAttempt.php" method="post">
<br> Height and Weight:<br>
<input type="text" name="Height_Weight" class = "form-control" placeholder = "Height(feet),Weight(kg)">

<br> Symptoms of the disease:<br>
  1.<input type="text" name="Symp_1" value=""><br>
  2.<input type="text" name="Symp_2" value=""><br>
  3.<input type="text" name="Symp_3" value=""><br>
  4.<input type="text" name="Symp_4" value=""><br>
  5.<input type="text" name="Symp_5" value=""><br>
  6.<input type="text" name="Symp_6" value=""><br>
  
  <br>Blood Pressure:<br>
  
  Lower<input type="text" name="Lower" value=""><br>Upper<input type="text" name="Upper" value=""><br>
  
  <br>General Food Habit:<br> 
  <br>Breakfast<br>
  1.<input type="text" name="Break_1" value=""><br>
  2.<input type="text" name="Break_2" value=""><br>
  3.<input type="text" name="Break_3" value=""><br>
  <br>Lunch<br>
  1.<input type="text" name="Lunch_1" value=""><br>
  2.<input type="text" name="Lunch_2" value=""><br>
  3.<input type="text" name="Lunch_3" value=""><br>
  <br>Dinner<br>
  1.<input type="text" name="Din_1" value=""><br>
  2.<input type="text" name="Din_2" value=""><br>
  3.<input type="text" name="Din_3" value=""><br>
  
  <br>Hobby:<input type="text" name="Hobby" value=""><br>
  
  <select name="Game">
  <option value="game">Game</option>
  <option value="football">Football</option>
  <option value="hockey">Hockey</option>
  <option value="volley Ball">Volley Ball</option>
  <option value="cricket">Cricket</option>
  <option value="chess">Chess</option>
  <option value="all">All</option>
  <option value="none">None</option>
  <option value="others">Others</option>
  </select><br>
  <select name="Others">
  <option value="tourism">Tourism</option>
  <option value="writing">Writing</option>
  </select><br>

  <br>Disease Name<input type="text" name="Disease_Name" value="">
  
   <br><br>
  Signature with date
  <br><br>
  
  Doctor Id<input type="text" name="Doctor_Id" value=""><br><br>
  
  Name of Doctor:<input type="text" name="Doctor_name" value=""><br><br>
  
  Designation:<input type="text" name="Designation:"value=""><br>
  
    <br>
  
  <br>
  <input type="submit" value="Submit">
  </form>
   





  
  





</body>
</html>
