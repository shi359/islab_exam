<?php
require_once('database.php');
if(isset($_SESSION['name'])){
    $rs=$db->prepare("SELECT * FROM flag WHERE flag=?");
    $rs->execute(array($_POST['flag']));
    if($row = $rs->fetch()){
        $q=$row['qid'];
        if($_SESSION['q'.$q]==1){
            echo "<script type=\"text/javascript\">";
            echo 'alert("passed!");';
            echo "history.go(-1);";
            echo "</script>";
            exit();
        }
        else{
            $_SESSION['q'.$q]=1;
            $_SESSION['point']=$row['point']+$_SESSION['point'];
            echo $point;
            $sql="UPDATE member SET q".$q."=1 , point=".$_SESSION['point']." WHERE `name`='".$_SESSION['name']."'";
            $rs = $db->prepare($sql);
            $rs->execute();
            header("Location: ./");
        }
    }
    else{
        echo "<script type=\"text/javascript\">";
        echo 'alert("wrong flag");';
        echo "history.go(-1);";
        echo "</script>";
        exit();
    }
}
else{
    echo "<script type=\"text/javascript\">";
    echo 'alert("請先登入");';
    echo "history.go(-1);";
    echo "</script>";
    exit();
}
?>
