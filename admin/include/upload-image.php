<?php
    include("connect.php");
    
    $sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "../../uploads/".$_FILES['image']['name']; // Target path where file is to be stored
    $targetPath1 = "../uploads/".$_FILES['image']['name']; // Target path where file is to be stored
    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
    
    list($width, $height) = getimagesize($targetPath);
    
    print '{"url":"'.$targetPath1.'","width":"'.$width.'","height":"'.$height.'"}';
?>