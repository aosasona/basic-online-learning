<?php include("function.php"); 

if(!LoggedIn()){
    echo '<meta http-equiv="refresh" content="0, url=login.php">';
}

$tab = $_SESSION["course"];
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
 body {
    padding : 5%;
    color : WHITE;
    background-color : #000C34;
    font-family : arial;
    margin-right : 4%;
    margin-left : 4%;
    margin-top : 2%;
    margin-bottom : 2%;
}
h1 {
    font-family : Tahoma;
    margin-bottom : 10%;
    margin-top: 3%;
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
    font-size : 110%
    color : black;
    background-color : white;
    border : none;
    padding : 0%;
    width : 8%;
    height : 6%;
    border-radius : 0px;
    margin-top : 0%;
}
.btn:hover {
    color : green;
    background : black;
}
select{
    appearance : none;
    outline : 0;
    background : white;
    width : 25%;
    height : 9%;
    color : black;
    cursor : pointer;
    border : none;
    border-radius : 10px;
    margin-bottom : 1%;
}

.select{
    position : relative;
    display : block;
}
.contact{
    color : black;
    background-color : white;
    height : 20px;
    width : auto;
    position : fixed;
    top : 0;
    margin-bottom : 3%;
    left : 20%;
    right : 20%;
}
a{
    text-decoration : none;
    color : red;
}
a:hover {
    text-decoration : underline;
    color : green;
}
</style>
</head>
<title>Global Online IT Training</title>

<body>

    <h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
</br>

<?php
$chapter = $_GET["chapter"];

$handle = "SELECT * FROM $tab WHERE chapter='$chapter'";
$res = mysql_query($handle);

while($content = mysql_fetch_array($res)){
echo "<center><h2>".$chapter."</h2></center>";
echo "</br>";
echo "<i><small>Last Updated On : ".$content["reg_date"]."</small></i>";
echo "</br>";
echo $content["chapter_content"];
echo "</br></br>";
echo "<center>";
echo '<img src="'.$content["image"].'" width = "25%" height="25%" alt="Chapter image"/>';
echo "</center>";
echo "</br>";
}
?>

</body>
</html>

<?php
echo "</br></br></br></br>";
include("footer.php");
?>