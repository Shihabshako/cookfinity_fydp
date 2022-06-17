<?php
// 1 week = 604800 seconds
// server should keep session data for exactly (or at least) 1 week
ini_set('session.gc_maxlifetime', 604800);

// each client should remember their session id for EXACTLY 1 week
session_set_cookie_params(604800);
session_start();
include_once('dbConfig.php');

$db_host = constant('DB_HOST');
$db_user = constant('DB_USERNAME');
$db_password = constant('DB_PASSWORD');
$db_name = constant('DB_NAME');

$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
mysqli_set_charset($con, "utf8");

function get_max_id_for_add($table_name)
{
    $con = $GLOBALS['con'];
    $query = "SELECT MAX(id) FROM $table_name";
    $id = mysqli_fetch_array(mysqli_query($con, $query));
    $id = $id['MAX(id)'];
    $id = intval($id) + 1;
    return $id;
}

function settingsVariablesValueId($variable, $value)
{
    global $con;
    $query = "SELECT * FROM settings_vars AS sv JOIN settings_vars_variables AS svv ON sv.id=svv.var_id WHERE sv.value='$variable' AND svv.value='$value'";
    $result = mysqli_fetch_array(mysqli_query($con, $query));
    return $result['id'];
}

function settingsVariablesValues($variable)
{
    global $con;
    $query = "SELECT svv.* FROM settings_vars AS sv JOIN settings_vars_variables AS svv ON sv.id=svv.var_id WHERE sv.value='$variable'";
    return mysqli_query($con, $query);
}

function settingsVariablesValuesPerId($id)
{
    global $con;
    $query = "SELECT * FROM settings_vars_variables WHERE id=$id";
    $result = mysqli_fetch_array(mysqli_query($con, $query));
    return $result['value'];
}

function getAllRecordFromTable($tableName)
{
    global $con;
    $query = "SELECT * FROM $tableName";
    return mysqli_query($con, $query);
}

function getApprovalStatus($userId)
{
    global $con;
    $query = "SELECT svv.value FROM approvals AS ap JOIN users AS us ON ap.user_id = us.id JOIN settings_vars_variables AS svv ON ap.status = svv.id WHERE us.id = $userId";
    $result = mysqli_fetch_array(mysqli_query($con, $query));
    return $result['value'];
}

function getSingleTableRecord($tableName, $columnName, $value)
{
    $con = $GLOBALS['con'];
    $query = "SELECT * FROM $tableName WHERE $columnName='$value'";
    return mysqli_fetch_array(mysqli_query($con, $query));
}

function getUserNameById($uid)
{
    $con = $GLOBALS['con'];
    $query = "SELECT * FROM users WHERE id='$uid'";
    $result = mysqli_fetch_array(mysqli_query($con, $query));
    return $result['full_name'];
}

function show_sweet_alert($session_name, $msg_success, $msg_error, $msg_warning, $msg_info, $msg_qstn)
{
    if (isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'success') {
        unset($_SESSION[$session_name]);
        echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'success',
                    title:'" . $msg_success . "'
                    })</script>";
    } else if (isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'error') {
        unset($_SESSION[$session_name]);
        echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'error',
                    title:'" . $msg_error . "'
                    })</script>";
    } else if (isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'warning') {
        unset($_SESSION[$session_name]);
        echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'warning',
                    title:'" . $msg_warning . "'
                    })</script>";
    } else if (isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'info') {
        unset($_SESSION[$session_name]);
        echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'info',
                    title:'" . $msg_info . "'
                    })</script>";
    } else if (isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'qstn') {
        unset($_SESSION[$session_name]);
        echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'question',
                    title:'" . $msg_qstn . "'
                    })</script>";
    }
}

function getApprovalList()
{
    global $con;
    $query = "SELECT ap.id, us.full_name, us.email, us.phone_number, svv.value AS status, ap.actioned_by FROM approvals AS ap JOIN users AS us ON ap.user_id = us.id JOIN settings_vars_variables AS svv ON ap.status = svv.id ORDER BY svv.value DESC";
    return mysqli_query($con, $query);
}

function countBadges($criteria)
{
    $con = $GLOBALS['con'];
    switch ($criteria) {
        case 'consumer':
            $query = "SELECT COUNT(*) FROM users AS us JOIN settings_vars_variables AS svv ON us.role = svv.id WHERE svv.value='Consumer'";
            break;

        case 'homecook':
            $query = "SELECT COUNT(*) FROM users AS us JOIN settings_vars_variables AS svv ON us.role = svv.id WHERE svv.value='homecook'";
            break;

        case 'supplier':
            $query = "SELECT COUNT(*) FROM users AS us JOIN roles AS rol ON us.platform_role_id=rol.id WHERE rol.role_name='Supplier'";
            break;

        case 'admin':
            $query = "SELECT COUNT(*) FROM users AS us JOIN roles AS rol ON us.platform_role_id=rol.id WHERE rol.role_name='Admin' OR rol.role_name='Super Admin'";
            break;

        case 'pending':
            $query = "SELECT COUNT(*) FROM approvals AS ap JOIN settings_vars_variables AS svv ON ap.status = svv.id WHERE svv.value='Pending'";
            break;

        case 'approved':
            $query = "SELECT COUNT(*) FROM approvals AS ap JOIN settings_vars_variables AS svv ON ap.status = svv.id WHERE svv.value='Approved'";
            break;

        case 'all_requests':
            $query = "SELECT COUNT(*) FROM requests ";
            break;

        case 'meals':
            $query = "SELECT COUNT(*) FROM meals ";
            break;

        case 'active_requests':
            $query = "SELECT COUNT(*) FROM requests AS req JOIN settings_vars_variables AS svv on req.status = svv.id WHERE svv.value='processing'";
            break;

        case 'closed_requests':
            $query = "SELECT COUNT(*) FROM requests WHERE `status`= 'closed'";
            break;

        default:
            $query = "SELECT COUNT(*) FROM $criteria";
            break;
    }

    $result = mysqli_fetch_array(mysqli_query($con, $query));
    return $result['COUNT(*)'];
}

function countBadgesPerUser($criteria, $uid)
{
    $con = $GLOBALS['con'];
    switch ($criteria) {
        case 'total_meal':
            $query = "SELECT COUNT(*) FROM meals WHERE `uid`=$uid";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];

            break;
        case 'ongoing':
            $query = "SELECT COUNT(*) FROM meals WHERE `uid`=$uid AND CURDATE() <= expire_date";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        case 'expired':
            $query = "SELECT COUNT(*) FROM meals WHERE `uid`=$uid AND CURDATE() > expire_date";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        case 'total_order':
            $query = "SELECT COUNT(*) FROM distributed_orders AS do JOIN orders AS ord ON do.order_id = ord.id JOIN meals AS ml ON do.meal_id = ml.id JOIN settings_vars_variables AS svv ON ord.status = svv.id WHERE ml.uid = $uid";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        case 'processing':
            $query = "SELECT COUNT(*) FROM distributed_orders AS do JOIN orders AS ord ON do.order_id = ord.id JOIN meals AS ml ON do.meal_id = ml.id JOIN settings_vars_variables AS svv ON ord.status = svv.id WHERE ml.uid = $uid AND svv.value = 'processing'";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        case 'delivered':
            $query = "SELECT COUNT(*) FROM distributed_orders AS do JOIN orders AS ord ON do.order_id = ord.id JOIN meals AS ml ON do.meal_id = ml.id JOIN settings_vars_variables AS svv ON ord.status = svv.id WHERE ml.uid = $uid AND svv.value = 'delivered'";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        case 'completed_order':
            $query = "SELECT COUNT(*) FROM orders AS ord  JOIN meal AS ml ON ord.meal_id=ml.id WHERE ml.uid=$uid AND ord.status='Completed'";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        case 'all_responses':
            $query = "SELECT COUNT(*) FROM responses WHERE responsed_by_uid=$uid";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        case 'responses_review':
            $query = "SELECT COUNT(*) FROM responses AS res JOIN settings_vars_variables AS svv ON res.status = svv.id WHERE res.responsed_by_uid=$uid AND svv.value='reviewing'";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        case 'responses_accepted':
            $query = "SELECT COUNT(*) FROM responses AS res JOIN settings_vars_variables AS svv ON res.status = svv.id WHERE res.responsed_by_uid=$uid AND svv.value='accepted'";
            $result = mysqli_fetch_array(mysqli_query($con, $query));
            return $result['COUNT(*)'];
            break;

        default:
            return 'N/A';
            break;
    }
}


function getAllMealDetailsPerUser($uid)
{
    $con = $GLOBALS['con'];
    $query = "SELECT ml.*,svv.value AS 'category_title' FROM meals AS ml JOIN settings_vars_variables AS svv ON ml.category_id=svv.id WHERE ml.uid=$uid";
    return mysqli_query($con, $query);
}

function timeConversion($time)
{
    $time = explode(":", $time);
    $time[0] = intval($time[0]);
    $str = '';
    if ($time[0] > 12) {
        $time[0] = $time[0] - 12;
        $str .= 'PM';
    } else {
        $str .= 'AM';
    }

    return $time[0] . ':' . $time[1] . ' ' . $str;
}

function getAllMealForConsumer($category = 'All')
{
    global $con;
    $query = "SELECT ml.id, us.own_image, us.full_name, loc.location_name AS 'location', ml.image, ml.title, ml.quantity, ml.price, ml.available_from, ml.available_till FROM meals AS ml JOIN users AS us on ml.uid = us.id JOIN settings_vars_variables AS svv on ml.category_id = svv.id JOIN locations AS loc on us.location = loc.id";

    if ($category != 'All') {
        $query .= "WHERE svv.value='" . $category . "'";
    }
    return mysqli_query($con, $query);
}

function getMealDetails($mealId)
{
    global $con;
    $query = "SELECT ml.id, ml.image, ml.title, ml.price FROM meals AS ml WHERE ml.id = $mealId ";
    return mysqli_fetch_array(mysqli_query($con, $query));
}

function getAllMealForConsumerAreaBased($city, $location)
{
    global $con;
    $query = "SELECT ml.id, us.own_image, us.full_name, loc.location_name AS 'location', ml.image, ml.title, ml.quantity, ml.price, ml.available_from, ml.available_till FROM meals AS ml JOIN users AS us on ml.uid = us.id JOIN settings_vars_variables AS svv on ml.category_id = svv.id JOIN locations AS loc on us.location = loc.id WHERE us.city = $city AND us.location=$location";

    return mysqli_query($con, $query);
}

function getAllMealForConsumerFilterTitle($filterTitle)
{
    global $con;
    $query = "SELECT ml.id, us.own_image, us.full_name, loc.location_name AS 'location', ml.image, ml.title, ml.quantity, ml.price, ml.available_from, ml.available_till FROM meals AS ml JOIN users AS us on ml.uid = us.id JOIN settings_vars_variables AS svv on ml.category_id = svv.id JOIN locations AS loc on us.location = loc.id WHERE ml.title LIKE '%$filterTitle%'";

    return mysqli_query($con, $query);
}

function getOrderPerUser($uid)
{
    global $con;
    $query  = "SELECT dord.id, us.full_name, ml.title, dord.quantity, ml.price * dord.quantity AS 'price', us.address, us.phone_number, svv.value FROM distributed_orders AS dord JOIN orders AS ord ON dord.order_id = ord.id JOIN meals AS ml ON dord.meal_id = ml.id JOIN settings_vars_variables AS svv ON dord.status = svv.id JOIN users AS us ON ord.ordered_by_uid = us.id WHERE ml.uid = $uid";
    return mysqli_query($con, $query);
}

function getAllRequests()
{
    global $con;
    $query  = "SELECT req.id, us.full_name, req.meal_title, req.quantity, svv1.value AS 'spice_level', svv2.value AS 'oil_level', svv3.value AS 'sugar_level', svv4.value AS 'salt_level', req.add_ons, req.is_allergy, req.delivery_time FROM requests AS req JOIN users AS us ON req.requested_by_uid = us.id JOIN settings_vars_variables AS svv1 ON req.spice_level = svv1.id JOIN settings_vars_variables AS svv2 ON req.oil_level = svv2.id JOIN settings_vars_variables AS svv3 ON req.sugar_level = svv3.id JOIN settings_vars_variables AS svv4 ON req.salt_level = svv4.id";
    return mysqli_query($con, $query);
}

function getAllResponses($uid)
{
    global $con;
    $query  = "SELECT us.full_name, req.meal_title, req.quantity, res.price, svv.value FROM responses AS res JOIN requests AS req ON res.request_id = req.id JOIN users AS us ON req.requested_by_uid = us.id JOIN settings_vars_variables AS svv ON res.status = svv.id WHERE res.responsed_by_uid = $uid";
    return mysqli_query($con, $query);
}

function getAllResponsesForConsumer($uid)
{
    global $con;
    $query  = "SELECT req.id, req.meal_title, req.timestamp FROM requests AS req JOIN settings_vars_variables AS svv ON req.status = svv.id WHERE svv.value = 'processing' AND req.requested_by_uid=$uid";
    return mysqli_query($con, $query);
}

function responsePerRequest($id)
{
    global $con;
    $query  = "SELECT rs.id, rq.timestamp, rq.meal_title, us.full_name, rs.price FROM requests AS rq JOIN responses AS rs ON rq.id = rs.request_id JOIN users AS us ON rs.responsed_by_uid = us.id WHERE rq.id=$id";
    return mysqli_query($con, $query);
}
