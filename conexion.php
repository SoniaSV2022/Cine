<?php
 $servername="localhost";
 $username="root";
 $password="root";

 $link = mysqli_connect($servername, $username, $password);

 if(!$link){
     die("Connection failed". mysqli_connect_error());

 }else{
     //echo"Connection successfully";
 }

 mysqli_select_db($link, "cine_db");
?>