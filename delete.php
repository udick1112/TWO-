<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","mydb");//連結資料庫
//DELETE FROM `bulletin` WHERE `bulletin`.`bid` = ???;
$sql="delete from bulletin where bid={$_GET[bid]}";
//echo $sql;
if(!mysqli_query($conn,$sql))
    echo "刪除錯誤";
else 
{
    echo "刪除成功;回前頁中...";
    echo "<meta http-equiv='refresh' content='2;url=bulletin.php'>";    
}


?>