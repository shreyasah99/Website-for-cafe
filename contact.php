<?php

$con=@mysql_connect("localhost","root","") or die(mysql_error());

if(!$con)
{
    echo "error in connectoion";
    exit(0)
}

mysql_query("create database form");

mysql_select_db("form",$con);

mysql_query("create table form1(name varchar(20),email varchar(20),pno int , feedback varchar(20));");

$name = $_POST['name'];
$email= $_POST['email'];
$pno= $_POST['pno'];
$feedback= $_POST['feedback'];

mysql_query("insert into hey values('$name','$email','$pno','$feedback');

mysql-close($con);

?>