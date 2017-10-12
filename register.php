<?php
require_once('./database.php');
if($_POST['code']!='duckll.tw'){
	echo "<script type=\"text/javascript\">";
	echo 'alert("邀請碼錯誤!");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
else{
    $sql = "SELECT count(*) FROM member WHERE name = '{$_POST['name']}'";
    $rs = $db->query($sql);
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
        $sql = "INSERT INTO member (name, pass) VALUES ('{$_POST['name']}', '{$hashpassword}')";
        $rs = $db->prepare($sql);
        $rs->execute();
        echo "<script type=\"text/javascript\">";
        echo 'alert("註冊成功!");';
        echo "history.go(-2);";
        echo "</script>";
        exit;
    }
}
?>
