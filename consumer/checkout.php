<?php
/* PHP */
include('../functions.php');
$userDetails = getSingleTableRecord('users', 'id', $_SESSION['uid']);
$cartItems = $_SESSION['cartItem'];

$uid = $userDetails['id'];
$email = $userDetails['email'];

// print_r($_SESSION['cartItem']);

$cartItems = http_build_query(array('cartItems' => $cartItems));

// parse_str($cartItems, $output);
// print_r(json_encode($output));

// header('location: ./success.php?' . $cartItems);

$post_data = array();
$post_data['store_id'] = "cookf62a4bed5cc332";
$post_data['store_passwd'] = "cookf62a4bed5cc332@ssl";
$post_data['total_amount'] = $_GET['price'];
$post_data['currency'] = "BDT";
$post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();
if (isset($_GET['responseId'])) {
    $responseID = $_GET['responseId'];
    $post_data['success_url'] = "http://localhost:81/cookfinity_fydp/consumer/success.php?responseId=" . $responseID . "&uid=" . $uid;
} else {
    $post_data['success_url'] = "http://localhost:81/cookfinity_fydp/consumer/success.php?uid=" . $uid . "&" . $cartItems;
}
$post_data['fail_url'] = "http://localhost:81/cookfinity_fydp/consumer/fail.php";
$post_data['cancel_url'] = "http://localhost:81/cookfinity_fydp/consumer/index.php";
# $post_data['multi_card_name'] = "mastercard,visacard,amexcard"; # DISABLE TO DISPLAY ALL AVAILABLE

# EMI INFO
$post_data['emi_option'] = "1";
$post_data['emi_max_inst_option'] = "9";
$post_data['emi_selected_inst'] = "9";

# CUSTOMER INFORMATION
$post_data['cus_name'] = $userDetails['full_name'];
$post_data['cus_email'] = $userDetails['email'];
$post_data['cus_add1'] = $userDetails['address'];
$post_data['cus_add2'] = "Dhaka";
$post_data['cus_city'] = "Dhaka";
$post_data['cus_state'] = "Dhaka";
$post_data['cus_postcode'] = "1000";
$post_data['cus_country'] = "Bangladesh";
$post_data['cus_phone'] = $userDetails['phone_number'];
$post_data['cus_fax'] = "01711111111";

# SHIPMENT INFORMATION
$post_data['ship_name'] = "testcookfieyd";
$post_data['ship_add1 '] = "Dhaka";
$post_data['ship_add2'] = "Dhaka";
$post_data['ship_city'] = "Dhaka";
$post_data['ship_state'] = "Dhaka";
$post_data['ship_postcode'] = "1000";
$post_data['ship_country'] = "Bangladesh";

# OPTIONAL PARAMETERS
$post_data['value_a'] = $cartItems;
$post_data['value_b '] = $uid;
$post_data['value_c'] = "ref003";
$post_data['value_d'] = "ref004";

# CART PARAMETERS
$post_data['cart'] = json_encode($cartItems);
$post_data['product_amount'] = "100";
$post_data['vat'] = "5";
$post_data['discount_amount'] = "5";
$post_data['convenience_fee'] = "3";



# REQUEST SEND TO SSLCOMMERZ
$direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $direct_api_url);
curl_setopt($handle, CURLOPT_TIMEOUT, 30);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


$content = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if ($code == 200 && !(curl_errno($handle))) {
    curl_close($handle);
    $sslcommerzResponse = $content;
} else {
    curl_close($handle);
    echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
    exit;
}

# PARSE THE JSON RESPONSE
$sslcz = json_decode($sslcommerzResponse, true);

if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != "") {
    # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
    # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
    echo "<meta http-equiv='refresh' content='0;url=" . $sslcz['GatewayPageURL'] . "'>";
    # header("Location: ". $sslcz['GatewayPageURL']);



    exit;
} else {
    echo "JSON Data parsing error!";
}
