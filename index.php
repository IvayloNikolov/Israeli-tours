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
	$name = $_POST['name'];
	$hotel = $_POST['hotel'];
	$howlong = $_POST['howlong'];
	$phone = $_POST['phone'];
	$numberofpersons = $_POST['numberofpersons'];
	$date = $_POST['date'];
	$time = $_post['time'];
	$message = $_POST['message'];
	
	$mail->Body    = 'Hello, My name is $name. I am staying at $hotel. I will stay for $howlong days. 
		My phone is $phone. I am with $numberofpersons people. My departure is at $date, $time . $message';
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
	<title>Safaa tours</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<section id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="aboutus.php">About us</a></li>
		</ul>
		<img src="images/logo.png" width="130px">
		<ul>
			<li><a href="gallery.html">Gallery</a></li>
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
    <section id="your-local-guide">
        <h2>YOUR LOCAL GUIDE IN ISRAEL</h2>
        <p>Enjoy the most famous highlights and the most hidden treasures of the city, based on personalized programs. 
So much more than what people say about the city is behind the corner: Milan will surprise you with its hidden culture, charm and beauty.</p>
    </section>
    <hr>
	<section id="booking">
        <h2>BOOK NOW</h2>
        <p>For prices and more information please complete the following form or send an email</p>
        <div class="half-column">
            <form method="POST" action="index.php">
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
                    <p>Email: <i>info@safaatours.global</p>
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
                    <img src="http://flags.fmcdn.net/data/flags/normal/de.png" class="image-flag">
                </div>
            </div>
            <div class="column-third-footer">
                <h3>Follow us</h3>
                <div id="logos">
                    <div class="black-and-white-logo">
                        <div class="row">
                            <a href="https://www.facebook.com/safaatours/"><img src="images/fb_icon.png" class="icon"></a>
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
                <div id="info">Our team of professional, friendly, knowledgeable tour guides and taxi drivers will lead you through the most beautiful highlights and secrets spots of the city.</div>
                <p id="copyright">SAFAA Private Tours © 2015</p>
            </div>
            <div class="clear"></div>
        </div>
    </footer>
	<script src="jquery-1.11.3.js"></script>
	<script src="jquery.backstretch.min.js"></script>
    <script src="jquery.BlackAndWhite.js"></script>
    <script src="lib/main.js"></script>
</body>
</html>
