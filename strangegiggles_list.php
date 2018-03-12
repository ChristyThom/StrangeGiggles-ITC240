<?php
//customer_list.php - shows a list of customer data

?>
<?php include 'includes/config.php';?>
<?php get_header()?>
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper"><?=$myHeadingUpper?></span>
                  <span class="section-heading-lower"><?=$myHeadingLower?></span>
                </h2>
<h1>Comic List</h1>
<?php
$sql = "select * from StrangeGigglesComics";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'ComicTitle: <b>' . $row['ComicTitle'] . '</b> ';
        echo 'ComicEdition: <b>' . $row['ComicEdition'] . '</b> ';
        echo 'ComicPublisher: <b>' . $row['ComicPublisher'] . '</b> ';
        echo 'Date: <b>' . $row['Date'] . '</b> ';
        echo 'StoryArt: <b>' . $row['StoryArt'] . '</b> ';
        echo 'Lettering: <b>' . $row['Lettering'] . '</b> ';
        echo 'Characters: <b>' . $row['Characters'] . '</b> ';
        echo 'Location: <b>' . $row['Location'] . '</b> ';
        echo 'Age: <b>' . $row['Age'] . '</b> ';
        echo 'Genre: <b>' . $row['Genre'] . '</b> ';
        
        echo '<a href="strangegiggles_view.php?id=' . $row['ComicID'] . '">' . $row['ComicTitle'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are no comics here</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
</div>
<?php get_footer()?>