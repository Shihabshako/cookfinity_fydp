<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp | Cookfinity Bangladesh</title>

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
    <link rel="stylesheet" href="css/signup.css" />
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
                <a class="nav-link" aria-current="page" href="index.html"
                  >Home</a
                >
              </li>
              <li
                class="nav-item mx-sm-auto text-sm-center px-2 me-lg-1 rounded-pill"
              >
                <a class="nav-link" href="#">Become a cook</a>
              </li>
              <li
                class="nav-item mx-sm-auto text-sm-center px-2 me-lg-1 rounded-pill"
              >
                <a class="nav-link" href="#">Customized Meal</a>
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
              <li
                class="nav-item mx-sm-auto active text-sm-center px-2 rounded-pill"
              >
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
        class="container-fluid bg-img login-box d-flex align-items-center justify-content-center"
      >
        <div class="container">
          <div class="row">
            <div
              class="col-10 col-md-8 col-lg-6 p-4 bg-light form-holder shadow"
            >
              <div class="text text-center mb-3 fw-bold text-mute">
                <h1 class="text-mute">Sign Up</h1>
                <span>Hello There...</span>
              </div>
              <form action="registerUser.php" method="POST">
                <input type="hidden" name="userType" value="Consumer" />
                <div
                  class="container-fluid d-flex justify-content-between signup-wraper p-0"
                >
                  <div class="left-side col-6 pe-2">
                    <div class="mb-3">
                      <input
                        type="text"
                        class="form-control rounded-pill"
                        placeholder="Full Name"
                        name="full_name"
                        required
                      />
                    </div>

                    <div
                      class="input-group username mb-3 rounded-pill overflow-hidden"
                    >
                      <span
                        class="input-group-text text-light fw-bold"
                        id="basic-addon1"
                        >+880</span
                      >
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Phone Number"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        name="phone_number"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <textarea
                        class="form-control"
                        rows="2"
                        placeholder="address"
                        name="address"
                        required
                      ></textarea>
                    </div>
                  </div>
                  <div class="right-side col-6 ps-2">
                    <div class="mb-3">
                      <input
                        type="email"
                        class="form-control rounded-pill"
                        placeholder="Email"
                        name="email"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <input
                        type="password"
                        class="form-control rounded-pill"
                        placeholder="Password"
                        name="password"
                        id="password"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <input
                        type="password"
                        class="form-control rounded-pill"
                        onkeyup="matchPassword(this.value)"
                        placeholder="Confirm Password"
                        id="confirm_password"
                        required
                      />
                    </div>
                    <span id="passwordMatch"></span>
                    <div class="mb-3">
                      <button
                        type="submit"
                        class="btn btn-primary d-block w-100 rounded-pill fw-bold"
                      >
                        Submit
                      </button>
                    </div>
                    <div class="mb-3 text-end pe-3">
                      <p class="text-mute">
                        Already a member?
                        <span
                          ><a class="text-green" href="login.php"
                            >Log In</a
                          ></span
                        >
                      </p>
                    </div>
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
