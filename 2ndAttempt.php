<?php

$connection = mysqli_connect('localhost', 'root', '', 'hospital_management_system');

if(!$connection){
	echo "Sorry";
}
else{
	echo "Connection Successful";
}
var_dump($_POST);


$symptoms = $_POST['Symp_1']  .", "  .  $_POST['Symp_2']   .", ". $_POST['Symp_3']   .", ".   $_POST['Symp_4']    .", ".  $_POST['Symp_5']  .", ".  $_POST['Symp_6'];

$BP = $_POST['Lower'].", ".$_POST['Upper'];
$breakfast = $_POST['Break_1'].", ".$_POST['Break_2'].", ".$_POST['Break_3'];
$lunch = $_POST['Lunch_1'].",".$_POST['Lunch_2'].",".$_POST['Lunch_3'];
$dinner = $_POST['Din_1'].",".$_POST['Din_2'].",".$_POST['Din_3'];
$heightWeight = $_POST['Height_Weight'];
$hobby = $_POST['Hobby'];
$game = $_POST['Game'];
$others = $_POST['Others'];
$diseaseName = $_POST['Disease_Name'];

$result= "INSERT INTO patient (Height_Weight, Symptom, BP_high_low, Breakfast, Lunch, Dinner, Hobby, Game, Others, Disease_name) VALUES ('$heightWeight', '$symptoms', '$BP', '$breakfast', '$lunch', '$dinner', '$hobby', '$game', '$others', '$diseaseName');";
var_dump($result);  

if ($connection->query($result) === TRUE) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $result . "<br>" . $connection->error;
}$connection->close();
//header("Location:PatientadmissionForm.php");


?>