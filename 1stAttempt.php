<?php

$connection = mysqli_connect('localhost', 'root', '', 'hospital_management_system');

if(!$connection){
	echo "Sorry";
}
else{
	echo "Connection Successful";
}

var_dump($_POST);

 /*$_POST['lastname'].$_POST['middlename'];
 $_REQUEST['username'];*/

$Admission_date=date("Y-m-d", strtotime($_POST['Date_of_Admission']));

$First_Middle_name=$_POST['firstname'] . ",".$_POST['middlename'];


$Last_name=$_POST['lastname'];

//$Birth_date=$_POST['date_of_birth'];

$Birth_date = date("Y-m-d", strtotime($_POST['date_of_birth']));




$Mobile1 = $_POST['mobile1'];

$Mobile2 = $_POST['mobile2'];

$Pres_StreetNo_Village=$_POST['street_no1'];

$Pres_Street_Name=$_POST['street_name1'];

$Pres_Area=$_POST['area1'];

$Pres_Thana=$_POST['thana1'];

$Pres_District=$_POST['district1'];

$Perma_StreetNo_Village=$_POST['street_no2'];

$Perma_Street_Name=$_POST['street_name2'];

$Perma_Area=$_POST['area2'];

$Perma_Thana=$_POST['thana2'];

$Perma_District=$_POST['district2'];

$Profession=$_POST['profession'];

$date_of_birth=$_POST['date_of_birth'];

$Amount=$_POST['Amount_Deposited'];

//$CabinNo_WardNo='Null';
//cabinNo_WardNo-> from cabin or ward page
//doc_id->Doc page
//bed_id->Bed page

$result= "INSERT INTO `patient`(`Admission_date`, `First_Middle_name`, `Last_name`, `Birth_date`, `Mobile1`, `Mobile2`, `Pres_StreetNo_Village`, `Pres_Street_Name`, `Pres_Area`, `Pres_Thana`, `Pres_District`, `Perma_StreetNo_Village`,`Perma_Street_Name`, `Perma_Area`, `Perma_Thana`, `Perma_District`, `Profession`, `Amount`, `CabinNo_WardNo`, `Age`, `Doc_id`,  `Bed_id`) values ('$Admission_date','$First_Middle_name' ,'$Last_name', '$Birth_date'  , '$Mobile1'  , '$Mobile2'   ,   '$Pres_StreetNo_Village'    ,  '$Pres_Street_Name' ,   '$Pres_Area', '$Pres_Thana' , '$Pres_District' , '$Perma_StreetNo_Village'  , '$Perma_Street_Name',  '$Perma_Area',   '$Perma_Thana' , '$Perma_District', '$Profession', '$Amount','','','','')";

if ($connection->query($result) === TRUE) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $result . "<br>" . $connection->error;
}$connection->close();
header("Location:PatientadmissionForm.php");


?>