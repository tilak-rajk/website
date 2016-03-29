<?php
    include("connect.php");
    
    $type = $_SERVER['QUERY_STRING'];
    $pieces = explode("&", $type);
    $type = $pieces[0];
    
    if($type == "id=load")
    {
        $content1 = mysql_real_escape_string($_REQUEST["jtStartIndex"]);
        $content2 = mysql_real_escape_string($_REQUEST["jtPageSize"]);
        
        //Get records from database
        $result = mysql_query("SELECT * FROM `SOCIAL` ORDER BY ID ASC LIMIT " . $content1 . ", " . $content2);
        $total = mysql_query("SELECT * FROM `SOCIAL`");
        $total_count = mysql_num_rows($total);
         
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
        $jTableResult['TotalRecordCount'] = $total_count;
        print (json_encode($jTableResult));
    }
    
    else if($type == "id=update"){    
        
        $content1 = mysql_real_escape_string($_POST["TWITTER_LINK"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["FACEBOOK_LINK"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["GOOGLE_PLUS_LINK"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["LINKEDIN_LINK"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["INSTAGRAM_LINK"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["GLASSDOOR_LINK"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        
        //Update record in database
        $result = mysql_query("UPDATE SOCIAL SET 
                                TWITTER_LINK = '" . $content1 . "',
                                FACEBOOK_LINK = '" . $content2 . "',
                                GOOGLE_PLUS_LINK = '" . $content3 . "',
                                LINKEDIN_LINK = '" . $content4 . "',
                                INSTAGRAM_LINK = '" . $content5 . "',
                                GLASSDOOR_LINK = '" . $content6 . "'
                                WHERE id = " . $id . ";");
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    
    else if($type == "id=delete")
    {
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        //Delete from database
        $result = mysql_query("DELETE FROM `SOCIAL` WHERE `id` = " . $id . ";");
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    
    else if($type == "id=create")
    {
        ////Insert record into database
        //$result = mysql_query("INSERT INTO people(Name, Age, RecordDate) VALUES('" . $_POST["Name"] . "', " . $_POST["Age"] . ",now());");
        // 
        ////Get last inserted record (to return to jTable)
        //$result = mysql_query("SELECT * FROM people WHERE PersonId = LAST_INSERT_ID();");
        //$row = mysql_fetch_array($result);
        // 
        ////Return result to jTable
        //$jTableResult = array();
        //$jTableResult['Result'] = "OK";
        //$jTableResult['Record'] = $row;
        //print json_encode($jTableResult);
    }
?>