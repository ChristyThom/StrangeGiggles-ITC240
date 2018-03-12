<?php
/*
config.php

stores configuration information for our web application

*/

//removes header already sent errors
ob_start();

define('SECURE',false); #force secure, https, for all site pages

define('PREFIX', 'widgets_wn18_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions



header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

define('DEBUG',true); #we want to see all errors

include 'credentials.php';//stores database info
include 'common.php';//stores favorite functions

//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//create config object
$config = new stdClass;

//These are the navigation links from the old config file.
$config->nav1['index.php'] = "HOME";
$config->nav1['about.php'] = "ABOUT";
$config->nav1['comics.php'] = "COMICS";
$config->nav1['contact.php'] = "CONTACT";
$config->nav1['daily.php'] = "DAILY";

//create default page identifier
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//START NEW THEME STUFF - be sure to add trailing slash!
$sub_folder = 'twiggy2/';//change to 'widgets' or 'sprockets' etc.
$config->theme = 'Coffee';//sub folder to themes

//will add sub-folder if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
//force secure website
if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}else{
    //adjust protocol
    $protocol = (SECURE==true ? 'https://' : 'http://'); // returns true
    
}
$config->virtual_path = $protocol . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;

define('ADMIN_PATH', $config->virtual_path . '/admin/'); # Could change to sub folder
define('INCLUDE_PATH', $config->physical_path . '/includes/');

//END NEW THEME STUFF

//set website defaults
$config->title = THIS_PAGE;
$config->banner = 'Strange Giggles Comix';
$config->slogan = 'Come Play With Our Comical Knowledge!';
$config->loadhead = '';//place items in <head> element

        
switch(THIS_PAGE){
     
    case 'index.php':
        $config->title = 'Strange Giggles Comix - A Unique Seattle Online Comic Shop';
        $config->myPic = 'img/intro.jpg';
        $config->myAlt = 'grafitti wall art with vintage comics blended together';
        $config->myHeadingLower = 'FUNKY COMICS';
        $config->myHeadingUpper = 'Risque and Risky -- We Have Them All!';
    break;
        
        case 'about.php':
        $config->title = 'About Strange Giggles Comix - A Unique Seattle Online Comic Shop';
        $config->myPic = 'img/about.jpg';
        $config->myAlt = 'Dizzy and Jamie with pop art WOW background blended together';
        $config->myHeadingLower = 'About Our Comic Adventures';
        $config->myHeadingUpper = 'A belief in comics!'; 
    break;
        
        case 'contact.php':
        $config->title = 'Contact Strange Giggles Comix - A Unique Seattle Online Comic Shop';
        $config->myPic = 'img/contact.jpg';
        $config->myAlt = 'pop art blended contact picture woman on phone mixed media background ZAP POW';
        $config->myHeadingLower = 'What Are You Looking For?';
        $config->myHeadingUpper =  'Reach Out Here';
    break;
        
    case 'daily.php':
        $config->title = 'Daily Feature Giggles Comix - A Unique Seattle Online Comic Shop';
//        $myHeadingLower = 'Welcome to our Daily Highlight!'
//        $myHeadingUpper =  'A Journey of Comics Every Day!'
    break;
        
}

//START NEW THEME STUFF
//creates theme virtual path for theme assets, JS, CSS, images
$config->theme_virtual = $config->virtual_path . 'themes/' . $config->theme . '/';
//END NEW THEME STUFF

/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
if(startSession() && isset($_SESSION['AdminID']))
{#add admin logged in info to sidebar or nav
    
    $config->adminWidget = '
        <a href="' . ADMIN_PATH . 'admin_dashboard.php">ADMIN</a> 
        <a href="' . ADMIN_PATH . 'admin_logout.php">LOGOUT</a>
    ';
}else{//show login (YOU MAY WANT TO SET TO EMPTY STRING FOR SECURITY)
    
    $config->adminWidget = '
        <a  href="' . ADMIN_PATH . 'admin_login.php">LOGIN</a>
    ';
}
?>















