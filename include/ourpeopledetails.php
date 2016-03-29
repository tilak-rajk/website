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
            $id = mysql_real_escape_string($_SERVER['QUERY_STRING']);
            $id = htmlspecialchars($id, ENT_QUOTES);
            
            $result = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE ID = $id");
            //Add all records to an array
            $rows = array();
            while($row = mysql_fetch_array($result))
            {
                $rows[] = $row;
            }
            //Return result to jTable
            $jTableResult = array();
            $jTableResult['Result'] = $id;
            $jTableResult['Records'] = $rows;
            print (json_encode($jTableResult));
        }
    }
?>