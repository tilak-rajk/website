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
            $id = mysql_real_escape_string($_REQUEST["id"]);
            $id = htmlspecialchars($id, ENT_QUOTES);
            
            $type = mysql_real_escape_string($_REQUEST["type"]);
            $type = htmlspecialchars($type, ENT_QUOTES);

            if($type == "load")
            {
                //Get records from database
                $result = mysql_query("SELECT * FROM `CAREERS_INNER` WHERE `TYPE` = '".$id."' AND ACTIVE = 'TRUE' ORDER BY ID DESC");

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

            else if($type == "getnews")
            {
                //Get records from database
                $result = mysql_query("SELECT * FROM `CAREERS_INNER` WHERE `ID` = '" . $id . "';");

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