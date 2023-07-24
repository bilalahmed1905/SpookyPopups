<?php 
$data = $_POST;

$db_name = "reviews.db";
$db = new SQLite3($db_name);

$QUERY='INSERT INTO reviews ("date","userid","rating","title","review", "email") VALUES('.time().",'".$data['userid']."',".$data['rating'].",'".$data['title']."','".$data['review']."', '".$data['email']."');";
$db->exec($QUERY);
?>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submitted</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="/styles/styles.css">
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
        <?php 
         echo '<h1 class="title is-2 center">Thanks for your feedback!</h1>';
        ?>    
         <script src="scripts/script.js"></script>    
</body>
</html>