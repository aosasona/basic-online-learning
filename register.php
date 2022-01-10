<?php include("function.php"); ?>
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
    position : static;
    top : 0;
    left : 10%;
    right : 10%;
}

select{
    appearance : none;
    outline : 0;
    background : white;
    width : auto%;
    height : 6%;
    color : black;
    cursor : pointer;
    border : 2px solid black;
    border-radius : 10px;
    margin-bottom : 2%;
}

.select{
    position : relative;
    display : block;
}

</style>
</head>
<title>Create A New Account</title>

<body>
<h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
</br></br>
<form action= "function.php" method="POST">
    <center>
    <div class="main">

    <!--Username field-->
    <div class="field"> 
        USERNAME </br>   
                 <input type="text" name="username" placeholder="Enter Username Here..." required="required"/></br>
</div>

<!-- First Name Field-->
<div class="field">
    FIRST NAME </br>
    <input type="text" name="first" placeholder = "First Name" required="required" />
</div></br>

<!-- Last Name Field-->
<div class="field">
    LAST NAME </br>
    <input type="text" name="last" placeholder = "Last Name" required="required" />
</div></br>

<!-- Email Address Field-->
<div class="field">
    E-MAIL ADDRESS </br>
    <input type="email" name="mail" placeholder = "e-Mail Address" required="required" />
</div></br>
<!-- DIV container for Password entry -->
<div class="field">
        PASSWORD</br>
                 <input type="password" name="pass1" placeholder="Enter Password Here..." minLength="6" required="required"/></br>
</div>

<!-- DIV container for Password Confirm entry -->
<div class="field">
        CONFIRM PASSWORD</br>
                 <input type="password" name="pass2" placeholder="Enter Password Here..." minLength="6" required="required"/></br>
</div>

    <div class="select">
    <select name="question" id="drop">
        <option> Select a security question --</option>
        <option value="Your pet's name?">Your Pet's Name?</option>
        <option value="Your Mother's name?">Your Mother's Name?</option>
        <option value="Your First Kiss?">Your First Kiss?</option>
        <option value="Your First Mobile Phone?">Your First Phone?</option>
        <option value="Your Best Friend?">Your Best Friend?</option>
</select>
</div>
</br>

<!-- Security Answer Field-->
<div class="field">
    SECURITY ANSWER </br>
    <input type="text" name="answer" placeholder = "Your Answer" required="required" />
</div></br>

<font color="red">
    
    <?php 
    error_reporting(0);
    echo $_SESSION["reg"]; 
    echo "</br></br>";
    ?>
</font>


<input type="submit" name="register" value="Register" class="btn"/>
</form>
</br></br>
Already have an account? <a href="login.php">Login here</a>

</div>
</body>
</html>


<?php
echo "</br></br></br>";
include("footer.php");
?>