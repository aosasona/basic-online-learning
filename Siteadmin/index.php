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
    font-size : 110%
    color : black;
    background-color : white;
    border : none;
    padding : 2%;
    width : 40%;
    height : auto;
    border-radius : 0px;
    margin-top : 4%;
}
.btn:hover {
    color : green;
    background : black;
}
h1 {
    font-size: 40px;
    font-family : Tahoma;
    position : fixed;
    top : 0;
    left : 10%;
    right : 10%;
    margin-bottom:4%;
}
</style>
</head>

<title>Site Admin</title>

<h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>
</br>
</br>
<!--Add a new course-->
<center>
    <form action="/Siteadmin/add_course.php">
        <input type="submit" value="Create A New Course" class="btn"/>
</form>
</center>

<!-- Add a new chapter -->
</br>
<center>
    <form action="/Siteadmin/add_chapter.php">
        <input type="submit" value="Add A New Chapter" class="btn"/>
</form>
</center>

</body>
</html>

<?php
echo "</br></br></br></br>";
include("footer.php");
?>