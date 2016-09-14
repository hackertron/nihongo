<?php

session_start();

require_once 'helpers/security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];

?>


<!DOCTYPE HTML>
<!--
	Online japanese notes and tutorial site created by jayaditya gupta . 
	
-->
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Contact</a></h1>
								
							</div>

								<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Home</a></li>
									<!--<li>
										<a href="#">Dropdown</a>
										<ul>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li>
												<a href="#"></a>
												<ul>
													<li><a href="#"></a></li>
													<li><a href="#"></a></li>
													<li><a href="#"></a></li>
													<li><a href="#"></a></li>
													<li><a href="#"></a></li>
												</ul>
											</li>
											<li><a href="#"></a></li>
										</ul>
									</li>-->
									<li><a href="left-sidebar.html">Downloads</a></li>
									<li><a href="right-sidebar.html">Tutorials</a></li>
									<li><a href="no-sidebar.html">Contact Us</a></li>
								</ul>
							</nav>

					</div>
				</div>


			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">CONTACT</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Under Construction</h2>
										

								<!-- Contact Form -->

								<?php if (!empty($errors)) : ?>
								<div>
									<ul><li><?php echo implode('</li><li>', $errors); ?></li></ul>

								</div>	


							<?php endif; ?>
									<section>
										<form action="contact.php" method="post" >
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Name" <?php echo isset($fields['name']) ? 'value=" '. e($fields['name']).'   "' : ' ';?> />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" <?php echo isset($fields['email']) ? 'value=" '. e($fields['email']).'   "' : ' ';?> />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" <?php echo isset($fields['message']) ?  e($fields['message']) : ' ';?> rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-home">Mailing Address</h3>
													<p>
														<br />
														<br />
														
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-comment">Social</h3>
													<p>
														<a href="#"></a><br />
														<a href="#"></a><br />
														<a href="#"></a>
													</p>
												</section>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>
														<a href="#"></a>
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-phone">Phone</h3>
													<p>
														(+91) 000-0000-000
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; Nihongo.</li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php

unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>