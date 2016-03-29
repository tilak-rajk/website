<?php
    include("connect.php");
    
    $text = $_REQUEST["__page__"];

    $id = mysql_real_escape_string($_REQUEST["ID"]);
    $id = htmlspecialchars($id, ENT_QUOTES);
    
    $content = str_replace("'", "&apos;", $text);
    $result = mysql_query("UPDATE `NEWS_UPDATES` SET `LONG_DESCRIPTION` = '" . $content . "' WHERE `ID` = '" . $id . "';");
                          
    print "OK";
?>