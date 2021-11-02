<?php 
$str=$_GET['go'];
if($str=="home")
{
	include './inc/home.php';
}
if($str=="courses"){
    include "./inc/courses2.php";
}
if($str=="blog"){
    include "./inc/blog2.php";
}
if($str=="course"){
    include "./inc/course2.php";
}
if($str=="blog_chitiet")
{
	include "./inc/blog_chitiet2.php";
}
if($str=="lesson"){
    include "./inc/lesson2.php";
}
if($str=="insert_course"){
    include "./inc/insert_course2.php";
}
if($str=="insert_lesson"){
    include "./inc/insert_lesson2.php";
}   
if($str=="add_blog"){
    include "./inc/add_blog2.php";
}
?>