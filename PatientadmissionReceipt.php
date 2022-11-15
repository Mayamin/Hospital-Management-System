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
<h1 style="color:green;"> Patient Admission Receipt</h1>

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
  
  echo "<br>Name : ". $row['First_name']." ".$row['Middle_name']." " .$row['Last_name']."<br>";
  echo "<br>Date of Birth : ". $row['Birth_date']."<br>";
  echo"<br>Mobile: ".$row['Mobile1']." , ".$row['Mobile2']."<br>";
 
  echo"<h3> Present Address </h3>";
  echo"Street No. or Village : ".$row['Pres_StreetNo_Village']."  ";
  echo"Street Name : " .$row['Pres_Street_Name']."<br>";
  echo"<br>Area: ".$row['Pres_Area']."    ";
  echo" Thana: ".$row['Pres_Thana']."     ";
  echo"District: ".$row['Pres_District']."      ";

  echo"<h3> Permanent Address </h3>";
  echo"Street No. or Village : ".$row['Perma_StreetNo_Village']."  ";
  echo"Street Name : " .$row['Perma_Street_Name']."<br>"."<br>";
  echo"Area: ".$row['Perma_Area']."  ";
  echo"Thana: ".$row['Perma_Thana']."  ";
  echo"District: ".$row['Perma_District']."  "."<br>"."<br>";

  echo"Profession: ".$row['Profession']."<br>"."<br>";
  echo"Amount deposited : ".$row['Amount']."<br>";

}

  /*echo"Cabin no or Ward no: ".$row[' ']."  ";

  echo"Bed.no: ".$row['']."<br>";
  echo " Name of Employee: <br> Designation : "
  */
  

$connection->close();
//header("Location:PatientadmissionReceipt.php");

  ?>

  <br/>



</body>
</html>
