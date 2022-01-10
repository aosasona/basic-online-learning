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
<title>Create A New Course + </title>

<body>
    <center>
    <div class="main">
    <form action="function.php" method="POST">

        <div class="field">
            Course Name
        <input type="text" name="name" placeholder="Course Name" required="required"/>
    </div>

</br>

<div class="field">
            Course Table Name
        <input type="text" name="table" placeholder="Course Table" required="required"/>
</div>

</br>
<input type="submit" name="add" value="Create New Course" class="btn"/>
</br></br>
<font color="red">
<?php
error_reporting(0);
include("function.php"); 
echo $_SESSION["add"];
?>
</font>
</form>
</div>
</body>
</html>

<?php
echo "</br></br></br>";
include("footer.php");
?>