<?php
    require_once('./functions.php');
    $email = $_POST['email'];
    $password = md5(constant('SALT').$_POST['password'].constant('SALT'));

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        $result = mysqli_fetch_array($result);
        $role = settingsVariablesValuesPerId($result['role']);
        if($role == 'Consumer'){
            $_SESSION['cartItem'] = array();
            $_SESSION['email'] = $result['email'];
            $_SESSION['uid'] = $result['id'];
            header('location: consumer/');
        }else if($role == 'Homecook'){
            $approvalStatus = getApprovalStatus($result['id']);
            if($approvalStatus == 'Pending'){
                $_SESSION['waitAdminApprove'] = 'info';
                header('location: login.php');
            }else{
                $_SESSION['email'] = $result['email'];
                $_SESSION['uid'] = $result['id'];
                header('location: homecook/');
            }
        }else{
            $_SESSION['email'] = $result['email'];
            $_SESSION['uid'] = $result['id'];
            header('location: admin/');
        }
    }else{
        $_SESSION['loginTry'] = 'error'; 
        header('location: login.php');
    }