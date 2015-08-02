<?php 
	

	// post email to our email address...
	$emailInput = $_POST["email"];
	$nameInput = $_POST["name"];
	$subjectInput = " The subject field is empty";
	$messageInput = "The message field is empty";

	// No validation of the email field.

	// just send it to the mail function.

	$Name = $nameInput; //senders name 
	$email = $emailInput; //senders e-mail adress 
	$recipient = "info@jobinpal.com"; //recipient 
	$mail_body = $messageInput; //mail body 
	$subject = $subjectInput; //subject 
	$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

	if ( /*mail($recipient, $subject, $mail_body, $header)*/ true == false ) {

		echo '
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="author" content="Jobinpal Enterprises">
			<meta name="author" content="Jobinpal enterprises">
			<meta name="target" content="Students | Postgraduates | Undergraduates | Universities | Companies | Tetiary instituations | Colleges of education | Polytechnics | Organizations | Schools | Graduates | Job | CV | Dream companies | Linkedin | Jobberman">
			<meta name="Classification" content="Job finders | recruiters | cv | ">
			<meta name="robots" content="index, follow"/>
			<meta name="Keywords" content=" Companies, Dream companies, Students, Graduates, Organization, Connecting, Connect, Job, jobpal, Jobinpal, Jobberman, Vconnect, Linkedin, CV, Job posting, Recuritment, Job sollution, appplication, platform, online-jobs,startups, made in lagos, Nigeria, Africa, Worldwide, USA, China, India, Brazil, academics">

			<meta name="description" content="Jobinpal is an application that will help students to connect to companies, we believe that the students are supposed to be looked upon by the companies not the reverse, we also think that valuable students should be bidded for just the same system applied to sporting players transfer, this will increase the demand and increase the value of students to companies, We majorly believe that Entrepreneurs are the Key players in every Growing economy, So our Goal is to create more entrepreneurs to the diffrent sectors in every country. The Curriculum Vitae is a way to summarize the student performance but we believe with a more bigger data, companies can tell the performance of the student and before they employ the student. Lastly we believe that a if a dollar was contributed by everyone to everyone, Everyone should a billionaire by now, So we see the students as the future of every economy and to achieve that we believe the student should be given a crowd raise to support him as a worker to the job market. We believe this a simple but classic idea for Jobinpal, Support us to make this not just an application but a way of life (A new culture) "to connect students to companies" that is our vison. ">
			<title>Jobinpal | @About Jobinpal "Connecting students to companies..." </title>
			<link rel="shortcut icon" href="img/jobinpal_logo/favicon/favicon_large.png">

			<!-- pb css -->
			<link href="css/jp.css" rel="stylesheet">

			<!-- hover css -->
			<link href="css/hover.css" rel="stylesheet">

			<!-- Fontawesome -->
			<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

			<!-- Foundation -->
			<link rel="stylesheet" href="vendor/foundation/css/foundation.min.css" />

			<!-- Modernizr -->
			<script src="vendor/foundation/js/vendor/modernizr.js"></script>
		</head>
		<body>
			<div class="header">
				<div class="row">
					<div class="small-12 medium-12 large-12 columns">
						<div class="img-cen-large">
							<a href="index.php">
								<img src="img/jobinpal_logo/jobinpal_logo_medium.png">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="background-first-content-about">
				<div class="row">
					<div class="small-12 medium-12 large-12 columns">
						<div class="form-box go-down-a-bit-30 go-up-a-bit-30">
							<div class="content-box-one">
								<h1 class="text-center raleway-font white-text">#THANKYOU</h1>
								<h4 class="text-justify raleway-font white-text">
									Thank you for supporting us by suscribing to be notified when we launch and begin operation but in the main time follow us on twitter, like us on facebook, follow us on crunchbase or talk with us on whatsapp.
								</h4>
								<h2 class="text-center">
									<ul class="inline-list">
										<li><a class="main-team-social-account" href="https://facebook.com/jobinpal"><i class="fa fa-facebook fa-5x white-text"></i></a></li>
										<li><a class="main-team-social-account" href="https://twitter.com/jobinpal"><i class="fa fa-twitter fa-5x white-text"></i></a></li>
										<li><a class="main-team-social-account" href="https://www.crunchbase.com/organization/jobinpal-enterprises"><i class="fa fa-external-link-square fa-5x white-text"></i></a></li>
										<li><a class="main-team-social-account" href="tel:+234(0)8132229293"><i class="fa fa-whatsapp fa-5x white-text"></i></a></li>
									</ul>
								</h2>
								<h6 class="text-center white-text raleway-font"> or </h6>
								<center>
								<button type="button" class="jp-button-light-blue-two-sides-all raleway-font"><i class="fa fa-money"></i> Donate </button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="row">
					<div class="small-12 medium-12 large-12 columns">
						<ul class="inline-list">
							<li><a class="main-team-social-account" href="https://facebook.com/jobinpal"><i class="fa fa-facebook fa-3x white-text"></i></a></li>
							<li><a class="main-team-social-account" href="https://twitter.com/jobinpal"><i class="fa fa-twitter fa-3x white-text"></i></a></li>
							<li><a class="main-team-social-account" href="https://www.crunchbase.com/organization/jobinpal-enterprises"><i class="fa fa-external-link-square fa-3x white-text"></i></a></li>
							<li><a class="main-team-social-account" href="mailto:info@jobinpal.com"><i class="fa fa-envelope fa-3x white-text"></i></a></li>
							<li><a class="main-team-social-account" href="tel:+234(0)8132229293"><i class="fa fa-whatsapp fa-3x white-text"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</body>
		</html>
		';

	}else{
		echo '
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="author" content="Jobinpal Enterprises">
			<meta name="author" content="Jobinpal enterprises">
			<meta name="target" content="Students | Postgraduates | Undergraduates | Universities | Companies | Tetiary instituations | Colleges of education | Polytechnics | Organizations | Schools | Graduates | Job | CV | Dream companies | Linkedin | Jobberman">
			<meta name="Classification" content="Job finders | recruiters | cv | ">
			<meta name="robots" content="index, follow"/>
			<meta name="Keywords" content=" Companies, Dream companies, Students, Graduates, Organization, Connecting, Connect, Job, jobpal, Jobinpal, Jobberman, Vconnect, Linkedin, CV, Job posting, Recuritment, Job sollution, appplication, platform, online-jobs,startups, made in lagos, Nigeria, Africa, Worldwide, USA, China, India, Brazil, academics">

			<meta name="description" content="Jobinpal is an application that will help students to connect to companies, we believe that the students are supposed to be looked upon by the companies not the reverse, we also think that valuable students should be bidded for just the same system applied to sporting players transfer, this will increase the demand and increase the value of students to companies, We majorly believe that Entrepreneurs are the Key players in every Growing economy, So our Goal is to create more entrepreneurs to the diffrent sectors in every country. The Curriculum Vitae is a way to summarize the student performance but we believe with a more bigger data, companies can tell the performance of the student and before they employ the student. Lastly we believe that a if a dollar was contributed by everyone to everyone, Everyone should a billionaire by now, So we see the students as the future of every economy and to achieve that we believe the student should be given a crowd raise to support him as a worker to the job market. We believe this a simple but classic idea for Jobinpal, Support us to make this not just an application but a way of life (A new culture) "to connect students to companies" that is our vison. ">
			<title>Jobinpal | @About Jobinpal "Connecting students to companies..." </title>
			<link rel="shortcut icon" href="img/jobinpal_logo/favicon/favicon_large.png">

			<!-- pb css -->
			<link href="css/jp.css" rel="stylesheet">

			<!-- hover css -->
			<link href="css/hover.css" rel="stylesheet">

			<!-- Fontawesome -->
			<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

			<!-- Foundation -->
			<link rel="stylesheet" href="vendor/foundation/css/foundation.min.css" />

			<!-- Modernizr -->
			<script src="vendor/foundation/js/vendor/modernizr.js"></script>
		</head>
		<body>
			<div class="header">
				<div class="row">
					<div class="small-12 medium-12 large-12 columns">
						<div class="img-cen-large">
							<a href="index.php">
								<img src="img/jobinpal_logo/jobinpal_logo_medium.png">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="background-first-content-about">
				<div class="row">
					<div class="small-12 medium-12 large-12 columns">
						<div class="form-box go-down-a-bit-30 go-up-a-bit-30">
							<div class="content-box-one-error">
								<h1 class="text-center raleway-font white-text">#SORRY</h1>
								<h4 class="text-justify raleway-font white-text">
									Oops!!! It looks like some technical error just happen from some where, Please go back and fill the form again. We are sorry for any this.
								</h4>
								<a href="@aboutjobinpal.php">
								<h2 class="text-center white-text raleway-font">
									Go Back 
								</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="row">
					<div class="small-12 medium-12 large-12 columns">
						<ul class="inline-list">
							<li><a class="main-team-social-account" href="https://facebook.com/jobinpal"><i class="fa fa-facebook fa-3x white-text"></i></a></li>
							<li><a class="main-team-social-account" href="https://twitter.com/jobinpal"><i class="fa fa-twitter fa-3x white-text"></i></a></li>
							<li><a class="main-team-social-account" href="https://www.crunchbase.com/organization/jobinpal-enterprises"><i class="fa fa-external-link-square fa-3x white-text"></i></a></li>
							<li><a class="main-team-social-account" href="mailto:info@jobinpal.com"><i class="fa fa-envelope fa-3x white-text"></i></a></li>
							<li><a class="main-team-social-account" href="tel:+234(0)8132229293"><i class="fa fa-whatsapp fa-3x white-text"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</body>
		</html>
		';
	}
?>