<?php
if (isset($_POST['NAME']) && isset($_POST['PIN'])){
    session_start();
    if (($_SESSION['Username'] == $_POST['NAME']) && ($_SESSION['Password'] == $_POST['PIN'])){
        $user = $_SESSION['Username'];
        echo "<span>Welcome $user </span>";

    } 
    else{
        echo '<h2 style="color: white; text-align: center;">Incorrect Username or Password <br></h2>';
        
    }
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
    <h1>Login</h1>
    </div>
    <div id="Login_form">
    <form action="login.php" method="POST">
    Username:
    <input type="text" name="NAME"  placeholder="Enter Username"> <br><br>
    Password:
    <input type="password" name="PIN"  placeholder="Enter Password"> <br><br>
    <input type="submit" value="Login">
    </form>
    <p><a href="registration.php"> Register Here</a></p>
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
h1, p{
    text-align: center;
}
p a{
    text-decoration: none;
    color: #FFA23A;
}
#Login_form{
    width: 300px;
    margin: 20px auto 0px auto;
    background: white;
    padding:20px 10px;
    display: block;
    line-height: 1.2em;
}
#Login_form input[type=text],
#Login_form input[type=password]{
    background-color: #f1f1f1;
    width: 100%;
    padding: 10px;
    border: 1px #ddd solid;
}
#Login_form input[type=text]:focus,
#Login_form input[type=password]:focus{
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
#Login_form input[type=submit]:hover{
    background-color: #344a72;
    color: white;   
}
span{
    font-size: 20px;
    color: white;
    text-align: center;
}
</style>

