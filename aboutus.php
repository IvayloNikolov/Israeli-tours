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
    <hr />
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
</body>
</html>