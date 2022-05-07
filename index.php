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
    <link rel="stylesheet" href="/css/main.css">
    
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
    </div>
    <!-- Commented out navbutton>
    <div class="mobile-nav-button is-mobile">
        <a href="javascript:void(0);" onclick="mobileMenu()">
            <i class="fa fa-bars"></i>
        </a> 
    </div>-->
    <div class="logo">
        <img src="./imgs/logo-altered.png" alt="HowUseless Logo">
    </div>
    <div class="line-break"></div>
</div>


<div id="body" class="l-body">
    <div id="homepagegallery" class="l-gallery home-gallery-theme">
        <div id="home-gallery" class="gallery-items no-scrollbar">
        <?php //Home page gallery goes here
            $images = glob('imgs/galleries/homepage/*.{jpg,png,gif}', GLOB_BRACE);
            foreach($images as $image){
                echo('<div class="gallery-item">');
                echo('<img src="' . $image . '">');
                echo('</div>');
            }
        ?>
        </div>
    </div>
    <div id="products" class="l-products products-theme">
        <a href="products/cake/">
            <img src="imgs/product.jpg">
            <h3 class="caption-theme">Cake Smash</h3>
        </a>
        <a href="products/santa/">
            <img src="imgs/product1.jpg">
            <h3 class="caption-theme">Santa's Workshop</h3>
        </a>
        <a href="products/wall/">
            <img src="imgs/product3.jpg">
            <h3 class="caption-theme">Wall Art</h3>
        </a>
    </div>
    <div id="process" class="l-process process-theme">
        
    </div>
    <div id="about" class="l-about about-theme">
        <div class="portrait-container">
            <img src="imgs/TammyHudsonPortrait.jpg">
            
        </div>
        <div id="aboutparagraphs" class="l-about-paragraphs">
            <h3 class="title title-theme">Tammy Hudson</h3>
            <p>
                Hi! I'm Tammy Hudson, a photographer based in Knoxville, Tennessee. I have been .... I believe photography... more fluff and stuff. 
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            
                <h3 class="subtitle subtitle-theme">The Process</h3>
                <ol>
                    <li>Message Tammy...</li>
                    <li>Schedule a date...</li>
                    <li>Design...</li>
                    <li>Final product...</li>
                </ol>
            
        </div>
    </div>
</div>


<div id="footer" class="l-foot foot-theme">
    <div id="footerlinks" class="l-footer-links">
        <a href="https://www.facebook.com/TammyHudsonPhotography" target="_blank">
            <img src="imgs/logo.png">
            facebook
        </a>
        <a href="https://www.instagram.com/tammyhudsonphotography/?hl=en" target="_blank">
            <img src="imgs/logo.png">
            instagram
        </a>
        <a href="./contact/subscribe/">
            <img src="imgs/logo.png">
            subscribe
        </a>
        <a href="./contact">
            <img src="imgs/logo.png">
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

<script>
const style = document.createElement('style');
style.innerHTML = `
.gallery-items:first-child{
    animation: bannermove 15s linear infinite;
}


@keyframes bannermove {
    0% {
        margin-left: 0px;
    }
    100% {
        margin-left: -`+ getGalleryWidth() +`px;
    }
}`

function getGalleryWidth(){
    var children = document.getElementById('home-gallery').children;
    var totalWidth = 0;

    for (var i = 0; i < children.length; i++) {
        totalWidth += parseInt(children[i].offsetWidth, 10);
    }

    return totalWidth;
}

document.head.appendChild(style);
</script>

</html>