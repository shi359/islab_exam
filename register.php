<?php
require_once('./database.php');
if($_POST['code']!='islab2017'){
	echo "<script type=\"text/javascript\">";
	echo 'alert("邀請碼錯誤!");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
else{
    $rs= $db->prepare("SELECT count(*) FROM member WHERE name =?");
    $rs->execute(array($_POST['name']));
    $row = $rs->fetch();
    if($row[0]==1){
        echo "<script type=\"text/javascript\">";
        echo 'alert("這個帳號有人用過囉");';
        echo "history.go(-1);";
        echo "</script>";
        exit;
    }
    else{
        $hashpassword=md5(sha1(md5($_POST['pass'])));
        $rs = $db->prepare("INSERT INTO member (name, pass) VALUES (?, ?)");
        $rs->execute(array($_POST['name'], $hashpassword));
        echo "<script type=\"text/javascript\">";
        echo 'alert("註冊成功!");';
        echo "history.go(-2);";
        echo "</script>";
        exit;
    }
}
?>
