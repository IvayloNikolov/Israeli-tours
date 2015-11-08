<?php

require('phpmailer/class.phpmailer.php');

if(isset($_POST["submit"]))
{
	$mail = new PHPMailer();

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'ivaylonikolov.net';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'me@ivaylonikolov.net';                 // SMTP username
	$mail->Password = 'xaxaxa123';                           // SMTP password
	$mail->SMTPSecure = 'Tour';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                    // TCP port to connect to

	$mail->addAddress('ivnikolov721@gmail.com', 'Ivaylo Nikolov');     // Add a recipient

	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->From = "me@ivaylonikolov.net";
	$mail->FromName = $_POST['name'];
	$mail->Subject = $_POST['subject'];
	// $_POST['name'] $_POST['hotel'] $_POST['email] $_POST['howlong']
	// $_POST['phone'] $_POST['numberofpersons'] $_POST['date'] $_POST['time']
	// $_POST['message']
	$mail->Body    = "Hello, My name is $_POST['name']. I am staying at $_POST['hotel']. I will stay for $_POST['howlong'] days. 
		My phone is $_POST['phone']. I am with $_POST['numberofpersons'] people. My departure is at $_POST['date'], $_POST['time'].$_POST['message']";
	if(!$mail->send()) {
		
		echo 'Message could not be sent. 2';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
}
?>
<html>
<head>
	<title>Israeli Tours</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<section id="menu">
		<ul>
			<li><a href="#someinfo" onclick="hide()">About us</a></li>
			<li><a href="#" onclick="hide()">Tours</a></li>
		</ul>
		<img src="logo.png" width="130px">
		<ul>
			<li><a href="#" onclick="hide()">Gallery</a></li>
			<li><a href="#booking" onclick="hide()">Contact us</a></li>
		</ul>
	</section>	
	<section id="header">
		<div id="headings">
			<h1>ENJOY ISRAEL TODAY</h1>
			<h2>FEEL SACRED NOW</h2>
		</div>
		<div id="slider">
			<ul>
				<li id="1"></li>
				<li id="2"></li>
                <li id="3"></li>
                <li id="4"></li>
                <li id="5"></li>
			</ul>
		</div>
	</section>
    <hr />
	<section id="someinfo">
        <div class="column-quarter">
            <h2>Every tour is private</h2>
            <hr>
            <p>
                Also you can book a tour with no guide,  a professinal licensed Taxi driver to take you wherever you want in Israel!
                In order to take information about prices send us an email.
            </p>

        </div>
        <div class="column-quarter">
            <h2>Meeting your needs</h2>
            <hr>
            <p>
                Our local guides are waiting to show you their countryside and places of interest. All sightseeing excursions are accompanied with your own private Language.This means that you can ask as many or as few questions as you like and take sightseeing trips at your own pace, with the emphasis on your own interests.
            </p>
        </div>
        <div class="column-quarter">
            <h2>IT'S ALL ABOUT THE GUIDE</h2>
            <hr>
            <p>
                Join the site so you can touch the history, taste our food feel the nature and enjoy the attractions that Israel offer ,every visitor is different, each of my tours is tailored to meet your wishes and needs. In addition to visites of traditional sites, I offer an opportunity to learn about the different cultures, colors, and aromas that create the excitement of Israel.
            </p>
        </div>
        <div class="column-quarter">
            <h2>About Us</h2>
            <p>
                Safaa Tours is a new company with a new idea set out for the comfort of tourists arriving to Israel. Combining transportation, guides and other services under package prices and sales, we take care of your needs from private transportations to private and group guides all over Israel any day of the week. We also provide VIP services for returning guests and for guests who require a luxury service and help.
            </p>
        </div>
        <div class="clear"></div>
    </section>
    <hr>
	<section id="booking">
        <div class="half-column">
            <form method="POST" action="sendemail.php">
                <input type="text" id="name" placeholder="Your name">
                <input type="text" id="hotel" placeholder="Hotel or Adress where you stay">
                <input type="text" id="email" placeholder="Email">
                <input type="text" id="howlong" placeholder="How long will you stay">
                <input type="text" id="phone" placeholder="Your phone">
                <input type="text" id="numberofpersons" placeholder="Number of Persons">
                <input type="date" id="date" placeholder="Date of visit">
                <input type="text" id="time" placeholder="Time of your departure">
                <textarea id="message" placeholder="Your message."></textarea>
                <input type="submit">
            </form>
        </div>
        <div class="half-column" id="right-column">
            <div id="details-contacts">
                <h3>CONTACT US</h3>

                <p id="phone-and-email">
                    <div id="adminPhone">Phone : +972546009089</div>
                    <div id="adminEmail">Email : <i>info@safaatours.global</i></div>
                </p>
                <div id="list">
                    <ul>
                        <li><span class="listed-item">Designed to meet your needs</span></li>
                        <li><span class="listed-item">Every Tour is Private</span></li>
                        <li><span class="listed-item">Tours Tailored for families with children</span></li>
                        <li><span class="listed-item">Private Driver available on request</span></li>
                        <li><span class="listed-item">Assistance provided before and after your Private Tour</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <div id="jerusalem-background"></div>
    <footer>
        <div id="information-footer">
            <div class="column-third-footer">
                <h3>CONTACT US</h3>
                <div id="under-contact-us">
                    <p>Email: Email : <i>info@safaatours.global</p>
                    <br />
                    <p>Phone : +972546009089</p>
                    <br />
                </div>
                <p>Tours available in:</p>
                <div id="flags">
                    <img src="http://flags.fmcdn.net/data/flags/normal/us.png" class="image-flag">
                    <img src="http://flags.fmcdn.net/data/flags/normal/fr.png" class="image-flag">
                    <img src="http://flags.fmcdn.net/data/flags/normal/es.png" class="image-flag">
                    <img src="http://flags.fmcdn.net/data/flags/normal/pt.png" class="image-flag">
                </div>
            </div>
            <div class="column-third-footer">
                <h3>Follow us</h3>
                <div id="logos">
                    <div class="black-and-white-logo">
                        <div class="row">
                            <a href="https://www.facebook.com/safaatours/"><img src="fb_icon.png" class="icon"></a>
                            <img src="http://www.victoria.ac.nz/assets/images/twitter_logo.png" class="icon">
                        </div>
                        <div class="row">
                            <img src="http://www.deonvsearth.com/wp-content/uploads/2015/02/instagram-logo-1024x1024.png" class="icon">
                            <img src="http://wersm.com/wp-content/uploads/2014/06/google-plus-logo.png" class="icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-third-footer">
                <P>SAFAA Private Tours © 2015</P>
            </div>
            <div class="clear"></div>
        </div>
    </footer>
	<script src="jquery-1.11.3.js"></script>
	<script src="jquery.backstretch.min.js"></script>
    <script src="jquery.BlackAndWhite.js"></script>
    <script src="main.js"></script>
</body>
</html>
