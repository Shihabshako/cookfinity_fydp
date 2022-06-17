<?php
include('../functions.php');
$uid = $_GET['uid'];
$userDetails = getSingleTableRecord('users', 'id', $uid);
$uid = $userDetails['id'];
$address = $userDetails['address'];
$phone_number = $userDetails['phone_number'];
$max_order_id = get_max_id_for_add('orders');




$val_id = urlencode($_POST['val_id']);
$store_id = urlencode("cookf62a4bed5cc332");
$store_passwd = urlencode("cookf62a4bed5cc332@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=" . $val_id . "&store_id=" . $store_id . "&store_passwd=" . $store_passwd . "&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if ($code == 200 && !(curl_errno($handle))) {

    # TO CONVERT AS ARRAY
    # $result = json_decode($result, true);
    # $status = $result['status'];

    # TO CONVERT AS OBJECT
    $result = json_decode($result);

    # TRANSACTION INFO
    $status = $result->status;
    $tran_date = $result->tran_date;
    $tran_id = $result->tran_id;
    $val_id = $result->val_id;
    $amount = $result->amount;
    $store_amount = $result->store_amount;
    $bank_tran_id = $result->bank_tran_id;
    $card_type = $result->card_type;

    # EMI INFO
    $emi_instalment = $result->emi_instalment;
    $emi_amount = $result->emi_amount;
    $emi_description = $result->emi_description;
    $emi_issuer = $result->emi_issuer;

    # ISSUER INFO
    $card_no = $result->card_no;
    $card_issuer = $result->card_issuer;
    $card_brand = $result->card_brand;
    $card_issuer_country = $result->card_issuer_country;
    $card_issuer_country_code = $result->card_issuer_country_code;

    # API AUTHENTICATION
    $APIConnect = $result->APIConnect;
    $validated_on = $result->validated_on;
    $gw_version = $result->gw_version;





    // storing data in order table
    $query = "INSERT INTO `orders`(`id`,`ordered_by_uid`, `address`, `phone_number`) VALUES ($max_order_id,$uid, '$address', '$phone_number' )";
    mysqli_query($con, $query);

    if (isset($_GET['responseId'])) {
        $responseID = $_GET['responseId'];
        $statusResponseAccepted = settingsVariablesValueId('response_status', 'Accepted');
        $statusResponseRejected = settingsVariablesValueId('response_status', 'Rejected');
        $customReqStatus = settingsVariablesValueId('custom_request_status', 'accepted');


        $requestId = getSingleTableRecord('responses', 'id', $responseID);
        $requestId = $requestId['request_id'];

        $allResponseForUpdate = mysqli_query($con, "SELECT * FROM responses WHERE request_id=$requestId");

        foreach ($allResponseForUpdate as $item) {
            $id = $item['id'];
            if ($id == $responseID) {
                mysqli_query($con, "UPDATE responses SET status=$statusResponseAccepted WHERE id=$responseID");
            } else {
                mysqli_query($con, "UPDATE responses SET status=$statusResponseRejected WHERE id=$id");
            }
        }
        mysqli_query($con, "UPDATE requests SET status=$customReqStatus WHERE id=$requestId");
    } else {
        $cartItems = $_GET['cartItems'];
        $cartItems = array_count_values($cartItems);
        //inserting data in distributed order table
        foreach ($cartItems as $key => $value) {
            $meal_id = $key;
            $quantity = $value;
            $query = "INSERT INTO `distributed_orders`(`order_id`, `meal_id`, `quantity`) VALUES ($max_order_id, $meal_id, $quantity )";
            mysqli_query($con, $query);
        }
    }

    // inserting data into payment table
    $query = "INSERT INTO `payments`(`order_id`, `tnxID`, `date`, `status`, `card_type`, `amount`) VALUES ($max_order_id, '$tran_id', '$tran_date', '$status', '$card_type', '$amount')";
    mysqli_query($con, $query);

    //storing back session data
    $_SESSION['cartItem'] = array();
    $_SESSION['email'] = $userDetails['email'];
    $_SESSION['uid'] = $userDetails['id'];

    //redirecting to home page
    header('location: ./index.php');
} else {

    echo "Failed to connect with SSLCOMMERZ";
}
