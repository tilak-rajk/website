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
            
            $ID = mysql_real_escape_string($_POST["ID"]);
            $ID = htmlspecialchars($ID, ENT_QUOTES);
            
            $LIMIT = mysql_real_escape_string($_POST["LIMIT"]);
            $LIMIT = htmlspecialchars($LIMIT, ENT_QUOTES);

            if($type == "load")
            {
                //Get records from database
                $result = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE ID < " . $ID . " ORDER BY ID DESC LIMIT $LIMIT;");

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

            else if($type == "getblog")
            {
                //Get records from database
                $result = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `ID` = '" . $ID . "' ORDER BY ID DESC;");

                //Add all records to an array
                $rows = array();
                while($row = mysql_fetch_array($result))
                {
                    $type=$row["TYPE"];
                    $rows[] = $row;
                }


                $result1 = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `TYPE` = '" . $type . "' AND `ID` != '" . $ID . "' ORDER BY ID DESC LIMIT 3;");

                //Add all records to an array
                $rows1 = array();
                while($row1 = mysql_fetch_array($result1))
                {
                    $rows1[] = $row1;
                }

                //Return result to jTable
                $jTableResult = array();
                $jTableResult['Result'] = "OK";
                $jTableResult['Records'] = $rows;
                $jTableResult['Adlets'] = $rows1;
                print (json_encode($jTableResult));
            }
        }
    }
?>