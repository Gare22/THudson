<?php
require_once('auth/config.php');
require_once('auth/functions.php');
session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $user = in_array_r($user_id, $users);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Page</title>
    </head>
    <body>
<?php
if(empty($user)){
    session_destroy();

    include('auth/login.php');
}else{
    include('home.php');
}
?>
    </body>
</html>