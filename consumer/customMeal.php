<?php
include('../functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customized Meal</title>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <!-- Bootstarp CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstarp CDN -->

  <!-- Google Icons CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
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
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="material-icons-sharp">
            menu
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item  text-sm-center px-lg-2 me-lg-1 rounded-pill">
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item active text-sm-center px-lg-2 me-lg-1 rounded-pill">
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
          <form class="col-10 col-md-8 col-lg-7 bg-light form-holder shadow">
            <div class="text text-center mb-4 mt-3 fw-bold text-mute">
              <h1>Customized Meal Requested</h1>
            </div>
            <div class="container-fluid cook p-md-3 p-0">
              <div class="mb-3">
                <input type="text" id="title" class="form-control rounded-pill" placeholder="Meal Title" required>
              </div>

              <div class="mb-3">
                <select name="category" class="rounded-pill text-light fw-bold" id="category" required>
                  <option selected disabled>Meal Category</option>
                  <?php
                  $all_data = settingsVariablesValues('category');
                  while ($data = mysqli_fetch_array($all_data)) {
                  ?>
                    <option value="<?= $data['id'] ?>"><?= $data['value'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <div class="mb-3">
                <input type="number" id="quantity" class="form-control rounded-pill" placeholder="Quantity" required>
              </div>

              <div class="mb-3">
                <input type="date" id="date" class="form-control rounded-pill" placeholder="Date and Time" required>
              </div>


              <div class="mb-3">
                <select name="spice_level" class="rounded-pill text-light fw-bold" id="spice_level" required>
                  <option value="none" selected disabled>Spice level</option>
                  <?php
                  $all_data = settingsVariablesValues('customize_level');
                  while ($data = mysqli_fetch_array($all_data)) {
                  ?>
                    <option value="<?= $data['id'] ?>"><?= $data['value'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <div class="mb-3">
                <select name="oil_level" class="rounded-pill text-light fw-bold" id="oil_level" required>
                  <option value="none" selected disabled>Oil level</option>
                  <?php
                  $all_data = settingsVariablesValues('customize_level');
                  while ($data = mysqli_fetch_array($all_data)) {
                  ?>
                    <option value="<?= $data['id'] ?>"><?= $data['value'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <div class="mb-3">
                <select name="sugar_level" class="rounded-pill text-light fw-bold" id="sugar_level" required>
                  <option value="none" selected disabled>Sugar level</option>
                  <?php
                  $all_data = settingsVariablesValues('customize_level');
                  while ($data = mysqli_fetch_array($all_data)) {
                  ?>
                    <option value="<?= $data['id'] ?>"><?= $data['value'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <div class="mb-3">
                <select name="salt_level" class="rounded-pill text-light fw-bold" id="salt_level" required>
                  <option value="none" selected disabled>Salt level</option>
                  <?php
                  $all_data = settingsVariablesValues('customize_level');
                  while ($data = mysqli_fetch_array($all_data)) {
                  ?>
                    <option value="<?= $data['id'] ?>"><?= $data['value'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <div class="mb-3 add-ons">
                <textarea class="form-control h-100" id="add_ons" rows="2" placeholder="Add Ons" required></textarea>
              </div>

              <div class="mb-3">
                <input type="text" id="is_allergy" class="form-control rounded-pill" placeholder="Specific Item to Allergy" required>
              </div>

              <div class="mb-3">
                <button id="modalbtn" type="submit" class="btn btn-primary d-block rounded-pill fw-bold w-100">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- Requested Section -->

      <!-- Submitted Section -->
      <dialog id="modal" class="shadow p-4 mx-auto text-center border-0">
        <div class="text_part text-mute fw-bold mb-3">
          <h1 class="text-mute-dark fw-bold">Request Submitted</h1>
          <p>Your customized meal request has been submitted. Kindly wait for home cook to respond.</p>
        </div>
        <div class="d-flex justify-content-around">
          <button type="button" onclick="window.location.href='./customMeal.php'" class="btn text-light px-3 rounded-pill fw-bold">Request Another</button>
          <button type="button" onclick="window.location.href='./myRequests.php'" class="btn text-light px-3 rounded-pill fw-bold">View Requests</button>

        </div>
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
      event.preventDefault();
      modal.showModal();

      // $.ajax({
      //   url: './ajax_generator.php',
      //   method: "POST",
      //   data: {
      //     addCustomRequest: true,
      //     title: $('#title').val(),
      //     category: $('#category').val(),
      //     quantity: $('#quantity').val(),
      //     date: $('#date').val(),
      //     spice_level: $('#spice_level').val(),
      //     oil_level: $('#oil_level').val(),
      //     sugar_level: $('#sugar_level').val(),
      //     salt_level: $('#salt_level').val(),
      //     add_ons: $('#add_ons').val(),
      //     is_allergy: $('#is_allergy').val(),
      //   },
      //   dataType: "TEXT",
      //   success: function(response) {
      //     if (response == 'success') {
      //       modal.showModal();
      //     }
      //   }
      // })
    });

    closeModal.addEventListener("click", () => {
      modal.close();
    });
  </script>

</body>

</html>