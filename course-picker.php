<?php include("function.php"); 

if(!LoggedIn()){
    echo '<meta http-equiv="refresh" content="0, url=login.php">';
}

//Course variable
$course_pick = $_GET["course"];
$_SESSION["course"] = $course_pick;
$tab = $_SESSION["course"];

//Select the name of the chapter from the table
$take = "SELECT * FROM course_list WHERE table_name='$tab'";
$cc = mysql_query($take);
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
a{
    text-decoration : none;
    color : yellow;
}
a:hover {
    text-decoration : underline;
    color : green;
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
</style>
</head>

<title>Course Chapters - <?php while($echo = mysql_fetch_array($cc)) {echo $echo["course_name"]; } ?></title>

<body>
    <center>
        <h1>
        <big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining
    </center>
</h1>

<h2>
    Course Chapters : </br>
</h2>

<?php
$sq = "SELECT * FROM $tab";
$que = mysql_query($sq);

echo "<ul>";
while($list = mysql_fetch_array($que)){
//Show the chapters
echo "<li>";
echo '<a href="/display_chapter.php?chapter='.$list["chapter"].'">'.$list["chapter"].'</a>';
echo "</li>";
}
echo "</ul>";
?>

</body>
</html>

<?php
echo "</br></br></br></br>";
include("footer.php");
?>