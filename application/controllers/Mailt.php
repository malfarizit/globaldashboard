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
        
        //Old Code
        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email
        
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
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
		$idt= $this->uri->segment(4);
		//$is= $this->uri->segment(4); 
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer(); 

        // // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email

        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        if($idt=='1'){
			
		}
		
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
            <p>New Tracking Number has been created with Tracking Number: <b>$id</b>, use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
		$idt= $this->uri->segment(4);
		$empid= $this->uri->segment(5);
		//$em= $this->session->userdata('email');	
        $response = false;
        //$Ema = 'moritt776@gmail.com';
        $mail = new PHPMailer(); 

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email


        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient  
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email 
		//$recipients =array("moritt.nababan@cladtek.com" => "","admin.hse@cladtek.com" => ""); //email tujuan pengiriman email 
		//$recipients =array("moritt.nababan@cladtek.com" => "",$Ema => ""); //email tujuan pengiriman email 
		if ($idt=='1'){
			$recipients =array("" => ""); //email tujuan pengiriman email 
		}else if ($idt=='2'){
			$recipients =array("tomoyuki.ueno@cladtek.com" => "", "jhonson.silitonga@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='3'){
			$recipients =array("reylina.garcia@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='4'){
			$recipients =array("abdurohman.rawinda@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='5'){
			$recipients =array("wayne.williams@cladtek.com" => "", "charles.simangunsong@cladtek.com" => "", "khairil@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='6'){
			$recipients =array("iswantika.putra@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='7'){
			$recipients =array("untung.suroso@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='8'){
			$recipients =array("romaida.hutabarat@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='9'){
			$recipients =array("hse.officers@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='10'){
			$recipients =array("franklin@cladtek.com" => "", "irwan.pardede@cladtek.com" => ""); //email tujuan pengiriman email
		}else if ($idt=='11'){
			$recipients =array("iban.safwan@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='12'){
			$recipients =array("mediana.siagian@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='13'){
			$recipients =array("fernando.siboro@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='14'){
			$recipients =array("stefanno.yunior@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='15'){
			$recipients =array("" => ""); //email tujuan pengiriman email 
		}else{}
		
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name);
		$mail->AddCC('jan.hutasoit@cladtek.com');
		$mail->AddCC($empid);
		$mail->AddBCC('admin.hse@cladtek.com');
        // Email subject
        $mail->Subject = '[NOTIFICATION] - HSE Action Number: '.$id.' Status is Assign';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i>Dear HOD</i></h3>
            <p>Action Number <b>$id</b> has been assigned to you, Please take action to this Record. Use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
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
            <p>Action Plan <b>$id</b> has been updated to Done, please Closed this record. Use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
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
            <p>Action Number <b>$id</b> is in Progress, use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
		$idt= $this->uri->segment(4);
		$empid= $this->uri->segment(5);
		$em= $this->session->userdata('email');	
        $response = false;
        $mail = new PHPMailer(); 

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email 
		//$recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email 
		if ($idt=='1'){
			$recipients =array("" => ""); //email tujuan pengiriman email 
		}else if ($idt=='2'){
			$recipients =array("tomoyuki.ueno@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='3'){
			$recipients =array("reylina.garcia@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='4'){
			$recipients =array("abdurohman.rawinda@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='5'){
			$recipients =array("wayne.williams@cladtek.com" => "", "charles.simangunsong@cladtek.com" => "", "khairil@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='6'){
			$recipients =array("iswantika.putra@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='7'){
			$recipients =array("untung.suroso@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='8'){
			$recipients =array("romaida.hutabarat@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='9'){
			$recipients =array("hse.officers@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='10'){
			$recipients =array("franklin@cladtek.com" => "", "irwan.pardede@cladtek.com" => ""); //email tujuan pengiriman email
		}else if ($idt=='11'){
			$recipients =array("iban.safwan@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='12'){
			$recipients =array("mediana.siagian@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='13'){
			$recipients =array("fernando.siboro@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='14'){
			$recipients =array("stefanno.yunior@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='15'){
			$recipients =array("" => ""); //email tujuan pengiriman email 
		}else{} 
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name);
		$mail->AddCC('jan.hutasoit@cladtek.com');
		$mail->AddBCC('admin.hse@cladtek.com');
		$mail->AddCC($empid);
        // Email subject
        $mail->Subject =  '[NOTIFICATION] - HSE Action Number: '.$id.' Status is Closed';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i>Hi Responder</i></h3>
            <p>Many thanks for your kind action to close the finding</p>";  // isi email
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

	function N_U_ActionPlanOpen() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$idt= $this->uri->segment(4);
		//$em= $this->session->userdata('email');	
        $response = false;
        $mail = new PHPMailer(); 

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient 
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email 
		if ($idt=='1'){
			$recipients =array("" => ""); //email tujuan pengiriman email 
		}else if ($idt=='2'){
			$recipients =array("tomoyuki.ueno@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='3'){
			$recipients =array("reylina.garcia@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='4'){
			$recipients =array("abdurohman.rawinda@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='5'){
			$recipients =array("wayne.williams@cladtek.com" => "", "charles.simangunsong@cladtek.com" => "", "khairil@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='6'){
			$recipients =array("iswantika.putra@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='7'){
			$recipients =array("untung.suroso@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='8'){
			$recipients =array("romaida.hutabarat@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='9'){
			$recipients =array("hse.officers@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='10'){
			$recipients =array("franklin@cladtek.com" => "", "irwan.pardede@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='11'){
			$recipients =array("iban.safwan@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='12'){
			$recipients =array("mediana.siagian@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='13'){
			$recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='14'){
			$recipients =array("stefanno.yunior@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($idt=='15'){
			$recipients =array("" => ""); //email tujuan pengiriman email 
		}else{} 
		//$recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email 
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name);
		//$mail->AddCC($em);
		//$mail->AddBCC('admin.hse@cladtek.com');
        // Email subject
		$mail->AddCC('jan.hutasoit@cladtek.com');
		$mail->AddBCC('admin.hse@cladtek.com'); 
        $mail->Subject =  '[NOTIFICATION] - HSE Action Number: '.$id.' Status is still Open';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i>Dear HOD</i></h3>
            <p>Action Number <b>$id</b> has been set to Open by HSE Manager, use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</a></p>";  // isi email
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
	
	function N_C_QualityObservation() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$project= $this->uri->segment(4);
		//$is= $this->uri->segment(4); 
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer(); 

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email

        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		$recipients =array("bionolla.shandiana@cladtek.com" => "","romaida.hutabarat@cladtek.com" => ""); //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name); 
		$mail->AddCC('moritt.nababan@cladtek.com'); 
        $mail->Subject = '[NOTIFICATION] - Quality Observation Number: '.$id.' has been Created'; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Hi QA/QC Engineer</i></h3>
            <p>New Quality Observation Record has been created with Number: <b>$id</b> Use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
		redirect('User/C_Qoc');
		//redirect('Main/V_Investigation');
    } 
	
	function N_Quality_Assigmnet() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$idt= $this->uri->segment(4); //notify
		$nt= $this->uri->segment(5);  //email to
		$Ema =  explode(',' ,$nt);
		$Notify=explode(',',$idt);
        $response = false;
        //$Ema = 'moritt776@gmail.com';
        $mail = new PHPMailer(); 

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email

        //$mail->addReplyTo('moritt.nababan@cladtek.com'); //user email 
        // Add a recipient  
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email 
		//$recipients =array("moritt.nababan@cladtek.com" => "","admin.hse@cladtek.com" => ""); //email tujuan pengiriman email 
		//$recipients =array("moritt.nababan@cladtek.com" => "",$Ema => ""); //email tujuan pengiriman email  
		//$recipients =array("" => ""); //email tujuan pengiriman email  
		//recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email  
		foreach ($Ema as $email) {
		$mail->ClearAllRecipients();
		$mail->AddAddress(trim($email)); 
			foreach($Notify as $Ns){
					$mail->AddCC(trim($Ns)); 
				} 
		$mail->AddBCC('romaida.hutabarat@cladtek.com'); 
		//$mail->AddCC($empemail); 
		//$mail->AddCC('admin.hse@cladtek.com');
        // Email subject 
        $mail->Subject = '[NOTIFICATION] - Quality Observation Number : '.$id.' Status is Issued';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i>Dear PIC</i></h3>
            <p>Quality Observation Number <b>$id</b> has been issued to your section, Please take action to this Record. Use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
	
	function N_U_QualityAction() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		//$is= $this->uri->segment(4); 
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer();

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email

        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name); 
		$mail->AddCC('romaida.hutabarat@cladtek.com'); 
        $mail->Subject = '[NOTIFICATION] - Quality Observation Number: '.$id.' has been responded by PIC'; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Hi QA/QC Engineer</i></h3>
            <p>Quality Observation Number: <b>$id</b>already responded by PIC. Use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
		redirect('Hod/V_Quality'); 
    } 
	
	function N_ClosedQuality() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$idt= $this->uri->segment(4);
		$Ema =  explode(',' ,$idt);		
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer(); 

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email 

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email  
        // Email subject
		foreach ($Ema as $email) {
		$mail->ClearAllRecipients();
		$mail->AddAddress(trim($email)); 
		$mail->AddCC('romaida.hutabarat@cladtek.com'); 
        $mail->Subject = '[NOTIFICATION] - Quality Observation Number: '.$id.' has been Closed'; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Dear All</i></h3>
            <p>Quality Observation Number: <b>$id</b> already Closed. Use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
		redirect('Main/V_Quality'); 
    } 
	
	function N_ClosedNCR() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		//$is= $this->uri->segment(4); 
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer(); 

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = true;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = 'tls';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email 

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email

        $recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email  
        // Email subject
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name); 
		$mail->AddCC('moritt.nababan@cladtek.com'); 
        $mail->Subject = '[NOTIFICATION] - Quality Observation Number: '.$id.' has been Closed'; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Dear All</i></h3>
            <p>Quality Observation Card <b>$id</b> has been raised to be a NCR. Manual Reports will be submitted. Use this <a href='http://192.168.0.39/Main/V_Login'>Link</a> to access the website</p>";  // isi email
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
		redirect('Main/V_Quality');
		 
    } 
	
	function N_C_Incident() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$spvemail= $this->uri->segment(4);
		$spvname= $this->uri->segment(5);
		$hodemail= $this->uri->segment(6); 
		//$is= $this->uri->segment(4); 
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
        $mail->SMTPDebug = true;
		$mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email 
        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =array('hsemanager@cladtek.com',''.$spvemail.'',''.$hodemail.'','safetyofficer@cladtek.com'); //email tujuan pengiriman email 
		$inj=('gm@cladtek.com'); 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject 
		$mail->ClearAllRecipients();
		//$mail->AddAddress($recipients); 
		foreach($recipients as $to1){
			$mail->AddAddress($to1);  
		} 
		$mail->AddCC($inj); 
		$mail->AddBCC('moritt.nababan@cladtek.com'); 
        $mail->Subject = '[NOTIFICATION] - HSE Incident Number: '.$id.''; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Hi <b>Safety Officer</b></i></h3>
            <p>New Incident Record has been created with Incident Number: <b>$id</b></p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		  
		//redirect('User/Success');
		redirect('User/C_Incident');
    } 
	
	function N_C_Incident_HR() 
        {// PHPMailer object
		$id= $this->uri->segment(3);
		$spvemail= $this->uri->segment(4);
		$spvname= $this->uri->segment(5); 
		$hodemail= $this->uri->segment(6); 
		//$dat=array('safety@cladtek.com','hr@cladtek.com');//HR Email 
        $response = false; 
        $mail = new PHPMailer(); 

        // SMTP configuration
        // $mail->isSMTP();
        // $mail->SMTPDebug = true;
		// $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = false;
        // //$mail->Username = 'noreply@cladtek.com'; // user email
        // //$mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = '';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email 

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        // Add a recipient 
        $recipients =array('hsemanager@cladtek.com',''.$spvemail.'',''.$hodemail.'','safetyofficer@cladtek.com'); //email tujuan pengiriman email 
		$inj=array('hr@cladtek.com','gm@cladtek.com'); 
		$mail->ClearAllRecipients();
		//$mail->AddAddress($recipients); 
		foreach($recipients as $to){
			$mail->AddAddress($to);  
		} 
		foreach($inj as $HR){
			$mail->AddCC($HR);  
		} 
        $mail->Subject = '[NOTIFICATION] - HSE Incident Number: '.$id.''; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Dear <b>Safety Officer</b></i></h3>
            <p>New Incident Record has been created with Incident Number: <b>$id</b></p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";		 
        }$mail->SmtpClose(); 
		//redirect('User/Success');
		redirect('User/C_Incident');
    } 
	
	function N_SPV_Sign() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$spvemail= $this->uri->segment(4);		
        $response = false; 
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =$spvemail; //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject 
		$mail->ClearAllRecipients();
		$mail->AddAddress('moritt.nababan@cladtek.com'); //safety email
		$mail->AddCC('moritt776@gmail.com'); //spvemail
		$mail->AddBCC($spvemail); //spvemail
        $mail->Subject = '[NOTIFICATION] - HSE Incident Number: '.$id.''; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Dear <b>Safety Officer</b></i></h3>
            <p>Incident Number: <b>$id</b> has been signed by Supervisor, Please Sign this Record.</p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		  
		//redirect('User/Success');
		redirect('Spv/V_Incident');
    }

	function N_SafetyOfficer_Sign() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$spvemail= $this->uri->segment(4);
        $response = false; 
        $mail = new PHPMailer();

        // SMTP configuration
        // $mail->isSMTP();
		// $mail->SMTPDebug = true;
        // $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = false;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = '';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =$spvemail; //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject 
		$mail->ClearAllRecipients();
		$mail->AddAddress('hod@gmail.com'); //hsemanager
		//$mail->AddCC('moritt776@gmail.com'); //spvemail
		$mail->AddBCC($spvemail); //spvemail
        $mail->Subject = '[NOTIFICATION] - HSE Incident Number: '.$id.''; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Dear <b>HOD</b></i></h3>
            <p>Incident Number: <b>$id</b> has been signed by Safety Officer, Please Sign this Record.</p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		  
		//redirect('User/Success');
		redirect('Hod/V_Incident');
    } 
	
	function N_Hod_Sign() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$spvemail= $this->uri->segment(4);
        $response = false; 
        $mail = new PHPMailer(); 
        // SMTP configuration
        // $mail->isSMTP();
		// $mail->SMTPDebug = true;
        // $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        // $mail->SMTPAuth = false;
        // $mail->Username = 'noreply@cladtek.com'; // user email
        // $mail->Password = 'Cl4dtek@2015'; // password email
        // $mail->SMTPSecure = '';
        // $mail->Port     = 587; 
        // $mail->setFrom('noreply@cladtek.com'); // user email

        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =$spvemail; //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject 
		$mail->ClearAllRecipients();
		$mail->AddAddress('hsemanager@cladtek.com'); //hsemanager
		//$mail->AddCC('moritt776@gmail.com'); //spvemail
		$mail->AddBCC($spvemail); //spvemail
        $mail->Subject = '[NOTIFICATION] - HSE Incident Number: '.$id.''; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Dear <b>HSE Manager</b></i></h3>
            <p>Incident Number: <b>$id</b> has been signed by HOD, Please Sign this Record.</p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		  
		//redirect('User/Success');
		redirect('Hod/V_Incident');
    } 
	
	function N_HSEManager_Sign() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		$spvemail= $this->uri->segment(4);
		$dat=array('hod@gmail.com','safetyofficer@gmail.com');//HR Email 
        $response = false; 
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =$spvemail; //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject 
		$mail->ClearAllRecipients();
		$mail->AddAddress($spvemail); 
		//$mail->AddCC('moritt776@gmail.com'); //safety officer
		foreach($dat as $HR){
			$mail->AddCC($HR);  
		} 
		$mail->AddBCC('moritt.nababan@cladtek.com'); //hsemanager
        $mail->Subject = '[NOTIFICATION] - HSE Incident Number: '.$id.''; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Dear <b>Supervisor</b></i></h3>
            <p>Incident Number: <b>$id</b> has been signed by HOD, Please Follow up to create Investigation Record.</p>";  // isi email
        $mail->Body = $mailContent; 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
			echo "";			
			//
        }$mail->SmtpClose();
		  
		//redirect('User/Success');
		redirect('Main/V_Incident');
    } 
	
	function N_C_Investigation() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		//$is= $this->uri->segment(4); 
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name); 
		$mail->AddCC('moritt776@gmail.com'); 
        $mail->Subject = '[NOTIFICATION] - HSE Investigation Number: '.$id.' has been Created'; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Hi Admin</i></h3>
            <p>New Investigation Record has been created with Investigation Number: <b>$id</b></p>";  // isi email
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
		//redirect('User/Success');
		redirect('Main/V_Investigation');
    }
	
	function N_Closed_Investigation() 
        {  // PHPMailer object
		$id= $this->uri->segment(3);
		//$is= $this->uri->segment(4); 
        $response = false;
		//$zz=('fernando.siboro@cladtek.com');
        $mail = new PHPMailer(); 
        // SMTP configuration
        $mail->isSMTP();
		$mail->SMTPDebug = true;
        $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = false;
        //$mail->Username = 'noreply@cladtek.com'; // user email
        //$mail->Password = 'Cl4dtek@2015'; // password email
        $mail->SMTPSecure = '';
        $mail->Port     = 587; 
        $mail->setFrom('noreply@cladtek.com'); // user email
        //$mail->addReplyTo('fernando.siboro@cladtek.com'); //user email 
        // Add a recipient
        //$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
        $recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email 
		//$mail->addAddress('moritt.nababan@cladtek.com'); //email tujuan pengiriman email 
		//$mail->addBCC('moritt776@gmail.com'); //email tujuan pengiriman email 
        // Email subject
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name); 
		$mail->AddCC('moritt776@gmail.com'); 
        $mail->Subject = '[NOTIFICATION] - HSE Investigation Number: '.$id.' has been Closed'; //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3></i>Hi All</i></h3>
            <p>Investigation Record <b>$id</b> has been Closed. Thankyou for all your Support.</p>";  // isi email
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
		//redirect('User/Success');
		redirect('Main/V_Investigation');
    } 
}
