<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customized Meal</title>

    <!-- Bootstarp CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstarp CDN -->

    <!-- Google Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <!-- Google Icons CDN -->

    <!-- style-sheet -->
    <link rel="stylesheet" href="../css/customizedmeal.css">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="material-icons-sharp">
                  menu
                  </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-sm-auto  text-sm-center px-2 me-lg-1 rounded-pill">
                  <a class="nav-link " aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item mx-sm-auto text-sm-center px-2 me-lg-1  rounded-pill">
                  <a class="nav-link" href="../becomecook.php">Become a cook</a>
                </li>
                <li class="nav-item mx-sm-auto active text-sm-center px-2 me-lg-1 rounded-pill">
                  <a class="nav-link" href="#">Customized Meal</a>
                </li>
                <li class="nav-item mx-sm-auto  text-sm-center px-2 me-lg-1 rounded-pill">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item mx-sm-auto  text-sm-center px-2 me-lg-1 rounded-pill">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item mx-sm-auto  text-sm-center px-2 rounded-pill">
                  <a class="nav-link" href="../login.php">Login/Signup</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
  </header>
  <!-- Header -->

  <!-- Customized Meal Request Section -->
  <section>
    <div class="container-fluid bg-img login-box d-flex align-items-center justify-content-center">
      <!-- Requested Section -->
      <div class="container py-3">
        <div class="row">
          <div class="col-10 col-md-8 col-lg-7 bg-light form-holder shadow">
            <div class="text text-center mb-4 mt-3 fw-bold text-mute">
              <h1>Customized Meal Requested</h1>
            </div>
            <div class="container-fluid cook p-md-3 p-0">
              <div class="mb-3">
                <input type="text" class="form-control rounded-pill" placeholder="Meal Title">
              </div>

              <div class="mb-3">
                <select name="city" class="rounded-pill text-light fw-bold" id="city">
                  <option selected>Meal Catagory</option>
                  <option value="Fast Food">Fast Food</option>
                  <option value="Drinks">Drinks</option>
                  <option value="Snacks">Snacks</option>
                </select>
              </div>

              <div class="mb-3">
                <input type="number" class="form-control rounded-pill" placeholder="Quantity">
              </div>

              <div class="mb-3">
                <input type="date" class="form-control rounded-pill" placeholder="Date and Time">
              </div>


              <div class="mb-3">
                <select name="location" class="rounded-pill text-light fw-bold" id="location">
                  <option value="none" selected>Spice level</option>
                  <option value="saab">Sadar</option>
                  <option value="opel">Naldanga</option>
                  <option value="audi">Bonpara</option>
                </select>
              </div>
              
              <div class="mb-3">
                <select name="location" class="rounded-pill text-light fw-bold" id="location">
                  <option value="none" selected>Oil level</option>
                  <option value="saab">Sadar</option>
                  <option value="opel">Naldanga</option>
                  <option value="audi">Bonpara</option>
                </select>
              </div>
              
              <div class="mb-3">
                <select name="location" class="rounded-pill text-light fw-bold" id="location">
                  <option value="none" selected>Sugar level</option>
                  <option value="saab">Sadar</option>
                  <option value="opel">Naldanga</option>
                  <option value="audi">Bonpara</option>
                </select>
              </div>
              
              <div class="mb-3">
                <select name="location" class="rounded-pill text-light fw-bold" id="location">
                  <option value="none" selected>Salt level</option>
                  <option value="saab">Sadar</option>
                  <option value="opel">Naldanga</option>
                  <option value="audi">Bonpara</option>
                </select>
              </div>

              <div class="mb-3 add-ons">
                <textarea class="form-control h-100" id="exampleFormControlTextarea1" rows="2" placeholder="Add Ons"></textarea>
              </div>
              
              <div class="mb-3">
                <input type="text" class="form-control rounded-pill" id="exampleFormControlInput1" placeholder="Specific Item to Allergy">
              </div>

              <div class="mb-3">
                <button id="modalbtn" type="submit" class="btn btn-primary d-block rounded-pill fw-bold w-100">Submit</button>
            </div>
            </div>
        </div>
        </div>
      </div>
      <!-- Requested Section -->

      <!-- Submitted Section -->
      <dialog id="modal" class="shadow p-4 mx-auto text-center border-0">
          <div class="close_btn d-flex align-items-center justify-content-end">
            <span id="closebtn" class="material-icons-sharp">
              close
            </span>
          </div>
          <div class="text_part text-mute fw-bold mb-3">
            <h1 class="text-mute-dark fw-bold">Request Submitted</h1>
            <p>Your customized meal request has been submitted. Kindly wait for home cook to respond.</p>
          </div>
          <button type="button" class="btn text-light px-5 rounded-pill fw-bold">Request Another Meal</button>
      </dialog>
      <!-- Submitted Section -->

    </div>
  </section>
  <!-- Customized Meal Request Section -->



<!-- bootstrap js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- bootstrap js CDN -->

<!-- JS Script -->
<script>

const modal = document.querySelector("#modal");
const openModal = document.querySelector("#modalbtn");
const closeModal = document.querySelector("#closebtn");

openModal.addEventListener("click", () => {
  modal.showModal();
});

closeModal.addEventListener("click", () => {
  modal.close();
});
  </script>

</body>
</html>