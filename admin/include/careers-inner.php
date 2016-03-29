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
        $result = mysql_query("SELECT * FROM `CAREERS_INNER` ORDER BY ID ASC LIMIT " . $content1 . ", " . $content2);
        $total = mysql_query("SELECT * FROM `CAREERS_INNER`");
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
        //Update record in database
        
        $content1 = mysql_real_escape_string($_POST["TYPE"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["TITLE"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["SHORT_DESCRIPTION"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["APPLY_LINK"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["EMAILID"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["CONTACT_PERSON"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["ACTIVE"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["ID"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);

        $result = mysql_query("UPDATE `CAREERS_INNER` SET
                              `TYPE` = '" . $content1 . "',
                              `TITLE` = '" . $content2 . "',
                              `SHORT_DESCRIPTION` = '" . $content3 . "',
                              `APPLY_LINK` = '" . $content4 . "',
                              `EMAILID` = '" . $content5 . "',
                              `CONTACT_PERSON` = '" . $content6 . "',
                              `ACTIVE` = '" . $content7 . "'
                              WHERE `ID` = '" . $content8 . "';");
         
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
        $result = mysql_query("DELETE FROM `CAREERS_INNER` WHERE `ID` = " . $id . ";");
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    
    else if($type == "id=add")
    {
        $content1 = mysql_real_escape_string($_POST["TYPE"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["TITLE"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["SHORT_DESCRIPTION"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["APPLY_LINK"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["EMAILID"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["CONTACT_PERSON"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        //Insert record into database
        $result = mysql_query("INSERT INTO `CAREERS_INNER` (`TYPE`, `TITLE`, `SHORT_DESCRIPTION`, `APPLY_LINK`, `EMAILID`, `CONTACT_PERSON`) VALUES ('" . $content1 . "', '" . $content2 . "', '" . $content3 . "', '" . $content4 . "', '" . $content5 . "', '" . $content6 . "');");
         
        //Get last inserted record (to return to jTable)
        $result = mysql_query("SELECT * FROM `CAREERS_INNER` WHERE ID = LAST_INSERT_ID();");
        $row = mysql_fetch_array($result);
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
    }
    
    if($type == "id=getcareer")
    {
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        
        //Get records from database
        $result = mysql_query("SELECT * FROM `CAREERS_INNER` WHERE `ID` = '" . $id . "'");
         
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
?>