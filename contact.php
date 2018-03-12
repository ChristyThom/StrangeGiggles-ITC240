<?php include 'includes/config.php';?>
<?php get_header()?>  
<!--
<div class="col-xl-9 col-lg-10 mx-auto">
             
<div class="bg-faded rounded p-5">
        </div>
</div>
    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper"><?=$myHeadingUpper?></span>
                <span class="section-heading-lower"><?=$myHeadingLower?></span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?=$myPic?>" alt="<?=$myAlt?>">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">              
                <p class="mb-0">We take pride in what we do! If you are searching for something specific we are happy to connect and see how we can help you find that impossible get! Reach out here with any questions or comments you may have!</p>
            </div>
              <div>
<h2>Contact Us</h2>
-->

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?=$myPic?>" alt="<?=$myAlt?>"/>
          
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper"><?=$myHeadingUpper?></span>
                  <span class="section-heading-lower"><?=$myHeadingLower?></span>
                </h2>
<?php
//email2.php

if(isset($_POST['Submit']))
{//send email?
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = "christyraethom@gmail.com";
    
    $subject = "My WebSite Feedback " . date("m/d/y, G:i:s");
    
    //collect and clean post data
    $FirstName = coffee_clean_post('FirstName');
    $LastName = coffee_clean_post('LastName');
    $Email = coffee_clean_post('Email');
    $Comments = coffee_clean_post('Comments');
    
    //build body of email
    $text = '';//initialize variable
    $text .= 'First Name: ' .  $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    
    
    $headers = 'From: noreply@christyraedesigns.com' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    
    mail($to,$subject,$text,$headers);
    
    echo '<div class="row">
        <div class="col-lg-12">
            <h3>Message Sent</h3>
            <p>We will contact you within 24 hours!</p>
        </div>
    </div>
    ';

}else{//show form!
    echo '
    <form action="" method="post">
    
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="text-heading" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
        </div>
        
       <div class="form-group col-lg-4">
            <label class="text-heading" for="LastName">Last Name</label>
            <input class="form-control" type="text" name="LastName" id="LastName" required />
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Email">Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required />
        </div>
        
        
        <div class="clearfix"></div>
        
        
       <div class="form-group col-lg-12">
            <label class="text-heading" for="Comments">Comments</label>
            <textarea class="form-control" name="Comments" id="Comments"></textarea>
        </div>
        
        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary" name="Submit">Submit</button>
        </div>
    </div>
    </form>
    ';

}

?>
</div>
                
<?php include 'includes/footer.php';


function coffee_clean_post($key)
{
    if(isset($_POST[$key])){
        return strip_tags(trim($_POST[$key]));
    }else{
        return '';
    }
 
}

?>