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
    echo"<p>Định làm cái gì đấy</p>";
}
if($str=="insert_lesson"){
    echo"<p>Định phá à</p>";
}   
if($str=="add_blog"){
    echo"<p>Không có đâu :))</p>";
}
?>