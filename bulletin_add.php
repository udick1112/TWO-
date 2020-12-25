<?php
error_reporting(0);
session_start();
if(!isset($_SESSION[id])) //防止打網址登入
{
    echo "請輸入帳號密碼";
    echo "<meta http-equiv='refresh' content='3;url=login.html'>";
}
else
{
    $conn=mysqli_connect("localhost","root","","mydb");
    $sql="insert into bulletin(title, content , type , time) values('{$_POST[title]}','{$_POST[content]}','{$_POST[type]}','{$_POST[time]}')"; //新增輸入內容
    //echo $sql;
    if(!mysqli_query($conn, $sql))
        echo "新增佈告錯誤";
    else
        echo "新增佈告成功";
    
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>"; //返回這個網址

}

?>