<?php
include "./db/db.php"; // Adjust the path as necessary.

// Fetch all photos
$query = "SELECT * FROM photos";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malcolm lismore</title>
    <mata name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>


</head>
<body>


    <!--header-->
    <header class="header">
        <div class="nav-section">
            <div class="brand-and-navBtn">
                <span class="brand-name">
                    MALCOLM LISMORE
                </span>
                <span class="navBtn flex">
                    <i class="fas fa-bars"></i>
                </span>
            </div> 

            <!--navgation menu-->
            <nav class="top-nav">
                <ul>
                    <li><a href="Home.html" >Home</a></li>
                    <li><a href="about.html"class="active">About</a></li>
                    <!-- <li><a href="Gallery.php"class="active">Events Gallery</a></li> -->
                    <div class="dropdown">
                        <button class="dropbtn"> Gallery 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="Gallery.php">Events Gallery</a>
                          <a href="wedding.html">Wedding Albums</a>
                         
                          <a href="birthday.html">Birthdays</a>
                          <a href="Nature.html">Nature</a>
                        </div>
                      </div> 
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Prices.php">Rates</a></li>
                    
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
            <span class="search-icon">
                <i class="fas fa-search"></i>
            </span>
        </div>

        <div class="container about">
            <div class="about-content">
                <div class="about-img flex">
                    <img src="./images/my.jpg" alt="photograper img">
                </div>
                <h2>I'm Malcolm Lismore</h2>
                <h3>Photograper</h3>
                <blockquote>
                "When words become unclear, I shall focus with photographs. When images become inadequate, I shall be content with silence." 
                    <span>--Ansel Adams--</span>
                </blockquote>
            </div>

            <div class="social-icon">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </header>
    <!--end of header-->

    <!--main-->
    <section class="section-three">
        <div class="container">
            <div class="weddings-gallery">


                
                <?php

                include "./db/db.php";

                
                // Assuming $conn is your database connection
                $query = "SELECT * FROM photos";
                $result = $conn->query($query);
                
                while($photo = $result->fetch_assoc()) {
                    echo "<div class='photo'>";
                    echo "<img src='" . $photo['file_path'] . "' alt='" . $photo['image_name'] . "'>";
                    // If admin is logged in, show delete button
                    if(isset($_SESSION['admin'])) {
                        echo "<form action='delete_photo.php' method='post'>";
                        echo "<input type='hidden' name='id' value='" . $photo['id'] . "'>";
                        echo "<button type='submit'>Delete</button>";
                        echo "</form>";
                    }
                    echo "</div>";
                }
                ?>
                
                    
                 
                



                <!-- <section class="photo-gallery">
                <div class="container"> -->
            <?php if ($result->num_rows > 0): ?>
                <div class="row">
                    <?php while ($photo = $result->fetch_assoc()): ?>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="<?= htmlspecialchars($photo['file_path']); ?>" data-lightbox="gallery">
                                    <img src="<?= htmlspecialchars($photo['file_path']); ?>" alt="<?= htmlspecialchars($photo['image_name']); ?>" style="width:100%">
                                    <div class="caption">
                                        <p><?= htmlspecialchars($photo['category']); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p>No photos found.</p>
            <?php endif; ?>
    
            </div>


               
    </section>


   
    <!--end of main-->

    <!--footer-->
    <footer class="footer">
        <div class="footer-container container">
            <div>
                <h2>Malcolm lismore</h2>
                <p>
                    "To me, photography embodies the art of perception. It entails discovering something captivating within the commonplace... I've come to realize that it's less about the objects you observe and more about the perspective from which you view them."</p>
            </div>
            <div>
                <h3>Free Subscription!</h3>
                <p>The Independent Photographer is a global network celebrating photography through a set of acclaimed monthly awards, online magazines & digital art collections.</p>

                <div class="subs">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email"
                    placeholder="Email Address">
                    <button type="submit">SUBSCRIBE</button>
                </div>
            </div>
        </div>
        <p>&copy; Copyright Malcolm Lismore@2024 . Design by @Sureka</p>
    </footer>
    <!--end of footer-->

    <!--lightbox-->
    <script src="simplelightbox-master/dist/simple-lightbox.js"></script>

    <script>
        new SimpleLightbox({ elements: '.photo-gallery a' });
    </script>


    <script src="main.js"></script>
    
    
</body>
</html>