<?php
$connection = mysqli_connect('localhost', 'root', '', 'hospital_management_system');

if(!$connection){
	echo "Sorry";
}
else{
	echo "Connection Successful";
}

var_dump($_POST);

$Bed_No_type_rent_Status = $_POST['Bed_No_1'] ."_".  $_POST['Bed_type_1']  ."_". $_POST['Rent_1'] ." _". $_POST['Status_1'] ." ,".


                      $_POST['Bed_No_2'] ."_".  $_POST['Bed_type_2']  ."_". $_POST['Rent_2'] ." _". $_POST['Status_2'] ." ,".


                       $_POST['Bed_No_3'] ."_".  $_POST['Bed_type_31']  ."_". $_POST['Rent_3'] ." _". $_POST['Status_3'] ." ,".



                       $_POST['Bed_No_4'] ."_".  $_POST['Bed_type_4']  ."_". $_POST['Rent_4'] ." _". $_POST['Status_4'] ." ,".


                       $_POST['Bed_No_5'] ."_".  $_POST['Bed_type_5']  ."_". $_POST['Rent_5'] ." _". $_POST['Status_5']    ;



                       $Ward_name= $_POST['Wardname'];
                    
$Registrar_id=$_POST['Registrar_id'];
$Supervisor_id=$_POST['Supervisor_id'];


$result= " INSERT INTO `wardinfo`( `Ward_name`, `Registrar_Id `, `Supervisor_Id `, `Bed_No_type_rent_Status`,`Registrar_id`) VALUES ('$Ward_name', ' $Registrar_id ','  $Supervisor_id  ', $Bed_No_type_rent_Status','$Registrar_id')";



if ($connection->query($result) === TRUE) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $result . "<br>" . $connection->error;
}$connection->close();






?>


