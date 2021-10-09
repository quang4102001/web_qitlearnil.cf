<?php 
$str=$_GET['go'];
if($str=="home")
{
	echo"<link rel='stylesheet' href='./css/index.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>";
}
if($str=="courses")
{
	echo"<link rel='stylesheet' href='./css/course.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>";
}
if($str=="blog")
{
	echo"<link rel='stylesheet' href='./css/course.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>";
}
if($str=="course"){
	echo"<link rel='stylesheet' href='./css/course_just1.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_course.css'>";
}
if($str=="blog_chitiet"){
    echo"
    <link rel='stylesheet' type='text/css' href='./css/index.css'>
    <link rel='stylesheet' href='./css/blog_chitiet.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_lesson.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_blog_chitiet.css'>";
}
if($str=="lesson"){
    echo"<link rel='stylesheet' href='./css/course.css'>
    <link rel='stylesheet' href='./css/lesson.css';>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_lesson.css'>";
}
if($str=="add_blog"){
    echo"<link rel='stylesheet' type='text/css' href='./css/insert.css'>
    <link rel='stylesheet' href='./css/course.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_insert.css'>";
}
if($str=="insert_course"){
    echo"<link rel='stylesheet' type='text/css' href='./css/insert.css'>
    <link rel='stylesheet' href='./css/course.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_insert.css'>";
}
if($str=="insert_lesson"){
    echo"<link rel='stylesheet' type='text/css' href='./css/insert.css'>
    <link rel='stylesheet' href='./css/course.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_index.css'>
    <link rel='stylesheet' type='text/css' href='./css/responsive/rps_insert.css'>";
}
?>