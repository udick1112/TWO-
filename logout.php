<?php

    error_reporting(0);
    session_start();
    //將session清空
    //session_destroy(); 將伺服器上所有的session variable清空
    unset($_SESSION["id"]);
    echo "登出中......";
    echo "<meta http-equiv=REFRESH CONTENT='1;url=login.html'>";

?>