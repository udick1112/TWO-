<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","mydb");
$sql="select * from bulletin where bid={$_GET[bid]}"; //修改第幾個布告
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

echo /*貼上要修改的布告內容*/"
<h1>修改佈告</h1>
<form method=post action=bulletin_edit.php> 
    <input type=hidden name=bid value={$row[bid]}>
    佈告標題:<input type=text name=title size=200 value={$row[title]}><p>
    佈告內容:<p><textarea cols=100 rows=20 name=content>{$row[content]}</textarea><p>
    佈告類型:
    <input type=radio name=type value=1";
if($row[type]=="1") echo " checked";//原先的布告類別
echo">系上公告
    <input type=radio name=type value=2";
if($row[type]=="2")echo " checked";
echo">招生訊息
    <input type=radio name=type value=3";
if($row[type]=="3") echo " checked";
echo ">企業徵才
    <p>
    發布時間:<input type=date name=time value={$row[time]}><p>
    <input type=submit value=修改公告>
</form>
";


?>