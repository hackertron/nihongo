<?php

	session_start();
	require_once 'libs/php_mailer/PHPMailerAutoload.php';

	$errors = [];

	if(isset($_POST['name'] , $_POST['email'] , $_POST['message'])){
		$fields = [
			'name' =>  $_POST['name'] , 
			'email' => $_POST['email'] ,
			'message' => $_POST['message']

		];
		foreach ($fields as $field => $data) {
			# code...
			if (empty($data)) {
				# code...
				$errors = 'the ' . $field . 'field is required.' ;
			}
		}
		if (empty($errors)) {
			# code...
			$m = new PHPMailer ;
			$m-> isSMTP();
			$m-> SMTPAuth = true ;

			$m->SMTPDebug = 1 ;

			$m->Host = 'smtp.gmail.com';
			$m->Username = 'webmaster@nihongo.herobo.com';
			$m->Password = 'Firefistace@153';
			$m->SMTPSecure = 'ssl';
			$m->Port = 465;
			$m->isHTML();
			$m->Subject = 'contact form submitted';
			$m->Body = 'From: ' . $fields['name']. '(' . $fields['email'] .') <p>' . $fields['message'] . '</p>';
			$m->FromName = 'Contact';
			//$m->AddReplyTo($fields['email'] , $fields['name']);
			$m->AddAddress('webmaster@nihongo.herobo.com' , 'webmaster');

			if ($m->send()) {
				# code...
				header('Location: thanks.php');
				die();
			} else {
				$errors[] = 'Sorry , could not send email , Try again Later.';
			}
		}
		

	} else {
				$errors = 'something went wrong';
	}

		$_SESSION['errors'] = $errors ;
		$_SESSION['fields'] = $fields ;
		header('Location: contact-form.php');