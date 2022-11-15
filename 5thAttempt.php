<?php
$connection = mysqli_connect('localhost', 'root', '', 'hospital_management_system');

if(!$connection){
	echo "Sorry";
}
else{
	echo "Connection Successful";
}

var_dump($_POST);





$Last_ID = mysqli_query($connection, "SELECT count(*) as 'No.' FROM registrar");

$data=mysqli_fetch_assoc($Last_ID);

//var_dump($data);


//$query2="SELECT *  from Patient where ID = ".($data['No.']+1) ";
$result=mysqli_query($connection,"SELECT *  from registrar where Registrar_id = ".($data['No.']));

while ($row = mysqli_fetch_assoc($result)) {
  $Registrar_id= $row['Registrar_id'];}












$First_Middle_Name=$_POST['firstname']. ",".  $_POST['middlename'];

$Last_Name=$_POST['lastname'];

$Birth_date	=$_POST['Birth_date'] ;

$Appointment_date= $_POST['Appointment_date'];






$Degree_board_year_division_Position=  $_POST['SSC']  ."_". $_POST['Board_Instituite_1'] ." _". $_POST['Year_1'] ." _". $_POST['Division_CGPA_1'] ." _". $_POST['Position_1'] ." ,". 
                                       

                                       $_POST['HSC']  ."_". $_POST['Board_Instituite_2'] ." _". $_POST['Year_2'] ." _". $_POST['Division_CGPA_2'] ." _". $_POST['Position_2'] ." ,".


                                       $_POST['MBBS']  ."_". $_POST['Board_Instituite_3'] ." _". $_POST['Year_3'] ." _". $_POST['Division_CGPA_3'] ." _". $_POST['Position_3'] ." ,".

                                      
                                       $_POST['Degree_1']  ."_". $_POST['Board_Instituite_4'] ." _". $_POST['Year_4'] ." _". $_POST['Division_CGPA_4'] ." _". $_POST['Position_4'] ." ,".
                                      

                                      $_POST['Degree_2']  ."_". $_POST['Board_Instituite_5'] ." _". $_POST['Year_5'] ." _". $_POST['Division_CGPA_5'] ." _". $_POST['Position_5']    ;

$Supervisor_id=$_POST['Supervisor_id'];


$Job_from_to_Org  =    $_POST['Job_title_1'] ."_".  $_POST['From_1']  ."_". $_POST['To_1'] ." _". $_POST['Org_1'] ." ,".


                       $_POST['Job_title_2'] ."_".  $_POST['From_2']  ."_". $_POST['To_2'] ." _". $_POST['Org_2'] ." ,".


                       $_POST['Job_title_3'] ."_".  $_POST['From_3']  ."_". $_POST['To_3'] ." _". $_POST['Org_3'] ." ,".



                       $_POST['Job_title_4'] ."_".  $_POST['From_4']  ."_". $_POST['To_4'] ." _". $_POST['Org_4'] ." ,".


                       $_POST['Job_title_5'] ."_".  $_POST['From_5']  ."_". $_POST['To_5'] ." _". $_POST['Org_5']    ;


//$Supervisor_id= ;




//$Membership=$_POST['Membership'];





           $result="INSERT INTO `nurseinfo`( `First_Middle_Name`, `Last_Name`, `Birth_date`, `Appointment_date`, `Degree_board_year_division_Position`, `Job_from_to_Org`,`Supervisor_id`) VALUES ('$First_Middle_Name','$Last_Name', '$Birth_date',  '$Appointment_date' ,' $Degree_board_year_division_Position' ,  '$Job_from_to_Org' ,`$Supervisor_id`  )";

if ($connection->query($result) === TRUE) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $result . "<br>" . $connection->error;
}$connection->close();



?>