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
<title>Add A New Chapter + </title>

<body>

<h1>
        <center><big>G</big>lobal <big>O</big>nline <big>IT</big> <big>T</big>raining</center>
</h1>

    <center>
    <div class="main">

    <form action="function.php" method="POST" enctype="multipart/form-data">

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
</br>
        <div class="field">
            Chapter Name </br>
        <input type="text" name="name" placeholder="Chapter Name" required="required"/>
    </div>

</br>

<div class="field">
            Chapter Content </br></br>
<textarea name="content" required="required" cols="75" rows="13" placeholder="Enter The Chapter Content Here...">
</textarea>
</div>
</br>
</br>    
    Select image to upload :
    <input type="file" name="image" id="image"/>
    </br>

</br>
<input type="submit" name="chapter" value="Add New Chapter" class="btn"/>
</br></br>
<font color="red">
<?php
error_reporting(0);
include("function.php"); 
echo $_SESSION["c-add"];
?>
</font>

</form>
</div>
</body>
</html>