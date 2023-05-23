<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Homework</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php session_start(); ?>
    <?php include("header.html"); ?>
    <div id="wrapper">

        <?php include("nav.html"); ?>
        <div>
            <?php if(isset($_SESSION['user'])) 
                echo "Logged in:" .$_SESSION['fn']." ".$_SESSION['ln']." (".$_SESSION['user'].")"; 
            ?>
        </div>
        <div id="content">
            <?php 
                if (isset($_GET['page'])) {
                    if($_GET['page']=="contact") include("contact.html");
                    if($_GET['page']=="clothes") include("clothes.html");
                    if($_GET['page']=="gallery") include("gallery.html");
                    if($_GET['page']=="logout") { include("logout.php"); include("home.html"); include("terkep.html");} 
                    if($_GET['page']=="six") include("six.html");
                    if($_GET['page']=="login") include("login.html"); 
                }
                else { include("home.html"); include("terkep.html"); }           
            ?>
        </div>
    </div>
    
</body>
</html>

