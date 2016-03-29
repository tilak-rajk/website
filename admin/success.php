<?php
    //require 'db.php';
    require 'instagram.class.php';
    require 'instagram.config.php';
    
    // Receive OAuth code parameter
    $code = $_GET['code'];
    
    // Check whether the user has granted access
    if (true === isset($code)) 
    {
    
        // Receive OAuth token object
        $data = $instagram->getOAuthToken($code);
        
        if(empty($data->user->username))
        {
            header('Location: index.php');
        }
        else
        {
            session_start();
            // Storing instagram user data into session
            $_SESSION['userdetails']=$data;
            $user=$data->user->username;
            $fullname=$data->user->full_name;
            $bio=$data->user->bio;
            $website=$data->user->website;
            $id=$data->user->id;
            $token=$data->access_token;
            
            $sendurl = 'https://api.instagram.com/v1/users/'.$id.'/media/recent/?access_token='.$token;
            
            $data_string = json_encode($data);

            $ch = curl_init($sendurl);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data_string))
            );

            $result = curl_exec($ch);
            //$result = json_decode($result);
            //$result = json_decode(stripslashes($result),true);
            //var_dump($result);

            file_put_contents('config.txt', $result);
            
            // Redirecting you home.php 
            
            header('Location: index.php');
        }
    } 
    else 
    {
        // Check whether an error occurred
        if (true === isset($_GET['error'])) 
        {
            echo 'An error occurred: '.$_GET['error_description'];
        }
    }
?>