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
progress[value] {
    width : 35%;
    height : 5%;
}
</style>
</head>
<title>Forgot Password?</title>

<body>
<h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
</br></br>
</br>

Did you forget your password? Don't worry, we'll help you reset your password in just few minutes! Please
fill the form below.</br>

<form action="security.php" method="POST">
<center>
</br></br></br>
<div class="field">
    USERNAME </br>
    <input type="text" name="username" placeholder="Username" required="required"/>
</div>

<div class="field">
    E-MAIL ADDRESS</br>
    <input type="email" name="mail" placeholder="e-Mail Address" required="required"/>
</div>

</br>
<input type="submit" name="forgot" class="btn"/>
</form>
</br></br></br>

<center>
    <progress value="25" max="100"/>
</center>