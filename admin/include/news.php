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
        $result = mysql_query("SELECT * FROM `NEWS_UPDATES` ORDER BY ID ASC LIMIT " . $content1 . ", " . $content2);
        $total = mysql_query("SELECT * FROM `NEWS_UPDATES`");
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
    
    else if($type == "id=getnews")
    {
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        //Get records from database
        $result = mysql_query("SELECT * FROM `NEWS_UPDATES` WHERE `ID` = '" . $id . "';");
         
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
    
    else if($type == "id=update"){
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        //Update record in database    
        
        $content1 = mysql_real_escape_string($_POST["DATE"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["TYPE"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["TITLE"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["SHORT_DESCRIPTION"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["BANNER_IMAGE"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["DISQUS"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["ACTIVE"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        $content8 = mysql_real_escape_string($_POST["ID"]);
        $content8 = htmlspecialchars($content8, ENT_QUOTES);
        
        $result = mysql_query("UPDATE `NEWS_UPDATES` SET
                              `DATE` = '" . $content1 . "',
                              `TYPE` = '" . $content2 . "',
                              `TITLE` = '" . $content3 . "',
                              `SHORT_DESCRIPTION` = '" . $content4 . "',
                              `BANNER_IMAGE` = '" . $content5 . "',
                              `DISQUS` = '" . $content6 . "',
                              `ACTIVE` = '" . $content7 . "',
                              WHERE `ID` = '" . $content8 . "';");
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    
    else if($type == "id=updatenews"){
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        //Update record in database    
        $content = str_replace("'", "&apos;", $_POST["LONG_DESCRIPTION"]);
        $content = mysql_real_escape_string($content);
        
        $result = mysql_query("UPDATE `NEWS_UPDATES` SET `LONG_DESCRIPTION` = '" . $content . "' WHERE `ID` = '" . $id . "';");
                              
        print "OK";
    }
    
    else if($type == "id=delete")
    {
        $id = mysql_real_escape_string($_POST["ID"]);
        $id = htmlspecialchars($id, ENT_QUOTES);
        //Delete from database
        $result = mysql_query("DELETE FROM `NEWS_UPDATES` WHERE `ID` = " . $id . ";");
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    
    else if($type == "id=add")
    {
        
        $content1 = mysql_real_escape_string($_POST["DATE"]);
        $content1 = htmlspecialchars($content1, ENT_QUOTES);
        
        $content2 = mysql_real_escape_string($_POST["TYPE"]);
        $content2 = htmlspecialchars($content2, ENT_QUOTES);
        
        $content3 = mysql_real_escape_string($_POST["TITLE"]);
        $content3 = htmlspecialchars($content3, ENT_QUOTES);
        
        $content4 = mysql_real_escape_string($_POST["SHORT_DESCRIPTION"]);
        $content4 = htmlspecialchars($content4, ENT_QUOTES);
        
        $content5 = mysql_real_escape_string($_POST["LONG_DESCRIPTION"]);
        $content5 = htmlspecialchars($content5, ENT_QUOTES);
        
        $content6 = mysql_real_escape_string($_POST["BANNER_IMAGE"]);
        $content6 = htmlspecialchars($content6, ENT_QUOTES);
        
        $content7 = mysql_real_escape_string($_POST["DISQUS"]);
        $content7 = htmlspecialchars($content7, ENT_QUOTES);
        
        
        //Insert record into database
        $result = mysql_query("INSERT INTO `NEWS_UPDATES` (`DATE`, `TYPE`, `TITLE`, `SHORT_DESCRIPTION`, 
        `LONG_DESCRIPTION`, `BANNER_IMAGE`, `DISQUS`) VALUES (
        '" . $content1 . "', 
        '" . $content2 . "', 
        '" . $content3 . "', 
        '" . $content4 . "', 
        '" . $content5 . "', 
        '" . $content6 . "', 
        '" . $content7 . "'
        );");
         
        //Get last inserted record (to return to jTable)
        $result = mysql_query("SELECT * FROM `NEWS_UPDATES` WHERE ID = LAST_INSERT_ID();");
        $row = mysql_fetch_array($result);
         
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
    }
?>