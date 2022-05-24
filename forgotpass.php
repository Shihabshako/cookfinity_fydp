<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstarp CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstarp CDN -->

    <!-- Google Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <!-- Google Icons CDN -->

    <link rel="stylesheet" href="css/forgot.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
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
                  <a class="nav-link" href="becomecook.php">Become a cook</a>
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

  <!-- Log In Body -->
  <section>
    <div class="container-fluid bg-img forgot-box d-flex align-items-center justify-content-center">
        
      <!-- Forgot Password Section -->
      <div class="container " id="forgot_pass">
        <div class="row">
          <div class="col-lg-4 col-md-7 col-10 bg-light shadow p-5 forgot_pass text-center">
            <h1 class="text-mute-dark fw-bold mb-5">Forgot Password</h1>

            <form>
              <div class="mb-4">
                <input type="email" placeholder="Email" class="form-control rounded-pill" id="exampleInputEmail2">
              </div>

              <div class="mb-2">
                <button type="submit" class="form-control btn d-block container-fluid rounded-pill fw-bold">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Forgot Password Section -->
    </div>
  </section>
  <!-- Log In Body -->

  <!-- bootstrap js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- bootstrap js CDN -->
</body>
</html>