<?php
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['intern_id']) && isset($_POST['email']) && isset($_POST['category'])){
    session_start ();
    $_SESSION['Username'] = $_POST['username'];
    $_SESSION['Password'] = $_POST['password'];
    $_SESSION['Intern_id'] = $_POST['intern_id'];
    $_SESSION['Email'] = $_POST['email'];
    $_SESSION['Category'] = $_POST['category'];
    $login_page = 'login.php';

    if(!empty($_SESSION['Username']) && !empty($_SESSION['Password']) && !empty($_SESSION['Intern_id']) && !empty($_SESSION['Email']) && !empty($_SESSION['Category'])){
    header('Location: '.$login_page);
    } 
    else{
        echo '<h2 style="color: red; text-align: center;"> All input fields are required <br></h2> ';
    
    }
     
}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Calculator</title>
</head>
<body>
<div>
<h1>A Registration Form</h1>
<div id="form-section">
    <form action="registration.php" method="POST">
    Username:
    <input type="text" name="username" placeholder="Enter your Username" ><br><br>
    Password:
    <input type="password" name="password" placeholder="Enter your Password" ><br><br>
    Intern_Id:
    <input type="text" name="intern_id" placeholder="Enter your Intern ID "><br><br>
    Email:
    <input type="email" name="email" placeholder="Enter your Email" ><br><br>
    Category:
    <br>
    <input type="radio" name="category" id="Website(backend)" value="Website Design & Development (Back-end)"> 
    <label for="Website(backend)">Website Design & Development (Back-end)</label>
    <br>
    <input type="radio" name="category" id="Website(frontend)" value="Website Design & Development (Front-end)"> 
    <label for="Website(frontend)">Website Design & Development (Front-end)</label>
    <br>
    <input type="radio" name="category" id="Moblie_App" value="Mobile Application Development">
    <label for="Moblie_App">Mobile Application Development</label>
    <br>
    <input type="radio" name="category" id="Digital_Marketing" value="Digital Marketing"> 
    <label for="Digital_Marketing">Digital Marketing</label>
    <br>
    <input type="radio" name="category" id="Graphics_Design" value="Graphics Design"> 
    <label for="Graphics_Design">Graphics Design</label>
    <br>
    <input type="radio" name="category" id="Content_Creation" value="Content Creation"> 
    <label for="Content_Creation">Content Creation</label>
    <br>
    <input type="radio" name="category" id="Video Animation" value="Video Animation">
    <label for="Video_Animation">Video Animation</label> 
    <br>
    <input type="radio" name="category" id="Customer_Care" value="Customer Care Service"> 
    <label for="Customer_Care">Customer Care Service</label>
    <br>
    <input type="radio" name="category" id="Product_Management" value="Product Management"> 
    <label for="Product_Management">Product Management</label>
    <br>
    <input type="radio" name="category" id="Microsoft_office" value="Microsoft office Suite"> 
    <label for="Microsoft_office">Microsoft office Suite</label>
    <br>
    <input type="radio" name="category" id="UI/UX" value="UI/UX">
    <label for="UI/UX">UI/UX</label>
     <br>
     <input type="radio" name="category" id="Website(wordpress)" value="Website Design & Development (WordPress)">
    <label for="Website(wordpress)">Website Design & Development (WordPress)</label>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
</div>
</div>
</body>
</html>


<style>
*{
    box-sizing: border-box;
}
body{
    background: #344a72;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
}
h1{
    text-align: center;
}
#form-section{
    width: 300px;
    margin: 20px auto 0px auto;
    background: white;
    padding:20px 10px;
    display: block;
    line-height: 1.2em;
}
#form-section input[type=text],
#form-section input[type=password],
#form-section input[type=email],
#form-section textarea {
    background-color: #f1f1f1;
    width: 100%;
    padding: 10px;
    border: 1px #ddd solid;
}
#form-section input[type=text]:focus,
#form-section input[type=password]:focus,
#form-section input[type=email]:focus,
#form-section textarea:focus{
  background-color: #EDF2F7;
  border-radius: 5px;
  outline: none;
}
input[type=submit]{
    cursor: pointer;
    outline: none;
    width: 100%;
    padding: 10px;
}
#form-section input[type=submit]:hover{
    background-color: #344a72;
    color: white;   
}

</style>

