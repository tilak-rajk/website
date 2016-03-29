<?php
    include("connect.php");
    
    $text = $_REQUEST["__page__"];

    $id = mysql_real_escape_string($_REQUEST["ID"]);
    $id = htmlspecialchars($id, ENT_QUOTES);
    
    $content = str_replace("'", "&apos;", $text);
    $content = mysql_real_escape_string(content);
    $result = mysql_query("UPDATE `CAREERS_INNER` SET
                          `LONG_DESCRIPTION` = '" . $content . "'
                          WHERE `ID` = '" . $id . "';");
                          
    print "OK";
?>