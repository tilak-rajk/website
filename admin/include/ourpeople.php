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
        $result = mysql_query("SELECT * FROM `OUR_PEOPLE` ORDER BY ID DESC LIMIT " . $content1 . ", " . $content2);
        $total = mysql_query("SELECT * FROM `OUR_PEOPLE`");
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
    
    else if($type == "id=update")
    {    
        $content1 = mysql_real_escape_string($_POST["TYPE"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["NAME"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["DESIGNATION"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["DESCRIPTION"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["LONG_DESCRIPTON"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["EMAILID"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["THUMB_IMAGE_PATH"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["BIG_IMAGE_PATH"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);
        
        $content9 = mysql_real_escape_string($_POST["TWITTER"]);
        $content9 = htmlspecialchars($content9, ENT_QUOTES);
        
        $content10 = mysql_real_escape_string($_POST["FACEBOOK"]);
        $content10 = htmlspecialchars($content10, ENT_QUOTES);
        
        $content11 = mysql_real_escape_string($_POST["GOOGLEPLUS"]);
        $content11 = htmlspecialchars($content11, ENT_QUOTES);
        
        $content12 = mysql_real_escape_string($_POST["INSTAGRAM"]);
        $content12 = htmlspecialchars($contencontent12t7, ENT_QUOTES);
        
        $content13 = mysql_real_escape_string($_POST["GLASSDOOR"]);
        $content13 = htmlspecialchars($content13, ENT_QUOTES);
        
        $content14 = mysql_real_escape_string($_POST["LINKEDIN"]);
        $content14 = htmlspecialchars($content14, ENT_QUOTES);
        
        $content15 = mysql_real_escape_string($_POST["ACTIVE"]);
        $content15 = htmlspecialchars($content15, ENT_QUOTES);
        
        
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        
        //Update record in database
        
        $result = mysql_query("UPDATE `OUR_PEOPLE` SET
            TYPE = '" . $content1 . "',
            NAME = '" . $content2 . "',
            DESIGNATION = '" . $content3 . "',
            DESCRIPTION = '" . $content4 . "',
            LONG_DESCRIPTON = '" . $content5 . "',
            EMAILID = '" . $content6 . "',
            THUMB_IMAGE_PATH = '" . $content7 . "',
            BIG_IMAGE_PATH = '" . $content8 . "',
            TWITTER = '" . $content9 . "',
            FACEBOOK = '" . $content10 . "',
            GOOGLEPLUS = '" . $content11 . "',
            INSTAGRAM = '" . $content12 . "',
            GLASSDOOR = '" . $content13 . "',
            LINKEDIN = '" . $content14 . "',
            ACTIVE = '" . $content15 . "',
            WHERE ID = '" . $id . "';");
        
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
        $result = mysql_query("DELETE FROM `OUR_PEOPLE` WHERE `ID` = " . $id . ";");
        
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }    
    else if($type == "id=add")
    {    
        $content1 = mysql_real_escape_string($_POST["TYPE"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["NAME"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["DESIGNATION"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["DESCRIPTION"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["LONG_DESCRIPTON"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["EMAILID"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["THUMB_IMAGE_PATH"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["BIG_IMAGE_PATH"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);
        
        $content9 = mysql_real_escape_string($_POST["TWITTER"]);
        $content9 = htmlspecialchars($content9, ENT_QUOTES);
        
        $content10 = mysql_real_escape_string($_POST["FACEBOOK"]);
        $content10 = htmlspecialchars($content10, ENT_QUOTES);
        
        $content11 = mysql_real_escape_string($_POST["GOOGLEPLUS"]);
        $content11 = htmlspecialchars($content11, ENT_QUOTES);
        
        $content12 = mysql_real_escape_string($_POST["INSTAGRAM"]);
        $content12 = htmlspecialchars($contencontent12t7, ENT_QUOTES);
        
        $content13 = mysql_real_escape_string($_POST["GLASSDOOR"]);
        $content13 = htmlspecialchars($content13, ENT_QUOTES);
        
        $content14 = mysql_real_escape_string($_POST["LINKEDIN"]);
        $content14 = htmlspecialchars($content14, ENT_QUOTES);
        
        //Insert record into database
        
        $result = mysql_query("INSERT INTO `OUR_PEOPLE` (`TYPE`, `NAME`, `DESIGNATION`, `DESCRIPTION`, `LONG_DESCRIPTON`, `EMAILID`, `THUMB_IMAGE_PATH`, `BIG_IMAGE_PATH`,`TWITTER`,`FACEBOOK`,`GOOGLEPLUS`,`INSTAGRAM`,`GLASSDOOR`,`LINKEDIN`, `PEOPLE_RANK`, `META_RANK`) VALUES (
        '" . content1 . "', '" . content2 . "', '" . content3 . "', '" . content4 . "', '" . content5 . "', '" . content6 . "', '" . content7 . "', '" . content8 . "', '" . content9 . "', '" . content10 . "', '" . content11 . "', '" . content12 . "', '" . content13 . "', '" . content14 . "', 'null', 'null');");
        
        //Get last inserted record (to return to jTable)
        $result = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE ID = LAST_INSERT_ID();");
        $row = mysql_fetch_array($result);
        
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
    }
    
    else if($type == "id=update_opt")
    {
        $type = $_POST["TYPE"];
        if($type == 'fp')
        {
            $id = mysql_real_escape_string($_POST["ID"]);
            $id = htmlspecialchars($id, ENT_QUOTES);
            
            
            $option = mysql_real_escape_string($_POST["option"]);
            $option = htmlspecialchars($option, ENT_QUOTES);
            
            $result = mysql_query("UPDATE `OUR_PEOPLE` SET `FEATURED_PEOPLE` = '" . $option . "' WHERE ID = '" . $id . "';");
            $row = mysql_fetch_array($result);
        }
        else if($type == 'fm')
        {
            $id = mysql_real_escape_string($_POST["ID"]);
            $id = htmlspecialchars($id, ENT_QUOTES);            
            
            $option = mysql_real_escape_string($_POST["option"]);
            $option = htmlspecialchars($option, ENT_QUOTES);
            
            $result = mysql_query("UPDATE `OUR_PEOPLE` SET `FEATURED_META` = '" . $option . "' WHERE ID = '" . $id . "';");
            $row = mysql_fetch_array($result);
        }
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
    }
    
    else if($type == "id=update_rank"){
    $type = $_POST["TYPE"];
    if($type == 'P')
    {
        $rank = mysql_real_escape_string($_POST["rank"]);
        $rank = htmlspecialchars($rank, ENT_QUOTES);
        
        if($rank == ''){ $rank = 'null'; }
        
        $check = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE `PEOPLE_RANK` = '" . $rank . "' AND `PEOPLE_RANK` <> 'null';");
        $num_rows = mysql_num_rows($check);
        
        if($num_rows > 0)
        {
            $row = "Exists";
        }
        else
        {
            $id = mysql_real_escape_string($_POST["ID"]);
            $id = htmlspecialchars($id, ENT_QUOTES);
            
            $rank = mysql_real_escape_string($_POST["rank"]);
            $rank = htmlspecialchars($rank, ENT_QUOTES);            
            
            $result = mysql_query("UPDATE `OUR_PEOPLE` SET `PEOPLE_RANK` = '" . $rank . "' WHERE ID = '" . $id . "';");
            $row = mysql_fetch_array($result);
        }
    }
    else if($type == 'R')
    {            
        $rank = mysql_real_escape_string($_POST["rank"]);
        $rank = htmlspecialchars($rank, ENT_QUOTES);
        
        if($rank == ''){ $rank = 'null'; }
        
        $check = mysql_query("SELECT * FROM `OUR_PEOPLE` WHERE `META_RANK` = '" . $rank . "' AND `META_RANK` <> 'null';");
        $num_rows = mysql_num_rows($check);
        
        if($num_rows > 0)
        {
            $row = "Exists";
        }
        else
        {
            $id = mysql_real_escape_string($_POST["ID"]);
            $id = htmlspecialchars($id, ENT_QUOTES);
            
            $result = mysql_query("UPDATE `OUR_PEOPLE` SET `META_RANK` = '" . $rank . "' WHERE ID = '" . $id . "';");
            $row = mysql_fetch_array($result);
        }
    }
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    $jTableResult['Record'] = $row;
    print json_encode($jTableResult);
    }
?>