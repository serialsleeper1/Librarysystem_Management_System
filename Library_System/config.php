<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "ls";

$conn = mysqli_connect($server, $username, $pass);

$sql = "create database if not exists $db ";
mysqli_query($conn, $sql);
$conn = mysqli_connect($server, $username, $pass,$db);

$sql = "create table if not exists students(
    id int auto_increment primary key,
    name varchar(100),
    email varchar(100),
    password varchar(50)
    )";

mysqli_query($conn, $sql);

$sql = "create table if not exists books(
        id int auto_increment primary key,
        author varchar(100),
        stud_id int,
        foreign key(stud_id) references students(id) on delete cascade
        )";
mysqli_query($conn, $sql);

$sql = "create table if not exists borrowed(
    id int auto_increment primary key,
    book_id int,
    foreign key(book_id) references books(id),
    data date,
    no_borrowed int,
    stud_id int,
    foreign key(stud_id) references students(id)
    )";
    
    mysqli_query($conn, $sql);

?>