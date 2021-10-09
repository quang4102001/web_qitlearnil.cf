<?php

function OpenCon () 
 {
 $dbhost = "localhost" ;  
 $dbuser = "19136598" ;  
 $dbpass = "quang410" ;  
 $db = "web_english" ;  
 $conn = new mysqli ( $dbhost , $dbuser , $dbpass , $db ) or die ( "Kết nối không thành công:%s\n". $conn -> connect_error ) ;   
 mysqli_set_charset ($conn,"utf32") ;  
 
 return $conn ; 
 }
 
function CloseCon ($conn) 
 {
 $conn -> close () ;  
 }
   
?>