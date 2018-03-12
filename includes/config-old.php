<?php 
/* 
config.php

put configuration information here

*/

define('DEBUG',TRUE); #we want to see all errors

define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "HOME";
$nav1['about.php'] = "ABOUT";
$nav1['comics.php'] = "COMICS";
$nav1['contact.php'] = "CONTACT";
$nav1['daily.php'] = "DAILY";



//defaults for header .php

$banner = 'STRANGE GIGGLES COMIX';
$slogan = 'Come Play With Our Comical Knowledge!';


switch(THIS_PAGE){
     
    case 'index.php':
        $title = 'Strange Giggles Comix - A Unique Seattle Online Comic Shop';
        $myPic = 'img/intro.jpg';
        $myAlt = 'grafitti wall art with vintage comics blended together';
        $myHeadingLower = 'FUNKY COMICS';
        $myHeadingUpper = 'Risque and Risky -- We Have Them All!';
    break;
        
        case 'about.php':
        $title = 'About Strange Giggles Comix - A Unique Seattle Online Comic Shop';
        $myPic = 'img/about.jpg';
        $myAlt = 'Dizzy and Jamie with pop art WOW background blended together';
        $myHeadingLower = 'About Our Comic Adventures';
        $myHeadingUpper = 'A belief in comics!'; 
    break;
        
        case 'contact.php':
        $title = 'Contact Strange Giggles Comix - A Unique Seattle Online Comic Shop';
        $myPic = 'img/contact.jpg';
        $myAlt = 'pop art blended contact picture woman on phone mixed media background ZAP POW';
        $myHeadingLower = 'What Are You Looking For?';
        $myHeadingUpper =  'Reach Out Here';
    break;
        
    case 'daily.php':
        $title = 'Daily Feature Giggles Comix - A Unique Seattle Online Comic Shop';
//        $myHeadingLower = 'Welcome to our Daily Highlight!'
//        $myHeadingUpper =  'A Journey of Comics Every Day!'
    break;
//        
    default:
        $title = THIS_PAGE;
        
}
//other include files referenced here
include 'credentials.php';


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

function coffee_links($nav1){
    
    foreach($nav1 as $url => $text){
        //echo '<li><a href="' . $url . '">' . $text . '</a></li>';

        if(THIS_PAGE == $url)
        {//current page - add highlight
              echo '
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }else{//no highlight
             echo '
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }
        
        
        
        
        
        
      
    }

}//end coffee_links()

//<!--
//            <li class="nav-item active px-lg-4">
//              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
//                <span class="sr-only">(current)</span>
//              </a>
//            </li>
//            <li class="nav-item px-lg-4">
//              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
//            </li>
//            <li class="nav-item px-lg-4">
//              <a class="nav-link text-uppercase text-expanded" href="products.html">Products</a>
//            </li>
//            <li class="nav-item px-lg-4">
//              <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
//            </li>
//-->
