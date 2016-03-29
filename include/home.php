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
            $result = mysql_query("SELECT * FROM `OUR_IDEAS` ORDER BY ID DESC LIMIT 2");
            $rows = array();
            while($row = mysql_fetch_array($result))
            {
                $rows[] = $row;
            }

            $result_1 = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `TYPE` = 'IMPACT STORY' ORDER BY ID DESC LIMIT 2");
            $rows_1 = array();
            while($row = mysql_fetch_array($result_1))
            {
                $rows_1[] = $row;
            }

            $result_2 = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `TYPE` <> 'IMPACT STORY' ORDER BY ID DESC LIMIT 1");
            $rows_2 = array();
            while($row = mysql_fetch_array($result_2))
            {
                $rows_2[] = $row;
            }

            $result_3 = mysql_query("SELECT * FROM `NEWS_UPDATES` ORDER BY ID DESC LIMIT 1");
            $rows_3 = array();
            while($row = mysql_fetch_array($result_3))
            {
                $rows_3[] = $row;
            }

            $result_4 = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE `FEATURED_META` = 'checked' ORDER BY META_RANK LIMIT 1");
            $rows_4 = array();
            while($row = mysql_fetch_array($result_4))
            {
                $rows_4[] = $row;
            }

            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['OURIDEAS'] = $rows;
            $jTableResult['IMPACT'] = $rows_1;
            $jTableResult['ENGINE'] = $rows_2;
            $jTableResult['NEWS'] = $rows_3;
            $jTableResult['CAREER'] = $rows_4;
            print (json_encode($jTableResult));
        }
    }
?>