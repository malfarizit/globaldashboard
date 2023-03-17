<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Expired extends CI_Controller {

	public function __construct() { 
                parent::__construct();  
                require APPPATH.'libraries/phpmailer/src/Exception.php';
                require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
                require APPPATH.'libraries/phpmailer/src/SMTP.php';
                 
                    }
    function index() 
       {}   
	 
	function N_Expired_Actionplan(){
		// PHPMailer object
		$data = $this->Main_model->Expired() ; 
		$tr=json_decode($data,false); 
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
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email  
		 foreach($tr as $df){
			 $DR=$df->DeptID;
			 $act=$df->ActionNum;
		if ($DR=='1'){
			$recipients =array("" => ""); //email tujuan pengiriman email 
		}else if ($DR=='2'){
			$recipients =array("tomoyuki.ueno@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='3'){
			$recipients =array("reylina.garcia@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='4'){
			$recipients =array("abdurohman.rawinda@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='5'){
			$recipients =array("wayne.williams@cladtek.com" => "", "charles.simangunsong@cladtek.com" => "", "khairil@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='6'){
			$recipients =array("iswantika.putra@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='7'){
			$recipients =array("untung.suroso@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='8'){
			$recipients =array("romaida.hutabarat@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='9'){
			$recipients =array("jan.hutasoit@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='10'){
			$recipients =array("franklin@cladtek.com" => "", "irwan.pardede@cladtek.com" => ""); //email tujuan pengiriman email
		}else if ($DR=='11'){
			$recipients =array("iban.safwan@cladtek.com" => "", "sigit.naharudin@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='12'){
			$recipients =array("mediana.siagian@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='13'){
			$recipients =array("fernando.siboro@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='14'){
			$recipients =array("stefanno.yunior@cladtek.com" => ""); //email tujuan pengiriman email 
		}else if ($DR=='15'){
			$recipients =array("" => ""); //email tujuan pengiriman email 
		}else{}
		//$recipients =array("moritt.nababan@cladtek.com" => ""); //email tujuan pengiriman email  
		foreach ($recipients as $email => $name) {
		$mail->ClearAllRecipients();
		$mail->AddAddress($email, $name); 
		$mail->AddCC('jan.hutasoit@cladtek.com');
		$mail->AddBCC('admin.hse@cladtek.com');
		//$mail->AddCC($em ; 
        // Email subject 
		//$mail->AddCC('moritt776@gmail.com'); 
        $mail->Subject =  '[NOTIFICATION] - HSE Action Number:'.$act.' Due date Expired';  //subject email 
        // Set email format to HTML
        $mail->isHTML(true); 
        // Email body content
        $mailContent = "<h3><i>Dear HOD</i></h3>
            <p>Due date for this Action Number already expired, please check the detail in <a href='http://192.168.0.39/Main/V_Login'>Link</a></p>";  // isi email
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
		}redirect('Main/Success');
    } 
	
	function N_Expired_Quality(){
		// PHPMailer object
		$data = $this->Main_model->QualityExpired() ; 
		$tr=json_decode($data,false); 
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
		//$mail->addAddress(['moritt.nababan@cladtek.com','moritt776@gmail.com','grimcap776@gmail.com']); //email tujuan pengiriman email  
		foreach($tr as $df){
			$recipients=$df->Notify_to;
			$qoc=$df->CardNo;
			$row=explode(',',$recipients);
		//$recipients  //email tujuan pengiriman email  
			foreach ($row as $email) {
			$mail->ClearAllRecipients();
			$mail->AddAddress(trim($email)); 
			$mail->AddCC('moritt.nababan@cladtek.com');
			//$mail->AddCC($em ; 
			// Email subject 
			//$mail->AddCC('moritt776@gmail.com'); 
			$mail->Subject =  '[NOTIFICATION] - Quality Observation Number:'.$qoc.' Target date Expired';  //subject email 
			// Set email format to HTML
			$mail->isHTML(true); 
			// Email body content
			$mailContent = "<h3><i>Dear PIC</i></h3>
				<p>Target date for this Record already expired, please check the detail in <a href='http://192.168.0.39/Main/V_Login'>Link</a></p>";  // isi email
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
		}redirect('Main/Success');
    }
}
