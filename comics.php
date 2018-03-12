<?php include 'includes/config.php';?>
<?php get_header()?>
<!--HEADER ENDS HERE-->
<div class="col-xl-9 col-lg-10 mx-auto">
             
<div class="bg-faded rounded p-5">

              
 <h2>Comics</h2>
             
<?php

$sql = "select * from StrangeGigglesComics";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo '<a href="strangegiggles_view.php?id=' . $row['ComicID'] . '">' . $row['ComicTitle'] . '</a><br />';
        echo 'ComicTitle: <b>' . $row['ComicTitle'] . '</b><br /> ';
        echo 'ComicEdition: <b>' . $row['ComicEdition'] . '</b><br /> ';
        echo 'ComicPublisher: <b>' . $row['ComicPublisher'] . '</b><br /> ';
        echo 'Date: <b>' . $row['Date'] . '</b><br /> ';
        echo 'StoryArt: <b>' . $row['StoryArt'] . '</b><br /> ';
        echo 'Lettering: <b>' . $row['Lettering'] . '</b><br /> ';
        echo 'Characters: <b>' . $row['Characters'] . '</b><br /> ';
        echo 'Location: <b>' . $row['Location'] . '</b><br /> ';
        echo 'Age: <b>' . $row['Age'] . '</b><br /> ';
        echo 'Genre: <b>' . $row['Genre'] . '</b><br /> ';
	   echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No comics?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database



?>
    </div>
</div>
<?php get_footer()?>