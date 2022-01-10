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
}
a{
    text-decoration : none;
    color : red;
}
a:hover {
    text-decoration : underline;
    color : green;
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
    border : 2px solid black;
    border-radius : 10px;
    color : black;
    width : 50%;
    height : auto;
    font-family : Aharoni; 
    margin-top : 1%;
    margin-bottom : 3%;
}
.btn {
    color : white;
    background-color : #000C34;
    border : none;
    padding : 2%;
    width : auto;
    height : auto;
    border-radius : 20px;
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
<title>Login Or Create A New Account</title>

<body>
<h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
</br></br>

<!-- Login Form -->
    <center>
    <div class="main">
<font color="red">
    <?php echo $_SESSION["msg"]; ?>
</font>
</br></br>
        <form method = "POST" action="function.php">
        <!-- DIV container for Username entry -->
        <div class="field"> 
        USERNAME </br>   
                 <input type="text" name="username" placeholder="Enter Username Here..." required="required"/></br>
</div>
        <!-- DIV container for Password entry -->
        <div class="field">
        PASSWORD</br>
                 <input type="password" name="password" placeholder="Enter Password Here..." required="required"/></br>
</div>

<input type = "submit" name="login" class="btn" value="Login"/></br></br>

<a href="/forgot-password/"><small>Forgot Password?</small> </a></br></br>
<b>OR</b> </br></br>
<a href="register.php">Create A New Account</a>
</form>
</div>
</body>
</html>

<?php
echo "</br></br>";
include("footer.php");
?>