<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'includes/config.php';?>

<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:strangegiggles_list.php');
}


$sql = "select * from StrangeGigglesComics where ComicID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $ComicTitle = stripslashes($row['ComicTitle']);
        $ComicEdition = stripslashes($row['ComicEdition']);
        $ComicPublisher = stripslashes($row['ComicPublisher']);
        $Date = stripslashes($row['Date']);
        $StoryArt = stripslashes($row['StoryArt']);
        $ComicPublisher = stripslashes($row['ComicPublisher']);
        $Lettering = stripslashes($row['Letting']);
        $Characters = stripslashes($row['Characters']);
        $Location = stripslashes($row['Location']);
        $Age = stripslashes($row['Age']);
        $Genre = stripslashes($row['Genre']);
        $title = "Title Page for " . $ComicTitle;
        $pageID = $ComicTitle;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>This comic does not exist</p>';
}

?>
<?php get_header()?>
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper"><?=$myHeadingUpper?></span>
                  <span class="section-heading-lower"><?=$myHeadingLower?></span>
                </h2>
<h1><?=$pageID?></h1>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo 'ComicTitle: <b>' . $ComicTitle . '</b> ';
    echo 'ComicEdition: <b>' . $ComicEdition . '</b> ';
    echo 'ComicPublisher: <b>' . $ComicPublisher . '</b> ';
    echo 'Date: <b>' . $Date . '</b> ';
    echo 'StoryArt: <b>' . $StoryArt . '</b> ';
    echo 'Lettering: <b>' . $Lettering . '</b> ';
    echo 'Characters: <b>' . $Characters . '</b> ';
    echo 'Location: <b>' . $Location . '</b> ';
    echo 'Age: <b>' . $Age . '</b> ';
    echo 'Genre: <b>' . $Genre . '</b> ';
    
    echo '<img src="uploads/comic' . $id . '.jpg" />';
    
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="strangegiggles_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>