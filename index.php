<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookfinity Bangladesh</title>
    
    <!-- Bootstarp CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstarp CDN -->

    <!-- Google Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <!-- Google Icons CDN -->

    <!-- style-sheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- style-sheet -->
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar sticky-top align-item-ce navbar-expand-lg navigation-wraper p-0 ">
            <div class="container px-0">
              <a class="navbar-brand p-0" href="#">
                <img src="assets/NoPath - Copy (12).png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="material-icons-sharp">
                    menu
                    </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item active text-sm-center px-lg-2 me-lg-1 rounded-pill">
                    <a class="nav-link " aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item text-sm-center px-lg-2 me-lg-1  rounded-pill">
                    <a class="nav-link" href="#becomeCook">Become a cook</a>
                  </li>
                  <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
                    <a class="nav-link" href="#customizeMeal">Customized Meal</a>
                  </li>
                  <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item text-sm-center px-lg-2 rounded-pill">
                    <a class="nav-link" href="login.php">Login/Signup</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!-- Header -->

    <!-- section 1  -->
    <section>
      <div class="container-fluid p-md-5 p-2 pt-5 section1">
        <!-- introduction -->
        <div class="introduction container-fluid">

          <div class="container">
            <div class="col-lg-6 ">
              <div class="heading fw-bold">
                <h1 class="fw-bold"><span class="text-green">Home Made Food</span> is where <br> it all started !!!</h1>
                <p class="text-mute m-0 fs-5">
                  Even we can deliver
                <span class="text-green">
                  Customized Meal
                </span></p>
                <span class="d-block fs-4 text-mute lh-sm">
                  Discover home made foods <br> that delivers at your doorstep!
                </span>
              </div>
            </div>
          </div>

          <div class="container seach-area mt-4">
            <div class="p-md-3 p-2 rounded-pill search-template">

              <select name="city" class="p-2 rounded-pill border border-2 border-light text-light fw-bold" id="city">
                <option value="none" selected>Select Your City</option>
                <option value="Natore">Natore</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Bogura">Bogura</option>
              </select>

              <select name="location" class="p-2 rounded-pill border border-2 border-light text-light fw-bold" id="location">
                <option value="none" selected>Select Location</option>
                <option value="saab">Sadar</option>
                <option value="opel">Naldanga</option>
                <option value="audi">Bonpara</option>
              </select>
              
              <button type="button" class="px-lg-5 bg-light p-2 border border-2 border-light rounded-pill fw-bold">Find Food</button>
            </div>
          </div>
        </div>
        <!-- introduction -->
  
        <!-- How it works -->
        <div class="works container-fluid">
          <div class="container">
            <div class="row">
              <div class="mx-auto col-lg-10 p-4 bg-light shadow">
                <h3 class="heading text-md-start text-center">How it works</h3>
  
                <div class="content d-flex justify-content-evenly flex-md-row flex-column">
                  <div class="p-2 d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="icon">
                      <img src="./assets/computer.png" alt="computer png icon">
                    </div>
                    <div class="heading">
                      Select your food
                    </div>
                    <div class="details">
                      Browse home made foods <br/> that deliver near you
                    </div>
                  </div>
  
                  <div class="p-2 d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="icon">
                      <img src="./assets/fast-delivery.png" alt="computer png icon">
                    </div>
                    <div class="heading">
                      Receive it at your doorstep
                    </div>
                    <div class="details">
                      Your order will be delivered to you in a blink
                    </div>
                  </div>
  
                  <div class="p-2 d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="icon">
                      <img src="./assets/meal.png" alt="computer png icon">
                    </div>
                    <div class="heading">
                      Enjoy your order
                    </div>
                    <div class="details">
                      Enjoy your food items
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!-- How it works -->
      </div>
    </section>
    <!-- section 1  -->

    <!-- section 2 -->
    <section id="customizeMeal">
      <div class="container-fluid customized-meal text-center overflow-hidden">
        <div class="container">
          <div class="text-part">
            <h3 class="fs-3">"<span class="text-green">Customized Meals</span>" for all individuals</h3>
            <p>less oily, extreme hot or less spicy!!!<br> No Worries😉 <br> Your favorite home made meals just like you want, dropping at your doorstep</p>
          </div>
          <div class="mt-3">
            <button type="button" class="btn text-light rounded-pill" onclick="gotoPage('./consumer/customMeal')">Customized meal request</button>
          </div>
        </div>
      </div>
    </section>
    <!-- section 2 -->

    <!-- section 3 -->
    <section>
      <div class="container-fluid mb-5">
        <div class="container order">
          <div class="heading">
            <h2 class="fs-3 fw-bold d-flex align-items-center">Choose from most popular home cooks <span> <img src="./assets/quality.png" alt=""> </span></h2>
          </div>

          <div class="cards-grid">

            <!-- ======FOR BEST RESULT USE HORIZONTAL IMAGE ONLY====== -->
            <div class="card-template">
              <div class="image-holder">
                <img class="img-fluid" src="./assets/biriyani.jpg" alt="Biriyani and cup cake">
              </div>
              <div class="details p-2">
                <div class="name fs-5 fw-bold">
                  <span>
                    Saidul Islam
                  </span>
                </div>
                <div class="location">
                  <span class="icon">
                    <img src="./assets/icon-loaction.png" alt="">
                  </span>
                  <span class="address">
                    Jatrabari, Dhaka
                  </span>
                </div>
                <div class="food-name">
                  <span class="icon">
                    <img src="./assets/icon-food.png" alt="">
                  </span>
                  <span class="food">
                    Biriyani, Cup cake
                  </span>
                </div>
                <div class="footer mt-3 d-flex justify-content-between align-items-center">
                  <span class="min-order">
                    Min Order: 150BDT
                  </span>
                  <span class="delivery">
                    Delivery: 45min
                  </span>
                </div>
              </div>
            </div>
            
            <div class="card-template">
              <div class="image-holder">
                <img class="img-fluid" src="./assets/biriyani-2.jpg" alt="Biriyani and cup cake">
              </div>
              <div class="details p-2">
                <div class="name fs-5 fw-bold">
                  <span>
                    Saidul Islam
                  </span>
                </div>
                <div class="location">
                  <span class="icon">
                    <img src="./assets/icon-loaction.png" alt="">
                  </span>
                  <span class="address">
                    Jatrabari, Dhaka
                  </span>
                </div>
                <div class="food-name">
                  <span class="icon">
                    <img src="./assets/icon-food.png" alt="">
                  </span>
                  <span class="food">
                    Biriyani, Cup cake
                  </span>
                </div>
                <div class="footer mt-3 d-flex justify-content-between align-items-center">
                  <span class="min-order">
                    Min Order: 150BDT
                  </span>
                  <span class="delivery">
                    Delivery: 45min
                  </span>
                </div>
              </div>
            </div>
            
            <div class="card-template">
              <div class="image-holder">
                <img class="img-fluid" src="./assets/biriyani-3.jpg" alt="Biriyani and cup cake">
              </div>
              <div class="details p-2">
                <div class="name fs-5 fw-bold">
                  <span>
                    Saidul Islam
                  </span>
                </div>
                <div class="location">
                  <span class="icon">
                    <img src="./assets/icon-loaction.png" alt="">
                  </span>
                  <span class="address">
                    Jatrabari, Dhaka
                  </span>
                </div>
                <div class="food-name">
                  <span class="icon">
                    <img src="./assets/icon-food.png" alt="">
                  </span>
                  <span class="food">
                    Biriyani, Cup cake
                  </span>
                </div>
                <div class="footer mt-3 d-flex justify-content-between align-items-center">
                  <span class="min-order">
                    Min Order: 150BDT
                  </span>
                  <span class="delivery">
                    Delivery: 45min
                  </span>
                </div>
              </div>
            </div>
            
            <div class="card-template">
              <div class="image-holder">
                <img class="img-fluid" src="./assets/biriyani-4.jpg" alt="Biriyani and cup cake">
              </div>
              <div class="details p-2">
                <div class="name fs-5 fw-bold">
                  <span>
                    Saidul Islam
                  </span>
                </div>
                <div class="location">
                  <span class="icon">
                    <img src="./assets/icon-loaction.png" alt="">
                  </span>
                  <span class="address">
                    Jatrabari, Dhaka
                  </span>
                </div>
                <div class="food-name">
                  <span class="icon">
                    <img src="./assets/icon-food.png" alt="">
                  </span>
                  <span class="food">
                    Biriyani, Cup cake
                  </span>
                </div>
                <div class="footer mt-3 d-flex justify-content-between align-items-center">
                  <span class="min-order">
                    Min Order: 150BDT
                  </span>
                  <span class="delivery">
                    Delivery: 45min
                  </span>
                </div>
              </div>
            </div>
            
            <div class="card-template">
              <div class="image-holder">
                <img class="img-fluid" src="./assets/biriyani-5.jpg" alt="Biriyani and cup cake">
              </div>
              <div class="details p-2">
                <div class="name fs-5 fw-bold">
                  <span>
                    Saidul Islam
                  </span>
                </div>
                <div class="location">
                  <span class="icon">
                    <img src="./assets/icon-loaction.png" alt="">
                  </span>
                  <span class="address">
                    Jatrabari, Dhaka
                  </span>
                </div>
                <div class="food-name">
                  <span class="icon">
                    <img src="./assets/icon-food.png" alt="">
                  </span>
                  <span class="food">
                    Biriyani, Cup cake
                  </span>
                </div>
                <div class="footer mt-3 d-flex justify-content-between align-items-center">
                  <span class="min-order">
                    Min Order: 150BDT
                  </span>
                  <span class="delivery">
                    Delivery: 45min
                  </span>
                </div>
              </div>
            </div>
            
            <div class="card-template">
              <div class="image-holder">
                <img class="img-fluid" src="./assets/biriyani-6.jpg" alt="Biriyani and cup cake">
              </div>
              <div class="details p-2">
                <div class="name fs-5 fw-bold">
                  <span>
                    Saidul Islam
                  </span>
                </div>
                <div class="location">
                  <span class="icon">
                    <img src="./assets/icon-loaction.png" alt="">
                  </span>
                  <span class="address">
                    Jatrabari, Dhaka
                  </span>
                </div>
                <div class="food-name">
                  <span class="icon">
                    <img src="./assets/icon-food.png" alt="">
                  </span>
                  <span class="food">
                    Biriyani, Cup cake
                  </span>
                </div>
                <div class="footer mt-3 d-flex justify-content-between align-items-center">
                  <span class="min-order">
                    Min Order: 150BDT
                  </span>
                  <span class="delivery">
                    Delivery: 45min
                  </span>
                </div>
              </div>
            </div>
            
            <div class="card-template">
              <div class="image-holder">
                <img class="img-fluid" src="./assets/biriyani-7.jpg" alt="Biriyani and cup cake">
              </div>
              <div class="details p-2">
                <div class="name fs-5 fw-bold">
                  <span>
                    Saidul Islam
                  </span>
                </div>
                <div class="location">
                  <span class="icon">
                    <img src="./assets/icon-loaction.png" alt="">
                  </span>
                  <span class="address">
                    Jatrabari, Dhaka
                  </span>
                </div>
                <div class="food-name">
                  <span class="icon">
                    <img src="./assets/icon-food.png" alt="">
                  </span>
                  <span class="food">
                    Biriyani, Cup cake
                  </span>
                </div>
                <div class="footer mt-3 d-flex justify-content-between align-items-center">
                  <span class="min-order">
                    Min Order: 150BDT
                  </span>
                  <span class="delivery">
                    Delivery: 45min
                  </span>
                </div>
              </div>
            </div>
            
            <div class="card-template">
              <div class="image-holder">
                <img class="img-fluid" src="./assets/biriyani-8.jpg" alt="Biriyani and cup cake">
              </div>
              <div class="details p-2">
                <div class="name fs-5 fw-bold">
                  <span>
                    Saidul Islam
                  </span>
                </div>
                <div class="location">
                  <span class="icon">
                    <img src="./assets/icon-loaction.png" alt="">
                  </span>
                  <span class="address">
                    Jatrabari, Dhaka
                  </span>
                </div>
                <div class="food-name">
                  <span class="icon">
                    <img src="./assets/icon-food.png" alt="">
                  </span>
                  <span class="food">
                    Biriyani, Cup cake
                  </span>
                </div>
                <div class="footer mt-3 d-flex justify-content-between align-items-center">
                  <span class="min-order">
                    Min Order: 150BDT
                  </span>
                  <span class="delivery">
                    Delivery: 45min
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn text-light rounded-pill fw-bold">Load more</button>
          </div>
          
        </div>
      </div>
    </section>
    <!-- section 3 -->
    
    <!-- section 4 -->
    <section id="becomeCook">
      <div class="container-fluid">
        <div class="container meal-soul">
          <div class="row">
            <div class="col-md-5 text-center ms-md-5">
              <div class="text-content">
                <h3 class="fw-bold fs-4">A meal has no soul. <span class="text-green">You</span>, as the cook, must bring soul to the meal.</h3>
                <p class="fw-bold text-mute">Did someone appreciate your food?<br/> You know what <br/> You can join our team as a <span class="text-green">Home cook</span> </p>
              </div>
              <!-- <div class="col-7 mx-auto text-center">
                <div> -->
                  <button type="button" class="btn text-light rounded-pill fw-bold" onclick="gotoPage('becomeCook')">Become a home cook</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section 4 -->
    
    <!-- section 5 -->
    <section id="about">
      <div class="container-fluid">
        <div class="container py-4">
          <article class="py-4">
            <h4 class="text-green fw-bold">About Us</h4>
            <p>Cookfinity Bangladesh’s Platform is a web based platform which delivers home cooked meals by the home-cook in Bangladesh. It is an ideal platform for people who  are looking for  home  cooked foods.  Consumer can go through  our platform for their  desired meals. If  they don’t find the meals  they are looking for, they can request the meals and to get it delivered  at their doorstep. The consumer can also order customized meals besides regular orders. Cookfinity Bangladesh’s  Platform will have a good pricing policy so that both consumers can get their meals in a reasonable price and home-cooks can earn a noteworthy amount. Our aim is to make a great opportunity for society and decrease the amount of unemployment. <span class="text-green fw-bold">Read more...</span></p>
          </article>
        </div>
      </div>
    </section>
    <!-- section 5 -->

    <!-- Footer -->
    <footer>
      <div class="container-fluid p-0">
        <div class="container-fluid border-bottom border-3 border-light top">
          <div class="container">
            <div class="wraper d-flex justify-content-between align-items-center">
              <div class="logo-holder">
                <a href="#">
                  <img class="img-fluid" src="./assets/logo-white.png" alt="Cookfinity logo">
                </a>
              </div>
  
              <div class="social-links d-flex justify-content-between align-items-center">
                <div class="icon me-3 fb">
                  <a target="_blank" href="https://www.facebook.com">
                    <img class="img-fluid" src="./assets/facebook-icon.png" alt="facebook icon">
                  </a>
                </div>
                
                <div class="icon me-3 insta">
                  <a target="_blank" href="https://www.instagram.com">
                    <img class="img-fluid" src="./assets/instagram-icon.png" alt="instagram icon">
                  </a>
                </div>
                
                <div class="icon yt">
                  <a target="_blank" href="https://www.youtube.com">
                    <img class="img-fluid" src="./assets/youtube-icon.png" alt="youtube icon">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid middle border-bottom border-3 border-light p-3">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-6">
                <ul class="d-flex flex-column p-0">
                  <li class="mb-2"><a class="text-light" href="#">About Cookfinity</a></li>
                  <li class="mb-2"><a class="text-light" href="#">Contact Us</a></li>
                  <li class="mb-2"><a class="text-light" href="#">Become a Cook!</a></li>
                  <li><a class="text-light" href="#">Help</a></li>
                </ul>
              </div>
              <div class="col-md-4 col-6">
                <ul class="d-flex flex-column align-items-md-start align-items-end p-0">
                  <li class="mb-2"><a class="text-light" href="#">Privacy</a></li>
                  <li class="mb-2"><a class="text-light" href="#">FAQs</a></li>
                  <li class="mb-2"><a class="text-light" href="#">Blog</a></li>
                  <li><a class="text-light" href="#">Terms</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="app-links d-flex flex-column justify-content-center align-items-center">
                  <div class="google-play">
                    <a href="#" target="_blank"><img class="img-fluid" src="./assets/google-play.png" alt="get app on google play"></a>
                  </div>
                  
                  <div class="app-store">
                    <a href="#" target="_blank"><img class="img-fluid" src="./assets/app-store.png" alt="get app on app store"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid bottom">
          <div class="container p-3">
            <div class="credit text-center">
              <p class="text-light fw-bold m-0">Cookfinity Bangladesh | All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->

    <!-- bootstrap js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- bootstrap js CDN -->

    <!-- jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>
</html>