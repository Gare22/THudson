<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tammy Hudson Photography</title>
    
    <!--Icons-->
    <link rel="icon" href="imgs/appicon.ico">
    
    <!--Stylsheets-->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/newmain.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Raleway&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="main-theme">
<div class="l-navbar navbar-theme">
    <div id="navlinks" class="l-nav-links nav-links-theme">
        <a href="./" class="is-active ">HOME</a>
        <a href="./contact/">CONTACT</a>
        <a href="./products/">PRODUCTS</a>
        <a href="./sessions/">SESSIONS</a>
    </div>
    <!-- Commented out navbutton>
    <div class="mobile-nav-button is-mobile">
        <a href="javascript:void(0);" onclick="mobileMenu()">
            <i class="fa fa-bars"></i>
        </a> 
    </div>-->
    <div class="logo">
        <img src="./imgs/logo-altered.png" alt="Tammy Hudson Photography Logo">
    </div>
    <div class="line-break"></div>
</div>


<div id="body" class="l-body">
    <div class="home-title-page small-top-margin">
        <!--/*Link to christmas product*/-->
        <a href="" class="home-link">
            <img loading="lazy" src="imgs/2 Book 5.jpg" class="home-link-img">
            <h2 class="title-page-text christmas-text-theme">Magical Christmas</h2>
        </a>
        <div class="line-break-visible"></div>
    </div>

    <div class="home-title-page big-top-margin">
        <a href="" class="home-link">
            <img loading="lazy" src="imgs/cakesmash.jpg" class="home-link-img">
            <h3 class="title-page-text">Sessions</h3>
        </a>
        <div class="line-break-visible"></div>
    </div>

    <div class="home-title-page big-top-margin">
        <a href="" class="home-link">
            <img loading="lazy" src="imgs/products-image.jpg" class="home-link-img">
            <h3 class="title-page-text">Products</h3>
        </a>
        <div class="line-break-visible"></div>
    </div>

    <div class="about-me big-top-margin">
        <div class="about-left">
            <img loading="lazy" class="about-img" src="imgs/tammy-picture.jpg">
        </div>    
    
        <div class="about-right about-theme">
            <h2 class="title-theme about-title auto-margin"> Tammy Hudson </h2>
            <p class="medium-top-margin"> Hello! My name is Tammy Hudson. I
            am a story teller and artist, blending
            together images to create a legacy to
            be passed down for generations to
            come. I am passionate about
            capturing magical moments that bring
            joy and wonder through exquisite
            wall art and beautiful story books. </p>

            <p class="small-top-margin">In my free time, I love to volunteer
            photographing horses at the
            <a class="about-link" href="https://www.thehomestretchthoroughbredrescue.com/">Homestretch Thoroughbred Rescue</a>.</p>
        </div>
    </div>
</div>


<div id="footer" class="l-foot foot-theme">
    <div id="footerlinks" class="l-footer-links">
        <a href="https://www.facebook.com/TammyHudsonPhotography" target="_blank">
            <img loading="lazy"src="imgs/footer1.jpg">
            facebook
        </a>
        <a href="https://www.instagram.com/tammyhudsonphotography/?hl=en" target="_blank">
            <img loading="lazy"src="imgs/footer2.jpg">
            instagram
        </a>
        <a href="./contact/subscribe/">
            <img loading="lazy"src="imgs/footer3.jpg">
            subscribe
        </a>
        <a href="./contact">
            <img loading="lazy"src="imgs/cakesmash-footer.jpg">
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


<script>
    function mobileMenu() {
        var x = document.getElementById("navlinks");
        if (x.className === "l-nav-links navlinks-theme") {
            x.className += " mobilebutton-is-pressed";
        } else {
            x.className = "l-nav-links navlinks-theme";
        }
    }   
</script>
</html>