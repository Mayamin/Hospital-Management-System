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
<h1 style="color:green;">    Nurse's Information Form Form</h1>


<form action="5thAttempt.php" method="post"> 

  

Supervisor Id:<br>
 <input type="text" name="Supervisor_id" value=""><br>
  



  
  <br><br>
   Name:
   <div class="name">
    <input type="text" class = "form-control" placeholder = "First Name" name="firstname">
  </div>
  <div class="name">  
    <input type="text" class = "form-control" placeholder = "Middle Name" name="middlename">
  </div>
  <div class="name">
    <input type="text" class = "form-control" placeholder = "Last Name" name="lastname">
  </div><br><br>
  
  
   <div class="col"><input type="text" class = "form-control" placeholder = "Date Of Birth (YYY-mm-dd)" name="Birth_date"></div>
  <br>
   
  <div class="col"><input type="text" class = "form-control" placeholder = "Date Of Appointment (YYY-mm-dd)"  name="Appointment_date"></div>



   
  
  
   
   <h3>Educational Qualification</h3>

<table>
  <tr>
    <th>Serial </th>
    <th>Degree</th>
    <th>Board/Institute</th>
    <th>Year</th>
    <th>Division/CGPA</th>
    <th>position</th>
       
  </tr>
  <tr>
    <td>1.</td>
    <td><input type="text" class = "form-control" placeholder = "SSC" name="SSC"> </td>

    <td>   <input type="text" class = "form-control" placeholder = "Board_Instituite" name="Board_Instituite_1"> </td>

    <td> <input type="text" class = "form-control" placeholder = "Year" name="Year_1"> </td>

    <td> <input type="text" class = "form-control" placeholder = "Division/CGPA" name="Division_CGPA_1"></td>
    
    <td><input type="text" class = "form-control" placeholder = "Position" name="Position_1"> </td>
    
  </tr>
  <tr>
    <td>2.</td>
    <td><input type="text" class = "form-control" placeholder = "HSC" name="HSC"></td>

    <td><input type="text" class = "form-control" placeholder = "Board_Instituite" name="Board_Instituite_2"> </td>
    
    <td> <input type="text" class = "form-control" placeholder = "Year" name="Year_2"></td>
    <td> <input type="text" class = "form-control" placeholder = "Division/CGPA" name="Division_CGPA_2"></td>
    
    <td><input type="text" class = "form-control" placeholder = "Position" name="Position_2">  </td>
    
    
  </tr>
  <tr>
    <td>3.</td>
    <td><input type="text" class = "form-control" placeholder = "Bsc in nursing" name="BSC"></td>
    
    <td><input type="text" class = "form-control" placeholder = "Board_Instituite" name="Board_Instituite_3"> </td>
    
    <td> <input type="text" class = "form-control" placeholder = "Year" name="Year_3"></td>
    <td> <input type="text" class = "form-control" placeholder = "Division/CGPA" name="Division_CGPA_3"></td>
    
    <td><input type="text" class = "form-control" placeholder = "Position" name="Position_3">  </td>
    
    
  </tr>
  
  <tr>
    <td>4.</td>
    <td><input type="text" class = "form-control" placeholder = "Degree" name="Degree_1"> </td>
    
    <td> <input type="text" class = "form-control" placeholder = "Board_Instituite" name="Board_Instituite_4"></td>
    
    <td> <input type="text" class = "form-control" placeholder = "Year" name="Year_4"></td>
    <td> <input type="text" class = "form-control" placeholder = "Division/CGPA" name="Division_CGPA_4"></td>
    
    <td><input type="text" class = "form-control" placeholder = "Position" name="Position_4">  </td>
   
    
  </tr>
  <tr>
    <td>5.</td>
    <td><input type="text" class = "form-control" placeholder = "Degree" name="Degree_2"> </td>
    
    <td> <input type="text" class = "form-control" placeholder = "Board_Instituite" name="Board_Instituite_5"></td>
    
    <td> <input type="text" class = "form-control" placeholder = "Year" name="Year_5"></td>
    <td><input type="text" class = "form-control" placeholder = "Division/CGPA" name="Division_CGPA_5"> </td>
    
    <td> <input type="text" class = "form-control" placeholder = "Position" name="Position_5"> </td>

    
    
  </tr>
  </table><br>
  
  
  <table>
  <tr>
    <th>Serial No.</th>
    <th>Job title</th>
    <th>Form</th>
    <th>To</th>
    <th>Organization</th>
    
       
  </tr>
  <tr>
    <td>1.</td>
    
    <td><input type="text" class = "form-control" placeholder = "Job_title" name="Job_title_1"></td>
    <td><input type="text" class = "form-control" placeholder = "From" name="From_1"></td>
    <td><input type="text" class = "form-control" placeholder = "To" name="To_1"></td>
    <td><input type="text" class = "form-control" placeholder = "Organization" name="Org_1"> </td>
    
    
  </tr>
  <tr>
    <td>2.</td>

    <td><input type="text" class = "form-control" placeholder = "Job_title" name="Job_title_2"></td>
    <td><input type="text" class = "form-control" placeholder = "From" name="From_2"></td>
    <td><input type="text" class = "form-control" placeholder = "To" name="To_2"></td>
    <td><input type="text" class = "form-control" placeholder = "Organization" name="Org_2"> </td>
    
    
  </tr>
  <tr>
    <td>3.</td>

    <td><input type="text" class = "form-control" placeholder = "Job_title" name="Job_title_3"></td>
    <td><input type="text" class = "form-control" placeholder = "From" name="From_3"></td>
    <td><input type="text" class = "form-control" placeholder = "To" name="To_3"></td>
    <td><input type="text" class = "form-control" placeholder = "Organization" name="Org_3"> </td>
    
  </tr>
  
  <tr>
    <td>4.</td>

    <td><input type="text" class = "form-control" placeholder = "Job_title" name="Job_title_4"></td>
    <td><input type="text" class = "form-control" placeholder = "From" name="From_4"></td>
    <td><input type="text" class = "form-control" placeholder = "To" name="To_4"></td>
    <td><input type="text" class = "form-control" placeholder = "Organization" name="Org_4"> </td>
    
    
  </tr>
  <tr>
    <td>5.</td>

   
    <td><input type="text" class = "form-control" placeholder = "Job_title" name="Job_title_5"></td>
    <td><input type="text" class = "form-control" placeholder = "From" name="From_5"></td>
    <td><input type="text" class = "form-control" placeholder = "To" name="To_5"></td>
    <td><input type="text" class = "form-control" placeholder = "Organization" name="Org_5"> </td>
    
  </tr>
  </table><br>
  
  
  <input type="submit" value="Submit">
  
  


</form>
  
   <br><br>
  
    
 
  
 
  
    <br>
  
  <br>
  
</form> 


</body>
</html>
