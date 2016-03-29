<?php
    include("connect.php");
    
    if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') 
    {    
        session_start();   
        $headers = apache_request_headers();
        foreach ($headers as $header => $value) {
            if($header == 'Token')
            {
                $token = $value;
            }
        }
        if($_SESSION['token'] == $token)
        {
            $type = mysql_real_escape_string($_REQUEST["id"]);
            $type = htmlspecialchars($type, ENT_QUOTES);
            
            if($type == "load")
            {
                //Get records from database
                $result = mysql_query("SELECT * FROM `CONTACT_US`");

                //Add all records to an array
                $rows = array();
                while($row = mysql_fetch_array($result))
                {
                    $rows[] = $row;
                }

                //Return result to jTable
                $jTableResult = array();
                $jTableResult['Result'] = "OK";
                $jTableResult['Records'] = $rows;
                print (json_encode($jTableResult));
            }
        }
    }
?>