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
progress[value] {
    width : 35%;
    height : 5%;
}
</style>
</head>
<title>Reset Password</title>

<body>
<h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
</br></br>

<?php
if($_POST["security"]){
    $answer = $_POST["answer"];
    $answer = strtolower($answer);
    $user = $_SESSION["user"];
$sql ="SELECT * FROM sec WHERE username='$user'";
$result = mysql_query($sql);

while($pick = mysql_fetch_array($result)){
    $ans = $pick["answer"];
    $ans = strtolower($ans);
    if($ans == $answer){
        echo '<center>
        <form action="final.php" method="POST">
            <div class="field">
                NEW PASSWORD </br>
                <input type="password" name="pass1" placeholder="New Password"/>
        </div>
        </br>
        <div class="field">
                CONFIRM NEW PASSWORD </br>
                <input type="password" name="pass2" placeholder="New Password"/>
        </div>
        </br>
        <input type="submit" name="final" class="btn"/>
        </br></br>
        <progress value="75" max="100"/>';
    }
    else {
    echo '<center><font color="red">';
    echo "Verification Failed! : Your answer is incorect.";
    echo '</font></br></br></br>';
    echo '<small><a href="/forgot-password/index.php">Go Back</a></small></center>';
    }
}
}
?>


