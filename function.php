<?php
session_start();
//Create a database connection
mysql_connect("localhost", "root", "root") or die(mysql_error());


//Create a new database
$db = "CREATE DATABASE global_it";
mysql_query($db);


//Select the database created
mysql_select_db("global_it");


//Create a new table for USERS
$tab = "CREATE TABLE users (
    id INT(255) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    pass VARCHAR(200) NOT NULL,
    email VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT
        CURRENT_TIMESTAMP ON UPDATE
        CURRENT_TIMESTAMP)";
mysql_query($tab);



//Create a new table for the security questions
$sec = "CREATE TABLE sec (
    id INT(255) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    question VARCHAR(500) NOT NULL,
    answer VARCHAR(255) NOT NULL
    )";
mysql_query($sec);

//Create a new table for the course names
$course_create = "CREATE TABLE course_list (
    course_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(900) NOT NULL,
    table_name VARCHAR(255) NOT NULL,
    status VARCHAR(500) NOT NULL
    )";
mysql_query($course_create);

//Checks if user is logged in or not
function LoggedIn() {
    if(isset($_SESSION["user"])){
        return true;
    } else {
        return false;
    }
}


//Login Script
if(isset($_POST["login"])){
    $user = $_POST["username"];
    $user = strToLower($user);
    $user = mysql_real_escape_string($user);
    $pass = $_POST["password"];
    
    $select = "SELECT * FROM users WHERE username = '$user'";
    $check = mysql_query($select);
    $num = mysql_num_rows($check);
    
    //If user doesn't exist, redirect to login page and echo an error

    if($num != 1){
        $_SESSION["msg"] = "User not found! Check your username and try again";
        echo '<meta http-equiv="refresh" content="0, url=login.php">';
    }
    else {
        $passcheck = "SELECT * FROM users WHERE username = '$user'";
        $que = mysql_query($passcheck);
        while($data = mysql_fetch_array($que)){
            $password = $data["pass"];
            $pass = md5($pass);

            //Check if the password entered matches the one in the database
            if($pass == $password){
                $_SESSION["msg"] = " ";
                $_SESSION["user"] = $user;
                echo '<meta http-equiv="refresh" content="0, url=index.php">';
            } else {
                $_SESSION["msg"] = "Password is incorrect! Try Again";
                echo '<meta http-equiv="refresh" content="0, url=login.php">';
            }
        }
    }
}

//Create a new account

if(isset($_POST["register"])){
    $user = $_POST["username"];
    $user = strToLower($user);
    $user = mysql_real_escape_string($user);
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $first = $_POST["first"];
    $last = $_POST["last"];
    $mail = $_POST["mail"];
    $question = $_POST["question"];
    $question = addSlashes($question);
    $answer = $_POST["answer"];
    $answer = addSlashes($answer);
    $_SESSION["reg"] = " ";
    //Check if the username has been taken
    $use = "SELECT * FROM users WHERE username='$user'";
    $q_use = mysql_query($use);
    $count_use = mysql_num_rows($q_use);

    if($count_use != 0){
        $_SESSION["reg"] = "Username has been taken!";
            echo '<meta http-equiv="refresh" content="0, url=register.php">';
    }
    else {
        //Check if the username has been taken 
        $mail_c = "SELECT * FROM users WHERE email='$mail'";
        $q_mail = mysql_query($mail_c);
        $count_mail = mysql_num_rows($q_mail);

        if($count_mail != 0 ){
            $_SESSION["reg"] = "e-Mail has been used once!";
                echo '<meta http-equiv="refresh" content="0, url=register.php">';
        } else {
        if($pass1 != $pass2){
            $_SESSION["reg"] = "Passwords do not match!";
                echo '<meta http-equiv="refresh" content="0, url=register.php">';
        } else {
            $orig_pass = md5($pass1);

            //Insert data into table after all requirements have been met
            $enter = "INSERT INTO users (username, pass, email, first_name, last_name)
                    VALUES('$user', '$orig_pass', '$mail', '$first', '$last')";
            
            $sec_enter = "INSERT INTO sec (username, email, question, answer)
                        VALUES('$user', '$mail', '$question', '$answer')";
            
            mysql_query($enter) or die(mysql_error());
            mysql_query($sec_enter) or die(mysql_error());

            //Set a current user (session)
            $_SESSION["user"] = $user;

            echo '<meta http-equiv="refresh" content="0, url=index.php">';
        }
        }
    }
}

?>