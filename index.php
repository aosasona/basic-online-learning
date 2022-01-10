<?php include("function.php"); 

if(!LoggedIn()){
    echo '<meta http-equiv="refresh" content="0, url=login.php">';
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    body {
    color : WHITE;
    background-color : #000C34;
    font-family : calibri;
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
<!--Contact at the top-->
<center>
<div class="contact">
Contact No. : +91 9390484180 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
e-Mail : Training@onlinetrainingglobal.com
</div>
</center>

    <h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
<center>
<form action="course-picker.php" method="GET">
    <H2> What would you like to study today?</h2>
    <div class="select">
<select name="course">
    <?php 
    $take = "SELECT * FROM course_list ORDER BY course_name ASC";
    $res = mysql_query($take);

    while($show = mysql_fetch_array($res)){

        echo '<option value ="'.$show["table_name"].'">'.$show["course_name"].'</option>';
    }
    ?>
    </select>
</div>

<input type="submit" name="pick" value="GO" class="btn"/>
</form>
</body>
</br></br></br></br>
<center>
<a href="logout.php">Logout</a>
</center>
</html>

<?php
echo "</br></br>";
include("footer.php");
?>