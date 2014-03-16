<html>
	<head>
		<title>Contact | Evan McCullough</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
		
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<meta name="description" content="Helping people with their web development needs since 2012. This is THE personal site of yours truly, Evan McCullough. Get into contact with me here!" />
		<meta name="author" content="Evan McCullough" />
		<script type="text/javascript" src="js/googleAnalytics.js"></script>
	</head>

	<body>
		<div id="body">
		<?php include 'include/header.php'; ?>
		
		<section id="printheader">
			<h1>Evan McCullough</h1>
		</section>
		
		<div id="text">
		<h1>Contact</h1>


	
			<p>For more information about me or for a possible opportunity, please use the following form.</p>
			<?php 

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$problem = FALSE;

				if (empty($_POST['name'])) { //verify that name is filled out
					$problem = TRUE;
					echo "<script type='text/javascript'>alert('Name must be filled out');</script>";
				}
				if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {//verify that email is filled out and there is at least one @ in email address
					$problem = TRUE;
					echo "<script type='text/javascript'>alert('Please provide a valid email address');</script>";
				}
				if (empty($_POST['message'])) { //verify that message is filled out
					$problem = TRUE;
					echo "<script type='text/javascript'>alert('Message must be filled out');</script>";
				}

				if (!$problem) {
					$email = $_POST['email'];
					$name = $_POST['name'];
					$message = $_POST['message'];
					$body = "Message from: $name\n\nReturn Email: $email\n\nMessage:\n$message"; //body of email
					$emailto = "eamccullough@suffolk.edu, e_mccullough92@yahoo.com"; //everyones email to send to
		
					echo "<script type='text/javascript'>alert('Thank you for submitting your comment. We will contact you shortly.');</script>";
					mail($emailto, 'Message from evanamccullough.com', $body, 'From: webmaster@evanamccullough.com');
				}
			}
	

			?>
			<form name="commentSubmit" action="contact.php" method="post">

				<p>Name<br>
				<input name="name" id="name" placeholder="Name" type="text"></p>

				<p>Email<br/>
				<input name="email" id="email" placeholder="example@domain.com" type="text"></p>

				<p>Message<br/>
				<textarea id="message" name="message" placeholder="Enter comments here."></textarea></p>

				<p><input id="submit" value="Submit" type="submit" class="button"> <input id="reset" value="Clear" type="reset" class="button"></p>

			</form>
		


		</div>
		<?php include 'include/footer.php'; ?>
		</div>
	</body>
</html>