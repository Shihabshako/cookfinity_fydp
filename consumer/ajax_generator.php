<?php
    include('../functions.php');

    if(isset($_POST['addCartItem'])){

        $meal_id = $_POST['meal_id'];
        $_SESSION['cartItem'][] = $meal_id;
        $meals = array_count_values($_SESSION['cartItem']);
        $cartItems = array();

        foreach ($meals as $key => $value) {
           $mealDetails = getMealDetails($key);
           $mealDetails['quantity'] = (int)$value;
           $mealDetails['price'] = (int)$value * (int)$mealDetails['price'];
           $cartItems[] = $mealDetails;
        }

        print_r(json_encode($cartItems));
        return;
    }
    if(isset($_POST['checkCart'])){
        $meals = array_count_values($_SESSION['cartItem']);
        $cartItems = array();

        foreach ($meals as $key => $value) {
           $mealDetails = getMealDetails($key);
           $mealDetails['quantity'] = (int)$value;
           $mealDetails['price'] = (int)$value * (int)$mealDetails['price'];
           $cartItems[] = $mealDetails;
        }

        print_r(json_encode($cartItems));
        return;
    }

?>