<?php include 'includes/config.php';?>
<?php
//daily logic goes here:

if(isset($_GET['day'])){
    //date in querystring, use it!
  $day = $_GET['day'];  
}else{
    $day = date('l');
}
switch ($day){
        case 'Monday':
        $title = 'Daily Feature - DC Comics';
        $myPic = 'img/dc-comics-mural.jpg';
        $myAlt = 'A mural of comic book characters from DC Comics';
        $page = 'DC Comics, Inc. is an American comic book publisher. It is the publishing unit of DC Entertainment,a subsidiary of Warner Bros. Entertainment, Inc., a division of Time Warner. DC Comics is one of the largest and oldest American comic book companies, and produces material featuring numerous well-known heroic characters including Superman, Batman, Wonder Woman, Green Lantern, The Flash, The Spectre, The Atom, Aquaman, Hawkman, Martian Manhunter, Supergirl, Nightwing, Green Arrow, Black Canary, Zatanna and Cyborg. Most of their material takes place in the fictional DC Universe, which also features teams such as the Justice League, the Justice Society of America, the Suicide Squad, and the Teen Titans, and well-known villains such as The Joker, Lex Luthor, Cheetah, Harley Quinn, Darkseid, Catwoman, Ares, Riddler, Ras al Ghul, Deathstroke, Bizarro, Scarecrow, Two-Face, Reverse-Flash, Sinestro, Doomsday, Black Adam, and Brainiac. The company has also published non-DC Universe-related material, including Watchmen, V for Vendetta, and many titles under their alternative imprint Vertigo.
<br><br>
The initials "DC" came from the companys popular series Detective Comics, which featured Batman debut and subsequently became part of the companys name. Originally in Manhattan at 432 Fourth Avenue, the DC Comics offices have been located at 480 and later 575 Lexington Avenue; 909 Third Avenue; 75 Rockefeller Plaza; 666 Fifth Avenue; and 1325 Avenue of the Americas. DC had its headquarters at 1700 Broadway, Midtown Manhattan, New York City, but it was announced in October 2013 that DC Entertainment would relocate its headquarters from New York to Burbank, California in April 2015.
<br><br>
Random House distributes DC Comics books to the bookstore market, while Diamond Comic Distributors supplies the comics shop specialty market. DC Comics and its longtime major competitor Marvel Comics (acquired in 2009 by The Walt Disney Company, Time Warners main competitor) together shared approximately 70% of the American comic book market in 2017.';

    break;
            case 'Tuesday':
        $title = 'Daily Feature - Marvel Comics writer Stan Lee';
        $myPic = 'img/stan-lee.jpg';
        $myAlt = 'Marvel Comics writer Stan Lee';
        $page = 'Stan Lee (born December 28, 1922) is an American comic-book writer, editor, film executive producer, and publisher. He was formerly editor-in-chief of Marvel Comics, and later its publisherand chairman before leaving the company to become its chairman emeritus, as well as a member of the editorial board.
<br><br>
In collaboration with several artists, including Jack Kirby and Steve Ditko, he co-created fictional characters including Spider-Man, the Hulk, Doctor Strange, the Fantastic Four, Daredevil, Black Panther, the X-Men, and, with the addition of co-writer Larry Lieber, the characters Ant-Man, Iron Man and Thor. In addition, he challenged the comics industrys censorship organization, the Comics Code Authority, indirectly leading to it updating its policies. Lee subsequently led the expansion of Marvel Comics from a small division of a publishing house to a large multimedia corporation.
<br><br>
He was inducted into the comic book industrys Will Eisner Award Hall of Fame in 1994 and the Jack Kirby Hall of Fame in 1995. Lee received a National Medal of Arts in 2008.';

    break;
            case 'Wednesday':
        $title = 'Daily Feature - Comic Con';
        $myPic = 'img/comic-con.jpg';
        $myAlt = 'a photo of the convention hall for comic con';
        $page = 'San Diego Comic-Con International is a multi-genre entertainment and comic convention held annually in San Diego, California, United States. The name, as given on its website, is Comic-Con International: San Diego; but it is commonly known simply as Comic-Con or the San Diego Comic-Con or "SDCC".
<br><br>
It was founded as the Golden State Comic Book Convention in 1970 by a group of San Diegans that included Shel Dorf, Richard Alf, Ken Krueger, and Mike Towry; later, it was called the "San Diego Comic Book Convention". It is a four-day event (Thursday–Sunday) held during the summer (in July since 2003) at the San Diego Convention Center in San Diego. On the Wednesday evening prior to the official opening, professionals, exhibitors, and pre-registered guests for all four days can attend a pre-event "Preview Night" to give attendees the opportunity to walk the exhibit hall and see what will be available during the convention.
<br><br>
Comic-Con International also produces two other conventions, WonderCon, held in Anaheim, and the Alternative Press Expo (APE), held in San Francisco. Since 1974, Comic-Con has bestowed its annual Inkpot Award on guests and persons of interest in the popular arts industries, as well as on members of Comic-Cons board of directors and the Convention committee. It is also the home of the Will Eisner Awards.
<br><br>
Originally showcasing primarily comic books and science fiction/fantasy related film, television, and similar popular arts, the convention has since included a larger range of pop culture and entertainment elements across virtually all genres, including horror, animation, anime, manga, toys, collectible card games, video games, webcomics, and fantasy novels. According to Forbes, the convention is the "largest convention of its kind in the world;" Publishers Weekly wrote "Comic-Con International: San Diego is the largest show in North America;" it is also the largest convention held in San Diego. In 2010, it filled the San Diego Convention Center to capacity with more than 130,000 attendees. In addition to drawing huge crowds, the event holds several Guinness World Records including the largest annual comic and pop culture festival in the world.';

    break;
        
    case 'Thursday':
        $title = 'Daily Feature - Dark Horse Comics';
        $myPic = 'img/dark-horse-logo.png';
        $myAlt = 'Dark Horse Comics Logo';
        $page = 'Dark Horse Comics is an American comic book and manga publisher. It was founded in 1986 by Mike Richardson in Milwaukie, Oregon, with the concept of establishing an ideal atmosphere for creative professionals.
<br><br>
Richardson started out by opening his first comic book store, Pegasus Books, in Bend, Oregon, in 1980. From there he was able to use the funds from his retail operation to start his own publishing company. Dark Horse Presents and Boris the Bear were the two initial titles in 1986 and within one year of its first publication, Dark Horse Comics added nine new titles to its roster, including Hellboy, The American, The Mask, Trekker, and Black Cross. Frank Millers Sin City is one of the most famous works associated with Dark Horse, and it has become something of a token comic to the publishing house. They also established a reputation for publishing licensed works such as Aliens, Buffy the Vampire Slayer, Conan, and Star Wars.
<br><br>
In 2011, Dark Horse Presents relaunched including the return of Paul Chadwicks Concrete and Steve Niles Criminal Macabre, as well as new talent including Sanford Greene, Carla Speed McNeil, Nate Crosby and others. In late summer of 2018 a set of comic books for Mysticons are to be released.';

    break;
            case 'Friday':
        $title = 'Daily Feature - Image Comics';
        $myPic = 'img/image_comics_logo.png';
        $myAlt = 'Image Comics Logo';
        $page = 'In the early 1990s, comics creators Erik Larsen, Rob Liefeld, and Jim Valentino had dinner with Malibu Comics editor-in-chief Dave Olbrich. Malibu was a small but established publishing company sympathetic to creator-ownership, and Olbrich expressed interest in publishing comics created by them. These and several other freelance illustrators doing popular work for Marvel Comics were growing frustrated with the companys work for hire policies and practices, which they felt did not sufficiently reward the talent that produced them, as the company heavily merchandised their artwork, and compensated them with modest royalties.
<br><br>
According to Todd McFarlane, he, Jim Lee and Liefeld met with Marvel president Terry Stewart and editor Tom DeFalco in late December 1991. Larsen and Silvestri, who joined the group the night before, were not present, but the group that met with Stewart indicated that they were representing them as well. Contrary to what has been reported by other sources, McFarlane says that they made no demands of Stewart or Marvel, but merely informed him that they were leaving, gave their reasons why, and cautioned Stewart to heed those reasons, lest the company suffer future exoduses. The creators had the same meeting with DC Comics the next day. After Whilce Portacio returned from his yearly trip to the Philippines, his Homage Studios colleague Lee asked him to join the group.
<br><br>
A group of eight creators then announced the founding of Image Comics: illustrators Todd McFarlane (known for his work on Spider-Man), Jim Lee (X-Men), Rob Liefeld (X-Force), Marc Silvestri (Wolverine), Erik Larsen (The Amazing Spider-Man), Jim Valentino (Guardians of the Galaxy), and Whilce Portacio (Uncanny X-Men); and longtime Uncanny X-Men writer Chris Claremont. This development was nicknamed the "X-odos", because several of the creators involved (Claremont, Liefeld, Lee, Silvestri, and Portacio) were famous for their work on the X-Men franchise. Marvels stock fell $3.25/share when the news became public. Images organizing charter had two key provisions:
<br><br>
Image would not own any creators work; the creator would.
No Image partner would interfere – creatively or financially – with any other partners work. Image itself would own no intellectual property except the company trademarks: its name and its logo, which was designed by writer Hank Kanalz.
<br><br>
Each Image partner founded his own studio, which published under the Image banner but was autonomous from any central editorial control. Claremont was not part of the partnership, and Portacio withdrew during the formative stages to deal with his sisters illness, so Image originally consisted of six studios:
<br><br>
Todd McFarlane Productions, owned by Todd McFarlane
WildStorm Productions, owned by Jim Lee
Highbrow Entertainment, owned by Erik Larsen
Shadowline, owned by Jim Valentino
Top Cow Productions, owned by Marc Silvestri
Extreme Studios, owned by Rob Liefeld';

    break;
            case 'Saturday':
        $title = 'Daily Feature - Fantagraphics Books ';
        $myPic = 'img/fantagraphics_logo.png';
        $myAlt = 'Fantagraphics Logo';
        $page = 'Fantagraphics was founded in 1976 by Gary Groth and Mike Catron in College Park, Maryland. The first act of the new company was the takeover of an adzine named The Nostalgia Journal, which was quickly renamed The Comics Journal.

As comics journalist (and former Fantagraphics employee) Michael Dean writes, "the publisher has alternated between flourishing and nearly perishing over the years." Kim Thompson joined the company in 1977, using his inheritance to keep the company afloat. (He soon became a co-owner.)

The company moved from Maryland to Stamford, Connecticut, and then Los Angeles.

Beginning in 1981, and lasting until 1992, Fantagraphics published Amazing Heroes, a magazine which examined comics from a hobbyists point of view.

In 1989, Fantagraphics relocated from Los Angeles to its current location in the Maple Leaf neighborhood of Seattle, Washington.

In 1990, the publisher introduced Eros Comix, a lucrative line of erotic comics which again saved the company from bankruptcy.

Longtime employee Eric Reynolds joined Fantagraphics in 1993, first as news editor for The Comics Journal from 1993, before moving to marketing and promotion in 1996. Tom Spurgeon, now publisher of The Comics Reporter, was editor of The Comics Journal from 1994–1999.';

    break;
            case 'Sunday':
        $title = 'Daily Feature - Marvel Comics';
        $myPic = 'img/marvel.jpg';
        $myAlt = 'marvel comics';
        $page = 'Marvel Comics is the common name and primary imprint of Marvel Worldwide Inc., formerly Marvel Publishing, Inc. and Marvel Comics Group, a publisher of American comic books and related media. In 2009, The Walt Disney Company acquired Marvel Entertainment, Marvel Worldwide parent company.
<br><br>
Marvel started in 1939 as Timely Publications, and by the early 1950s, had generally become known as Atlas Comics. The Marvel branding began 1961, the year that the company launched The Fantastic Four and other superhero titles created by Stan Lee, Jack Kirby, Steve Ditko, and many others.
<br><br>
Marvel counts among its characters such well-known superheroes as Spider-Man, Wolverine, the Hulk, Thor, Iron Man, Captain America, Daredevil, and Captain Marvel, including such teams as the Avengers, the X-Men, the Guardians of the Galaxy, and the Fantastic Four, and antagonists such as Venom, Doctor Doom, the Red Skull, the Green Goblin, Thanos, Ultron, Doctor Octopus, Magneto, Kang the Conqueror, Mystique, and Loki. Most of Marvel fictional characters operate in a single reality known as the Marvel Universe, with most locations mirroring real-life places; many major characters are based in New York City.';

    break;
}

    
?>

<?php get_header()?>
    <section class="page-section cta">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper"><?=$myHeadingUpper?></span>
                  <span class="section-heading-lower"><?=$myHeadingLower?></span>
                </h2>
 <h2>Daily Page</h2>
 <h3><?=$title?></h3>
 <p>Today is <?=$day?></p>
                  
<p>Welcome to <?=$day?>! Here is where we share a new and interesting product or producer of comic books every day!</p>

<p>Today we highlight <?=$page?>.</p>
<p><img src="<?=$myPic?>"; alt="<?=$myAlt?>"/></p>  

<h2>Check out the other days of the week to see what is special at Strange Giggles!</h2>                 
<p><a href="daily.php?day=Monday"><img src="img/monday.png" alt='graphic of word monday'></a></p>
<p><a href="daily.php?day=Tuesday"><img src="img/tuesday.png" alt='graphic of word tuesday'></a></p>
<p><a href="daily.php?day=Wednesday"><img src="img/wednesday.png" alt='graphic of word wednesday'></a></p>
<p><a href="daily.php?day=Thursday"><img src="img/thursday.png" alt='graphic of word thursday'</a></p>
<p><a href="daily.php?day=Friday"><img src="img/friday.png" alt='graphic of word friday'></a></p>
<p><a href="daily.php?day=Saturday"><img src="img/Saturday.png" alt='graphic of word saturday'></a></p>
<p><a href="daily.php?day=Sunday"><img src="img/Sunday.png" alt='graphic of word sunday'></a></p>
                </div>
              </div>
            </div>
</div>
       
<?php get_footer()?>
