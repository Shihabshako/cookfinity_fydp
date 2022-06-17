<?php
    //db configuration
    define('DB_HOST', "localhost");
    define('DB_USERNAME', "root");
    define('DB_PASSWORD', "");
    define('DB_NAME', "cookfinity");

    //password hashing
    define('SALT', "You can never crack this password");
    

    //starting of session
    if(!session_id()){
        // 1 week = 604800 seconds
        // server should keep session data for exactly (or at least) 1 week
        ini_set('session.gc_maxlifetime', 604800);

        // each client should remember their session id for EXACTLY 1 week
        session_set_cookie_params(604800);
        session_start();
    }
