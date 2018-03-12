<?php include 'includes/config.php';?>

<?php
//daily logic goes here:
switch ($day){
    case 'Wednesday':
        $title = 'Daily Feature Giggles Comix - A Unique Seattle Online Comic Shop';
        $myPic = 'img/marvel.jpg';
        $myAlt = 'marvel comics';
        $page = 'Marvel Comics is the common name and primary imprint of Marvel Worldwide Inc., formerly Marvel Publishing, Inc. and Marvel Comics Group, a publisher of American comic books and related media. In 2009, The Walt Disney Company acquired Marvel Entertainment, Marvel Worldwide parent company.

Marvel started in 1939 as Timely Publications, and by the early 1950s, had generally become known as Atlas Comics. The Marvel branding began 1961, the year that the company launched The Fantastic Four and other superhero titles created by Stan Lee, Jack Kirby, Steve Ditko, and many others.

Marvel counts among its characters such well-known superheroes as Spider-Man, Wolverine, the Hulk, Thor, Iron Man, Captain America, Daredevil, and Captain Marvel, including such teams as the Avengers, the X-Men, the Guardians of the Galaxy, and the Fantastic Four, and antagonists such as Venom, Doctor Doom, the Red Skull, the Green Goblin, Thanos, Ultron, Doctor Octopus, Magneto, Kang the Conqueror, Mystique, and Loki. Most of Marvel fictional characters operate in a single reality known as the Marvel Universe, with most locations mirroring real-life places; many major characters are based in New York City.';

    break;
}
?>
<?
if(isset($_GET['day'])){
    //date in querystring, use it!
  $day = $_GET['day'];  
}else{
    //use current date
}
    $day = date('l');
?>
<?php include 'includes/header.php';?>
   <section class="page-section cta">
<div class="col-xl-9 col-lg-10 mx-auto">
          <div class="container">
        <div class="row">
           <div class="col-xl-9 mx-auto">            
            <div class="cta-inner rounded">
 <h2>Daily Page</h2>
 <p>Today is <?=$day?></p>
    
<p>Welcome to <?=$day?>! Here is where we share a new and interesting product or producer of comic books every day!</p>
    
<p>Today we highlight<?=$page?>.</p>
<p><img src="<?=$myPic?>"; alt="<?=$myAlt?>"/></p>  
    

      
      
      
    </div>
</div>
</div>
    </div>
</div>
      
<?php include 'includes/footer.php';?>