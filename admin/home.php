<?php
if(empty($user)){
    header("Location:index.php"); exit();
}
?>
<div class="l-navbar">
    <h1> Tammy Hudson Photography </h1>
    <h1> Admin Menu </h1>
    <a href="auth/logout.php"><h1>log out</h1></a>
</div>



<?php #display galleries
    #for each folder in "imgs/galleries/", generate a link. If link is clicked, use GET http request with gallery number
?>