<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie quiz</title>
    <link href="BootstrapCss.css" rel="stylesheet" />
    <script defer src="bootstrapjs.js"></script> 
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand">LOGO</a>
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Quiz Categories</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More<ion-icon name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#carouselExampleAutoplaying">Instructions</a></li>
                      <li><a class="dropdown-item" href="#leaderboards">Leaderboards</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#Footer">About Us</a></li>
                    </ul>
                  </li>
                  
                </ul>
                <form class="d-flex" role="search">
                  
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                  <button type="button" class="btnLogin">login</button>
                </form>
              </div>
            </div>
        </nav>
    </header>
    <!--form box-->
    <section class="loginform">
      <div class="textclass">
        <span>Ready to become Quiz Titan?</span><br>
        Compete against your friends or other movie buffs from around the world and see who knows the most about movies!<br><br>
        <button class="btnLogin" OnClick="window.location.href='#carouselExampleAutoplaying'">Explore</button>
      </div>
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span>
            <div class="form-value login">
              <form action="insert_data.php" method="post">

                  <H1>LOGIN</H1>
                  <div class="inputbox">
                      <ion-icon name="person-outline"></ion-icon>
                      <input type="text" name="username" required>
                      <label>Username</label>
                  </div>
                  <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" pattern="[a-zA-Z0-9]{8,}" minlength="8" required >
                    <label>Password</label>
                </div>
                <div class="forget">
                    <label><input type="checkbox" />Remember Me? <a href="#">Forgot Password</a></label>
                </div>


                  <button  id="login" type="submit" name="submit" value="Submit">Login</button>
                  <div class="login-register">
                      <p>Don't have an id?<a href="#" class="register-link">Register</a></p>
                  </div>
              </form>
          </div>
            
            <div class="form-value signup">
                <form action="insert_data.php" method="post">

                    <H1>LOGIN</H1>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        
                        <input type="text" name="username" id="username" required>
                        <label>Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" id="email" required>
                        <label>Email</label>
                    </div>
                    <div class="inputbox">
                      <ion-icon name="lock-closed-outline"></ion-icon>
                      <input type="password" pattern="[a-zA-Z0-9]{8,}" minlength="8" required >
                      <label>Password</label>
                    </div>
                    <div class="forget">
                        <label><input type="checkbox" />  I agree to Terms and Conditions </label>
                    </div>
                    <button id="signup" type="submit" name="register" value="Submit">SIGN UP</button>
                    <div class="login-register">
                        <p> Already have an id?<a href="#" class="login-link">Login</a></p>
                    </div>
                    
                </form>
            </div>
            
        </div>
        <div class="icon-down">
          <ion-icon  name="chevron-down-outline"></ion-icon>
        </div>
    </section>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <section class="main_heading my-5">
        <div class="text-center">
            <h1 class="display-4">Select quiz</h1>
            <hr class="w-25 mx-auto" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-10 col-xxl-4 mx-auto">
                    <div class="card mb-3" style="max-width: 500px;">
                        <div class="row g-0" data-aos="fade-left" OnClick="window.location.href='file:///C:/Users/chhaa/OneDrive/Desktop/Labwork/QuizInteractive.html';">
                          <div class="col-md-4">
                            <img src="https://pbs.twimg.com/media/DwSC3wZUYAAQcUv.jpg" class="img-fluid rounded-start" alt="quiz1">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Marvel Quiz</h5>
                              <p class="card-text">In this quiz there will be questions on the movies from Marvel Studios Spiderman:Into The Spiderverse.</p>
                              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 500px;">
                        <div class="row g-0" data-aos="fade-left" OnClick="window.location.href='file:///C:/Users/chhaa/OneDrive/Desktop/Labwork/QuizInteractive.html';">
                          <div class="col-md-4">
                            <img src="https://www.washingtonpost.com/graphics/2019/entertainment/oscar-nominees-movie-poster-design/img/bohemian-rhapsody-web.jpg" class="img-fluid rounded-start" alt="quiz2">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 500px;">
                        <div class="row g-0" data-aos="fade-left" OnClick="window.location.href='file:///C:/Users/chhaa/OneDrive/Desktop/Labwork/QuizInteractive.html';">
                          <div class="col-md-4">
                            <img src="https://theawesomedaily.com/wp-content/uploads/2018/03/fan-made-movie-posters-1-1.jpg" class="img-fluid rounded-start" alt="quiz3">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block" data-aos="slide-up">
            <span class="banner-text-wrap">
              <span class="banner-text bounceInRight animated" ></span>
              <span class="banner-text-bg bounceInLeft animated"></span>
            </span>
          </div>
          <div class="carousel-item">
            <img src="https://static.wixstatic.com/media/4a5235_fb0c6c836a6643c484251a417d3e191b~mv2.png/v1/fill/w_640,h_430,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/4a5235_fb0c6c836a6643c484251a417d3e191b~mv2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block" data-aos="slide-up">
            <span class="banner-text-wrap">
              <span class="banner-text bounceInRight animated" ></span>
              <span class="banner-text-bg bounceInLeft animated"></span>
            </span>
            
          </div>
          <div class="carousel-item" data-aos="fade-up">
            <img src="https://static.toiimg.com/photo/msid-94456156,width-96,height-65.cms" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block" data-aos="slide-up">
            <span class="banner-text-wrap">
              <span class="banner-text bounceInRight animated" ><u>INSTRUCTIONS</u>
              </span><br>
              <span class="banner-text bounceInRight animated" >Just click on the quiz tiles and complete your quiz with most accurate answers to see your name on the Leaderboards.
              </span><br>
              <span class="banner-text-bg bounceInLeft animated">Good Luck!</span>
            </span>
            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
      </div>



    <section id="leaderboards">
        <div class="container">
          <h2>Leaderboards</h2>
          <div class="row">
            <div class="col-md-6">
              <h3>Top Players</h3>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Rank</th>
                    <th>Player Name</th>
                    <th>Score</th>
                  </tr>
                </thead>
                <tbody id="top-players">
                </tbody>
              </table>
            </div>
            <div class="col-md-6">
              <h3>Recent Scores</h3>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Player Name</th>
                    <th>Score</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody id="recent-scores">
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

    <footer id="Footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h4>About Us</h4>
              <p>A Project made by Chhaayan Goswami and Ujjwal Anand</p>
              <p>Manipal University Jaipur</p>
            </div>
            <div class="col-md-4">
              <h4>Contact Us</h4>
              <p>Dehmi Kalan, Jaipur-Ajmer Expressway</p>
              <p>Email: info@quizwebsite.com</p>
              <p>Phone: 91-123456789</p>
            </div>
            <div class="col-md-4">
              <h4>Follow Us</h4>
              <ul class="social-media">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon>
                </a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon>
                </a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <ul class="footer-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Disclaimer</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="footer-links">
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">&copy; 2023 QuizWebsite. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>

      <!--AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 100,
        duration: 800,
      });
    </script>
    <!-- AOS End-->
    <script src="bootstrapjs.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>