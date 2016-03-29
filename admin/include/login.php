<?php
	include("connect.php");
	if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') 
    {
        $username = mysql_real_escape_string($_REQUEST["username"]);
        $password = mysql_real_escape_string($_REQUEST["password"]);
        
        $username = htmlspecialchars($username, ENT_QUOTES);
        $password = htmlspecialchars($password, ENT_QUOTES);
    
        session_start();
        
        $cquery=mysql_query("Select * from `ADMIN_LOGIN` where `FIRST_NAME` = '$username' and `PASSWORD` = '$password'");
        $id = '';
        while($cquery1=mysql_fetch_array($cquery))
        {
            $username = $cquery1["FIRST_NAME"];
            $id = $cquery1["ID"];
        }
        if($id != '')
        {
            $_SESSION["user"] = $username;
            $_SESSION["uid"] = $id;
            echo 'OK';
        }
        else
        {
            echo 'Fail';
        }
    }
    else
    {
        echo 'Fail';
    }
?>