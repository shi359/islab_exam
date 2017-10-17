<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
header("Content-type: text/html; charset=utf-8");
 
$dsn='pgsql:dbname=dv2lnfb91mt9c;host=ec2-54-204-41-80.compute-1.amazonaws.com';
$user='fynkvgkqferzxy';
$password='fc35718fda445b9b356176a1a75d93d46935437eaee3c21d8b92d95611210980';
try{
    $db=new PDO($dsn,$user,$password);
    $db->exec("set names utf8");
}
catch(PDOException $e){
    die($e->getMessage());
}
 
?>
