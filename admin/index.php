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
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="./css/admin.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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