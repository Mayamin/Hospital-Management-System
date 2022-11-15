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
<h1 style="color:green;">  Medicine Entry Form</h1>
<form action="7thAttempt.php" method="post">



  
Supplier Id:
  <input type="text" name=" SupplierId" value=""><br>s
   
  Supplier Name:
  <input type="text" name="SupplierName" value=""><br><br>
  
  
  <br>
  <br>
  
<table>
  <tr>
    <th>Medicine Id</th>
    <th>Name</th>
    <th>Type</th>
    <th>Unit</th>
    <th>Quantity</th>
    <th>Date Of Manufacture</th>
    <th>Expiry date</th>
    
    
       
  </tr>
  <tr>
    <td><input type="text" class = "form-control" placeholder = "Medicine-Id" name="Med_Id_1"></td>

     <td><input type="text" class = "form-control" placeholder = "Medicine_Name" name="Medicine_Name_1"></td>

    <td><input type="text" class = "form-control" placeholder = "Medicine_type" name="Medicine_type_1"></td>

    <td><input type="text" class = "form-control" placeholder = "Unit_price" name="Unit_price_1"></td>

   <td><input type="text" class = "form-control" placeholder = "Quantity" name="Quantity_1"></td>

    <td><input type="text" class = "form-control" placeholder = "Manufacture_date" name="Manufacture_date_1"></td>

    <td><input type="text" class = "form-control" placeholder = "Expiry_date" name="Expiry_date_1"></td>
    
    
  </tr>
  <tr>
    <td><input type="text" class = "form-control" placeholder = "Medicine-Id" name="Med_Id_2"></td>
     <td><input type="text" class = "form-control" placeholder = "Medicine_Name" name="Medicine_Name_2"></td>

    <td><input type="text" class = "form-control" placeholder = "Medicine_type" name="Medicine_type_2"></td>

    <td><input type="text" class = "form-control" placeholder = "Unit_price" name="Unit_price_2"></td>

   <td><input type="text" class = "form-control" placeholder = "Quantity" name="Quantity_2"></td>

    <td><input type="text" class = "form-control" placeholder = "Manufacture_date" name="Manufacture_date_2"></td>
    <td><input type="text" class = "form-control" placeholder = "Expiry_date" name="Expiry_date_2"></td>
  
    
    
  </tr>
  <tr>
    <td><input type="text" class = "form-control" placeholder = "Medicine-Id" name="Med_Id_3"></td>
     <td><input type="text" class = "form-control" placeholder = "Medicine_Name" name="Medicine_Name_3"></td>

    <td><input type="text" class = "form-control" placeholder = "Medicine_type" name="Medicine_type_3"></td>

    <td><input type="text" class = "form-control" placeholder = "Unit_price" name="Unit_price_3"></td>

   <td><input type="text" class = "form-control" placeholder = "Quantity" name="Quantity_3"></td>

    <td><input type="text" class = "form-control" placeholder = "Manufacture_date" name="Manufacture_date_3"></td>
    <td><input type="text" class = "form-control" placeholder = "Expiry_date" name="Expiry_date_3"></td>
    
    
  </tr>
  
  <tr>
   <td><input type="text" class = "form-control" placeholder = "Medicine-Id" name="Med_Id_4"></td>
     <td><input type="text" class = "form-control" placeholder = "Medicine_Name" name="Medicine_Name_4"></td>

    <td><input type="text" class = "form-control" placeholder = "Medicine_type" name="Medicine_type_4"></td>

    <td><input type="text" class = "form-control" placeholder = "Unit_price" name="Unit_price_4"></td>

   <td><input type="text" class = "form-control" placeholder = "Quantity" name="Quantity_4"></td>

    <td><input type="text" class = "form-control" placeholder = "Manufacture_date" name="Manufacture_date_4"></td>
    <td><input type="text" class = "form-control" placeholder = "Expiry_date" name="Expiry_date_4"></td>
   
    
  </tr>
  <tr>
   <td><input type="text" class = "form-control" placeholder = "Medicine-Id" name="Med_Id_5"></td>
     <td><input type="text" class = "form-control" placeholder = "Medicine_Name" name="Medicine_Name_5"></td>

    <td><input type="text" class = "form-control" placeholder = "Medicine_type" name="Medicine_type_5"></td>

    <td><input type="text" class = "form-control" placeholder = "Unit_price" name="Unit_price_5"></td>

   <td><input type="text" class = "form-control" placeholder = "Quantity" name="Quantity_5"></td>

    <td><input type="text" class = "form-control" placeholder = "Manufacture_date" name="Manufacture_date_5"></td>
    <td><input type="text" class = "form-control" placeholder = "Expiry_date" name="Expiry_date_5"></td>
   
  </tr>
  </table><br>

  <br>
  
 <input type="submit" value="Submit">


</form> 


</body>
</html>
