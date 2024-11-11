

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
                    <li><a href="about.html">About</a></li>
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
                    <li><a href="contact.php" class="active">Contact</a></li>
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
                "To me, photography embodies the art of perception. It entails discovering something captivating within the commonplace... I've come to realize that it's less about the objects you observe and more about the perspective from which you view them."</p>
                    <span>--Elliott Erwitt--</span>
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
    <section class="section-five">
        <div class="container">
            <div class="contact-top">
                <h3>CONTACT ME</h3>
                <p>Feel free to reach out to me via the contact form provided below or directly through my email or phone number, 
                as I eagerly await the opportunity to connect with you and discuss how my photography services can bring your vision to life.</p>
            </div>

            <div class="contact-middle">
                   <div>
                        <span class="contact-icon">
                            <i class="fas fa-map-signs"></i>
                        </span>
                        <span>Address</span>
                        <p>NO:45, Main Street, Scotland</p>
                   </div>

                   <div>
                       <span class="contact-icon">
                            <i class="fas fa-phone"></i>
                       </span>
                       <span>Contact Number</span>
                       <p>11257108711</p>
                       <p>75015509734</p>
                   </div>

                  <div>
                       <span class="contact-icon">
                            <i class="fas fa-paper-plane"></i>
                       </span>
                       <span>Email</span>
                       <p>malcolmlismore@gmail.com</p>
                   </div>

                   <div>
                       <span class="contact-icon">
                           <i class="fas fa-globe"></i>
                       </span>
                       <span>Website</span>
                       <p>www.malcolmlismorephotography.com</p>
                   </div>
            </div>

          

            
            <?php 
                include "./db/db.php";

                $errors = "";
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $conn->real_escape_string(trim($_POST['name']));
                    $email = $conn->real_escape_string(trim($_POST['email']));
                    $subject = $conn->real_escape_string(trim($_POST['subject']));
                    $message = $conn->real_escape_string(trim($_POST['message']));

                    $sql = "INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)";

                    if($stmt = $conn->prepare($sql)) {
                        $stmt->bind_param("ssss", $name, $email, $subject, $message);

                        if($stmt->execute()) {
                            $errors = "Message sent successfully.";
                        } else {
                            $errors = "Error: " . $conn->error;
                        }
                        $stmt->close();
                    } else {
                        $errors = "Error preparing the statement: " . $conn->error;
                    }
                    $conn->close();
                }
            ?>

            <!-- Display Success/Error Messages -->
            <?php if($errors != ""): ?>
                <div class="alert">
                    <?php echo $errors; ?>
                </div>
            <?php endif; ?>

            <!-- Contact Form -->
            <div class="contact-bottom">
                <div class="contact-form">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form">
                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                        <input type="email" name="email" id="email" placeholder="Your Email" required>
                        <input type="text" name="subject" id="subject" placeholder="Subject" required>
                        <textarea rows="9" name="message" id="message" placeholder="Message" required></textarea>
                        <button class="btn" name="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


                <!--map-->
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4373844.541564852!2d-9.9620817893264!3d57.637160087229745!
                        2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4861e2c403f2a19f%3A0xe7c1fad809c30714!2sScotland%2C%20UK!5e0!3m2!1sen
                        !2slk!4v1709003576065!5m2!1sen!2slk" width="100%" height="600px" style="border:0;"
                     allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                
            </div>
        </div>
    </section>

    <!--end of main-->

    <!--footer-->
    <footer class="footer">
        <div class="footer-container container">
            <div>
                <h2>Malcolm lismore</h2>
                <?php 

                    echo "connected";
                
                ?>
                <p> "To me, photography embodies the art of perception. It entails discovering something captivating within the commonplace... I've come to realize that it's less about the objects you observe and more about the perspective from which you view them."</p>
            </p>
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




    <script src="main.js"></script>
</body>
</html>