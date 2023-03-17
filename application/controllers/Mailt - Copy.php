<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailt extends CI_Controller {

	public function __construct() { 
                parent::__construct();  
                require APPPATH.'libraries/phpmailer/src/Exception.php';
                require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
                require APPPATH.'libraries/phpmailer/src/SMTP.php';
                 
                    }
    function index() 
        {  // PHPMailer object
         $response = false;
         $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@cladtek.com'; // user email
        $mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient
        $mail->addAddress('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject
        $mail->Subject = 'Testing'; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h1>Testing Push Notification</h1>
            <p>Laporan HSE.</p>"; // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{ 
			redirect('User/Success');
        }
    } 
	function N_C_Observation() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		//$is= $this->uri->segment(4); 
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@cladtek.com'; // user email
        $mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =array("admin.hse@cladtek.com" => ""); //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name); 
		$mail->AddCC('jan.hutasoit@cladtek.com ');  
		$mail->AddBCC('moritt.nababan@cladtek.com ');  
        $mail->Subject = '[NOTIFICATION] - HSE Tracking Number: '.$id.' has been Created'; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Hi Admin</i></h3>
            <p>New Tracking Number has been created with Tracking Number: <b>$id</b></p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		}
		redirect('User/Success');
    } 
	
	function N_A_ActionPlan() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$em= $this->session->userdata('email');	
        $response = false;
        $Ema = 'moritt776@gmail.com';
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@cladtek.com'; // user email
        $mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient  
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email 
		//$recipients =array("moritt.nababan@cladtek.com" => "","admin.hse@cladtek.com" => ""); //email tujuan pengiriman email 
		$recipients =array("moritt.nababan@cladtek.com" => "",$Ema => ""); //email tujuan pengiriman email 
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name);
		$mail->AddCC('jan.hutasoit@cladtek.com');
		$mail->AddBCC('admin.hse@cladtek.com');
        // Email subject
        $mail->Subject = '[NOTIFICATION] - HSE Action Number: '.$id.' Status is Assign';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i>Dear HOD</i></h3>
            <p>Action Number <b>$id</b> has been assigned to you, Please take action to this Record.</p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		}redirect('Main/Success');
    } 
	
	function N_U_ActionPlanDone() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$em= $this->session->userdata('email'); 
        $response = false;
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@cladtek.com'; // user email
        $mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        //$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email 
		$recipients =array("jan.hutasoit@cladtek.com" => ""); //email tujuan pengiriman email 
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name);
		//$mail->AddCC($em);
		$mail->AddCC('admin.hse@cladtek.com');
		$mail->AddBCC('moritt.nababan@cladtek.com');
        // Email subject
        $mail->Subject =  '[NOTIFICATION] - HSE Action Number: '.$id.' Status is Done ';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i>Dear HSE Manager</i></h3>
            <p>Action Plan <b>$id</b> has been updated to Done, please Closed this record.</p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		}redirect('Hod/Success');
    } 
	
	function N_U_ActionPlanInProgress() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$em= $this->session->userdata('email');	
        $response = false;
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@cladtek.com'; // user email
        $mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email 
		$recipients =array("admin.hse@cladtek.com" => ""); //email tujuan pengiriman email 
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name);
		//$mail->AddCC($em);
		$mail->AddCC('jan.hutasoit@cladtek.com');
        // Email subject
        $mail->Subject =  '[NOTIFICATION] - HSE Action Number: '.$id.' Status is In Progress';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i><i>Dear Admin</i></i></h3>
            <p>Action Number <b>$id</b> is in Progress</p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		}redirect('Hod/Success');
    } 
	
	function N_U_ActionPlanClosed() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$em= $this->session->userdata('email');	
        $response = false;
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@cladtek.com'; // user email
        $mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email 
		$recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email 
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name);
		$mail->AddCC('jan.hutasoit@cladtek.com');
		$mail->AddBCC('admin.hse@cladtek.com');
        // Email subject
        $mail->Subject =  '[NOTIFICATION] - HSE Action Number: '.$id.' Status is Closed';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i>Dear All</i></h3>
            <p>Action Number <b>$id</b> has been closed</p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		}redirect('Main/Success');
    } 
}
