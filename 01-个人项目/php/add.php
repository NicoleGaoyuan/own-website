<?php
$username=$_POST['username'];
$title=$_POST['title'];
$youX=$_POST['youX'];
include_once "function.php";
$sqlStr1=<<<sql2
INSERT INTO message (username,title,youX) VALUES ("$username","$title","$youX");
sql2;
$res2 = mysqli_query($con,$sqlStr1);
if(!$res2){
    die('插入失败'.mysqli_error($con));
}
echo "插入成功";