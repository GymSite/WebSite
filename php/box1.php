<?php

$id=$_POST['NAME1'];
$n=$_POST['MELI1'];
$f=$_POST['TAMAS1'];


$link=mysqli_connect("localhost","root","");
$db=mysqli_select_db($link,"bashghah");
$sqlc="insert into shena(name,kodmeli,shomare) values('$id','$n','$f')";
$res=mysqli_query($link,$sqlc);

?>
