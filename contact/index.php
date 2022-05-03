<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Tammy</title>
    
    <!--Icons-->
    <link rel="icon" href="../imgs/appicon.ico">
    
    <!--Stylsheets-->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="main-theme">
<div class="l-navbar navbar-theme">
    <div id="navlinks" class="l-nav-links nav-links-theme">
        <a href="../">HOME</a>
        <a href="./" class="is-active">CONTACT</a>
        <a href="../products/">PRODUCTS</a>
    </div>
    <!-- Commented out navbutton>
    <div class="mobile-nav-button is-mobile">
        <a href="javascript:void(0);" onclick="mobileMenu()">
            <i class="fa fa-bars"></i>
        </a> 
    </div>-->
    <div class="logo">
        <img src="../imgs/logo-altered.png" alt="HowUseless Logo">
    </div>
    <div class="line-break"></div>
</div>


<div id="body" class="l-body">		
<?php
	// define variables and set to empty values
	$nameErr = $emailErr = $phoneErr = $inquiryErr = "";
	$name = $email = $phone = $inquiry = $email_message = "";
	$submitted = 0;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		} else {
			$name = clean_data($_POST["name"]);
			$fill["name"] = $name;
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed"; 
			}
		}
		
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = clean_data($_POST["email"]);
			$fill["email"] = $email;
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format"; 
			}
		}
			
		if (empty($_POST["phone"])) {
			$phone = "";
		} else {
			$phone = clean_data($_POST["phone"]);
			$fill["phone"] = $phone;
			// check if phone number format is valid
			if (ctype_alpha(preg_replace('/[0-9]+/', '',$phone))) {
			$phoneErr = "Phone Number Cannot Include Letters"; 
			}
			if (!ctype_digit(preg_replace('~[^0-9]~', '',$phone))) {
			$phoneErr = "Your Phone Number Does Not Include Digits"; 
			}
		}

		if (empty($_POST["inquiry"])) {
			$inquiryErr = "You Cannot Submit an Empty Inquiry";
		} else {
			$inquiry = clean_data($_POST["inquiry"]);
			$fill["inquiry"] = $inquiry;
		}
	}

	function clean_data($data) {
		// Strip whitespace (or other characters) from the beginning and end of string
		$data = trim($data);
		// Un-quotes quoted string
		$data = stripslashes($data);
		// Convert special characters to HTML entities
		$data = htmlspecialchars($data);
		return $data;
	}
	// Send email if no errors
	if (isset($fill)) {
		if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($inquiryErr)) {
			// This email should be created on the webhost
			$email_from = "contact@tammyhudson.com";
			
			// This is the email where the contact form will be sent to
			$email_to = "tammy@tammyhudson.com";
			
			// Email message subject
			$today = date("j F, Y. H:i:s");
			$email_subject = "Website Submission [$today]";
			
			function clean_string($string) {

				$bad = array("content-type","bcc:","to:","cc:","href");

				return str_replace($bad,"",$string);

			}

			$email_message .= "Name: ".clean_string($name)."\n";

			$email_message .= "Email: ".clean_string($email)."\n";

			$email_message .= "Phone: ".clean_string($phone)."\n";

			$email_message .= "Inquiry: ".clean_string($inquiry)."\n";
			
			// create email headers
			$headers = 'From: '.$email_from."\r\n".
				
			'Reply-To: '.$email."\r\n" .
				
			'X-Mailer: PHP/' . phpversion();
				
			@mail($email_to, $email_subject, $email_message, $headers);
			
			$submitted = 1;
		}
	}
?>
	<form name="contactus" method="post" action="index.php">
			<input type="text" class="wide" placeholder="Name" name="name" value="<?php
				if (isset($fill["name"]) && $submitted == 0) {
					echo $fill["name"];
				}?>">

			<input type="text" class="short" name="email" placeholder="Email" value="<?php
				if (isset($fill["email"]) && $submitted == 0) {
					echo $fill["email"];
				}?>">

			<input type="text" class="short" placeholder="Phone Number" name="phone" value="<?php
				if (isset($fill["phone"]) && $submitted == 0) {
					echo $fill["phone"];
				}?>">

			<textarea name="inquiry" class="wide" placeholder="Inquiry"><?php
				if (isset($fill["inquiry"]) && $submitted == 0) {
					echo $fill["inquiry"];
				}?></textarea>
		
			<input type="submit" value="Submit" class="button wide" />
			<span class="wide <?php
				if (empty($nameErr)) {
						echo "hidden";
					} else {
						echo "error";
				}
			?>"><?php echo $nameErr;?></span>
			<span class="wide <?php
				if (empty($emailErr)) {
						echo "hidden";
					} else {
						echo "error";
				}
			?>"><?php echo $emailErr;?></span>	
			<span class="wide <?php
				if (empty($phoneErr)) {
						echo "hidden";
					} else {
						echo "error";
				}
			?>"><?php echo $phoneErr;?></span>
			<span class="wide <?php
				if (empty($inquiryErr)) {
						echo "hidden";
					} else {
						echo "error";
				}
			?>"><?php echo $inquiryErr;?></span>
	</form>
			
	<!-- Success message -->
	<div class="success">
	<span class="success <?php if ($submitted == 0) { echo "hidden"; } ?>" >Inquiry <strong>Successfully sent</strong></span>
	</div>
</div>


<div id="footer" class="l-foot foot-theme">
    <div id="footerlinks" class="l-footer-links">
        <a href="https://www.facebook.com/" target="_blank">
            <img src="../imgs/logo.png">
            facebook
        </a>
        <a href="https://www.instagram.com/" target="_blank">
            <img src="../imgs/logo.png">
            instagram
        </a>
        <a href="https://www.instagram.com/" target="_blank">
            <img src="../imgs/logo.png">
            subscribe
        </a>
        <a href="./" target="_blank">
            <img src="../imgs/logo.png">
            contact
        </a>
    </div>
    <div id="copyright" class="l-copyright">
        <a href="../privacy/">privacy policy</a>
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