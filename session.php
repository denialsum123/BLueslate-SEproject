<?php
include ('config.php');
session_start();

$user_check= $_SESSION['login_user'];
$ses_sql = mysqli_query($db, "select * from login_students where ID = '$user_check'");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session = $row['ID'];
$login_rollno = $row['ROLL_NUMBER'];
$login_sem = $row['Semester'];
$login_stream = $row['Stream'];
$current_subject='';
if(!isset($_SESSION['login_user'])){
 header("location:index.php");
}