<?php
 $connect = mysqli_connect('localhost', 'root', '', 'assignment');
 if(!$connect){
     die("Not conncet" . "mysqli_error($connect)");
 }
?>