<?php
    require_once('./functions.php');

    $id = get_max_id_for_add('users');
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = md5(constant('SALT').$_POST['password'].constant('SALT'));
    $userType = $_POST['userType'];
    $role = settingsVariablesValueId('roles', $userType);

    if($userType == 'Consumer'){
        $address = $_POST['address'];
        $query = "INSERT INTO `users`(`id`,`full_name`, `phone_number`, `email`, `password`, `address`, `role`) VALUES ($id,'$full_name','$phone_number','$email','$password','$address',$role)";
    }
    else{
        $own_image = $_POST['own_image'];
        $company_image = $_POST['company_image'];
        $company_name = $_POST['company_name'];
        $city = $_POST['city'];
        $location = $_POST['location'];
        $pickup_location = $_POST['pickup_location'];
        $nid_number = $_POST['nid_number'];

        $own_image_target_path = "./images/users/";
        $company_image_target_path = "./images/companies/";

        //upload own image
        if($_FILES['own_image']['size'] == 0 ){
            $own_image  = 'noImage.png';
        }else{
            $own_image  = date("dmY_hms").basename($_FILES['own_image']['name']);
            $own_image_target_path .= $own_image  ;
            move_uploaded_file($_FILES['own_image']['tmp_name'], $own_image_target_path);
        }
        
        //upload company image
        if($_FILES['company_image']['size'] == 0 ){
            $company_image  = 'noImage.png';
        }else{
            $company_image  = date("dmY_hms").basename($_FILES['company_image']['name']);
            $company_image_target_path .= $company_image;
            move_uploaded_file($_FILES['company_image']['tmp_name'], $company_image_target_path);
        }
        

        $query = "INSERT INTO `users`(`id`, `email`, `role`, `full_name`, `company_name`, `city`, `location`, `phone_number`, `pickup_location`, `nid_number`, `password`, `own_image`,`company_image`) VALUES ($id,'$email',$role,'$full_name', '$company_name',$city,$location,'$phone_number','$pickup_location', '$nid_number', '$password', '$own_image', '$company_image')";

    }


    if(mysqli_query($con, $query)){
        $status = settingsVariablesValueId('status', 'Pending');
        if($userType == 'Homecook'){
            $query = "INSERT INTO `approvals`(`user_id`, `status`) VALUES ($id, $status)";
            mysqli_query($con, $query);
        }
         header('location: login.php');
    }else{
         header('location: index.html');
    }


   



?>