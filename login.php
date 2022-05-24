<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cookfinity Bangladesh</title>

    <!-- Bootstarp CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstarp CDN -->

    <!-- Google Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <!-- Google Icons CDN -->

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
  <?php
  include_once('./functions.php');
  show_sweet_alert('loginTry', '', 'Wrong credential for login, Please try again', '', '', '');
  show_sweet_alert('waitAdminApprove', '', 'Wrong credential for login, Please try again', '', 'Please wait for admin approval', '');
?>
  <!-- Header -->
  <header>
      <nav class="navbar navbar-expand-lg navigation-wraper p-0">
          <div class="container px-0">
            <a class="navbar-brand p-0" href="index.php">
              <img src="assets/NoPath - Copy (12).png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="material-icons-sharp">
                  menu
                  </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-sm-auto  text-sm-center px-2 me-lg-1 rounded-pill">
                  <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item mx-sm-auto  text-sm-center px-2 me-lg-1  rounded-pill">
                  <a class="nav-link" href="becomeCook.php">Become a cook</a>
                </li>
                <li class="nav-item mx-sm-auto  text-sm-center px-2 me-lg-1 rounded-pill">
                  <a class="nav-link" href="consumer/custommeal.php">Customized Meal</a>
                </li>
                <li class="nav-item mx-sm-auto  text-sm-center px-2 me-lg-1 rounded-pill">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item mx-sm-auto  text-sm-center px-2 me-lg-1 rounded-pill">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item mx-sm-auto  active text-sm-center px-2 rounded-pill">
                  <a class="nav-link" href="login.php">Login/Signup</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
  </header>
  <!-- Header -->

  <!-- Log In Section -->
  <section>
    <div class="container-fluid bg-img login-box d-flex align-items-center justify-content-center">
      <div class="container py-5">
        <div class="row">
          <div class="col-10 col-md-7 col-lg-5  bg-light p-5 ms-5 form-holder shadow">
            <div class="text text-center mb-3">
              <h1>Log In</h1>
              <!-- <p>Welcome back, <span class="text-green">@Username</span></p> -->
            </div>
            <div class="form-wraper">
              <form action="verifyUser.php" method="POST">
                <div class="mb-3">
                  <input type="email" placeholder="Email" class="form-control rounded-pill" name="email" required >
                </div>
                <div class="mb-2">
                  <input type="password" placeholder="Password" class="form-control rounded-pill" name="password" required>
                </div>
                <div class="mb-2 text-end">
                  <a class="text-mute" href="forgotpass.php">Forgot Password?</a>
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn d-block container-fluid rounded-pill fw-bold">LogIn</button>
                </div>
                <div class="text-center ">
                  <span class="text-mute fw-bold">Not a member?</span> <a href="signup.php" class="text-green fw-bold">Sign Up</a>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Log In Section -->

  <!-- bootstrap js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- bootstrap js CDN -->
</body>
</html>