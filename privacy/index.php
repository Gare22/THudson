<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tammy Hudson Photography</title>
    
    <!--Icons-->
    <link rel="icon" href="imgs/appicon.ico">
    
    <!--Stylsheets-->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="main-theme">
<div class="l-navbar navbar-theme">
    <div id="navlinks" class="l-nav-links nav-links-theme">
        <a href="../">HOME</a>
        <a href="../contact/">CONTACT</a>
        <a href="../products/">PRODUCTS</a>
    </div>
    <!-- Commented out navbutton>
    <div class="mobile-nav-button is-mobile">
        <a href="javascript:void(0);" onclick="mobileMenu()">
            <i class="fa fa-bars"></i>
        </a> 
    </div>-->
    <div class="logo">
        <img loading="lazy"src="./imgs/logo-altered.png" alt="HowUseless Logo">
    </div>
    <div class="line-break"></div>
</div>



<div id="footer" class="l-foot foot-theme">
    <div id="footerlinks" class="l-footer-links">
        <a href="https://www.facebook.com/TammyHudsonPhotography" target="_blank">
            <img loading="lazy"src="../imgs/footer1.jpg">
            facebook
        </a>
        <a href="https://www.instagram.com/tammyhudsonphotography/?hl=en" target="_blank">
            <img loading="lazy"src="../imgs/footer2.jpg">
            instagram
        </a>
        <a href="./contact/subscribe/">
            <img loading="lazy"src="../imgs/footer3.jpg">
            subscribe
        </a>
        <a href="./contact">
            <img loading="lazy"src="../imgs/cakesmash-footer.jpg">
            contact
        </a>
    </div>
    <div id="copyright" class="l-copyright">
        <a href="/privacy/">privacy policy</a>
        <p>
            copyright ©
            <?php $the_year = date("Y"); echo $the_year; ?>
            all rights reserved.
        </p>
    </div>
</div>
</body>

<!--Navmenu Script (for mobile button) Commented out temporarily
<script>
    function mobileMenu() {
        var x = document.getElementById("navlinks");
        if (x.className === "l-nav-links navlinks-theme") {
            x.className += " mobilebutton-is-pressed";
        } else {
            x.className = "l-nav-links navlinks-theme";
        }
    }   
</script>-->

</html>