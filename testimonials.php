<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testimonials</title>
        <link rel="stylesheet" href="styles/styles.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
        <nav class="navbar is-black" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                        <a class="navbar-item" href="#">
                                <img src="/images/logo.png" alt="Our logo">
                        </a>

                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                                data-target="navbarBasicExample">
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                        </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-start">
                                <a class="navbar-item" href="index.html">
                                        Home
                                </a>

                                <a class="navbar-item" href="about.html">
                                        About Us
                                </a>
                                <a class="navbar-item" href="locations.html">
                                        Locations
                                </a>
                                <a class="navbar-item" href="testimonials.php">
                                        Testimonials
                                </a>
                                <a class="navbar-item" href="contact.html">
                                        Contact
                                </a>
                                <div class="navbar-item has-dropdown is-hoverable">
                                        <a class="navbar-link">
                                                Costumes & Accessories
                                        </a>

                                        <div class="navbar-dropdown">
                                                <a class="navbar-item" href="costumes.html">
                                                        Costumes
                                                </a>
                                                <a class="navbar-item" href="petcostumes.html">
                                                        Pet Costumes
                                                </a>
                                                <a class="navbar-item" href="wigs.html">
                                                        Wigs
                                                </a>
                                                <a class="navbar-item" href="accessories.html">
                                                        Accessories
                                                </a>
                                                <a class="navbar-item" href="makeup.html">
                                                        Makeup
                                                </a>
                                        </div>
                                </div>
                                <div class="navbar-item has-dropdown is-hoverable">
                                        <a class="navbar-link">
                                                Decorations & Supplies
                                        </a>

                                        <div class="navbar-dropdown">
                                                <a class="navbar-item" href="decorations.html">
                                                        Decorations
                                                </a>
                                                <a class="navbar-item" href="supplies.html">
                                                        Party Supplies
                                                </a>
                                                <a class="navbar-item" href="animatronics.html">
                                                        Animatronics
                                                </a>
                                                <a class="navbar-item" href="candy.html">
                                                        Candy
                                                </a>
                                        </div>
                                </div>
                                <div class="navbar-item has-dropdown is-hoverable is-left">
                                        <a class="navbar-link">
                                                Social
                                        </a>
                                        <div class="navbar-dropdown">
                                                <a class="navbar-item" href="https://twitter.com/" target="_blank">
                                                        Twitter
                                                </a>
                                                <a class="navbar-item" href="https://tiktok.com" target="_blank">
                                                        Tiktok
                                                </a>
                                                <a class="navbar-item" href="https://instagram.com/" target="_blank">
                                                        Instagram
                                                </a>
                                                <a class="navbar-item" href="https://facebook.com" target="_blank">
                                                        Facebook
                                                </a>
                                        </div>
                                </div>
                        </div>
                        <div class="navbar-end">

                        </div>
                </div>
        </nav>
        <div class="columns">
        <div class="column" style="margin: 0px 10px">
        <h3  class="title center testimonialAnim">Write a Testimonial</h3>
<form id="reviews" method="post" action="post.php">
                <div class="field">
                <label for="fullname" class="label is-size-5 center" style="font-weight: 500">Full Name</label>
                <input type="text" name="userid" id="userid" class="input" placeholder="John Doe"
                        required>
        </div>
        <div class="field">
                <label for="title" class="label is-size-5 center" style="font-weight: 500">Title</label>
                <input type="text" name="title" id="title" class="input" placeholder="Title"
                         autofocus required>
        </div>
         <div class="field">
                <label for="email" class="label is-size-5 center" style="font-weight: 500">Email</label>
                <input type="text" name="email" id="email" class="input" placeholder="johndoe@gmail.com"
                         autofocus required>
        </div>
 <label for="rating" class="label is-size-5 center" style="font-weight: 500">Star Rating</label>
<select class="select center" style="margin: 10px 10px;" name="rating" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>

        <div class="field">
                <label for="whatYouLiked" class="label is-size-5 center" style="font-weight: 500">What did you like best about our stores?</label>
                <textarea name="review" id="review" rows="5" class="textarea is-medium x" placeholder="Review" required></textarea>
        </div>
        <button type="submit" class="button is-success is-size-5">Submit</button>
</form>
        </div>
        <div class="column">
<div class="center">
        <img src="./images/frankenstein.gif" alt="cute frankenstein gif">
</div>
        </div>
 </div>
   <h1 class="title center">Testimonials</h1>
<?php
$db_name = "reviews.db";
$db = new SQLite3($db_name);
$QUERY="SELECT * FROM reviews";
$reviews = array();
$res= $db->query($QUERY);
while($review = $res->fetchArray(SQLITE3_ASSOC)){
    array_push($reviews,$review);
?>
        <div class="card" style="background-color:rgb(233, 155, 36);color: black">
  <div class="card-image">
  </div>
  <div class="card-content">
    <div class="media">
        <p class="title is-3" style="color: black"><?php 
         print($review['title']);
        ?></p>
    </div>
    <div class="content"><?php
        print("<b>Written By ".$review['userid']."</b><br>");
    print($review['review']."<br>".$review['rating']." stars"."<br>");
     ?></a>
      <br>
    </div>
  </div>
</div>
<?php
 }
 ?>
        <footer class="footer">
                <div class="content columns center" style="color: black;">
                        <div class="column">
                                <div class="subtitle is-5">Contact Information</div>
                                <div class="subtitle is-7">3120 12 AVE North LETHBRIDGE AB T1H 5V1</div>
                                <div class="subtitle is-7">info@SpookyPopUps.com</div>
                                <div class="subtitle is-7">403.555.0635</div>
                        </div>
                        <div class="column">
                                <div class="subtitle is-5">Pages</div>
                                <div class="subtitle is-7"><a class="a" href="index.html">Home</a></div>
                                <div class="subtitle is-7"><a class="a" href="about.html">About</a></div>
                                <div class="subtitle is-7"><a class="a" href="locations.html">Locations</a></div>
                                <div class="subtitle is-7"><a class="a" href="contact.html">Contact</a></div>
                                <div class="subtitle is-7"><a class="a" href="testimonials.php">Testimonials</a></div>
                        </div>
                        <div class="column">
                                <div class="subtitle is-5">Decorations & Supplies</div>
                                <div class="subtitle is-7"><a class="a" href="decorations.html">Decorations</a></div>
                                <div class="subtitle is-7"><a class="a" href="animatronics.html">Animatronics</a></div>
                                <div class="subtitle is-7"><a class="a" href="candy.html">Candy</a></div>
                                <div class="subtitle is-7"><a class="a" href="supplies.html">Party Supplies</a></div>
                        </div>
                        <div class="column">
                                <div class="subtitle is-5">Costumes and Accessories</div>
                                <div class="subtitle is-7"><a class="a" href="costumes.html">Costumes</a></div>
                                <div class="subtitle is-7"><a class="a" href="petcostumes.html">Pet Costumes</a></div>
                                <div class="subtitle is-7"><a class="a" href="wigs.html">Wigs</a></div>
                                <div class="subtitle is-7"><a class="a" href="accessories.html">Accessories</a></div>
                                <div class="subtitle is-7"><a class="a" href="makeup.html">Makeup</a></div>
                        </div>
                        <div class="column">
                                <div class="subtitle is-5">Social Media</div>
                                <div class="subtitle is-7"><a class="a" href="https://twitter.com/"
                                                target="_blank">Twitter
                                </div>
                                </a>
                                <div class="subtitle is-7"><a class="a" href="https://tiktok.com" target="_blank">
                                                Tiktok
                                        </a></div>
                                <div class="subtitle is-7"><a class="a" href="https://instagram.com/" target="_blank">
                                                Instagram
                                        </a></div>
                                <div class="subtitle is-7"><a class=" a" href="https://facebook.com" target="_blank">
                                                Facebook
                                        </a></div>
                        </div>
                </div>
        </footer>
 <script src="scripts/script.js"></script>
</body>

</html>