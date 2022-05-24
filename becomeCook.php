<?php
   require_once('./functions.php');
   $cities = getAllRecordFromTable('cities');
   $locations = getAllRecordFromTable('locations');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Become a cook | Cookfinity Bangladesh</title>

    <!-- Bootstarp CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- Bootstarp CDN -->

    <!-- Google Icons CDN -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <!-- Google Icons CDN -->

    <!-- style-sheet -->
    <link rel="stylesheet" href="css/becomeacook.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- style-sheet -->
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-lg navigation-wraper p-0">
        <div class="container px-0">
          <a class="navbar-brand p-0" href="#">
            <img src="assets/NoPath - Copy (12).png" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="material-icons-sharp"> menu </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li
                class="nav-item mx-sm-auto text-sm-center px-2 me-lg-1 rounded-pill"
              >
                <a class="nav-link" aria-current="page" href="index.php"
                  >Home</a
                >
              </li>
              <li
                class="nav-item mx-sm-auto active text-sm-center px-2 me-lg-1 rounded-pill"
              >
                <a class="nav-link" href="becomeCook.php">Become a cook</a>
              </li>
              <li
                class="nav-item mx-sm-auto text-sm-center px-2 me-lg-1 rounded-pill"
              >
                <a class="nav-link" href="consumer/customMeal.php"
                  >Customized Meal</a
                >
              </li>
              <li
                class="nav-item mx-sm-auto text-sm-center px-2 me-lg-1 rounded-pill"
              >
                <a class="nav-link" href="#">About</a>
              </li>
              <li
                class="nav-item mx-sm-auto text-sm-center px-2 me-lg-1 rounded-pill"
              >
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item mx-sm-auto text-sm-center px-2 rounded-pill">
                <a class="nav-link" href="login.php">Login/Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Header -->

    <!-- Sign Up Section -->
    <section>
      <div
        class="container-fluid bg-img cooking-form d-flex align-items-center justify-content-center"
      >
        <div class="container py-3">
          <div class="row">
            <div
              class="col-10 col-md-8 col-lg-6 pt-lg-0 pt-md-5 bg-light form-holder shadow"
            >
              <div class="text text-center mb-3 mt-3 fw-bold text-mute">
                <h1>Become a cook</h1>
              </div>
              <form action="registerUser.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="userType" value="Homecook">
                <div class="container-fluid cook px-md-3 px-1">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control rounded-pill"
                      name="full_name"
                      placeholder="Full Name"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control rounded-pill"
                      name="company_name"
                      placeholder="Company Name"
                      required
                    />
                  </div>

                  <!-- Custom File Choosing Option -->

                  <div class="mb-3 file-upload-wraper" data-text="Your Image">
                    <input
                      type="file"
                      name="own_image"
                      
                      class="rounded-pill form-control file-upload-field"
                    />
                  </div>

                  <div class="mb-3 file-upload-wraper" data-text="Your Image">
                    <input
                      type="file"
                      name="company_image"
                      
                      class="rounded-pill form-control file-upload-field"
                    />
                  </div>
                  <div
                    class="input-group phone-number mb-3 rounded-pill overflow-hidden"
                  >
                    <span
                      class="input-group-text text-light fw-bold"
                      id="basic-addon1"
                      >+880</span
                    >
                    <input
                      type="number"
                      class="form-control"
                      placeholder="Phone Number"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      name="phone_number"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control rounded-pill"
                      name="email"
                      placeholder="Email"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <select
                      name="city"
                      class="rounded-pill text-light fw-bold"
                      id="city"
                      required
                    >
                       <option value="" disabled selected>Select city</option>
                      <?php 
                        foreach($cities AS $city){
                          ?>
                            <option value="<?= $city['id'] ?> "><?= $city['city_name'] ?></option>
                          <?php
                        }
                      ?>
                    </select>
                  </div>

                  <div class="mb-3">
                    <select
                      name="location"
                      class="rounded-pill text-light fw-bold"
                      id="location"
                      required
                    >
                     <option value="" disabled selected>Select location</option>
                      <?php 
                        foreach($locations AS $location){
                          ?>
                            <option value="<?= $location['id'] ?> "><?= $location['location_name'] ?></option>
                          <?php
                        }
                      ?>
                    </select>
                  </div>

                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control rounded-pill"
                      name="pickup_location"
                      placeholder="Pick Up Location"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <input
                      type="number"
                      class="form-control rounded-pill"
                      name="nid_number"
                      placeholder="NID Number"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <input
                      type="password"
                      class="form-control rounded-pill"
                      id="password"
                      name="password"
                      placeholder="Password"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <input
                      type="password"
                      class="form-control rounded-pill"
                      onkeyup="matchPassword(this.value)"
                      placeholder="Confirm Password"
                      required
                    />
                  </div>
                  <span id="passwordMatch"></span>
                  <div class="mb-3 full-row">
                    <button
                      type="submit"
                      class="btn btn-primary d-block rounded-pill fw-bold"
                    >
                      Submit
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Sign Up Section -->

    <!-- bootstrap js CDN -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap js CDN -->

    <!-- JQuery CDN -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <!-- JQuery CDN -->

    <!-- JS File -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <!-- JS File -->
  </body>
</html>
