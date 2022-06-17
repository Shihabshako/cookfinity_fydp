<?php
include('../functions.php');
$cities = getAllRecordFromTable('cities');
$locations = getAllRecordFromTable('locations');
$categories = settingsVariablesValues('category');

if (isset($_GET['filterCategory'])) {
  $filterCategory = $_GET['filterCategory'];
  $allMeals = getAllMealForConsumer($filterCategory);
} else {
  $allMeals = getAllMealForConsumer();
}

if (isset($_GET['city'])) {
  $city = $_GET['city'];
  $location = $_GET['location'];
  $allMeals = getAllMealForConsumerAreaBased($city, $location);
}

if (isset($_GET['filterTitle'])) {
  $filterTitle = $_GET['filterTitle'];

  $allMeals = getAllMealForConsumerFilterTitle($filterTitle);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CookFinity - Home</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Bootstarp CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstarp CDN -->

  <!-- Google Icons CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <!-- Google Icons CDN -->

  <!-- style-sheet -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <!-- style-sheet -->
</head>

<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navigation-wraper p-0">
      <div class="container px-0">
        <a class="navbar-brand p-0" href="#">
          <img src="../assets/NoPath - Copy (12).png" alt="">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="material-icons-sharp">
            menu
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item active text-sm-center px-lg-2 me-lg-1 rounded-pill">
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
              <a class="nav-link" href="./customMeal.php">Customized Meal</a>
            </li>
            <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
              <a class="nav-link" href="./myRequests.php">My Requests</a>
            </li>
            <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
              <a class="nav-link" href="#">Message</a>
            </li>
            <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
              <a class="nav-link" href="./logout.php">Logout</a>
            </li>
          </ul>
        </div>
        <div class="cart_icon ms-md-3 ms-1 me-md-0 me-2 d-flex align-items-center">
          <button class="cart-toggle position-relative" id="cartBtn" onclick="cartShow()">
            <span class="material-icons-sharp">
              shopping_cart
            </span>
            <span class="position-absolute" id="cartItemCount" style="
                  right: 0;
                  top: 0;
                  background-color: red;
                  border-radius: 50%;
                  height: 20px;
                  width: 20px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  padding: 5px;
                  color: white;
              ">0</span>
          </button>

          <table border="0" class="add-to-cart bg-prime" id="cartTable">
            <tbody id="tbody">

              <tr class="cart-delivery-fee fw-bold text-white">
                <td></td>
                <td>Delivery fee</td>
                <td></td>
                <td><span>59</span>tk</td>
              </tr>
              <tr class="cart-total-fee fw-bold text-white">
                <td></td>
                <td>Total</td>
                <td></td>
                <td><span id="totalPrice">59</span>tk</td>
              </tr>

              <tr class="cart-buttons">
                <td colspan="2" class="text-center">
                  <a href="./viewCart.php" class="px-4 bg-light p-2 rounded-pill fw-bold">View Cart</a>
                </td>

                <td colspan="2" class="text-center">
                  <a class="px-4 bg-light p-2 rounded-pill fw-bold">Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
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
                </span>
              </p>
              <span class="d-block fs-4 text-mute lh-sm">
                Discover home made foods <br> that delivers at your doorstep!
              </span>
            </div>
          </div>
        </div>

        <div class="container seach-area mt-4">
          <div class="p-md-3 p-2 rounded-pill search-template">

            <select name="city" class="p-2 rounded-pill border border-2 border-light text-light fw-bold" id="city">
              <option value="" disabled selected>Select city</option>
              <?php
              foreach ($cities as $city) {
              ?>
                <option value="<?= $city['id'] ?>"><?= $city['city_name'] ?></option>
              <?php
              }
              ?>
            </select>

            <select name="location" class="p-2 rounded-pill border border-2 border-light text-light fw-bold" id="location">
              <option value="" disabled selected>Select location</option>
              <?php
              foreach ($locations as $location) {
              ?>
                <option value="<?= $location['id'] ?>"><?= $location['location_name'] ?></option>
              <?php
              }
              ?>
            </select>

            <button type="button" class="px-lg-5 bg-light p-2 border border-2 border-light rounded-pill fw-bold" onclick="filterLocation()">Find Food</button>
          </div>



          <!-- Search your desirable meals -->
          <div class="mt-3 col-lg-8 p-md-3 p-2 rounded-pill bg-prime">

            <form class="d-flex" onsubmit="filterByTitle()">
              <input class="form-control me-2 ps-4 p-2 rounded-pill border border-2 border-light text-light fw-bold bg-prime" type="search" id="filterTitle" placeholder="Search Your Desirable Meals" aria-label="Search" required>
              <button class="px-lg-5 bg-light p-2 border border-2 border-light rounded-pill fw-bold" type="submit">Search</button>
            </form>

          </div>
        </div>
      </div>
      <!-- introduction -->

      <!-- Categories -->
      <div class="works container-fluid">
        <div class="container">
          <div class="row">
            <div class="mx-auto col-lg-10 p-4 shadow">
              <h3 class="heading text-md-start text-center">Categories</h3>

              <div class="categories p-2 d-flex flex-wrap align-items-center justify-content-center">

                <?php
                foreach ($categories as $item) {
                ?>
                  <div class="category bg-light rounded-pill d-flex align-items-center justify-content-center p-3" style="cursor:pointer" onclick="filterMeals('<?= $item['value'] ?>')">
                    <div class="icon me-3">
                      <img class="img-fluid" src="../assets/<?= $item['value'] ?>.png" alt="breakfast icon">
                    </div>
                    <div class="text-center">
                      <Span class="fw-bold text-green"><?= $item['value'] ?></Span>
                    </div>
                  </div>
                <?php
                }
                ?>



                <div class="category bg-light rounded-pill d-flex align-items-center justify-content-center p-3" style="cursor:pointer" onclick="window.location.href = './index.php'">
                  <div class="icon me-3">
                    <img class="img-fluid" src="../assets/Snacks.png" alt="dinner icon">
                  </div>
                  <div class="text-center">
                    <Span class="fw-bold text-green">All</Span>
                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
      <!-- Categories -->

    </div>
  </section>
  <!-- section 1  -->

  <!-- section 2 -->
  <section>
    <div class="container-fluid mb-5">
      <div class="container order">
        <div class="heading">
          <h2 class="fs-3 fw-bold d-flex align-items-center">Choose from home cooks <span> <img src="../assets/quality.png" alt=""> </span></h2>
        </div>

        <div class="cards-grid">

          <!-- ======FOR BEST RESULT USE HORIZONTAL IMAGE ONLY====== -->
          <?php
          foreach ($allMeals as $item) {
            $id = $item['id'];
          ?>
            <div class="card-template">
              <div class="card-top p-2 d-flex align-items-center justify-content-between">
                <div class="card-img-top">
                  <img class="img-fluid" src="../images/users/<?= $item['own_image'] ?>" alt="chef">
                </div>
                <div class="card-details-top ms-2">
                  <h6 class="fw-bold"><?= $item['full_name'] ?></h6>
                  <div class="location">
                    <span class="icon">
                      <img src="../assets/icon-loaction.png" alt="">
                    </span>
                    <span class="address">
                      <?= $item['location'] ?>
                    </span>
                  </div>
                </div>
                <div class="card-star-top">
                  <span class="material-icons-sharp">
                    star_outline
                  </span>
                </div>
              </div>
              <div class="image-holder">
                <img class="img-fluid" src="../images/meals/<?= $item['image'] ?>" alt="Biriyani and cup cake">
              </div>
              <div class="details p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h6 class="fw-bold meal-title " style="margin:0!important"><?= $item['title'] ?></h6>
                  <img onclick='addToCart(<?= $id ?>)' style="cursor:pointer" src="../assets/shopping-cart.png" alt="">
                </div>
                <div class="meal-pricing d-flex justify-content-between">
                  <p class="meal-quantity">Quantity : <span><?= $item['quantity'] ?></span></p>
                  <p class="meal-price">Price : <span><?= $item['price'] ?></span>BDT</p>
                </div>
                <p class="meal-time">
                  Time : <span><?= timeConversion($item['available_from']) ?> </span>
                  -
                  <span><?= timeConversion($item['available_till']) ?></span>
                </p>
              </div>
            </div>
          <?php
          }

          ?>


        </div>

        <!-- <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn text-light rounded-pill fw-bold">Load more</button>
          </div> -->

      </div>
    </div>
  </section>
  <!-- section 2 -->

  <!-- section 3 -->
  <section>
    <div class="container-fluid mb-5">
      <div class="container order">
        <div class="heading">
          <h2 class="fs-3 fw-bold d-flex align-items-center">Choose from most popular home cooks <span> <img src="../assets/quality.png" alt=""> </span></h2>
        </div>

        <div class="cards-grid">

          <!-- ======FOR BEST RESULT USE HORIZONTAL IMAGE ONLY====== -->
          <div class="card-template">
            <div class="image-holder">
              <img class="img-fluid" src="../assets/biriyani.jpg" alt="Biriyani and cup cake">
            </div>
            <div class="details p-2">
              <div class="name fs-5 fw-bold">
                <span>
                  Saidul Islam
                </span>
              </div>
              <div class="location">
                <span class="icon">
                  <img src="../assets/icon-loaction.png" alt="">
                </span>
                <span class="address">
                  Jatrabari, Dhaka
                </span>
              </div>
              <div class="food-name">
                <span class="icon">
                  <img src="../assets/icon-food.png" alt="">
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
              <img class="img-fluid" src="../assets/biriyani-2.jpg" alt="Biriyani and cup cake">
            </div>
            <div class="details p-2">
              <div class="name fs-5 fw-bold">
                <span>
                  Saidul Islam
                </span>
              </div>
              <div class="location">
                <span class="icon">
                  <img src="../assets/icon-loaction.png" alt="">
                </span>
                <span class="address">
                  Jatrabari, Dhaka
                </span>
              </div>
              <div class="food-name">
                <span class="icon">
                  <img src="../assets/icon-food.png" alt="">
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
              <img class="img-fluid" src="../assets/biriyani-3.jpg" alt="Biriyani and cup cake">
            </div>
            <div class="details p-2">
              <div class="name fs-5 fw-bold">
                <span>
                  Saidul Islam
                </span>
              </div>
              <div class="location">
                <span class="icon">
                  <img src="../assets/icon-loaction.png" alt="">
                </span>
                <span class="address">
                  Jatrabari, Dhaka
                </span>
              </div>
              <div class="food-name">
                <span class="icon">
                  <img src="../assets/icon-food.png" alt="">
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
              <img class="img-fluid" src="../assets/biriyani-4.jpg" alt="Biriyani and cup cake">
            </div>
            <div class="details p-2">
              <div class="name fs-5 fw-bold">
                <span>
                  Saidul Islam
                </span>
              </div>
              <div class="location">
                <span class="icon">
                  <img src="../assets/icon-loaction.png" alt="">
                </span>
                <span class="address">
                  Jatrabari, Dhaka
                </span>
              </div>
              <div class="food-name">
                <span class="icon">
                  <img src="../assets/icon-food.png" alt="">
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
              <img class="img-fluid" src="../assets/biriyani-5.jpg" alt="Biriyani and cup cake">
            </div>
            <div class="details p-2">
              <div class="name fs-5 fw-bold">
                <span>
                  Saidul Islam
                </span>
              </div>
              <div class="location">
                <span class="icon">
                  <img src="../assets/icon-loaction.png" alt="">
                </span>
                <span class="address">
                  Jatrabari, Dhaka
                </span>
              </div>
              <div class="food-name">
                <span class="icon">
                  <img src="../assets/icon-food.png" alt="">
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
              <img class="img-fluid" src="../assets/biriyani-6.jpg" alt="Biriyani and cup cake">
            </div>
            <div class="details p-2">
              <div class="name fs-5 fw-bold">
                <span>
                  Saidul Islam
                </span>
              </div>
              <div class="location">
                <span class="icon">
                  <img src="../assets/icon-loaction.png" alt="">
                </span>
                <span class="address">
                  Jatrabari, Dhaka
                </span>
              </div>
              <div class="food-name">
                <span class="icon">
                  <img src="../assets/icon-food.png" alt="">
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
              <img class="img-fluid" src="../assets/biriyani-7.jpg" alt="Biriyani and cup cake">
            </div>
            <div class="details p-2">
              <div class="name fs-5 fw-bold">
                <span>
                  Saidul Islam
                </span>
              </div>
              <div class="location">
                <span class="icon">
                  <img src="../assets/icon-loaction.png" alt="">
                </span>
                <span class="address">
                  Jatrabari, Dhaka
                </span>
              </div>
              <div class="food-name">
                <span class="icon">
                  <img src="../assets/icon-food.png" alt="">
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
              <img class="img-fluid" src="../assets/biriyani-8.jpg" alt="Biriyani and cup cake">
            </div>
            <div class="details p-2">
              <div class="name fs-5 fw-bold">
                <span>
                  Saidul Islam
                </span>
              </div>
              <div class="location">
                <span class="icon">
                  <img src="../assets/icon-loaction.png" alt="">
                </span>
                <span class="address">
                  Jatrabari, Dhaka
                </span>
              </div>
              <div class="food-name">
                <span class="icon">
                  <img src="../assets/icon-food.png" alt="">
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

        <!-- <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn text-light rounded-pill fw-bold">Load more</button>
          </div>
           -->
      </div>
    </div>
  </section>
  <!-- section 3 -->

  <!-- Footer -->
  <footer>
    <div class="container-fluid p-0">
      <div class="container-fluid border-bottom border-3 border-light top">
        <div class="container">
          <div class="wraper d-flex justify-content-between align-items-center">
            <div class="logo-holder">
              <a href="#">
                <img class="img-fluid" src="../assets/logo-white.png" alt="Cookfinity logo">
              </a>
            </div>

            <div class="social-links d-flex justify-content-between align-items-center">
              <div class="icon me-3 fb">
                <a target="_blank" href="https://www.facebook.com">
                  <img class="img-fluid" src="../assets/facebook-icon.png" alt="facebook icon">
                </a>
              </div>

              <div class="icon me-3 insta">
                <a target="_blank" href="https://www.instagram.com">
                  <img class="img-fluid" src="../assets/instagram-icon.png" alt="instagram icon">
                </a>
              </div>

              <div class="icon yt">
                <a target="_blank" href="https://www.youtube.com">
                  <img class="img-fluid" src="../assets/youtube-icon.png" alt="youtube icon">
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
                  <a href="#" target="_blank"><img class="img-fluid" src="../assets/google-play.png" alt="get app on google play"></a>
                </div>

                <div class="app-store">
                  <a href="#" target="_blank"><img class="img-fluid" src="../assets/app-store.png" alt="get app on app store"></a>
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

  <!-- js script -->
  <script>
    $(document).ready(function() {
      $('.trRemove').remove()
      var cartItemCount = 0;
      $.ajax({
        url: './ajax_generator.php',
        method: "POST",
        data: {
          checkCart: true
        },
        dataType: "JSON",
        success: function(response) {
          var table = document.getElementById('tbody');
          var totalPrice = 0;
          response.forEach(element => {
            cartItemCount += element.quantity
            var tr = document.createElement('tr')
            tr.setAttribute("class", "cart-meal-details fw-bold text-white trRemove")

            var td1 = document.createElement('td')
            td1.setAttribute("class", "cart-meal-img d-flex justify-content-end")
            var img = document.createElement('img')
            img.setAttribute("src", "../images/meals/" + element.image)
            td1.append(img)

            var td2 = document.createElement('td')
            td2.textContent = element.title

            var td3 = document.createElement('td')
            //  td3.textContent = "x 3" 
            td3.innerHTML = "<span> " + element.quantity + " </span>"

            var td4 = document.createElement('td')
            td4.innerHTML = "<span>" + element.price + " tk</span>"


            tr.append(td1)
            tr.append(td2)
            tr.append(td3)
            tr.append(td4)

            table.prepend(tr)
            totalPrice += parseInt(element.price);
          });

          totalPrice += 59;
          $('#totalPrice').text(totalPrice)
          $('#cartItemCount').text(cartItemCount)
        }
      })
    });

    function cartShow() {
      var cartTable = document.getElementById("cartTable");
      cartTable.classList.toggle("showactive");
    }

    function filterMeals(value) {
      window.location.href = './index.php?filterCategory=' + value
    }

    function addToCart(id) {
      $('.trRemove').remove()
      cartItemCount = 0;
      $.ajax({
        url: './ajax_generator.php',
        method: "POST",
        data: {
          addCartItem: true,
          meal_id: id,
        },
        dataType: "JSON",
        success: function(response) {
          var table = document.getElementById('tbody');
          var totalPrice = 0;
          response.forEach(element => {
            cartItemCount += element.quantity
            var tr = document.createElement('tr')
            tr.setAttribute("class", "cart-meal-details fw-bold text-white trRemove")

            var td1 = document.createElement('td')
            td1.setAttribute("class", "cart-meal-img d-flex justify-content-end")
            var img = document.createElement('img')
            img.setAttribute("src", "../images/meals/" + element.image)
            td1.append(img)

            var td2 = document.createElement('td')
            td2.textContent = element.title

            var td3 = document.createElement('td')
            //  td3.textContent = "x 3" 
            td3.innerHTML = "<span> " + element.quantity + " </span>"

            var td4 = document.createElement('td')
            td4.innerHTML = "<span>" + element.price + " tk</span>"


            tr.append(td1)
            tr.append(td2)
            tr.append(td3)
            tr.append(td4)

            table.prepend(tr)
            totalPrice += parseInt(element.price);
          });

          totalPrice += 59;
          $('#totalPrice').text(totalPrice)
          $('#cartItemCount').text(cartItemCount)

        }
      })
    }

    function filterLocation() {
      var city = $('#city').val()
      var location = $('#location').val()
      if (!city || !location) {
        alert("Please select both city and location")
        return;
      }
      window.location.href = "./index.php?city=" + city + "&location=" + location
    }

    function filterByTitle() {
      event.preventDefault();
      var filterTitle = $('#filterTitle').val()
      window.location.href = "./index.php?filterTitle=" + filterTitle
    }
  </script>
  <!-- js script -->
</body>

</html>