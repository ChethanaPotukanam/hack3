<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>Home</title>
    <style>
        .carousel,
        .carousel-item {
            height: 100vh;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
        }

        .carousel-caption {
            bottom: 20%;
        }
    </style>
</head>
<body>
    
    <!-- header section starts here -->
    <main class="header-main">
        <h1 class="visually-hidden">Headers examples</h1>
      
        <div class="container">
          <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-3">CodeCrafters</span>
            </a>
      
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="home.php" class="nav-link active" aria-current="page">Home</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
              <li class="nav-item"><a href="package.php" class="nav-link">Events</a></li>
              <li class="nav-item"><a href="http://localhost:3002/" class="nav-link">Login</a></li>
              <li class="nav-item"><a href="feedback.html" class="nav-link">Feedback</a></li>
            </ul>
          </header>
        </div>
      </main>
      <!-- header section ends here -->


    <!-- home section starts here -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img1.jpg" class="d-block w-100" alt="dog">
                <div class="carousel-caption d-none d-md-block">
                    <p>Magical Events of RKV</p>
                    <h1>Our Events Our Celebration</h1>
                    <a href="package.php" class="btn btn-primary">Explore More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpg" class="d-block w-100" alt="couple">
                <div class="carousel-caption d-none d-md-block">
                    <p>Plan,Schedule,Execute</p>
                    <h1>Your ideas,Our Planning</h1>
                    <a href="package.php" class="btn btn-primary">Discover More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img3.jpg" class="d-block w-100" alt="family">
                <div class="carousel-caption d-none d-md-block">
                    <p>Explore,Enjoy</p>
                    <h1>MAKE YOUR EVENT WORTHWHILE</h1>
                    <a href="package.php" class="btn btn-primary">Discover More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- home section ends here -->


    <div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="entry-title">
                    <p>JUST THE BEST</p>
                    <h2>Our Pre Events</h2>
                </div><!-- entry-title -->
            </div><!-- col-12 -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="next-event-slider-wrap">
    <div class="swiper-container next-event-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="next-event-content" style="background-image: url('images/mar.jpeg');">
                    <div class="entry-content flex flex-column justify-content-center align-items-center">
                        <h3>Welcome  to Marthon 2K24 </h3>
                
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="next-event-content" style="background-image: url('images/fresh1.jpeg');">
                    <div class="entry-content flex flex-column justify-content-center align-items-center">
                       
                        <a href="https://youtu.be/g7TajxVdywA?feature=shared"> <h3>Welcome to Freshers Party 2K22</h3></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="next-event-content" style="background-image: url('images/hack.jpeg');">
                    <div class="entry-content flex flex-column justify-content-center align-items-center">
                        <h3>Welcome To Hackthon 2k23</h3>
                    
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="next-event-content" style="background-image: url('images/cd.webp');">
                    <div class="entry-content flex flex-column justify-content-center align-items-center">
                        <h3>Welcome to code contest 2K24</h3>
                    
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="next-event-content" style="background-image: url('images/next-event-2.jpg');">
                    <div class="entry-content flex flex-column justify-content-center align-items-center">
                        <h3>Welcome to Abiyanth</h3>
                        <p>Rgukt Rkvalley,22 Street, 23-28, Idupulapaya</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="next-event-content" style="background-image: url('images/next-event-3.jpg');">
                    <div class="entry-content flex flex-column justify-content-center align-items-center">
                        <h3>Welcome Nritya</h3>
                        <p>Rgukt, 22 Street, 23-28, Los Angeles California</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next">
        <img src="images/button.png" alt="">
    </div>
</div>

<!-- home packages section starts here -->

    <section class="packages">
        <h2>Upcoming Events</h2>
        <div class="package-cards">
            <div class="card">
                <img src="images/prev1.jpeg" alt="Taj Mahal">
                <h3>Clubs Inaguration</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Participate</a></button>
            </div>
            <div class="card">
                <img src="images/techfest.jpeg" alt="Ooty">
                <h3>TeckFest</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Participate</a></button>
            </div>
            <div class="card">
                <img src="images/ntritya.jpeg" alt="Golden Temple">
                <h3>nritya</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Participate</a></button>
            </div>
        </div>
        <button class="load-more"><a href="package.php">Load More</a></button>
    </section>
    <!-- home packages section ends here -->

    <!-- footer section starts here -->
    <hr>
    <footer class="py-5">
        <div class="container">
            <div class="row justify-content-center"> <!-- Centering the row -->
                <div class="col-6 col-md-2 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="home.php" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Home</a></li>
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> About</a></li>
                        <li class="nav-item mb-2"><a href="package.php" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Package</a></li>
                        <li class="nav-item mb-2"><a href="book.php" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Book</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5>Extra Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Ask Questions</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> About Us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Privacy Policy</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Terms Of Use</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5>Contact Info</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-phone"></i> +123-456-7890</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-phone"></i> +111-222-3333</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-envelope"></i> shaik1@gmail.com</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fa-solid fa-location-dot"></i> Kadapa,India- 516001</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5>Follow Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fab fa-linkedin"></i> Linkedin</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top align-items-center text-center">
                <p class="credit">© Created By <span>Miss.Web Designer</span>, All Rights Reserved!</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- footer section ends here -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
