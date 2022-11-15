<!DOCTYPE html>
<html>
<head>
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
table {
    
     border: 1px solid black;
    width: 100%;
}

td{
    border: 3px solid #dddddd;
    text-align: left;
    padding: 8px;
     border-bottom: 1px solid #ddd;
    
}
.name {
  display: inline-block;
}

th{
    height: 50px;
    border: 10px solid #dddddd;
    text-align: left;
    padding: 5px;
     border-bottom: 1px solid #ddd;
    }


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border:0;
    border-radius: 4px;
    cursor: pointer;
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
</head>

<body>

<div class="col">
<h1 style="color:green;">   Wards Information Form</h1>
<form action="6thAttempt.php" method="post">

  
 Registrar Id:<br>
 <input type="text" name="Registrar_id" value=""><br>
  
Supervisor Id:<br>
 <input type="text" name="Supervisor_id" value=""><br>
  
 
  Ward name:<br>
  <input type="text" name="Wardname" value=""><br>
  
  
  
  <br>
  <br>
  
<table>
  <tr>
    <th>Serial No.</th>
    <th>Bed No.</th>
    <th>Bed Type</th>
    <th>Rent</th>
    <th>Status(Empty/occupied)</th>
    
       
  </tr>
  <tr>
    <td>1.</td>
    <td><input type="text" class = "form-control" placeholder = "Bed_No" name="Bed_No_1"></td>
    <td><input type="text" class = "form-control" placeholder = "Bed_typ" name="Bed_type_1"></td>
    <td><input type="text" class = "form-control" placeholder = "Rent" name="Rent_1"></td>
    <td><input type="text" class = "form-control" placeholder = "Status_empty_Ocuupied" name="Status_1"> </td>
    
    
  </tr>
  <tr>
    <td>2.</td>
    
     <td><input type="text" class = "form-control" placeholder = "Bed_No" name="Bed_No_2"></td>
    <td><input type="text" class = "form-control" placeholder = "Bed_typ" name="Bed_type_2"></td>
    <td><input type="text" class = "form-control" placeholder = "Rent" name="Rent_2"></td>
    <td><input type="text" class = "form-control" placeholder = "Status_empty_Ocuupied" name="Status_2"> </td>
    
    
  </tr>
  <tr>
    <td>3.</td>
    
   <td><input type="text" class = "form-control" placeholder = "Bed_No" name="Bed_No_3"></td>
    <td><input type="text" class = "form-control" placeholder = "Bed_typ" name="Bed_type_3"></td>
    <td><input type="text" class = "form-control" placeholder = "Rent" name="Rent_3"></td>
    <td><input type="text" class = "form-control" placeholder = "Status_empty_Ocuupied" name="Status_3"> </td>
    
    
  </tr>
  
  <tr>
    <td>4.</td>
    
    <td><input type="text" class = "form-control" placeholder = "Bed_No" name="Bed_No_4"></td>
    <td><input type="text" class = "form-control" placeholder = "Bed_typ" name="Bed_type_4"></td>
    <td><input type="text" class = "form-control" placeholder = "Rent" name="Rent_4"></td>
    <td><input type="text" class = "form-control" placeholder = "Status_empty_Ocuupied" name="Status_4"> </td>
   
    
  </tr>
  <tr>
    <td>5.</td>
    <td><input type="text" class = "form-control" placeholder = "Bed_No" name="Bed_No_5"></td>
    <td><input type="text" class = "form-control" placeholder = "Bed_typ" name="Bed_type_5"></td>
    <td><input type="text" class = "form-control" placeholder = "Rent" name="Rent_5"></td>
    <td><input type="text" class = "form-control" placeholder = "Status_empty_Ocuupied" name="Status_5"> </td>
   
  
  <br>

  </tr>
  </table><br>



  
  <input type="submit" value="Submit">



  
</form> 

  

</body>


</html>
