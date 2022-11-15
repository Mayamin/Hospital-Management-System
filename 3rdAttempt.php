<?php
$connection = mysqli_connect('localhost', 'root', '', 'hospital_management_system');

if(!$connection){
	echo "Sorry";
}
else{
	echo "Connection Successful";
}

var_dump($_POST);


$Last_ID = mysqli_query($connection, "SELECT count(*) as 'No.' FROM Patient");

$data=mysqli_fetch_assoc($Last_ID);

$result=mysqli_query($connection,"SELECT *  from Patient where ID = ".($data['No.']));

while ($row = mysqli_fetch_assoc($result)) {
           $Patient_id=$row['ID'];
}


$Patient_id= $_POST['Patient_id'];

$Medicine_name=$_POST['Medicine_name1'] . " ," .$_POST['Medicine_name2'] ;

$Quantity=$_POST['Quantity1'] . " ," .$_POST['Quantity2'] ;

$Times_a_day=$_POST['Times_a_day1'] . " ," .$_POST['Times_a_day2'] ;

$Morning=$_POST['Morning_b4_meal1'] . " ," .$_POST['Morning_after_meal1']. "," .$_POST['Morning_b4_meal2'] . " ," .$_POST['Morning_after_meal2'] ;

$Noon=$_POST['Noon_b4_meal1'] . " ," .$_POST['Noon_after_meal1']. ",". $_POST['Noon_b4_meal2'] . " ," .$_POST['Noon_after_meal2'] ;

$Evening=$_POST['Evening_b4_meal1'] . " ," .$_POST['Evening_after_meal1']. ",". $_POST['Evening_b4_meal2'] . " ," .$_POST['Evening_after_meal2'] ;

$Test_list=$_POST['Test_1'] . " ," .$_POST['Test_2'] .",".$_POST['Test_3']  ;






  $result= "INSERT INTO `prescription`(`Patient_id`, `Doctor_id`, `Medicine_name`, `Quantity`, `Times_a_day`, `Morning`, `Noon`, `Evening`, `Test_list`) VALUES 
                       ('$Patient_id',  '$Doctor_id', '$Medicine_name','$Quantity','$Times_a_day','$Morning','$Noon','$Evening','$Test_list')";


                         
 var_dump($result);  

if ($connection->query($result) === TRUE) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $result . "<br>" . $connection->error;
}$connection->close();


?>