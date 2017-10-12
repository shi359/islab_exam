<?php
require_once('database.php');
$rs=$db->prepare("SELECT * FROM member WHERE name=?");
$rs->execute(array($_POST['name']));
$row = $rs->fetch();
if(md5(sha1(md5($_POST['pass'])))===$row['pass']){
	$_SESSION['name']=$row['name'];
	$_SESSION['q1']=$row['q1'];
	$_SESSION['q2']=$row['q2'];
	$_SESSION['q3']=$row['q3'];
	$_SESSION['q4']=$row['q4'];
	$_SESSION['q5']=$row['q5'];
	$_SESSION['q6']=$row['q6'];
	$_SESSION['q7']=$row['q7'];
	$_SESSION['q8']=$row['q8'];
	$_SESSION['q9']=$row['q9'];
	$_SESSION['q10']=$row['q10'];
	$_SESSION['q11']=$row['q11'];
	$_SESSION['q12']=$row['q12'];
	$_SESSION['point']=$row['point'];
	header("Location: ./");
	exit;
}
else{
	echo "<script type=\"text/javascript\">";
	echo 'alert("帳號或密碼錯誤!");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
?>
