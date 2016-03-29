<?php
    include("include/connect.php");	
    $valid_formats = array("jpg", "png", "gif", "zip", "bmp", "svg");
    $max_file_size = 1024*500; //100 kb
    $path = "uploads/"; // Upload directory
    $count = 0;
    
    function get_client_ip() {
        $ipaddress = '';
        if ($_SERVER['HTTP_CLIENT_IP'])
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if($_SERVER['HTTP_X_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if($_SERVER['HTTP_X_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if($_SERVER['HTTP_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if($_SERVER['HTTP_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
        // Loop $_FILES to execute all files
        foreach ($_FILES['files']['name'] as $f => $name) {     
            if ($_FILES['files']['error'][$f] == 4) {
                continue; // Skip file if any error found
            }	       
            if ($_FILES['files']['error'][$f] == 0) {	           
                if ($_FILES['files']['size'][$f] > $max_file_size) {
                    $message[] = "$name is too large!.";
                    continue; // Skip large files
                }
                elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                    $message[] = "$name is not a valid format";
                    continue; // Skip invalid file formats
                }
                else{ // No error found! Move uploaded files 
                    if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {
                        $ip = get_client_ip();
                        $title = $_POST["txt_name"];
                        $query=mysql_query("insert into ENGINE_GALLERY (`IMAGEPATH`, `TITLE`) values ('$name', '$title')");
                        if($query)
                        {
                            //echo 'Y';
                        }
                        else
                        {
                            //echo 'N';
                        }
                        $count++; // Number of successfully uploaded files
                    }
                }
            }
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap Admin</title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
        <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
        <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
        <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
        <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
        <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!--> 
        
        <!--<![endif]-->
    </head>
    <body class=" theme-blue">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="index.html">
                    <img src="../assets/images/logo.svg" style="background: white; padding: 15px 15px; width: 60%; margin: 2px 0 0 0;" />
                </a>
            </div>
            <div class="navbar-collapse collapse" style="height: 1px;">
                <ul id="main-menu" class="nav navbar-nav navbar-right">
                    <li class="dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>
                            Admin
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-nav">
            <ul>
                <li>
                    <a href="index.php" class="nav-header">
                        <div class="home">&nbsp;</div><br />
                        Home
                    </a>
                </li>
                <li>
                    <a href="careers.html" class="nav-header">
                        <div class="career">&nbsp;</div><br />
                        Careers
                    </a>
                </li>
                <li>
                    <a href="contactus.html" class="nav-header">
                        <div class="contact">&nbsp;</div><br />
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="news.html" class="nav-header">
                        <div class="news">&nbsp;</div><br />
                        News
                    </a>
                </li>
                <li>
                    <a href="ourpeople.html" class="nav-header">
                        <div class="user">&nbsp;</div><br />
                        Our People
                    </a>
                </li>
                <li>
                    <a href="ourideas.html" class="nav-header">
                        <div class="ideas">&nbsp;</div><br />
                        Our Ideas
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="main-content">
                 <?php
					# error messages
					if (isset($message)) {
						foreach ($message as $msg) {
							printf("<p class='status'>%s</p></ br>\n", $msg);
						}
					}
					# success message
					if($count !=0){
						printf("<p class='status'>%d files added successfully!</p>\n", $count);
					}
				?>
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                      <tr>
                        <td><input style="width: 250px; height: 34px; border-radius: 5px; border: 1px solid #CCC; padding: 0 0 0 10px; margin: 0 5px 0 15px;" type="text" id="txt_name" placeholder="Title" name="txt_name" /></td>
                        <td><input class="btn btn-default" type="file" id="file" name="files[]" accept="image/*" /></td>
                        <td>&nbsp;</td>
                        <td><input id="upload" class="btn btn-default" type="submit" value="Upload!" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td style="color:#CCC; font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image should be 380 x 380 px</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                </form>
                <div id="fileslist"></div>
                <div id="light" class="white_content">
                    <img id="lightbox_img" style="max-height:500px; max-width:500px;" />
                </div>
                <div id="fade" class="black_overlay"></div>
            </div>
        </div>
        <script src="lib/bootstrap/js/bootstrap.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script> 
        <!-- Include one of jTable styles. -->
        <link href="jtable/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css" />
        <link href="http://jtable.org/Content/themes/metroblue/jquery-ui.css" rel="stylesheet" type="text/css" />
        <!-- Include jTable script file. --> 
        <script src="jtable/jquery.jtable.js" type="text/javascript"></script>
      <link href="jtable/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="jtable/jquery.validationEngine.js"></script>
      <script type="text/javascript" src="jtable/jquery.validationEngine-en.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#fileslist').jtable({
                    title: 'Uploaded Files',
                    paging: true, //Enable paging
                    pageSize: 5, //Set page size (default: 10)
                    sorting: true, //Enable sorting
                    defaultSorting: 'ID ASC', //Set default sorting
                    actions: {
                        listAction: 'include/loadgallerydata.php?id=load',
                        //createAction: 'include/loadfiledata.php?id=add',
                        updateAction: 'include/loadgallerydata.php?id=update',
                        deleteAction: 'include/loadgallerydata.php?id=delete'
                    },
                    fields: {
                        ID: {
                            key: true,
                            list: false
                        },
                        TITLE: {
                            title: 'TITLE',
                            width: '20%',
                            list: true
                        },
                        IMAGEPATH: {
                            title: 'File Name',
                            width: '20%',
                            list: true,
                            edit: false
                        },
                        TestColumn: {
                            title: 'Test',
                            display: function (data) {
                                var $link = $('<img style="cursor:pointer" onclick="lightbox(\'uploads/'+data.record.IMAGEPATH+'\')" width="50" height="50" src="uploads/'+data.record.IMAGEPATH+'" />');
                                return $link;
                            },
                            edit: false
                        },
                        ACTIVE: {
                            title: 'PUBLISH',
                            width: '20%',
                            list: true,
                            options: { 'True': 'Active', 'False': 'In Active' }
                        },
                        LOGDATE: {
                            title: 'Log Date',
                            width: '20%',
                            create: false,
                            edit: false
                        }
                    },
                    //Initialize validation logic when a form is created
                    formCreated: function (event, data) {
                        data.form.find('input[name="TITLE"]').addClass('validate[required]');
                        data.form.find('input[name="IMAGEPATH"]').addClass('validate[required]');
                        data.form.validationEngine();
                    },
                    //Validate form when it is being submitted
                    formSubmitting: function (event, data) {
                        return data.form.validationEngine('validate');
                    },
                    //Dispose validation logic when form is closed
                    formClosed: function (event, data) {
                        data.form.validationEngine('hide');
                        data.form.validationEngine('detach');
                    }
                });
                
                $('#fileslist').jtable('load');
                
                $('#upload').hide();
                var _URL = window.URL || window.webkitURL;

                $("#file").change(function(e) {
                    var file, img;
                
                    if ((file = this.files[0])) {
                        img = new Image();
                        img.onload = function() {
                            if(this.width != 380 && this.height != 380){
                                alert('Image should be 380 x 380 px');
                                $('#upload').hide();
                            }
                            else{
                                $('#upload').show();
                            }
                        };
                        img.onerror = function() {
                            alert( "not a valid file: " + file.type);
                        };
                        img.src = _URL.createObjectURL(file);
                    }
                
                });
            });
            
            function lightbox(url)
            {
                $('#lightbox_img').attr('src', url);
                $('#light').css('display', 'block');
                $('#fade').css('display', 'block');
            }
            
            $('#fade').click(function(){
                $('#lightbox_img').attr('src', '');
                $('#light').css('display', 'none');
                $('#fade').css('display', 'none');
            });
        </script>
    </body>
</html>