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
                $result = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE `FEATURED_PEOPLE` = 'checked' ORDER BY PEOPLE_RANK");

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

            if($type == "loadmeta")
            {
                //Get records from database
                $result = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE `FEATURED_META` = 'checked' ORDER BY META_RANK");

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

            if($type == "top4")
            {
                //Get records from database
                $result = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE `FEATURED_PEOPLE` = 'checked' ORDER BY PEOPLE_RANK LIMIT 4");

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

            if($type == "top4meta")
            {
                //Get records from database
                $result = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE `FEATURED_META` = 'checked' ORDER BY META_RANK LIMIT 4");

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

            if($type == "adlets")
            {
                //Get records from database
                $result1 = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `TYPE` = 'ENGINE' ORDER BY ID DESC LIMIT 1");
                $rows1 = array();
                while($row1 = mysql_fetch_array($result1))
                {
                    $rows1[] = $row1;
                }

                $result2 = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `TYPE` = 'IMPACT STORY' ORDER BY ID DESC LIMIT 1");
                $rows2 = array();
                while($row2 = mysql_fetch_array($result2))
                {
                    $rows2[] = $row2;
                }

                $result3 = mysql_query("SELECT * FROM `NEWS_UPDATES` WHERE `TYPE` = '1' ORDER BY ID DESC LIMIT 1");
                $rows3 = array();
                while($row3 = mysql_fetch_array($result3))
                {
                    $rows3[] = $row3;
                }

                //Return result to jTable
                $jTableResult = array();
                $jTableResult['Result'] = "OK";
                $jTableResult['table1'] = $rows1;
                $jTableResult['table2'] = $rows2;
                $jTableResult['table3'] = $rows3;
                print (json_encode($jTableResult));
            }

            if($type == "careers")
            {
                //Get records from database
                $result1 = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `TYPE` = 'ENGINE' ORDER BY ID DESC LIMIT 2");
                $rows1 = array();
                while($row1 = mysql_fetch_array($result1))
                {
                    $rows1[] = $row1;
                }

                $result2 = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `TYPE` = 'IMPACT STORY' ORDER BY ID DESC LIMIT 1");
                $rows2 = array();
                while($row2 = mysql_fetch_array($result2))
                {
                    $rows2[] = $row2;
                }

                $result3 = mysql_query("SELECT * FROM `NEWS_UPDATES` WHERE `TYPE` = '3' ORDER BY ID DESC LIMIT 1");
                $rows3 = array();
                while($row3 = mysql_fetch_array($result3))
                {
                    $rows3[] = $row3;
                }

                //Return result to jTable
                $jTableResult = array();
                $jTableResult['Result'] = "OK";
                $jTableResult['table1'] = $rows1;
                $jTableResult['table2'] = $rows2;
                $jTableResult['table3'] = $rows3;
                print (json_encode($jTableResult));
            }
        }
    }
?>