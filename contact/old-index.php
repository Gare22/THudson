<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tammy Hudson Photography</title>
    
    <!--Icons-->
    <link rel="icon" href="imgs/appicon.ico">
    
    <!--Stylsheets-->
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="l-navbar nav-theme">
    <div class="logo">
        <img src="./imgs/logo.png" alt="HowUseless Logo">
    </div>
    <div class="mobile-nav-button is-mobile">
        <a href="javascript:void(0);" onclick="mobileMenu()">
            <i class="fa fa-bars"></i>
        </a> 
    </div>
    <div id="navlinks" class="l-nav-links">
        <a href="./" class="is-active ">Home</a>
        <a href="./secret" class="is-mobile">Secret Mobile Site</a>
    </div>
</div>
<div id="body" class="l-body">

</div>
<div id="footer" class="l-foot foot-theme">   
    <a href="https://github.com/gare22">Get a website made...</a>
</div>
</body>

<!--Navmenu Script (for mobile button)-->
<script>
    function mobileMenu() {
        var x = document.getElementById("navlinks");
        if (x.className === "l-nav-links") {
            x.className += " mobilebutton-is-pressed";
        } else {
            x.className = "l-nav-links";
        }
    }   
</script>
</html>