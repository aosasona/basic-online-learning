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

?>