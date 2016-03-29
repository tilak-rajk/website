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
        $result = mysql_query("SELECT * FROM `CONTACT_US` ORDER BY ID ASC LIMIT " . $content1 . ", " . $content2);
        $total = mysql_query("SELECT * FROM `CONTACT_US`");
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
        
        $content1 = mysql_real_escape_string($_POST["banner_imagepath"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["C_ADDRESS"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["C_PHONE"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["C_FAX"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["C_EMAILID"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["C_LATLONG"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["S_C_NAME"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["S_C_DESIGNATION"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);
        
        $content9 = mysql_real_escape_string($_POST["S_C_PHONE"]);
        $content9 = htmlspecialchars($content9, ENT_QUOTES);
        
        $content10 = mysql_real_escape_string($_POST["S_C_EMAILID"]);
        $content10 = htmlspecialchars($content10, ENT_QUOTES);
        
        $content11 = mysql_real_escape_string($_POST["S_C_IMAGEPATH"]);
        $content11 = htmlspecialchars($content11, ENT_QUOTES);
        
        $content12 = mysql_real_escape_string($_POST["U_P_NAME"]);
        $content12 = htmlspecialchars($content12, ENT_QUOTES);
        
        $content13 = mysql_real_escape_string($_POST["U_P_DESIGNATION"]);
        $content13 = htmlspecialchars($content13, ENT_QUOTES);
        
        $content14 = mysql_real_escape_string($_POST["U_P_PHONE"]);
        $content14 = htmlspecialchars($content14, ENT_QUOTES);
        
        $content15 = mysql_real_escape_string($_POST["U_P_EMAILID"]);
        $content15 = htmlspecialchars($content15, ENT_QUOTES);
        
        $content16 = mysql_real_escape_string($_POST["U_P_IMAGEPATH"]);
        $content16 = htmlspecialchars($content16, ENT_QUOTES);
        
        $content17 = mysql_real_escape_string($_POST["ACTIVE"]);
        $content17 = htmlspecialchars($content17, ENT_QUOTES);
        
        $content18 = mysql_real_escape_string($_POST["ID"]);
        $content18 = htmlspecialchars($content18, ENT_QUOTES);
        
        $result = mysql_query("UPDATE `CONTACT_US` SET
                            `banner_imagepath` = '" . $content1 . "',
                            `C_ADDRESS` = '" . $content2 . "',
                            `C_PHONE` = '" . $content3 . "',
                            `C_FAX` = '" . $content4 . "',
                            `C_EMAILID` = '" . $content5 . "',
                            `C_LATLONG` = '" . $content6 . "',
                            `S_C_NAME` = '" . $content7 . "',
                            `S_C_DESIGNATION` = '" . $content8 . "',
                            `S_C_PHONE` = '" . $content9 . "',
                            `S_C_EMAILID` = '" . $content10 . "',
                            `S_C_IMAGEPATH` = '" . $content11 . "',
                            `U_P_NAME` = '" . $content12 . "',
                            `U_P_DESIGNATION` = '" . $content13 . "',
                            `U_P_PHONE` = '" . $content14 . "',
                            `U_P_EMAILID` = '" . $content15 . "',
                            `U_P_IMAGEPATH` = '" . $content16 . "',
                            `ACTIVE` = '" . $content17 . "'
                            WHERE `ID` = '" . $content18 . "';");
         
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
        $result = mysql_query("DELETE FROM `CONTACT_US` WHERE `ID` = " . $id . ";");
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    
    else if($type == "id=add")
    {
        //Insert record into database
        
        $content2 = mysql_real_escape_string($_POST["C_ADDRESS"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["C_PHONE"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["C_FAX"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["C_EMAILID"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["C_LATLONG"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["S_C_NAME"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["S_C_DESIGNATION"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);
        
        $content9 = mysql_real_escape_string($_POST["S_C_PHONE"]);
        $content9 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content10 = mysql_real_escape_string($_POST["S_C_EMAILID"]);
        $content10 = htmlspecialchars($content10, ENT_QUOTES);
        
        $content11 = mysql_real_escape_string($_POST["S_C_IMAGEPATH"]);
        $content11 = htmlspecialchars($content11, ENT_QUOTES);
        
        $content12 = mysql_real_escape_string($_POST["U_P_NAME"]);
        $content12 = htmlspecialchars($content12, ENT_QUOTES);
        
        $content13 = mysql_real_escape_string($_POST["U_P_DESIGNATION"]);
        $content13 = htmlspecialchars($content13, ENT_QUOTES);
        
        $content14 = mysql_real_escape_string($_POST["U_P_PHONE"]);
        $content14 = htmlspecialchars($content14, ENT_QUOTES);
        
        $content15 = mysql_real_escape_string($_POST["U_P_EMAILID"]);
        $content15 = htmlspecialchars($content15, ENT_QUOTES);
        
        $content16 = mysql_real_escape_string($_POST["U_P_IMAGEPATH"]);
        $content16 = htmlspecialchars($content16, ENT_QUOTES);
        
        $result = mysql_query("INSERT INTO `CONTACT_US` (`C_ADDRESS`, `C_PHONE`, `C_FAX`, `C_EMAILID`, `C_LATLONG`, `S_C_NAME`, `S_C_DESIGNATION`, `S_C_PHONE`, `S_C_EMAILID`, `S_C_IMAGEPATH`, `U_P_NAME`, `U_P_DESIGNATION`, `U_P_PHONE`, `U_P_EMAILID`, `U_P_IMAGEPATH`) VALUES ('" . $content2 . "', '" . $content3 . "', '" . $content4 . "', '" . $content5 . "', '" . $content6 . "', '" . $content7 . "', '" . $content8 . "', '" . $content9 . "', '" . $content10 . "', '" . $content11 . "', '" . $content12 . "', '" . $content13 . "', '" . $content14 . "', '" . $content15 . "', '" . $content16 . "');");
         
        //Get last inserted record (to return to jTable)
        $result = mysql_query("SELECT * FROM `CONTACT_US` WHERE ID = LAST_INSERT_ID();");
        $row = mysql_fetch_array($result);
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
    }
?>