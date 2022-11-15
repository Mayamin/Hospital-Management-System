<?php
$connection = mysqli_connect('localhost', 'root', '', 'hospital_management_system');

if(!$connection){
	echo "Sorry";
}
else{
	echo "Connection Successful";
}

var_dump($_POST);




$First_Middle_Name=$_POST['firstname']. ",".  $_POST['middlename'];

$Last_Name=$_POST['lastname'];

$Birth_date	==$_POST['Birth_date'] ;

$Appointment_date= $_POST['Appointment_date'];






$Degree_borad_year_division_Position=  $_POST['SSC']  ."_". $_POST['Board_Instituite_1'] ." _". $_POST['Year_1'] ." _". $_POST['Division_CGPA_1'] ." _". $_POST['Position_1'] ." ,". 
                                       

                                       $_POST['HSC']  ."_". $_POST['Board_Instituite_2'] ." _". $_POST['Year_2'] ." _". $_POST['Division_CGPA_2'] ." _". $_POST['Position_2'] ." ,".


                                       $_POST['MBBS']  ."_". $_POST['Board_Instituite_3'] ." _". $_POST['Year_3'] ." _". $_POST['Division_CGPA_3'] ." _". $_POST['Position_3'] ." ,".

                                      
                                       $_POST['Degree_1']  ."_". $_POST['Board_Instituite_4'] ." _". $_POST['Year_4'] ." _". $_POST['Division_CGPA_4'] ." _". $_POST['Position_4'] ." ,".
                                      

                                      $_POST['Degree_2']  ."_". $_POST['Board_Instituite_5'] ." _". $_POST['Year_5'] ." _". $_POST['Division_CGPA_5'] ." _". $_POST['Position_5']    ;




$Job_from_to_Org  =    $_POST['Job_title_1'] ."_".  $_POST['From_1']  ."_". $_POST['To_1'] ." _". $_POST['Org_1'] ." ,".


                       $_POST['Job_title_2'] ."_".  $_POST['From_2']  ."_". $_POST['To_2'] ." _". $_POST['Org_2'] ." ,".


                       $_POST['Job_title_3'] ."_".  $_POST['From_3']  ."_". $_POST['To_3'] ." _". $_POST['Org_3'] ." ,".



                       $_POST['Job_title_4'] ."_".  $_POST['From_4']  ."_". $_POST['To_4'] ." _". $_POST['Org_4'] ." ,".


                       $_POST['Job_title_5'] ."_".  $_POST['From_5']  ."_". $_POST['To_5'] ." _". $_POST['Org_5']    ;


$Specialization=$_POST['Specialization'];

$Registrar_id=$_POST['Registrar_id'];





$Membership=$_POST['Membership'];


           $result="INSERT INTO `doctor`( `First_Middle_Name`, `Last_Name`, `Birth_date`,  `Specialization`,    `Appointment_date`, `Degree_borad_year_division_Position`, `Job_from_to_Org`, `Membership`,`Registrar_id`) VALUES (' $First_Middle_Name','$Last_Name','$Birth_date', '$Specialization',   ' $Appointment_date', ' $Degree_borad_year_division_Position',' $Job_from_to_Org ','$Membership ',' $Registrar_id')";

if ($connection->query($result) === TRUE) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $result . "<br>" . $connection->error;
}$connection->close();



?>
