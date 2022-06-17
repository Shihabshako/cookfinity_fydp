<?php
include('../functions.php');

if (isset($_POST['addCartItem'])) {

    $meal_id = $_POST['meal_id'];
    $_SESSION['cartItem'][] = $meal_id;
    $meals = array_count_values($_SESSION['cartItem']);
    $cartItems = array();

    foreach ($meals as $key => $value) {
        $mealDetails = getMealDetails($key);
        $mealDetails['quantity'] = (int)$value;
        $mealDetails['unitPrice'] = $mealDetails['price'];
        $mealDetails['price'] = (int)$value * (int)$mealDetails['price'];
        $cartItems[] = $mealDetails;
    }

    $_SESSION['viewCart'] = $cartItems;

    print_r(json_encode($cartItems));
    return;
}
if (isset($_POST['checkCart'])) {
    $meals = array_count_values($_SESSION['cartItem']);
    $cartItems = array();

    foreach ($meals as $key => $value) {
        $mealDetails = getMealDetails($key);
        $mealDetails['quantity'] = (int)$value;
        $mealDetails['unitPrice'] = $mealDetails['price'];
        $mealDetails['price'] = (int)$value * (int)$mealDetails['price'];
        $cartItems[] = $mealDetails;
    }

    $_SESSION['viewCart'] = $cartItems;

    print_r(json_encode($cartItems));
    return;
}

if (isset($_POST['addCustomRequest'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    $spice_level = $_POST['spice_level'];
    $oil_level = $_POST['oil_level'];
    $sugar_level = $_POST['sugar_level'];
    $salt_level = $_POST['salt_level'];
    $add_ons = $_POST['add_ons'];
    $is_allergy = $_POST['is_allergy'];
    $uid = $_SESSION['uid'];

    $query = "INSERT INTO `requests`(`meal_title`,`requested_by_uid`, `category_id`, `quantity`, `delivery_time`, `spice_level`, `oil_level`, `sugar_level`, `salt_level`, `add_ons`, `is_allergy`) VALUES ('$title', $uid, $category, $quantity, '$date', $spice_level, $oil_level, $sugar_level, $salt_level, '$add_ons', '$is_allergy')";

    if (mysqli_query($con, $query)) {
        echo "success";
    } else {
        echo "error";
    }
    return;
}
