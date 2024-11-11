<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malcolm lismore</title>
    <mata name="viewport" content="width=device-width,initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
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

           
            <nav class="top-nav">
                <ul>
                    <li><a href="Home.html" >Home</a></li>
                    <li><a href="about.html">About</a></li>
                  
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
                    <li><a href="Prices.php"class="active">Rates</a></li>
                    
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
                    <img src="./Images/my.jpg" alt="photograper img">
                </div>
                <h2>I'm Malcolm Lismore</h2>
                <h3>Photograper</h3>
                <blockquote>
                "Every viewer is going to get a different thing. That's the thing about painting, photography, cinema."
                    <span>--David Lynch--</span>
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

    <section class="pricing">
        <h1 class="heading">Prices</h1>
        <div class="box-container">
            <div class="box">
                <h1>Basic plane</h1>
                <div class="price">$800</div>
                <div class="list">
                    <p><i class="fas fa-check"></i>photography</p>
                    <p><i class="fas fa-check"></i>2 Location</p>
                    <p><i class="fas fa-check"></i>4 Hours</p>
                    <p><i class="fas fa-check"></i>Digital Files Included</p>
                </div>
            
                <br>
                <button class="plan-btn" data-bs-toggle="modal" data-bs-target="#inquiryFormModal">Choose Plan</button>
            
            </div>



            <div class="box">
                <h1>Premium plane</h1>
                <div class="price">$1300</div>
                <div class="list">
                    <p><i class="fas fa-check"></i>photography</p>
                    <p><i class="fas fa-check"></i>3 Location</p>
                    <p><i class="fas fa-check"></i>6 Hours</p>
                    <p><i class="fas fa-check"></i>Digital Files Included</p>
                </div>
               
<br>
<button class="plan-btn" data-bs-toggle="modal" data-bs-target="#inquiryFormModal">Choose Plan</button>
            </div>


            <div class="box">
                <h1>Gold plane</h1>
                <div class="price">$1500</div>
                <div class="list">
                    <p><i class="fas fa-check"></i>photography</p>
                    <p><i class="fas fa-check"></i>5 Location</p>
                    <p><i class="fas fa-check"></i>8 Hours</p>
                    <p><i class="fas fa-check"></i>Thank you cards 100 free</p>
                    <p><i class="fas fa-check"></i>Digital Files Included</p>
                </div>
               
                 <br>
                 <button class="plan-btn" data-bs-toggle="modal" data-bs-target="#inquiryFormModal">Choose Plan</button>
            </div>

            <div class="box">
                <h1>Ultimate plane</h1>
                <div class="price">$2000</div>
                <div class="list">
                  
                    <p><i class="fas fa-check"></i>Multiple Location</p>
                    <p><i class="fas fa-check"></i>10 Hours</p>
                    <p><i class="fas fa-check"></i>preshoot Video </p>
                    <p><i class="fas fa-check"></i>Thank you cards 100 free</p>
                    <p><i class="fas fa-check"></i>Digital Files Included</p>
                </div>
              
                <button class="plan-btn" data-bs-toggle="modal" data-bs-target="#inquiryFormModal">Choose Plan</button>

            </div>


           
        </div>
    </section>
    <div class="modal fade" id="inquiryFormModal" tabindex="-1" aria-labelledby="inquiryFormModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="submit_inquiry.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="inquiryFormModalLabel">Inquiry Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Form fields -->
          <input type="text" class="form-control mb-2" name="full_name" placeholder="Full Name" required>
          <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
          <input type="text" class="form-control mb-2" name="address" placeholder="Address" required>
          <input type="text" class="form-control mb-2" name="contact_no" placeholder="Contact Number" required>
          <input type="text" class="form-control mb-2" name="prefer_location" placeholder="Preferred Location" required>
          <input type="date" class="form-control mb-2" name="date" required>
          <select class="form-select mb-2" name="plan" required>
            <option value="">Select Plan</option>
            <option value="Basic">Basic Plan</option>
            <option value="Premium">Premium Plan</option>
            <option value="Gold">Gold Plan</option>
            <option value="Ultimate">Ultimate Plan</option>
          </select>
          <textarea class="form-control mb-2" name="message" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit Inquiry</button>
        </div>
      </div>
    </form>
  </div>
</div>
    <!--end of main-->

    <!--footer-->
    <footer class="footer">
        <div class="footer-container container">
            <div>
                <h2>Malcolm lismore</h2>
                <p>"To me, photography embodies the art of perception. It entails discovering something captivating within the commonplace... 
                    I've come to realize that it's less about the objects you observe and more about the perspective from which you view them."</p>
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


<!-- Modal Trigger -->


    <script src="main.js"></script>
</body>
</html>