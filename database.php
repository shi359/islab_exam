<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
header("Content-type: text/html; charset=utf-8");

$dsn='pgsql:dbname=d94c0f0fe9aup4;host=ec2-107-22-235-167.compute-1.amazonaws.com';
$user='zofbdabdyzxzsp';
$password='71ffdd38229703c9b8c1a4581230f7b4317fe99b9c56a3f0b29f9892d7979e76';
try{
	$db=new PDO($dsn,$user,$password);
	$db->exec("set names utf8");
}
catch(PDOException $e){
	die($e->getMessage());
}

?>
