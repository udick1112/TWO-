<?php
    error_reporting(0);//顯示錯誤
    
    $conn = mysqli_connect("localhost","root","", "mydb"); //連結資料庫
    if (mysqli_connect_error($conn))//沒連成功 顯示失敗 
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8"); //字元
    $result=mysqli_query($conn, "select * from user");//資料庫連結 user
    
    $login=FALSE;
    while ($row=mysqli_fetch_array($result)) {
        if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"]) //帳號密碼正確
        $login=TRUE;
    }
    
    if  (!$_POST["id"] || !$_POST["pwd"]){ //帳號或密碼不對
           echo "請輸入帳號/密碼"; 
           echo "<meta http-equiv='refresh' content='3;url=login.html'>";              
    }
    elseif ($login==TRUE){ //帳號密碼正確
      session_start();
      $_SESSION["id"] = $_POST['id'];
      echo "歡迎登入";    
    }
    else{
      echo "帳號密碼錯誤";
      echo "<meta http-equiv='refresh' content='3;url=login.html'>"; //帳號密碼錯誤 返回登入畫面
    }
?>