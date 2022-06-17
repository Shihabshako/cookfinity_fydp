<?php
include('../functions.php');
$uid = $_SESSION['uid'];
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
                        <li class="nav-item  text-sm-center px-lg-2 me-lg-1 rounded-pill">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item text-sm-center px-lg-2 me-lg-1 rounded-pill">
                            <a class="nav-link" href="costomMeal.php">Customized Meal</a>
                        </li>
                        <li class="nav-item active text-sm-center px-lg-2 me-lg-1 rounded-pill">
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

    <section class="container" style="margin: 131px 140px;">
        <div class="row">
            <div class="col-md-8 offset-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Homecook</th>
                            <th>Offered Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $allRequests = getAllResponsesForConsumer($uid);
                        foreach ($allRequests as $item) {
                            $responsePerRequest = responsePerRequest($item['id']);
                            $rowCount = mysqli_num_rows($responsePerRequest);
                            if ($rowCount > 0) {
                                foreach ($responsePerRequest as $item) {
                        ?>
                                    <tr>
                                        <td><?= $item['timestamp'] ?></td>
                                        <td><?= $item['meal_title'] ?></td>
                                        <td><?= $item['full_name'] ?></td>
                                        <td><?= $item['price'] ?></td>
                                        <td>
                                            <button onclick="checkoutReq(<?= $item['id'] ?>, <?= $item['price'] ?>)" class="btn btn-success">Confirm</button>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td><?= $item['timestamp'] ?></td>
                                    <td><?= $item['meal_title'] ?></td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>
                                        <button class="btn btn-warning disabled">No Response</button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


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
        function goCheckout(price) {
            window.location.href = './checkout.php?price=' + price
        }

        function checkoutReq(responseId, price) {
            if (confirm('Are you sure to confirm and checkout?')) {
                window.location.href = `checkout.php?responseId=${responseId}&price=${price}`
            }
        }
    </script>
    <!-- js script -->
</body>

</html>