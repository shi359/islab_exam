<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
header("Content-type: text/html; charset=utf-8");

$dsn='mysql:dbname=ctf;host=localhost';
$user='ctf';
$password='ctf';
try{
	$db=new PDO($dsn,$user,$password);
	$db->exec("set names utf8");
}
catch(PDOException $e){
	die($e->getMessage());
}

?>
