<?php
if(empty($user)){
    header("Location:index.php"); exit();
}
?>

<h1>Welcome home <?php echo $user['username']; ?></h1>
<p>You are logged in!</p>
<p>Click here to <a href="auth/logout.php">log out</a></p>

<?php #display galleries
    #for each folder in "imgs/galleries/", generate a link. If link is clicked, use GET http request with gallery number
?>