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
<title>Identity Confirmation - Security Question</title>

<body>
<h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
</br></br>
</br>

<?php
session_start();

$user = $_POST["username"];
$user = strToLower($user);
$mail = $_POST["mail"];
$_SESSION["user"] = $user;
$username = $_SESSION["user"];
$_SESSION["mail"] = $mail;
$email = $_SESSION["mail"];

$sql = "SELECT * FROM users WHERE username='$username' AND email='$email'";
$result = mysql_query($sql);
$num = mysql_num_rows($result);

if($num != 1){
    echo '<center><font color="red">';
    echo "Account not found!";
    echo '</font></br></br></br>';
    echo '<small><a href="/forgot-password/index.php">Go Back</a></small></center>';
}

else {
    $sec = "SELECT * FROM sec WHERE username='$username' AND email='$email'";
    $res = mysql_query($sec);
    
    while($show = mysql_fetch_array($res)){
        echo '<form action="reset.php" method="POST">';
        echo '<center><div class="field-show">';
        echo $show["question"];
        echo '</div>';
        echo '<div class="field">';
        echo '<input type="text" name="answer" placeholder="Security Answer">';
        echo '</div>';
        echo '</br><input type="submit" name="security" class="btn"/></br></br>';
        echo '<progress value="50" max="100"/>';
        echo '</center>';
        echo '</form>';
    }
}
?>

<center>

</center>
</body>
</html>