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
        $result = mysql_query("SELECT * FROM `OUR_IDEAS` ORDER BY ID ASC LIMIT " . $content1 . ", " . $content2);
        $total = mysql_query("SELECT * FROM `OUR_IDEAS`");
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
        
        $content1 = mysql_real_escape_string($_POST["SHORT_DESCRIPTION"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["DATE"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["IMAGE_PATH"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["BANNER_IMAGE"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["TITLE"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["BY"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["DISQUS"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["TYPE"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);
        
        $content9 = mysql_real_escape_string($_POST["ACTIVE"]);
        $content9 = htmlspecialchars($content9, ENT_QUOTES);
        
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        //Update record in database
        
        $result = mysql_query("UPDATE `OUR_IDEAS` SET
                              `SHORT_DESCRIPTION` = '" . $content1 . "',
                              `DATE` = '" . $content2 . "',
                              `IMAGE_PATH` = '" . $content3 . "',
                              `BANNER_IMAGE` = '" . $content4 . "',
                              `TITLE` = '" . $content5 . "',
                              `BY` = '" . $content6 . "',
                              `DISQUS` = '" . $content7 . "',
                              `TYPE` = '" . $content8 . "',
                              `ACTIVE` = '" . $content9 . "'
                              WHERE `ID` = '" . $id . "';");
         
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
        $result = mysql_query("DELETE FROM `OUR_IDEAS` WHERE `ID` = " . $id . ";");
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    
    else if($type == "id=add")
    {
        $content1 = mysql_real_escape_string($_POST["TITLE"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["DATE"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["IMAGE_PATH"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["BANNER_IMAGE"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["SHORT_DESCRIPTION"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["BY"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["DISQUS"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["TYPE"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);
        
        //Insert record into database
        $result = mysql_query("INSERT INTO `OUR_IDEAS` (`TITLE`, `DATE`, `IMAGE_PATH`, `BANNER_IMAGE`, `SHORT_DESCRIPTION`,`BY`,`TYPE`, `DISQUS`)                                                           VALUES (
                                                        '" . $content1 . "', 
                                                        '" . $content2 . "', 
                                                        '" . $content3 . "', 
                                                        '" . $content4 . "', 
                                                        '" . $content5 . "', 
                                                        '" . $content6 . "', 
                                                        '" . $content7 . "', 
                                                        '" . $content8 . "'
                                                        );");
         
        //Get last inserted record (to return to jTable)
        $result = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE ID = LAST_INSERT_ID();");
        $row = mysql_fetch_array($result);
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
    }
    
    else if($type == "id=getblog")
    {
        
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        //Get records from database
        $result = mysql_query("SELECT * FROM `OUR_IDEAS` WHERE `ID` = '" . $id . "';");
         
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
?>