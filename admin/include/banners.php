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
        $result = mysql_query("SELECT * FROM `BANNERS` ORDER BY ID ASC LIMIT " . $content1 . ", " . $content2);
        $total = mysql_query("SELECT * FROM `BANNERS`");
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
        
        $content1 = mysql_real_escape_string($_POST["HOMEBANNER"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["ABOUTBANNER"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["NEWSBANNER"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["BLOGBANNER"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["OURPEOPLEBANNER"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["CAREERSBANNER"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["CONTACTBANNER"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["ID"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);
        
        //Update record in database
        $result = mysql_query("UPDATE `BANNERS` SET
                            `HOMEBANNER` = '" . $content1 . "',
                            `ABOUTBANNER` = '" . $content2 . "',
                            `NEWSBANNER` = '" . $content3 . "',
                            `BLOGBANNER` = '" . $content4 . "',
                            `OURPEOPLEBANNER` = '" . $content5 . "',
                            `CAREERSBANNER` = '" . $content6 . "',
                            `CONTACTBANNER` = '" . $content7 . "'
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
        $result = mysql_query("DELETE FROM `BANNERS` WHERE `ID` = " . $id . ";");
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
?>