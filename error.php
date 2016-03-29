<?php
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
403 => array('403 Forbidden', 'The server has refused to fulfil your request.'),
404 => array('404 Not Found', 'The page you requested was not found on this server.'),
405 => array('405 Method Not Allowed', 'The method specified in the request is not allowed for the specified resource.'),
408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
502 => array('502 Bad Gateway', 'The server received an invalid response while trying to carry out the request.'),
504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
    $title = '404 Not Found';
    $message = 'The page you requested was not found on this server.';
}

//echo '<h1>'.$title.' detected</h1>
//<p>'.$message.'</p>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Metacube
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $message; ?></p>
</body>
<style>
    body {
        background: url(/assets/images/screen1bg.jpg) no-repeat 100%;
        background-size: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font-family: 'gotham_htfbold';
        color: #4187F2;
        font-size: 2.75em;
        text-transform: uppercase;
        padding-top: 10px;
        text-align: center;
    }
    p{
        text-align: center;
        font-size: 0.55em !important;
    }
</style>
</html>
