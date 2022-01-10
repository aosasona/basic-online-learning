<?php
error_reporting(0);
include("function.php"); ?>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    padding : 5%;
    color : WHITE;
    background-color : #000C34;
    font-family : arial;
    margin-right : 5%;
    margin-left : 5%;
    margin-top : 2%;
    margin-bottom : 2%;
}
a{
    text-decoration : none;
    color : white;
}
a:hover {
    text-decoration : underline;
    color : red;
}
.main{
    padding : 8%;
    background-color : white;
    border : none;
    border-radius : 10px;
    color : black;
    width : 70%;
    height : auto;
    font-family : Aharoni;
}
.field input {
    padding : 2%;
    background-color : white;
    border : none;
    border-radius : 10px;
    color : black;
    width : 30%;
    height : auto;
    font-family : Aharoni; 
    margin-top : 1%;
    margin-bottom : 3%;
}
.field-show {
    padding : 2%;
    background-color : white;
    border : none;
    border-radius : 10px;
    color : black;
    width : 30%;
    height : auto;
    font-family : Aharoni; 
    margin-top : 1%;
    margin-bottom : 3%;
}
.btn {
    color : black;
    background-color : white;
    border : none;
    padding : 2%;
    width : auto;
    height : auto;
    border-radius : 20px;
}
.btn:hover {
    color : green;
    background : black;
}
h1 {
    font-family : Tahoma;
    position : fixed;
    top : 0;
    left : 10%;
    right : 10%;
}
</style>
</head>
<title>DONE!</title>

<body>
<h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
</br></br>
<?php
include("function.php");

if(isset($_POST["final"])){

    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $user = $_SESSION["user"];
    $email = $_SESSION["mail"];
    if($pass1 == $pass2){
        $pass = md5($pass1);

        $set = "UPDATE users SET pass='$pass' WHERE username='$user' AND email='$email'";
        mysql_query($set);
        $_SESSION["msg"] = "Password Changed! You Can Now Login";
        echo '<meta http-equiv="refresh" content="0, url=../login.php">';
    }
    else {
        echo "Passwords Do Not Match";
    }
}
?>

</body>
</html>
