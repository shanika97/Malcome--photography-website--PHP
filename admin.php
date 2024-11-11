<?php
session_start();


include './db/db.php'; // Adjust this path as needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malcolm lismore</title>
    <mata name="viewport" content="width=device-width,initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    
    
    <mata name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>






</head>
<body>
     <!--header-->
    <!--header-->
    <header class="header">
        <div class="nav-section">
            <div class="brand-and-navBtn">
                <span class="brand-name">
                    MALCOLM LISMORE
                </span>

            </div> 
  <!--navgation menu-->
  <nav class="top-nav">
                <ul>
                    <li><a href="Home.html" class="active" >Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="Gallery.php"class="active">Events Gallery</a></li>
                    
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Prices.php">Rates</a></li>
                    
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
            
            <span class="search-icon">
                <i class="fas fa-search"></i>
            </span>
            <form action="./logout.php" method="post">
                <button type="submit" class="btn btn-dark p-1 m-3">Log Out</button>
            </form>
           
        </div>


        <div class="container about">
            <div class="about-content">
                <div class="about-img flex img-2">
                    <img src="./images/my.jpg" alt="photograper img">
                </div>
                <h2>I'm Malcolm Lismore</h2>
                <h3>Photograper</h3>
                <div class="admin-quotes">
                    "Photograper is a way of feeling, of touching, of loving. What you have caught on film is captured forever... It 
                    remember little things, long after you have forgotten everything." <br>
                </dive>
                <dive class="quote-author">
                   <span>--Aaron Siskind--</span>
                </div>
                <p>Admin Page</p>
            </div>

        </div>

    </header>
    <!--end of header-->



 

  <!--main-->
  
  <main class="container mt-5">
        <h1>Admin Dashboard</h1>
        <!-- Add New Photo Button triggers modal -->
        <button type="button" class="btn btn-primary mx-5 my-5" data-bs-toggle="modal" data-bs-target="#addPhotoModal">Add New Photo</button>

        <!-- Modal for Adding New Photo -->
        <div class="modal fade" id="addPhotoModal" tabindex="-1" aria-labelledby="addPhotoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="upload_photo.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPhotoModalLabel">Add New Photo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3">
            <label for="image_name" class="form-label">Image Name</label>
            <input type="text" class="form-control" id="image_name" name="image_name" required>
          </div>
          <div class="mb-3">
            <label for="file" class="form-label">Choose file</label>
            <input type="file" class="form-control" id="file" name="file" required>
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category">
              <option value="wedding">Wedding</option>
              <option value="nature">Nature</option>
              <option value="birthdays">Birthdays</option>
              <option value="other">Other</option>
            </select>
          </div>
        
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Upload Photo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Photo Display Section -->
        <div class="row">
            <?php
            $query = "SELECT * FROM photos"; 
            $result = $conn->query($query);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Display each photo as before
                }
            } else {
                echo "No photos found.";
            }
            ?>
        </div>
    </main>




    <!--end of main-->
    <!--footer start-->

    <footer class="footer">
        <div class="footer-container container">
            <div>
                <h2>Malcolm lismore</h2>
                <p>"To me, photography is an art of observation. It's about finding something interesting in an ordinary place...
                I've found it has little to do with the things you see and everything to do with the way you see them."</p>
            </div>
            <div>
                <h3>Free Subscription!</h3>
                <p>Start your journey to stunning photography with our complimentary subscription!</p>

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



<script src="simplelightbox-master/dist/simple-lightbox.js"></script>

<script src="main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>