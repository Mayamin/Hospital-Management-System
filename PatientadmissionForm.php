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
 <div class="col">

<h1 style="color:green;">     Patient Admission Form</h1>

<form action="1stAttempt.php" method="post">



  
    <input type="text" class = "form-control" placeholder = "Date_of_Admission" name="Date_of_Admission">
     <input type="text" class = "form-control" placeholder = "ID" name="ID">
    <input type="text" class = "form-control" placeholder = "First Name" name="firstname">
    <input type="text" class = "form-control" placeholder = "Middle Name" name="middlename">
    <input type="text" class = "form-control" placeholder = "Last Name" name="lastname">
  
 <h3>Information</h3>
  <input type="text" name="date_of_birth" class = "form-control" placeholder = "Date Of Birth (yyy-mm-dd)">
  <input type="text" name="mobile1" class = "form-control" placeholder = "Mobile(1) ">
  <input type="text" name="mobile2" class = "form-control" placeholder = " Mobile(2)">
  
<h3>Present Address</h3>
  <input type="text" name="street_no1" class = "form-control" placeholder = "StreetNo./ Village">
                                  
  <input type="text" name="street_name1" class = "form-control" placeholder = "Street Name">
  <input type="text" name="area1" class = "form-control" placeholder = "Area">
  <input type="text" name="thana1" class = "form-control" placeholder = "Thana">
  <input type="text" name="district1" class = "form-control" placeholder = "District">

<h3>Permanent Address</h3>
  <input type="text" name="street_no2" class = "form-control" placeholder = "StreetNo./ Village">
                                  
  <input type="text" name="street_name2" class = "form-control" placeholder = "Street Name">
  <input type="text" name="area2" class = "form-control" placeholder = "Area">
  <input type="text" name="thana2" class = "form-control" placeholder = "Thana">
  <input type="text" name="district2" class = "form-control" placeholder = "District">





  <h3>Profession</h3>
  <select name="profession">
    <option value="goverment job">Goverment job</option>
    <option value="private job">Private job</option>
    <option value="business">Business</option>
    <option value="farmer">Farmer</option>
    <option value="retired">Retired</option>
    <option value="others">Others</option>
  </select>
  <br/>
 
  Amount Deposited<input type="text" name="Amount_Deposited" placeholder="Ammount Deposited">


  <select name="accomodation">
    <option value="cabin">Cabin</option>
    <option value="ward">Ward</option>
  </select>
  
  <br><br>
  Signature with date
  <br><br>
  
  Name:<br><input type="text" name="relative_name" placeholder="Relative Name">
  <br><br>
  Relation with the Patient<input type="text" name="relationship_with_patient" placeholder="Relationship with Patient">
    <br>
      <br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
