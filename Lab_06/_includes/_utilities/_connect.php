<?php
include_once('.env.php');
if (file_exists(dirname(__FILE__) . '/.env.php')){
    require_once('_utilities/.env.php');

}

//function to connect
function connect () {
    $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));



    if(mysqli_connect_error($conn))
    {

   echo "issue  connecting to mysql db: " . mysqli_connect_error();
    return false;
    }
    else{
        return $conn;
    }
    }
    
?> 