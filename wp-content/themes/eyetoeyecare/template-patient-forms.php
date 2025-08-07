<?php
/**
 * Template Name: PATIENT FORMS Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();

?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ob_start();

 $pageURL = 'http';$filepathurl='';$fileurl3='';
 $fileurl2='';$fileurl='';
 if (isset($_SERVER["HTTPS"]) &&  $_SERVER["HTTPS"]== "on") {$pageURL .= "s";}
 $pageURL .= "://";
 $filepathurl= $pageURL.$_SERVER['SERVER_NAME']."/wp-content/uploads/sign/";
 $logoimg= $pageURL.$_SERVER['SERVER_NAME']."/EYE_TO_EYECARE.png";

 
if (isset($_POST['formsubmit']) && $_POST['formsubmit'] == 1) {
 $upload_dir = wp_get_upload_dir();
    $upload_path = $upload_dir['basedir'];
    //print_r($upload_path);die();
    define('UPLOAD_DIR', $upload_path.'/sign/');
    chmod(UPLOAD_DIR, 0777);
    $img = $_POST['sig-image1'];
    $rand = rand();
    if ($img) {
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = UPLOAD_DIR . $_POST['Firstname'] . "-" . $_POST['Lastname'] . $rand . '_1.png';
		$fileurl = $filepathurl.$_POST['Firstname'] . "-" . $_POST['Lastname'] . $rand . '_1.png';
        file_put_contents($file, $data); 
    }
    $img = $_POST['sig-image2'];
    if ($img) {
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data1 = base64_decode($img);
        $file2 = UPLOAD_DIR . $_POST['Firstname'] . "-" . $_POST['Lastname'] . $rand . '_2.png';
		$fileurl2 = $filepathurl.$_POST['Firstname'] . "-" . $_POST['Lastname'] . $rand . '_2.png';
        file_put_contents($file2, $data1); 
    }
    $img3 = $_POST['sig-image3'];
    if ($img3) {
        $img3 = str_replace('data:image/png;base64,', '', $img3);
        $img3 = str_replace(' ', '+', $img3);
        $data3 = base64_decode($img3);
        $file3 = UPLOAD_DIR . $_POST['Firstname'] . "-" . $_POST['Lastname'] . $rand . '_3.png';
		$fileurl3 = $filepathurl.$_POST['Firstname'] . "-" . $_POST['Lastname'] . $rand . '_3.png';
        file_put_contents($file3, $data3); 
    }
    $filename = UPLOAD_DIR . $_POST['Firstname'] . "-" . $_POST['Lastname'] . $rand . '.pdf';
    
	if( strpos( $_POST['Emailaddress'], 'do-notrespond.me' ) !== false) {die('failed');}
	if (file_exists($file) && file_exists($file2) && file_exists($file3)) {
		ob_start();
		$options = new Options();
        $options->set('isRemoteEnabled', true);
		//$options->set('isHtml5ParserEnabled' => true);
      //  $options->set('allowedProtocols', ['file', 'http', 'https', 'data']);
        //$options->setChroot(__DIR__);
        $dompdf = new Dompdf($options);
		require 'pdfpage1.php'; // the one you posted in your question
		$fileContent = ob_get_clean();
		$dompdf->load_html($fileContent);

		// Render the HTML as PDF
		$dompdf->render();
		$output = $dompdf->output();
		file_put_contents($filename, $output);
	
	ob_end_clean();
	//$dompdf->stream();
	chmod(UPLOAD_DIR, 0555);

   $name = $_POST['Firstname'] . " " . $_POST['Lastname'];
    $mailfromclient = $_POST['Emailaddress'];
    $mailfrom = 'contact@eyetoeyecaretx.com';

    $mailto = 'contact@eyetoeyecaretx.com';
	//	  $mailto = 'amrutha@onteq.com';
    $subject = 'New Registration From ' . $name;
    $headers = "From: " . $mailfrom . "\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html;' . "\r\n";
    $fl = $_POST['Firstname'] . "-" . $_POST['Lastname'] . $rand . '.pdf';
    $mailbody = 'Hello<br/>New Registration from ' . $name;

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'mail.smtp2go.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'eyetoeyecaretx.com';
        $mail->Password = 'Kjy1CnyJm2Gti7i4';
        $mail->Port = 2525;

        $mail->setFrom('contact@eyetoeyecaretx.com', 'Eye To Eyecare');
        $mail->addAddress('contact@eyetoeyecaretx.com');
        $mail->Subject = $subject;
        $mail->Body = $mailbody;
        $mail->addAttachment($filename);

        $mail->send();
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
         $mail->Host = 'mail.smtp2go.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'eyetoeyecaretx.com';
        $mail->Password = 'Kjy1CnyJm2Gti7i4';
        $mail->Port = 2525;
        $mailbody = 'Hello ' . $name;
        $mailbody .= ', Thank you for registering to EYE TO EYECARE ';
        $mail->setFrom('contact@eyetoeyecaretx.com', 'Eye To Eyecare');
        $mail->addAddress($_POST['Emailaddress']);
		//  $mail->addAddress('amrutha@onteq.com');

        $mail->Subject = "Thank you registering";
        $mail->Body = $mailbody;
        $mail->send();
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }

   ?>
	<?php include("model.php");?>
	<script>			
		//modal.style.display = "block";
		window.location.href='/patient-forms-success/';
		//document.getElementById("cntpart").innerHTML='Registered Successfully.';
		//document.getElementById("cntenable").innerHTML="";
		//parent.postMessage('Registered Successfully.');
		//alert("Registered Successfully.");
		/*window.setInterval(function() {
			window.location=window.location.hostname+'/patient-forms-success/';
		}, 3000);*/
		
	</script>
<?php

	}
	else {
		die('failed');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Patient Registration Forms</title>

<style>
		.sig-canvas{
  touch-action: none;
}	
			#panel_1,#panel_2,#panel_3 {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            padding: 15px;
            background-color: #fff;
            box-sizing: border-box;
			}
			
			table {
            width: 100%;
            border-collapse: collapse;
			}
			
			/* Header styles */
			.header-title {
            margin-bottom: 0;
            font-size: 24px;
            margin-top: 20px;
            color: #000;
            padding: 0;
            font-family: "Times New Roman", Times, serif;
            text-align: center;
			}
			
			.header-subtitle {
            margin-bottom: 20px;
            font-size: 18px;
            margin-top: 10px;
            font-weight: 400;
            color: #000;
            padding: 0;
            text-align: center;
			}
			td
			{
			padding:5px;
			font-size:12px;
			line-height:1.6;
			}
			/* Section headers */
			.section-header h4 {
            background-color: #c0c0c0;
            text-align: center;
            padding: 5px;
            font-size: 15px;
            border-bottom: 2px solid #000;
			}
			
			/* Form elements */
			input[type="text"],
			input[type="email"],
			input[type="date"],
			input[type="tel"],
			textarea {
            border: 0;
            border-bottom: 1px solid #000;
            
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
			}
			
			input[type="radio"],
			input[type="checkbox"] {
            margin-right: 5px;
			}
			
			label {
            font-size: 12px;
			}
			
			/* Signature canvas */
			.sig-canvas {
            height: 150px;
            width: 100%;
            border: 1px solid #000;
			}
			
			/* Buttons */
			.btn {
            padding: 8px 30px;
            font-size: 15px;
            background-color: #000;
            color: #fff;
            border: 0;
            margin-bottom: 10px;
            cursor: pointer;
            display: inline-block;
			}
			
			.btn-clear {
            margin: 5px;
            padding: 8px 10px;
            font-size: 15px;
            background-color: #000;
            color: #fff;
            border: 0;
            margin-bottom: 10px;
            cursor: pointer;
			}
			
			/* Responsive adjustments */
			@media (max-width: 768px) {
            .header-title {
			font-size: 20px;
            }
            
            .header-subtitle {
			font-size: 16px;
            }
            
            .section-header {
			font-size: 14px;
            }
            .modal-content 
			{
			margin-top:50% !important;
			}
            /* Stack table cells vertically on small screens */
            .responsive-stack td {
			display: flex;
			width: 100% !important;
			padding: 5px 0;
			flex-direction: row;
			flex-wrap: wrap;
			gap: 5px;
            }
            
            .responsive-stack td[style*="border-right"] {
			border-right: none !important;
			
			padding-bottom: 10px;
			margin-bottom: 5px;
            }
            
            /* Adjust signature areas */
            .sig-area {
			
			margin-bottom: 20px;
            }
            
            /* Policy text adjustments */
            .policy-text {
			font-size: 14px;
            }
			}
			
			@media (max-width: 600px) 
			{
			tr > td[style*="width: 25%"] {
			display: block;
			width: 100% !important;
			padding: 10px 0;
			}
			tr > td[style*="width: 50%"] {
			display: block;
			width: 100% !important;
			padding: 10px 0;
			}
			td[style*="text-align: right;"] {
			text-align: left !important;
			}
			td[style*="width: 15%;"] {
			width: 50% !important;
			display: flex;
			vertical-align: middle;
			}
			
			
			}
			@media (max-width: 480px) {
            .header-title {
			font-size: 18px;
            }
            
            .header-subtitle {
			font-size: 14px;
            }
            
            /* Make checkboxes and radio buttons more touch-friendly */
            input[type="checkbox"], 
            input[type="radio"] {
			transform: scale(1.2);
			margin-right: 8px;
            }
            
            /* Adjust button sizes */
            .btn {
			padding: 10px 20px;
			font-size: 14px;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 10px;
            }
            
            .btn-clear {
			width: 100%;
			box-sizing: border-box;
            }
            
            /* Adjust spacing */
            section {
			padding: 10px;
            }
			
		</style>

<script>
jQuery(function ($) {
		var form1Valid=false;
		function checkpaientform1()
		{
			if(!checkradio('optionsRadios'))   
			{
				//alert("Please select Gender");				
				modal.style.display = "block";
		 		document.getElementById("cntpart").innerHTML='Please select Gender';
				document.getElementById("cntenable").innerHTML="optionsRadios@@@0";
				//document.getElementById("cntenable").innerHTML='document.getElementsByName("optionsRadios")[0].focus();';
				//document.getElementsByName("optionsRadios")[0].focus();
				return false;
			}
			var Firstname =	document.getElementById("Firstname").value;
			if(!Firstname)
			{
				//alert("Please Enter First Name");
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter First Name';
				document.getElementById("cntenable").innerHTML="Firstname";
				//document.getElementById("Firstname").focus();
				return false;
			}
			var Lastname =	document.getElementById("Lastname").value;
			if(!Lastname)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Last Name';
				document.getElementById("cntenable").innerHTML="Lastname";
				//alert("Please Enter Last Name");
				//document.getElementById("Lastname").focus();
				return false;
			}
			/*var SSN1 =	document.getElementById("SSN1").value;
			var SSN2 =	document.getElementById("SSN2").value;
			var SSN3 =	document.getElementById("SSN3").value;
			if(!SSN1 || !SSN2 || !SSN3)
			{
				//alert("Please SSN");
				//document.getElementById("SSN1").focus();
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter SSN';
				document.getElementById("cntenable").innerHTML="SSN1";
				return false;
			}*/
			var DOB =	document.getElementById("DOB").value;
			if(!DOB)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Date Of Birth';
				document.getElementById("cntenable").innerHTML="DOB";
				//alert("Please Enter Date Of Birth");
				//document.getElementById("DOB").focus();
				return false;
			}
			var Streetaddress =	document.getElementById("Streetaddress").value;
			if(!Streetaddress)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Street Address';
				document.getElementById("cntenable").innerHTML="Streetaddress";
				//alert("Please Enter Street Address");
				//document.getElementById("Streetaddress").focus();
				return false;
			}
			var Citystate =	document.getElementById("Citystate").value;
			if(!Citystate)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter City/State';
				document.getElementById("cntenable").innerHTML="Citystate";
				//alert("Please Enter City/State");
				//document.getElementById("Citystate").focus();
				return false;
			}
			var Zipcode =	document.getElementById("Zipcode").value;
			if(!Zipcode)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Zip Code';
				document.getElementById("cntenable").innerHTML="Zipcode";
				//alert("Please Enter Zip Code");
				//document.getElementById("Zipcode").focus();
				return false;
			}
			var Homephone =	document.getElementById("Homephone").value;
			if(!Homephone)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Home Phone';
				document.getElementById("cntenable").innerHTML="Homephone";
				//alert("Please Enter Home Phone");
				//document.getElementById("Homephone").focus();
				return false;
			}
			var Cellphone =	document.getElementById("Cellphone").value;
			if(!Cellphone)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Cell Phone';
				document.getElementById("cntenable").innerHTML="Cellphone";
				//alert("Please Enter Home Phone");
				//document.getElementById("Homephone").focus();
				return false;
			}
			var Occupation =	document.getElementById("Occupation").value;
			if(!Occupation)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Occupation';
				document.getElementById("cntenable").innerHTML="Occupation";
				//alert("Please Enter Occupation");
				//document.getElementById("Occupation").focus();
				return false;
			}
			var Emailaddress =	document.getElementById("Emailaddress").value;
			if(!Emailaddress)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Email Address';
				document.getElementById("cntenable").innerHTML="Emailaddress";
				//alert("Please Enter Email Address");
				//document.getElementById("Emailaddress").focus();
				return false;
			}
			else
			if(Emailaddress)
			{
				var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

				if (reg.test(Emailaddress) == false) 
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Enter Valid Email Address';
					document.getElementById("cntenable").innerHTML="Emailaddress";
					return false;
				}
			}	
			if(!checkradio('Margstatus'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Marriage Status';
				document.getElementById("cntenable").innerHTML="Margstatus@@@0";
				//alert("Please Select Marriage Status");
				//document.getElementsByName("Margstatus")[0].focus();
				return false;
			}
			var referralPerson=document.getElementById("referralPerson").value;
			/*if(!checkradio('Youhear'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Select How Did You Hear About Us?';
				document.getElementById("cntenable").innerHTML="Youhear@@@0";
				//alert("Please Select How Did You Hear About Us?");
				//document.getElementsByName("Youhear")[0].focus();
				return false;
			}
			else 
			{*/
				if((checkradio('Youhear') && getselectedVal('Youhear')==5) && referralPerson=='')
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Enter Who Reffered?';
					document.getElementById("cntenable").innerHTML="referralPerson";
					//alert("Please Enter Who Reffered?");
					//document.getElementById("referralPerson").focus();
					return false;
				}
			//}
			if(!checkradio('Visioninsurance'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Select Do you have Vision Insurance?';
				document.getElementById("cntenable").innerHTML="Visioninsurance@@@0";
				//alert("Please Select Do you have Vision Insurance?");
				//document.getElementsByName("Visioninsurance")[0].focus();
				return false;
			}
			else
			{
				var selectedValue=getselectedVal("Visioninsurance");
				if(selectedValue==1)
				{
					var Visioninsurancename=document.getElementById("Visioninsurancename").value;
					if(!Visioninsurancename)
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter which Vision Insurance?';
						document.getElementById("cntenable").innerHTML="Visioninsurancename";
						//alert("Please Enter which Vision Insurance?");
						//document.getElementById("Visioninsurancename").focus();
						return false;
					}
					var VisioninsuranceDOB=document.getElementById("VisioninsuranceDOB").value;
					if(!VisioninsuranceDOB)
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter Vision Insurance Holder DOB?';
						document.getElementById("cntenable").innerHTML="VisioninsuranceDOB";
						//alert("Please Enter Vision Insurance Holder DOB?");
						//document.getElementById("VisioninsuranceDOB").focus();
						return false;
					}
					var VisioninsuranceSSN=document.getElementById("VisioninsuranceSSN").value;
					if(!VisioninsuranceSSN)
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter Vision Insurance Holder SSN?';
						document.getElementById("cntenable").innerHTML="VisioninsuranceSSN";
						//alert("Please Enter Vision Insurance Holder SSN?");
						//document.getElementById("VisioninsuranceSSN").focus();
						return false;
					}
				}					
			}
			if(!checkradio('Medicalinsurance'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Select Do you have Medical Insurance?';
				document.getElementById("cntenable").innerHTML="Medicalinsurance@@@0";
				//alert("Please Select Do you have Medical Insurance?");
				//document.getElementsByName("Medicalinsurance")[0].focus();
				return false;
			}
			else
			{
				var selectedValue=getselectedVal("Medicalinsurance");
				if(selectedValue==1)
				{
					var Medicalinsurancename=document.getElementById("Medicalinsurancename").value;
					if(!Medicalinsurancename)
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter which Medical Insurance?';
						document.getElementById("cntenable").innerHTML="Medicalinsurancename";
						//alert("Please Enter which Medical Insurance?");
						//document.getElementById("Medicalinsurancename").focus();
						return false;
					}
					var MedicalinsuranceDOB=document.getElementById("MedicalinsuranceDOB").value;
					if(!MedicalinsuranceDOB)
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter Medical Insurance Holder DOB?';
						document.getElementById("cntenable").innerHTML="MedicalinsuranceDOB";
						//alert("Please Enter Medical Insurance Holder DOB?");
						//document.getElementById("MedicalinsuranceDOB").focus();
						return false;
					}
					var MedicalinsuranceSSN=document.getElementById("MedicalinsuranceSSN").value;
					if(!MedicalinsuranceSSN)
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter Medical Insurance Holder SSN?';
						document.getElementById("cntenable").innerHTML="MedicalinsuranceSSN";
						//alert("Please Enter Medical Insurance Holder SSN?");
						//document.getElementById("MedicalinsuranceSSN").focus();
						return false;
					}
				}
			}
			var Reasontodayexam=document.getElementById("Reasontodayexam").value;
			if(!Reasontodayexam)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Today Visit Reason?';
				document.getElementById("cntenable").innerHTML="Reasontodayexam";
				//alert("Please Enter Today Visit Reason?");
				//document.getElementById("Reasontodayexam").focus();
				return false;
			}
			var Lasteyeexam=document.getElementById("Lasteyeexam").value;
			if(!Lasteyeexam)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter When was your last eye exam?';
				document.getElementById("cntenable").innerHTML="Lasteyeexam";
				//alert("Please Enter Today Visit Reason?");
				//document.getElementById("Reasontodayexam").focus();
				return false;
			}
			if(!checkradio('Correctprimaryvision[]'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Select What you use to correct vision?';
				document.getElementById("cntenable").innerHTML="Correctprimaryvision[]@@@0";
				//alert("Please Select What you use to correct vision?");
				//document.getElementsByName("Correctprimaryvision[]")[0].focus();
				return false;
			}			
			if(!checkradio('Wearglasses'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Check Do you wear glasses?';
				document.getElementById("cntenable").innerHTML="Wearglasses@@@0";
				//alert("Please Check Do you wear glasses?");
				//document.getElementsByName("Wearglasses")[0].focus();
				return false;
			}
			else
			{
				var selectedValue=getselectedVal("Wearglasses");
				var selectedType=getselectedVal("Visionissue[]");
				if(selectedValue==1 && selectedType=='')
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Select purpose of wearing glass?';
					document.getElementById("cntenable").innerHTML="Visionissue[]@@@0";
					//alert("Please select purpose of wearing glass?");
					//document.getElementsByName("Wearglasses")[0].focus();
					return false;
				}
			}
			if(!checkradio('Wearcontacts'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Check Do you wear contacts?';
				document.getElementById("cntenable").innerHTML="Wearcontacts@@@0";
				//alert("Please Check Do you wear contacts?");
				//document.getElementsByName("Wearcontacts")[0].focus();
				return false;
			}
			else
			{
				var selectedValue=getselectedVal("Wearcontacts");
				var Wearcontactreason=document.getElementById("Wearcontactreason").value;
				if(selectedValue==1 && Wearcontactreason=='')
				{					
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Check what type contacts you wear?';
					document.getElementById("cntenable").innerHTML="Wearcontactreason";
					//alert("Please Check what type contacts you wear?");
					//document.getElementById("Wearcontactreason").focus();
					return false;
				}
			}
			if(!checkradio('Eyedrops'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Check Do you take eye drops?';
				document.getElementById("cntenable").innerHTML="Eyedrops@@@0";
				//alert("Please Check Do you take eye drops?");
				//document.getElementsByName("Eyedrops")[0].focus();
				return false;
			}
			else
			{
				var selectedValue=getselectedVal("Eyedrops");
				var Takeeyedrops=document.getElementById("Takeeyedrops").value;					
				if(selectedValue==1 && Takeeyedrops=='')
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Check what type eye drops you take?';
					document.getElementById("cntenable").innerHTML="Takeeyedrops";
					//alert("Please Check what type eye drops you take?");
					//document.getElementById("Takeeyedrops").focus();
					return false;
				}
			}
			if(!checkradio('Trycontacts'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Check Do you want to try contacts?';
				document.getElementById("cntenable").innerHTML="Trycontacts@@@0";
				//alert("Please Check Do you want to try contacts?");
				//document.getElementsByName("Trycontacts")[0].focus();
				return false;
			}
			if(!checkradio('Visioncorrection'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Check Would you like laser vision correction?';
				document.getElementById("cntenable").innerHTML="Visioncorrection@@@0";
				//alert("Please Check Would you like laser vision correction?");
				//document.getElementsByName("Visioncorrection")[0].focus();
				return false;
			}
			if(!checkradio('problem[]'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Check any symptoms you may be experiencing?';
				document.getElementById("cntenable").innerHTML="problem[]@@@0";
				//alert("Please check any symptoms you may be experiencing?");
				//document.getElementsByName("problem[]")[0].focus();
				return false;
			}
			else
			{
				var selectedValue = document.getElementById('vision-problem25').checked;				
				var other_symptoms=document.getElementById("other_symptoms").value;					
				if(selectedValue && other_symptoms=='')
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Enter other symptoms you may be experiencing?';
					document.getElementById("cntenable").innerHTML="other_symptoms";
					//alert("Please enter other symptoms you may be experiencing?");
					//document.getElementById("other_symptoms").focus();
					return false;
				}
			}
			if(!checkradio('OCULAR_MEDICAL[]'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please check any condition that applies to you?';
				document.getElementById("cntenable").innerHTML="OCULAR_MEDICAL[]@@@0";
				//alert("Please check any symptoms you may be experiencing?");
				//document.getElementsByName("problem[]")[0].focus();
				return false;
			}
			else
			{
				if(checkradioID('OCULAR_MEDICAL11'))
				{
					var OCULAR_MEDICALSPECIFY=document.getElementById("OCULAR_MEDICAL_Specify").value;
					if(OCULAR_MEDICALSPECIFY=='')
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter other condition that applies to you.';
						document.getElementById("cntenable").innerHTML="OCULAR_MEDICAL_Specify";
						//alert("Please enter other condition that applies to you");	
						//document.getElementById("OCULAR_MEDICAL_Specify").focus();					
						return false;
					}				
				}
				if(checkradioID('OCULAR_MEDICAL20'))
				{
					var OCULAR_MEDICALSPECIFY=document.getElementById("OCULAR_MEDICAL_Specify2").value;
					if(OCULAR_MEDICALSPECIFY=='')
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter other condition that applies to you.';
						document.getElementById("cntenable").innerHTML="OCULAR_MEDICAL_Specify2";
						//alert("Please enter other condition that applies to you");	
						//document.getElementById("OCULAR_MEDICAL_Specify2").focus();					
						return false;
					}				
				}
			}
			var isfamilychkd=2;
    		for(i=1;i<=21;i++)
			{
				var ischecked=checkradioID("FAMILY_OCULAR_MEDICAL"+i);
				if(i!=21)
				{var relval=document.getElementById("FAMILY_OCULAR_MEDICAL_R"+i).value;}
				if(ischecked==1 && (i==11 || i==20))
				{
					var val=document.getElementById("FAMILY_OCULAR_MEDICAL"+i+"OTHER").value;
					if(val=='')
					{
						modal.style.display = "block";
						document.getElementById("cntpart").innerHTML='Please Enter OTHER Health Condition?';
						document.getElementById("cntenable").innerHTML="FAMILY_OCULAR_MEDICAL"+i+"OTHER";
						//alert("Please Enter OTHER Health Condition?");
						//document.getElementById("FAMILY_OCULAR_MEDICAL"+i+"OTHER").focus();
						return false;
					}
				}
				if(i!=21 && ischecked==1 && relval=='')
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Enter relationship with family member';
					document.getElementById("cntenable").innerHTML="FAMILY_OCULAR_MEDICAL_R"+i;
					//alert("Please Enter relationship with family member");
					//document.getElementById("FAMILY_OCULAR_MEDICAL_R"+i).focus();
					return false;
				}
				if(ischecked==1)
				{
					isfamilychkd=1;
				}
			}
			if(isfamilychkd==2)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please check any condition that applies to a family member and indicate your relationship?';
				document.getElementById("cntenable").innerHTML="FAMILY_OCULAR_MEDICAL1";
				//alert("Please Select Are you allergic to any medications?");
				//document.getElementsByName("allergic")[0].focus();
				return false;
			}
			if(!checkradio('allergic'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Select Are you allergic to any medications?';
				document.getElementById("cntenable").innerHTML="allergic@@@0";
				//alert("Please Select Are you allergic to any medications?");
				//document.getElementsByName("allergic")[0].focus();
				return false;
			}	
			else
			{
				var selectedValue=getselectedVal("allergic");
				var Allergicname=document.getElementById("Allergicname").value;
				if(selectedValue==1 && Allergicname=='')
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Enter which medicine you are allergic to?';
					document.getElementById("cntenable").innerHTML="Allergicname";
					//alert("Please Enter which medicine you are allergic to?");
					//document.getElementById("Allergicname").focus();
					return false;
				}
			}
			if(!checkradio('Seasonalallergies'))
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Select Do you have general / seasonal allergies?';
				document.getElementById("cntenable").innerHTML="Seasonalallergies@@@0";
				//alert("Please Select Do you have general / seasonal allergies?");
				//document.getElementsByName("Seasonalallergies")[0].focus();
				return false;
			}	
			else
			{
				var selectedValue=getselectedVal("Seasonalallergies");
				var Seasonalallergiesname=document.getElementById("Seasonalallergiesname").value;
				if(selectedValue==1 && Seasonalallergiesname=='')
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML='Please Enter which seasonal allergies do you have?';
					document.getElementById("cntenable").innerHTML="Seasonalallergiesname";
					//alert("Please Enter which seasonal allergies do you have?");
					//document.getElementById("Seasonalallergiesname").focus();
					return false;
				}
			}
			var issig=document.getElementById("issig1").value;
			if(issig==2)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Put Signature';
				document.getElementById("cntenable").innerHTML="issig1";
				//alert("Please Put Signature");
				//document.getElementById("issig1").focus();
				return false;
			}
			form1Valid=true;
			nextForm();
		}
		function nextForm()
		{
			if(form1Valid)
			{
				document.getElementById("panel_1").style.display='none';
				document.getElementById("panel_2").style.display='';
			}
		}
		function goBack()
		{
			document.getElementById("panel_2").style.display='none';
			document.getElementById("panel_1").style.display='';
		}
		function checkpaientform2()
		{
			var AccessFirstName1=document.getElementById("AccessFirstName1").value;
			var AccessRelation1=document.getElementById("AccessRelation1").value;
			var AccessPhone1=document.getElementById("AccessPhone1").value;
			var haveAccess=false;
			if(AccessFirstName1!='' && (AccessRelation1=='' || AccessPhone1==''))
			{	
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Relationship/Phone Number';
				document.getElementById("cntenable").innerHTML="AccessRelation1";
				//alert("Please Enter Relationship/Phone Number");
				//document.getElementById("AccessRelation1").focus();
				return false;
			}
			else if(AccessFirstName1!='' && AccessRelation1!='' && AccessPhone1!='')
			{
				haveAccess=true;
			}
			var AccessFirstName2=document.getElementById("AccessFirstName2").value;
			var AccessRelation2=document.getElementById("AccessRelation2").value;
			var AccessPhone2=document.getElementById("AccessPhone2").value;
			if(AccessFirstName2!='' && (AccessRelation2=='' || AccessPhone2==''))
			{	
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Enter Relationship/Phone Number';
				document.getElementById("cntenable").innerHTML="AccessRelation2";
				//alert("Please Enter Relationship/Phone Number");
				//document.getElementById("AccessRelation2").focus();
				return false;
			}
			else if(AccessFirstName2!='' && AccessRelation2!='' && AccessPhone2!='')
			{
				haveAccess=true;
			}
			if(haveAccess)
			{
				if(!checkradio('Is_Message'))
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML=' Check Can we leave a detailed message with the person (s) listed above?';
					document.getElementById("cntenable").innerHTML="Is_Message@@@0";
					//alert("Please Check Can we leave a detailed message with the person (s) listed above?");
					//document.getElementsByName("Is_Message")[0].focus();
					return false;
				}
				if(!checkradio('Is_Message2'))
				{
					modal.style.display = "block";
					document.getElementById("cntpart").innerHTML=' Check Can we leave a detailed message with the person (s) listed above?';
					document.getElementById("cntenable").innerHTML="Is_Message@@@0";
					//alert("Please Check Can we release prescriptions and/or contacts to the person (s) listed above? ");
					//document.getElementsByName("Is_Message2")[0].focus();
					return false;
				}
			}
			var issig2=document.getElementById("issig2").value;
			if(issig2==2)
			{
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Put Signature';
				document.getElementById("cntenable").innerHTML="issig2";
				//alert("Please Put Signature");
				//document.getElementById("issig2").focus();
				return false;
			}
			modalsub.style.display = "block";
			document.getElementById("cntpartsub").innerHTML="Do you want to submit the form. Once submited data can not be changed again.";
			/*var conf=confirm("Do you want to submit the form. Once submited data can not be changed again.");
			if(conf)
			{
				document.patientform.submit();
			}*/
		}
		function changeoption(clearIds)
		{
			var res=clearIds.split("@@");
			var i;
			for (i = 0; i < res.length; i++) {
				clearId=res[i]; 
				document.getElementById(clearId).value='';
			}
		}
		function validateSSN(ID) {
		   var patt = new RegExp("\d{3}[\-]\d{2}[\-]\d{4}");
		   var x = document.getElementById(ID);
		   var res = patt.test(x.value);
		   if(!res){
			x.value = x.value
				.match(/\d*/g).join('')
				.match(/(\d{0,3})(\d{0,2})(\d{0,4})/).slice(1).join('-')
				.replace(/-*$/g, '');
		   }
		}
		
		function getselectedVal(selectedId)
		{
			var values = document.getElementsByName(selectedId);
			var selectedValue=0;
			for(var i = 0; i < values.length; i++) {
			   if(values[i].checked == true) {
				   selectedValue = values[i].value;
				}
			}
		   return selectedValue;
		}
		function checkradio(optionsVal)
		{
			var optionsVal = document.getElementsByName(optionsVal);
			var ischecked_method = false;
			for ( var i = 0; i < optionsVal.length; i++) {
				if(optionsVal[i].checked) {
					ischecked_method = true;
					break;
				}
			}
			return ischecked_method;
		}
		function checkradioID(optionsVal)
		{
			var optionsVal = document.getElementById(optionsVal);			
			return optionsVal.checked;
		}
		function movetoNext(current, nextFieldID) {
			if (isNaN(current.value)) {
				current.value='';
				return false;
			 }
			if(nextFieldID!='')
			{
				if (current.value.length >= current.maxLength) {
					document.getElementById(nextFieldID).focus();
				}
			}		
		}
		function getAge(current)
		{
			var DOB=current.value;			
			var dtToday = new Date();
		
			var month = dtToday.getMonth() + 1;
			var day = dtToday.getDate();
			var day = dtToday.getDate();
			var year = dtToday.getFullYear();
			if(month < 10)
				month = '0' + month.toString();
			if(day < 10)
				day = '0' + day.toString();
			
			var maxDate = year + '-' + month + '-' + day;
			if(DOB > maxDate)
			{
				document.getElementById("DOB").value='';
				document.getElementById("DOB").focus();
				document.getElementById("Age").value='';
				return false;
			}
			var res = DOB.split("-");
			birth_year = res[0];
			birth_month = res[1];
			birth_day = res[2];
			today_date = new Date();
			today_year = today_date.getFullYear();
			today_month = today_date.getMonth();
			today_day = today_date.getDate();
			age = today_year - birth_year;

			if ( today_month < (birth_month - 1))
			{
				age--;
			}
			if (((birth_month - 1) == today_month) && (today_day < birth_day))
			{
				age--;
			}
			document.getElementById('Age').value=age;
		}
		$(function(){
			var dtToday = new Date();
			
			var month = dtToday.getMonth() + 1;
			var day = dtToday.getDate();
			var day = dtToday.getDate();
			var year = dtToday.getFullYear();
			if(month < 10)
				month = '0' + month.toString();
			if(day < 10)
				day = '0' + day.toString();
			
			var maxDate = year + '-' + month + '-' + day;
			$('#DOB').attr('max', maxDate);
		});
		function checkyes(checkID)
		{
			document.getElementById(checkID).checked = true;
		}
		function checkno(checkID)
		{
			document.getElementById(checkID).checked = false;
		}
		function checknogrp(chckno,checkID,start,end,otherID,otherfam='')
		{			
			var optionsVal = document.getElementById(checkID+chckno);
			var ischecked=optionsVal.checked;
			
			if(ischecked){
				for(i=start;i<=end;i++)
				{
					document.getElementById(checkID+i).checked = false;
					if(otherID)
					{
						var otherIDar=otherID.split("@@@");
						for(j=0;j<otherIDar.length;j++)
						{
							var otherIds= otherIDar[j];
							clearcheckno(checkID+i,otherIds)
						}						
					}
					if(otherfam)
					{
						document.getElementById(otherfam+i).value = '';	
					}
				}
			}
		}
		function clearcheckno(checkID,changeID,changeOtherID='')
		{
			var ischecked=checkradio(checkID);
			if(!ischecked)
			{
				document.getElementById(changeID).value = '';
				if(changeOtherID)
				{
					document.getElementById(changeOtherID).value = '';				
				}
			}
		}
		});
	</script>
</head>

<!-- Page Header Start -->
	<section class="hero1">
		<div class="container hero-content">
			<h1 data-aos="zoom-in-up" data-aos-duration="1000">Patient Forms</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤   Patient Forms</p>
			
		</div>
	</section>
	<section class="wrapper1 wow fadeInUp">
		
		<div class="container">
			<div class="row justify-content-center">
				
				<div class="col-lg-10 align-self-center contact-form ">
					<p>Eye To Eyecare strives to make your visit as efficient as
						possible. Our patient forms can be downloaded by clicking on an icon
					below. Please fill out the forms and bring with you on your visit.</p>
					<p>
						</br> If you have any questions about this form, please contact us
						and we will respond to your inquiry. Thanks for choosing Eye To
						Eyecare for your eyecare needs!<br />
						
					</p>
					
					
				</div>
			</div>
			
		</section>
		<form name='patientform' id='patientform' method='post'
		onsubmit='javascript:return checkpaientform1();'>
			<div id="panel_1">
				<section id="form-section">
					<table>
						<tr>
							<td>
								<h1 class="header-title">EYE TO EYECARE</h1>
								<h2 class="header-subtitle">Registration Form</h2>
							</td>
						</tr>
					</table>
					
					<table style="border: 2px solid #000;">
						<!-- Patient Information Header -->
						<tr>
							<td class="section-header" style="padding:0px">
								<h4>PATIENT INFORMATION</h4>
							</td>
						</tr>
						
						<!-- Today's Date -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<div style="display: flex; align-items: center; gap: 10px; white-space: nowrap;">
									<label for="todayDate" style="margin-right: 5px;">TODAY's DATE:</label>
									<input type="text" class="form-control1" id="todayDate" readonly />
								</div>
							</td>
						</tr>
						
						<!-- Name and Personal Info -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 20%; border-right: 2px solid #000;">
											<label>Gender<span style="color: red;">*</span></label><br>
											<input type="radio" name="optionsRadios" id="Gender2" value="Male">
											<label for="Gender2">Male</label><br>
											<input type="radio" name="optionsRadios" id="Gender1" value="Female">
											<label for="Gender1">Female</label>
										</td>
										
										<td style="width: 13%;">
											<label for="Firstname">First Name<span style="color: red;">*</span>:</label>
											<input type="text" id="Firstname" name="Firstname">
										</td>
										<td style="width: 13%;">
											<label for="Middlename">Middle Name:</label>
											<input type="text" id="Middlename" name="Middlename">
										</td>
										<td style="width: 13%; border-right: 2px solid #000;">
											<label for="Lastname">Last Name<span style="color: red;">*</span>:</label>
											<input type="text" id="Lastname" name="Lastname">
										</td>
										<td style="width: 41%;">
											<label for="SSV">SSN:</label>
											<input style="width: 30px;" type="text" id="SSN1" name="SSN1"
                                            onkeyup="movetoNext(this, 'SSN2')" maxlength="3"> -
											<input style="width: 20px;" type="text" id="SSN2" name="SSN2"
                                            onkeyup="movetoNext(this, 'SSN3')" maxlength="2"> -
											<input style="width: 40px;" type="text" id="SSN3" name="SSN3" maxlength="4"
                                            onkeyup="movetoNext(this, '')"><br>
											<label>DOB<span style="color: red;">*</span>:</label>
											<input style="width: 77%; margin-top: 3px;" type="date"
                                            onchange="javascript:getAge(this);" id="DOB" name="DOB"
                                            max="2025-06-30"><br>
											<label for="age">Age<span style="color: red;">*</span>:</label>
											<input style="width: 30px;" type="text" id="Age" name="Age" placeholder=""
                                            readonly>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Address -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 50%; border-right: 2px solid #000;">
											<label for="Streetaddress">Street Address<span
											style="color: red;">*</span>:</label>
											<input type="text" id="Streetaddress" name="Streetaddress">
										</td>
										<td style="width: 30%; border-right: 2px solid #000;">
											<label for="Citystate">City/State<span style="color: red;">*</span>:</label>
											<input type="text" id="Citystate" name="Citystate">
										</td>
										<td style="width: 20%;">
											<label for="Zipcode">Zip Code<span style="color: red;">*</span>:</label>
											<input type="text" id="Zipcode" name="Zipcode" maxlength="6"
                                            onkeyup="javascript:movetoNext(this, '');">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Phone Numbers -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 33.33333%; border-right: 2px solid #000;">
											<label for="Homephone">Home Phone<span style="color: red;">*</span>:</label>
											<input type="text" id="Homephone" name="Homephone" maxlength="10"
                                            onkeyup="javascript:movetoNext(this, '');">
										</td>
										<td style="width: 33.33333%; border-right: 2px solid #000;">
											<label for="Cellphone">Cell Phone<span style="color: red;">*</span>:</label>
											<input type="text" id="Cellphone" name="Cellphone" maxlength="10"
                                            onkeyup="javascript:movetoNext(this, '');">
										</td>
										<td style="width: 33.33333%;">
											<label for="Workphone">Work Phone:</label>
											<input type="text" id="Workphone" name="Workphone"
                                            onkeyup="javascript:movetoNext(this, '');" maxlength="10">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Occupation and Email -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 33.33333%; border-right: 2px solid #000;">
											<label for="Occupation">Occupation<span style="color: red;">*</span>:</label>
											<input type="text" id="Occupation" name="Occupation">
										</td>
										<td style="width: 33.33333%; border-right: 2px solid #000;">
											<label for="employer">Employer:</label>
											<input type="text" id="Employer" name="Employer">
										</td>
										<td style="width: 33.33333%;">
											<label for="Emailaddress">Email Address<span
											style="color: red;">*:</span></label>
											<input type="email" id="Emailaddress" name="Emailaddress">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Marital Status -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 20%;">Check appropriate box<span style="color: red;">*</span></td>
										<td style="width: 20%;">
											<input type="radio" id="margstatus1" name="Margstatus" value="SINGLE">
											<label for="margstatus1">SINGLE</label>
										</td>
										<td style="width: 20%;">
											<input type="radio" id="margstatus2" name="Margstatus" value="MARRIED">
											<label for="margstatus2">MARRIED</label>
										</td>
										<td style="width: 20%;">
											<input type="radio" id="margstatus3" name="Margstatus" value="DIVORCED">
											<label for="margstatus3">DIVORCED</label>
										</td>
										<td style="width: 20%;">
											<input type="radio" id="margstatus4" name="Margstatus" value="WIDOWED">
											<label for="margstatus4">WIDOWED</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- How Did You Hear About Us -->
						<tr>
							<td class="section-header" style="padding:0px">
								<h4>How Did You Hear About Us?</h4>
							</td>
						</tr>
						
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 15%;">
											<input type="radio" id="website" name="Youhear" value="1"
                                            onclick="javascript:document.getElementById('referralPerson').value='';">
											<label for="website">WEBSITE</label>
										</td>
										<td style="width: 15%;">
											<input type="radio" id="MAILOUT" name="Youhear" value="2"
                                            onclick="javascript:document.getElementById('referralPerson').value='';">
											<label for="MAILOUT">MAIL OUT</label>
										</td>
										<td style="width: 15%;">
											<input type="radio" id="LOCATION" name="Youhear" value="3"
                                            onclick="javascript:document.getElementById('referralPerson').value='';">
											<label for="LOCATION">LOCATION</label>
										</td>
										<td style="width: 20%;">
											<input type="radio" id="INSURANCEPLAN" name="Youhear" value="4"
                                            onclick="javascript:document.getElementById('referralPerson').value='';">
											<label for="INSURANCEPLAN">INSURANCE PLAN</label>
										</td>
										<td style="width: 45%;">
											<div style="display: flex; align-items: center; gap: 10px;">
												<input type="radio" id="REFERRALBY" name="Youhear" value="5" />
												<label for="REFERRALBY" style="white-space: nowrap;">REFERRAL BY</label>
												<input type="text" id="referralPerson" name="referralPerson"
                                                onchange="javascript:checkyes('REFERRALBY');"
                                                style="flex: 1; min-width: 100px;" />
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Vision and Medical Insurance Information -->
						<tr>
							<td class="section-header" style="padding:0px">
								<h4>VISION AND MEDICAL INSURANCE INFORMATION</h4>
							</td>
						</tr>
						
						<!-- Vision Insurance -->
						<tr>
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 40%;">
											Do you have Vision Insurance?<span style="color: red;">*</span>
											<input type="radio" id="Vision_Insurance_yes" name="Visioninsurance" value="1">
											<label for="Vision_Insurance_yes">YES</label>
											<input type="radio" id="Vision_Insurance_no" name="Visioninsurance" value="2"
                                            onclick="javascript:changeoption(&quot;Visioninsurancename@@VisioninsuranceDOB@@VisioninsuranceSSN&quot;);">
											<label for="Vision_Insurance_no">NO</label>
										</td>
										<td style="width: 60%;">
											<label for="Visioninsurancename">IF YES, Which One?</label>
											<input type="text" id="Visioninsurancename" name="Visioninsurancename"
                                            onchange="javascript:checkyes('Vision_Insurance_yes');">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Vision Insurance Details -->
						<tr>
							<td>
								<label for="VisioninsuranceDOB">Name of Primary Insurance Holder &amp; Date of
								Birth:</label>
								<input type="text" id="VisioninsuranceDOB" name="VisioninsuranceDOB"
                                onchange="javascript:checkyes('Vision_Insurance_yes');">
							</td>
						</tr>
						
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<label for="VisioninsuranceSSN">Primary Holder ID or SSN #:</label>
								<input type="text" id="VisioninsuranceSSN" name="VisioninsuranceSSN"
                                onchange="javascript:checkyes('Vision_Insurance_yes');validateSSN('VisioninsuranceSSN');"
                                maxlength="13">
							</td>
						</tr>
						
						<!-- Medical Insurance -->
						<tr>
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 40%;">
											Do you have Medical Insurance?<span style="color: red;">*</span>
											<input type="radio" id="Medical_Insurance_yes" name="Medicalinsurance"
                                            value="1">
											<label for="Medical_Insurance_yes">YES</label>
											<input type="radio" id="Medical_Insurance_no" name="Medicalinsurance" value="2"
                                            onclick="javascript:changeoption(&quot;Medicalinsurancename@@MedicalinsuranceDOB@@MedicalinsuranceSSN&quot;);">
											<label for="Medical_Insurance_no">NO</label>
										</td>
										<td style="width: 60%;">
											<label for="Medicalinsurancename">IF YES, Which One?</label>
											<input type="text" id="Medicalinsurancename" name="Medicalinsurancename"
                                            onchange="javascript:checkyes('Medical_Insurance_yes');">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Medical Insurance Details -->
						<tr>
							<td>
								<label for="MedicalinsuranceDOB">Name of Primary Insurance Holder &amp; Date of
								Birth:</label>
								<input type="text" id="MedicalinsuranceDOB" name="MedicalinsuranceDOB"
                                onchange="javascript:checkyes('Medical_Insurance_yes');">
							</td>
						</tr>
						
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<label for="MedicalinsuranceSSN">Primary Holder ID or SSN #:</label>
								<input type="text" id="MedicalinsuranceSSN" name="MedicalinsuranceSSN"
                                onchange="javascript:checkyes('Medical_Insurance_yes');validateSSN('MedicalinsuranceSSN');"
                                maxlength="13">
							</td>
						</tr>
						
						<!-- Ocular Health -->
						<tr>
							<td class="section-header" style="padding:0px">
								<h4>OCULAR HEALTH</h4>
							</td>
						</tr>
						
						<!-- Reason for Exam -->
						<tr>
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 30%;">
											<label for="Reasontodayexam">What is the reason for today's Exam?<span
											style="color: red;">*</span></label>
										</td>
										<td style="width: 70%;">
											<input type="text" id="Reasontodayexam" name="Reasontodayexam">
										</td>
									</tr>
									<tr>
										<td style="width: 30%;">
											<label for="Lasteyeexam">When was your last eye exam?<span
											style="color: red;">*</span></label>
										</td>
										<td style="width: 70%;">
											<input type="text" id="Lasteyeexam" name="Lasteyeexam">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Vision Questions -->
                        <!-- Vision Correction -->
                        <tr>
                            <td>
                                <table class="responsive-stack">
                                    <tr>
                                        <td style="width: 40%;">
                                            What do you primarily use to correct your Vision?<span
                                            style="color: red;">*</span>
                                        </td>
                                        <td style="width: 20%;">
                                            <input type="checkbox" id="Correctprimaryvision1" name="Correctprimaryvision[]"
                                            value="1" onclick="javascript:checkno('Correctprimaryvision3');">
                                            <label for="GLASSES">GLASSES</label>
                                        </td>
                                        <td style="width: 20%;">
                                            <input type="checkbox" id="Correctprimaryvision2" name="Correctprimaryvision[]"
                                            value="2" onclick="javascript:checkno('Correctprimaryvision3');">
                                            <label for="CONTACTS">CONTACTS</label>
                                        </td>
                                        <td style="width: 20%;">
                                            <input type="checkbox" id="Correctprimaryvision3" name="Correctprimaryvision[]"
                                            value="3"
                                            onclick="javascript:checkno('Correctprimaryvision1');checkno('Correctprimaryvision2');">
                                            <label for="NONE">NONE</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <!-- Vision Questions -->
                        <tr>
                            <td>
                                <table class="responsive-stack">
                                    <tr>
                                        <td style="width: 100%;">
                                            <table>
                                                <!-- <tr>
                                                    <td style="width: 70%;"></td>
                                                    <td style="width: 15%;"><label>YES</label></td>
                                                    <td style="width: 15%;"><label>NO</label></td>
                                                </tr> -->
                                                <tr>
                                                    <td style="text-align: left;">
                                                        Do you wear glasses?<span style="color: red;">*</span>
                                                    
                                                    <input type="radio" id="wear_glasses1" name="Wearglasses" value="1">Yes
                                                    
                                                <input type="radio" id="wear_glasses2" name="Wearglasses" value="2"
                                                        onclick="javascript:checkno('vision-issue1');checkno('vision-issue2');checkno('vision-issue3');checkno('vision-issue4');">No
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                <td>
                                                        If yes, for
                                                        <input type="checkbox" id="vision-issue1" name="Visionissue[]"
                                                        value="Distance"
                                                        onclick="javascript:checkyes('wear_glasses1');">
                                                        <label for="vision-issue1">Distance</label>
                                                        <input type="checkbox" id="vision-issue2" name="Visionissue[]"
                                                        value="Reading" onclick="javascript:checkyes('wear_glasses1');">
                                                        <label for="vision-issue2">Reading</label>
                                                        <input type="checkbox" id="vision-issue3" name="Visionissue[]"
                                                        value="Computer"
                                                        onclick="javascript:checkyes('wear_glasses1');">
                                                        <label for="vision-issue3">Computer</label>
                                                        <input type="checkbox" id="vision-issue4" name="Visionissue[]"
                                                        value="Full Time"
                                                        onclick="javascript:checkyes('wear_glasses1');">
                                                        <label for="vision-issue4">Full Time</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        Do you wear contacts?<span style="color: red;">*</span>
                                                    
                                                    <input type="radio" id="wear_contacts1" name="Wearcontacts"
                                                    value="1">Yes
                                                    <input type="radio" id="wear_contacts2" name="Wearcontacts"
                                                        value="2"
                                                        onclick="javascript:clearcheckno('wear_contacts2','Wearcontactreason');">No
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td >
                                                        <label for="Wearcontactreason">If yes, what type?</label>
                                                        <input id="Wearcontactreason" name="Wearcontactreason" type="text"
                                                        onchange="javascript:checkyes('wear_contacts1');">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        Do you take eye drops?<span style="color: red;">*</span>
                                                    
                                                    <input type="radio" id="eye_drops1" name="Eyedrops" value="1">Yes
                                                    <input type="radio" id="eye_drops2" name="Eyedrops" value="2"
                                                        onclick="javascript:clearcheckno('eye_drops2','Takeeyedrops');">No
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <label for="Takeeyedrops">If yes, what type?</label>
                                                        <input id="Takeeyedrops" name="Takeeyedrops" type="text"
                                                        onchange="javascript:checkyes('eye_drops1');">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        Would you like to try contacts?<span style="color: red;">*</span>
                                                
                                                    <input type="radio" id="try_contacts1" name="Trycontacts" value="1">Yes
                                                    
                                                    <input type="radio" id="try_contacts2" name="Trycontacts" value="2">No
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        Would you like laser vision correction?<span
                                                        style="color: red;">*</span>
                                                    
                                                    <input type="radio" id="vision_correction1" name="Visioncorrection"
                                                    value="1">Yes
                                                <input type="radio" id="vision_correction2" name="Visioncorrection"
                                                    value="2">No</td>
                                                </tr>
                                            </table>
                                        </td>
                                        
                                    </tr>
                                </table>
                            </td>
                        </tr>

						
						<!-- Symptoms -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table>
									<tr>
										<td colspan="4">
											<br>
											Please check any symptoms you may be experiencing<span
                                            style="color: red;">*</span>:
										</td>
									</tr>
									<tr>
										<td style="width: 25%;">
											<input type="checkbox" id="vision-problem1" name="problem[]"
                                            value="Blurred Vision"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem1">Blurred Vision</label><br>
											<input type="checkbox" id="vision-problem2" name="problem[]" value="Discharge"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem2">Discharge</label><br>
											<input type="checkbox" id="vision-problem3" name="problem[]" value="Eye Pain"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem3">Eye Pain</label><br>
											<input type="checkbox" id="vision-problem4" name="problem[]" value="Dryness"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem4">Dryness</label><br>
											<input type="checkbox" id="vision-problem5" name="problem[]"
                                            value="Tearing/Watering"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem5">Tearing/Watering</label><br>
											<input type="checkbox" id="vision-problem6" name="problem[]" value="Burning"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem6">Burning</label><br>
											<input type="checkbox" id="vision-problem7" name="problem[]" value="Eye Pain"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem7">Eye Pain</label>
										</td>
										<td style="width: 25%;">
											<input type="checkbox" id="vision-problem8" name="problem[]" value="Red Eyes"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem8">Red Eyes</label><br>
											<input type="checkbox" id="vision-problem9" name="problem[]"
                                            value="Sandy / Gritty"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem9">Sandy / Gritty</label><br>
											<input type="checkbox" id="vision-problem10" name="problem[]"
                                            value="Foreign Object Sensation"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem10">Foreign Object Sensation</label><br>
											<input type="checkbox" id="vision-problem11" name="problem[]" value="Irritation"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem11">Irritation</label><br>
											<input type="checkbox" id="vision-problem12" name="problem[]" value="Eye Strain"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem12">Eye Strain</label><br>
											<input type="checkbox" id="vision-problem13" name="problem[]"
                                            value="Difficulty driving at night"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem13">Difficulty driving at night</label><br>
											<input type="checkbox" id="vision-problem14" name="problem[]" value="Glare"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem14">Glare</label>
										</td>
										<td style="width: 25%;">
											<input type="checkbox" id="vision-problem15" name="problem[]"
                                            value="Light Sensitivity"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem15">Light Sensitivity</label><br>
											<input type="checkbox" id="vision-problem16" name="problem[]"
                                            value="Flashes of Light"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem16">Flashes of Light</label><br>
											<input type="checkbox" id="vision-problem17" name="problem[]"
                                            value="Floating Spots"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem17">Floating Spots</label><br>
											<input type="checkbox" id="vision-problem18" name="problem[]"
                                            value="Distorted Vision"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem18">Distorted Vision</label><br>
											<input type="checkbox" id="vision-problem19" name="problem[]"
                                            value="Fluctuating Vision"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem19">Fluctuating Vision</label><br>
											<input type="checkbox" id="vision-problem20" name="problem[]"
                                            value="Loss of Vision"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem20">Loss of Vision</label><br>
										</td>
										<td style="width: 25%;">
											<input type="checkbox" id="vision-problem21" name="problem[]"
                                            value="Loss of side vision"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem21">Loss of side vision</label><br>
											<input type="checkbox" id="vision-problem22" name="problem[]"
                                            value="Double Vision"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem22">Double Vision</label><br>
											<input type="checkbox" id="vision-problem23" name="problem[]"
                                            value="Sties / Chalazion"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem23">Sties / Chalazion</label><br>
											<input type="checkbox" id="vision-problem24" name="problem[]" value="Eye Injury"
                                            onclick="javascript:checkno(&quot;vision-problem26&quot;);">
											<label for="vision-problem24">Eye Injury</label><br>
											<input type="checkbox" id="vision-problem25" name="problem[]" value="Other"
                                            onclick="javascript:clearcheckno('vision-problem25','other_symptoms');checkno('vision-problem26')">
											<label for="vision-problem25">Other</label>
											<input id="other_symptoms" name="other_symptoms" type="text"
                                            onchange="javascript:checkyes('vision-problem25');checkno('vision-problem26');"><br>
											<input type="checkbox" id="vision-problem26" name="problem[]" value="None"
                                            onclick="javascript:checknogrp('26','vision-problem','1','25','other_symptoms');">
											<label for="vision-problem25">None</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Ocular and Medical History -->
						<tr>
							<td class="section-header" style="padding:0px">
								<h4>OCULAR AND MEDICAL HISTORY</h4>
							</td>
						</tr>
						
						<!-- Medical Conditions -->
						<tr>
							<td>
								<table>
									<tr>
										<td colspan="4">
											<br>
											Please check any condition that applies to you<span
                                            style="color: red;">*</span>:
										</td>
									</tr>
									<tr>
										<td style="width: 50%;">
											<input type="checkbox" id="OCULAR_MEDICAL1" name="OCULAR_MEDICAL[]" value="1"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL1">DIABETES</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL2" name="OCULAR_MEDICAL[]" value="2"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL2">HIGH BLOOD PRESSURE</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL3" name="OCULAR_MEDICAL[]" value="3"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL3">HIGH CHOLESTEROL</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL4" name="OCULAR_MEDICAL[]" value="4"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL4">THYROID</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL5" name="OCULAR_MEDICAL[]" value="5"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL5">HEART PROBLEMS</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL6" name="OCULAR_MEDICAL[]" value="6"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL6">RESPIRATORY PROBLEMS</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL7" name="OCULAR_MEDICAL[]" value="7"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL7">STROKE</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL8" name="OCULAR_MEDICAL[]" value="8"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL8">CANCER</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL9" name="OCULAR_MEDICAL[]" value="9"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL9">HEADACHES</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL10" name="OCULAR_MEDICAL[]" value="10"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL10">HEAD / EYE INJURY</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL11" name="OCULAR_MEDICAL[]" value="11"
                                            onclick="javascript:clearcheckno('OCULAR_MEDICAL11','OCULAR_MEDICAL_Specify');checkno('OCULAR_MEDICAL21');">
											<label for="OCULAR_MEDICAL11">OTHER</label>
											<input id="OCULAR_MEDICAL_Specify" name="OCULAR_MEDICALSPECIFY" type="text"
                                            onchange="javascript:checkyes('OCULAR_MEDICAL11');checkno('OCULAR_MEDICAL21');"
                                            maxlength="20">
										</td>
										<td style="width: 50%;">
											<input type="checkbox" id="OCULAR_MEDICAL12" name="OCULAR_MEDICAL[]" value="12"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL12">RETINAL DETACHMENT</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL13" name="OCULAR_MEDICAL[]" value="13"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL13">MACULAR DEGENERATION</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL14" name="OCULAR_MEDICAL[]" value="14"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL14">CATARACTS</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL15" name="OCULAR_MEDICAL[]" value="15"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL15">GLAUCOMA</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL16" name="OCULAR_MEDICAL[]" value="16"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL16">BLINDNESS / LOSS OF VISION</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL17" name="OCULAR_MEDICAL[]" value="17"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL17">LAZY EYE</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL18" name="OCULAR_MEDICAL[]" value="18"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL18">DOUBLE VISION</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL19" name="OCULAR_MEDICAL[]" value="19"
                                            onclick="javascript:checkno(&quot;OCULAR_MEDICAL21&quot;);">
											<label for="OCULAR_MEDICAL19">EYE SURGERY</label><br>
											<input type="checkbox" id="OCULAR_MEDICAL20" name="OCULAR_MEDICAL[]" value="20"
                                            onclick="javascript:clearcheckno('OCULAR_MEDICAL20','OCULAR_MEDICAL_Specify2');checkno('OCULAR_MEDICAL21');">
											<label for="OCULAR_MEDICAL20">OTHER</label>
											<input id="OCULAR_MEDICAL_Specify2" name="OCULAR_MEDICAL20" type="text"
                                            onchange="javascript:checkyes('OCULAR_MEDICAL20');checkno('OCULAR_MEDICAL21');"
                                            maxlength="20"><br>
											<input type="checkbox" id="OCULAR_MEDICAL21" name="OCULAR_MEDICAL[]" value="21"
                                            onclick="javascript:checknogrp('21','OCULAR_MEDICAL','1','20','OCULAR_MEDICAL_Specify@@@OCULAR_MEDICAL_Specify2');">
											<label for="OCULAR_MEDICAL21">NONE</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Additional Questions -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table>
									<tr>
										<td style="width: 40%;">
											<label>Female patients - Are you pregnant?</label>
										</td>
										<td style="width: 60%;">
											<input type="radio" id="pregnant_yes" name="pregnant" value="1">
											<label for="pregnant_yes">YES</label>
											<input type="radio" id="pregnant_no" name="pregnant" value="2">
											<label for="pregnant_no">NO</label>
										</td>
									</tr>
									<tr>
										<td style="width: 40%;">
											<label>Do you use or smoke any tobacco products?</label>
										</td>
										<td style="width: 60%;">
											<input type="radio" id="tobacco_yes" name="tobacco" value="1">
											<label for="tobacco_yes">YES</label>
											<input type="radio" id="tobacco_no" name="tobacco" value="2">
											<label for="tobacco_no">NO</label>
										</td>
									</tr>
									<tr>
										<td style="width: 40%;">
											<label>Do you drink alcohol?</label>
										</td>
										<td style="width: 60%;">
											<input type="radio" id="alcohol_yes" name="alcohol" value="1">
											<label for="alcohol_yes">YES</label>
											<input type="radio" id="alcohol_no" name="alcohol" value="2">
											<label for="alcohol_no">NO</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Family Ocular and Medical History -->
						<tr>
							<td class="section-header" style="padding:0px">
								<h4>FAMILY OCULAR AND MEDICAL HISTORY</h4>
							</td>
						</tr>
						
						<!-- Family Conditions -->
						<tr style="border-bottom: 2px solid #000;">
							<td>
								<table>
									<tr>
										<td colspan="2">
											<label>Please check any condition that applies to a family member and indicate
											your relationship<span style="color: red;">*</span>:</label>
										</td>
									</tr>
									<tr>
										<td style="width: 50%;">
											<table>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL1"
                                                        name="FAMILY_OCULAR_MEDICAL1" value="1"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL1','FAMILY_OCULAR_MEDICAL_R1');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL1">DIABETES</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R1" name="FAMILY_OCULAR_MEDICAL_R1"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL1');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL2"
                                                        name="FAMILY_OCULAR_MEDICAL2" value="2"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL2','FAMILY_OCULAR_MEDICAL_R2');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL2">HIGH BLOOD PRESSURE</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R2" name="FAMILY_OCULAR_MEDICAL_R2"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL2');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL3"
                                                        name="FAMILY_OCULAR_MEDICAL3" value="3"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL3','FAMILY_OCULAR_MEDICAL_R3');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL3">HIGH CHOLESTEROL</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R3" name="FAMILY_OCULAR_MEDICAL_R3"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL3');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL4"
                                                        name="FAMILY_OCULAR_MEDICAL4" value="4"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL4','FAMILY_OCULAR_MEDICAL_R4');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL4">THYROID</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R4" name="FAMILY_OCULAR_MEDICAL_R4"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL4');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL5"
                                                        name="FAMILY_OCULAR_MEDICAL5" value="5"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL5','FAMILY_OCULAR_MEDICAL_R5');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL5">HEART PROBLEMS</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R5" name="FAMILY_OCULAR_MEDICAL_R5"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL5');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL6"
                                                        name="FAMILY_OCULAR_MEDICAL6" value="6"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL6','FAMILY_OCULAR_MEDICAL_R6');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL6">RESPIRATORY PROBLEMS</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R6" name="FAMILY_OCULAR_MEDICAL_R6"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL6');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL7"
                                                        name="FAMILY_OCULAR_MEDICAL7" value="7"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL7','FAMILY_OCULAR_MEDICAL_R7');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL7">STROKE</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R7" name="FAMILY_OCULAR_MEDICAL_R7"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL7');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL8"
                                                        name="FAMILY_OCULAR_MEDICAL8" value="8"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL8','FAMILY_OCULAR_MEDICAL_R8');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL8">CANCER</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R8" name="FAMILY_OCULAR_MEDICAL_R8"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL8');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL9"
                                                        name="FAMILY_OCULAR_MEDICAL9" value="9"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL9','FAMILY_OCULAR_MEDICAL_R9');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL9">HEADACHES</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R9" name="FAMILY_OCULAR_MEDICAL_R9"
                                                        type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL9');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL10"
                                                        name="FAMILY_OCULAR_MEDICAL10" value="10"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL10','FAMILY_OCULAR_MEDICAL_R10');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL10">HEAD / EYE INJURY</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R10"
                                                        name="FAMILY_OCULAR_MEDICAL_R10" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL10');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL11"
                                                        name="FAMILY_OCULAR_MEDICAL11" value="11"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL11','FAMILY_OCULAR_MEDICAL_R11','FAMILY_OCULAR_MEDICAL11OTHER');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL11">OTHER</label>
														<input id="FAMILY_OCULAR_MEDICAL11OTHER"
                                                        name="FAMILY_OCULAR_MEDICAL11OTHER" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL11');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="15">
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R11"
                                                        name="FAMILY_OCULAR_MEDICAL_R11" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL11');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
											</table>
										</td>
										<td style="width: 50%;">
											<table>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL12"
                                                        name="FAMILY_OCULAR_MEDICAL12" value="12"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL12','FAMILY_OCULAR_MEDICAL_R12');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL12">RETINAL DETACHMENT</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R12"
                                                        name="FAMILY_OCULAR_MEDICAL_R12" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL12');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL13"
                                                        name="FAMILY_OCULAR_MEDICAL13" value="13"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL13','FAMILY_OCULAR_MEDICAL_R13');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL13">MACULAR DEGENERATION</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R13"
                                                        name="FAMILY_OCULAR_MEDICAL_R13" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL13');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL14"
                                                        name="FAMILY_OCULAR_MEDICAL14" value="14"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL14','FAMILY_OCULAR_MEDICAL_R14');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL14">CATARACTS</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R14"
                                                        name="FAMILY_OCULAR_MEDICAL_R14" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL14');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL15"
                                                        name="FAMILY_OCULAR_MEDICAL15" value="15"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL15','FAMILY_OCULAR_MEDICAL_R15');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL15">GLAUCOMA</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R15"
                                                        name="FAMILY_OCULAR_MEDICAL_R15" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL15');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL16"
                                                        name="FAMILY_OCULAR_MEDICAL16" value="16"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL16','FAMILY_OCULAR_MEDICAL_R16');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL16">BLINDNESS / LOSS OF
														VISION</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R16"
                                                        name="FAMILY_OCULAR_MEDICAL_R16" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL16');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL17"
                                                        name="FAMILY_OCULAR_MEDICAL17" value="17"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL17','FAMILY_OCULAR_MEDICAL_R17');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL17">LAZY EYE</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R17"
                                                        name="FAMILY_OCULAR_MEDICAL_R17" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL17');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL18"
                                                        name="FAMILY_OCULAR_MEDICAL18" value="18"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL18','FAMILY_OCULAR_MEDICAL_R18');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL18">DOUBLE VISION</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R18"
                                                        name="FAMILY_OCULAR_MEDICAL_R18" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL18');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL19"
                                                        name="FAMILY_OCULAR_MEDICAL19" value="19"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL19','FAMILY_OCULAR_MEDICAL_R19');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL19">EYE SURGERY</label>
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R19"
                                                        name="FAMILY_OCULAR_MEDICAL_R19" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL19');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL20"
                                                        name="FAMILY_OCULAR_MEDICAL20" value="20"
                                                        onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL20','FAMILY_OCULAR_MEDICAL_R20','FAMILY_OCULAR_MEDICAL20OTHER');checkno('FAMILY_OCULAR_MEDICAL21');">
														<label for="FAMILY_OCULAR_MEDICAL20">OTHER</label>
														<input id="FAMILY_OCULAR_MEDICAL20OTHER"
                                                        name="FAMILY_OCULAR_MEDICAL20OTHER" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL20');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="15">
													</td>
													<td style="width: 40%;">
														<input id="FAMILY_OCULAR_MEDICAL_R20"
                                                        name="FAMILY_OCULAR_MEDICAL_R20" type="text"
                                                        onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL20');checkno('FAMILY_OCULAR_MEDICAL21');"
                                                        maxlength="20">
													</td>
												</tr>
												<tr>
													<td style="width: 60%;">
														<input type="checkbox" id="FAMILY_OCULAR_MEDICAL21"
                                                        name="FAMILY_OCULAR_MEDICAL21" value="21"
                                                        onclick="javascript:checknogrp('21','FAMILY_OCULAR_MEDICAL','1','20','FAMILY_OCULAR_MEDICAL11OTHER@@@FAMILY_OCULAR_MEDICAL20OTHER','FAMILY_OCULAR_MEDICAL_R');">
														<label for="FAMILY_OCULAR_MEDICAL21">NONE</label>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Medications and Allergies -->
						<tr>
							<td class="section-header" style="padding:0px">
								<h4>MEDICATIONS AND ALLERGIES</h4>
							</td>
						</tr>
						
						<!-- Medications -->
						<tr>
							<td>
								<label for="currently_taking_medicines">Please list all medications you are currently taking
								(including birth control, vitamins &amp; herbs):</label>
								<textarea id="currently_taking_medicines" name="currently_taking_medicines"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label for="eye_drops">Please list any eye drops you are currently using:</label>
								<textarea id="eye_drops" name="eye_drops"></textarea>
							</td>
						</tr>
						
						<!-- Allergies -->
						<tr>
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 50%;">
											Are you allergic to any medications?<span style="color: red;">*</span>
											<input type="radio" id="allergic_yes" name="allergic" value="1">
											<label for="allergic_yes">YES</label>
											<input type="radio" id="allergic_no" name="allergic" value="2"
                                            onclick="javascript:changeoption(&quot;Allergicname&quot;);">
											<label for="allergic_no">NO</label>
										</td>
										<td style="width: 50%;">
											<label for="Allergicname">IF YES, Which One?</label>
											<input type="text" id="Allergicname" name="Allergicname"
                                            onchange="javascript:checkyes('allergic_yes');">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Seasonal Allergies -->
						<tr>
							<td>
								<table class="responsive-stack">
									<tr>
										<td style="width: 50%;">
											Do you have general / seasonal allergies?<span style="color: red;">*</span>
											<input type="radio" id="seasonal_allergies_yes" name="Seasonalallergies"
                                            value="1">
											<label for="seasonal_allergies_yes">YES</label>
											<input type="radio" id="seasonal_allergies_no" name="Seasonalallergies"
                                            value="2"
                                            onclick="javascript:changeoption(&quot;Seasonalallergiesname&quot;);">
											<label for="seasonal_allergies_no">NO</label>
										</td>
										<td style="width: 50%;">
											<label for="Seasonalallergiesname">IF YES, Which One?</label>
											<input type="text" id="Seasonalallergiesname" name="Seasonalallergiesname"
                                            onchange="javascript:checkyes('seasonal_allergies_yes');">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Signature -->
						<tr>
							<td>
								<table>
									<tr>
										<td colspan="2">
											<br>
											Please sign below to indicate that all the information provided above is
											correct.<span style="color: red;">*</span>
										</td>
									</tr>
									<tr id="signArea">
										<td style="width: 50%; text-align: center;" class="sig-area">
											<canvas id="sig-canvas1" class="sig-canvas"></canvas>
											<input type="button" id="sig-clearBtn1" style="margin: 5px; padding: 8px 10px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;" value="CLEAR">
											<input type="hidden" id="sig-image1" name="sig-image1"><br>
											<input type="hidden" name="issig1" id="issig1">
											<label style="font-weight: 600;">Signature of patient (or parent/guardian if
											minor)</label>
										</td>
										<td style="width: 50%; text-align: center;" class="sig-area">
											<input type="text" class="form-control1" id="todayDate3" readonly
                                            style="text-align: center; border: none; border-bottom: 1px solid #000;" />
											<br>
											<label>DATE</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Next Button -->
						<tr style="border-bottom: 2px solid #000; text-align: center;">
							<td>
								<span id="sig-submitBtn1" class="btn">NEXT</span>
								<input type="hidden" name="formsubmit" id="formsubmit" value="1">
							</td>
						</tr>
					</table>
				</section>
			</div>
			
			
			<!-- Panel 2 - Office Policy -->
			<div id="panel_2" style="display: none;">
				<section>
					<table>
						<tr>
							<td>
								<h1 class="header-title"><u>EYE TO EYECARE OFFICE POLICY</u></h1>
							</td>
						</tr>
					</table>
					
					<table style="border: 2px solid #000; padding: 5px;">
						<!-- Financial Policy -->
						<tr>
							<td>
								<h1 style="font-size: 18px; font-family: Times New Roman, Times, serif;"><u><b>Financial
								Policy</b></u></h1>
								<p class="policy-text">
									All co-pays and payments are due at the time of service. Fees
									paid for eye examination, contact lens evaluation, medical
									services, purchase of glasses and/or contact lenses are to be
									made in FULL on the day of purchase and are <b>non-refundable.</b>
								</p>
							</td>
						</tr>
						
						<!-- Appointments -->
						<tr>
							<td>
								<h1 style="font-size: 18px; font-family: Times New Roman, Times, serif;">
									<u><b>Appointments</b></u>
								</h1>
								<p class="policy-text">
									Please help us better serve you and other patients by keeping
									your scheduled appointments. We require you to call, email, or
									message the office at least 24 hours prior to your appointment
									time if you need to cancel or reschedule your appointment. Any
									patient that comes to their appointment more than 10 minutes
									late, will be considered a "No-Show" and may need to be
									rescheduled. <b>At the Office's discretion, "No-Shows" to
										scheduled appointments or repeated rescheduling may result in
										a "Walk-In Only" status on the patient's account and a $25
										no-show fee may be assessed. Please see our "Appointments and
									Cancellations Policy" for more information.</b>
								</p>
							</td>
						</tr>
						
						<!-- Glasses -->
						<tr>
							<td>
								<h1 style="font-size: 18px; font-family: Times New Roman, Times, serif;">
									<u><b>Glasses</b></u>
								</h1>
								<p class="policy-text">
									All orders for glasses are FINAL. After your exam, you can
									return to the office within 60 days at no charge for a
									re-check with the doctor if you are experiencing any problems
									such as blurred vision, headaches, or any other discomfort. <b>After
									60 days, there is a $50 fee.</b>
								</p>
							</td>
						</tr>
						
						<!-- Manufacturer Warranty -->
						<tr>
							<td>
								<h1 style="font-size: 18px; font-family: Times New Roman, Times, serif;"><b><u>Manufacturer
								Warranty on Glasses and/or Lenses</u></b></h1>
								<p class="policy-text">
									Frames and Premium lenses that have a manufacturer's warranty
									can be replaced one time within one year of purchase upon
									approval from the manufacturer for defects. <b>A handling fee
										of $25 for will apply per frame or pair of lenses replaced.
									Some restrictions apply.</b>
								</p>
							</td>
						</tr>
						
						<!-- Contact Lenses -->
						<tr>
							<td>
								<h1 style="font-size: 18px; font-family: Times New Roman, Times, serif;"><u><b>Contact
								Lenses</b></u></h1>
								<p class="policy-text">
									All orders for contact lenses are <b>FINAL</b>. All contact
									lens follow-up visits or finalization of contact lens
									prescriptions must be done within 30 days of the Contact Lens
									Exam, unless otherwise instructed by the doctor. <b>After 30
									days, there is a $30 fee.</b>
								</p>
							</td>
						</tr>
						
						<!-- HIPAA -->
						<tr>
							<td>
								<h1
                                style="text-align: center; font-size: 18px; font-family: Times New Roman, Times, serif;">
									<u><b>HIPAA Privacy Acknowledgement of Notice of Privacy Practices</b></u>
								</h1>
								<p class="policy-text">I
									understand, acknowledge, and agree that I have received a copy
									of the Notice of Privacy Practices for review and to keep for
								my records if I desire on the date identified below.</p>
							</td>
						</tr>
						
						<!-- Access to Information -->
						<tr>
							<td>
								<h1 style="font-size: 18px; font-family: Times New Roman, Times, serif;">The following
								person (s) may have access to information in my records:</h1>
								<table class="responsive-stack">
									<tr>
										<td style="width: 32.333%;">
											<label for="AccessFirstName1">Name:</label>
											<input type="text" id="AccessFirstName1" name="AccessFirstName1">
										</td>
										<td style="width: 33.333%;">
											<label for="AccessRelation1">Relationship:</label>
											<input type="text" id="AccessRelation1" name="AccessRelation1">
										</td>
										<td style="width: 33.333%;">
											<label for="AccessPhone1">Phone Number:</label>
											<input type="text" id="AccessPhone1" name="AccessPhone1" maxlength="10">
										</td>
									</tr>
									<tr>
										<td style="width: 32.333%;">
											<label for="AccessFirstName2">Name:</label>
											<input type="text" id="AccessFirstName2" name="AccessFirstName2">
										</td>
										<td style="width: 33.333%;">
											<label for="AccessRelation2">Relationship:</label>
											<input type="text" id="AccessRelation2" name="AccessRelation2">
										</td>
										<td style="width: 33.333%;">
											<label for="AccessPhone2">Phone Number:</label>
											<input type="text" id="AccessPhone2" name="AccessPhone2" maxlength="10">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Message Permissions -->
						<tr>
							<td>
								<table>
									<tr>
										<td>
											Can we leave a detailed message with the person (s) listed above?
											<input type="radio" id="Is_Message_yes1" name="Is_Message" value="1">
											<label>YES</label>
											<input type="radio" id="Is_Message_no1" name="Is_Message" value="2">
											<label>NO</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Prescription Release -->
						<tr>
							<td>
								<table>
									<tr>
										<td>
											Can we release prescriptions and/or contacts to the person (s) listed above?
											<input type="radio" id="Is_Message_yes2" name="Is_Message2" value="1">
											<label>YES</label>
											<input type="radio" id="Is_Message_no2" name="Is_Message2" value="2">
											<label>NO</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Signature -->
						<tr>
							<td>
								<table>
									<tr>
										<td colspan="2">
											By signing below, I hereby state that I have read, understood, and will abide by
											the above office policies.<span style="color: red;">*</span><br><br>
										</td>
									</tr>
									<tr id="signArea">
										<td style="width: 50%; text-align: center;" class="sig-area">
											<canvas id="sig-canvas2" class="sig-canvas signature-area"></canvas>
											<input type="button" id="sig-clearBtn2" style="margin: 5px; padding: 8px 10px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;" value="CLEAR">
											<input type="hidden" id="sig-image2" name="sig-image2"><br>
											<input type="hidden" name="issig2" id="issig2">
											<label style="font-weight: 600;">Signature of patient (or parent/guardian if
											minor)</label>
										</td>
										<td style="width: 50%; text-align: center;" class="sig-area">
											<input type="text" class="form-control1" id="todayDate1" readonly /><br>
											<label>DATE</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Navigation Buttons -->
						<tr style="text-align: center;">
							<td>
								<span id="sig-submitBtn" class="btn" onclick="goBack(1);">PREVIOUS</span>
								<span id="sig-submitBtn2" class="btn">NEXT</span>
								<input type="hidden" name="formsubmit" id="formsubmit" value="1">
							</td>
						</tr>
					</table>
				</section>
			</div>
			
			<div id="panel_3" style="display: none;">
				<section>
					<table style="border: 2px solid #000; padding: 5px;">
						<!-- Logo -->
						<tr>
							<td style="text-align: center;">
								<img src="../EYE_TO_EYECARE.png" width="150px" height="150px" style="align: center;">
							</td>
						</tr>
						
						<!-- Appointments Policy -->
						<tr>
							<td>
								<h1
                                style="text-align: center; font-size: 18px; font-family: Times New Roman, Times, serif;">
								Appointments and Cancellations Policy</h1>
								<p class="policy-text">
									Thank you for trusting us with your Eyecare. When you schedule
									an appointment, we set aside time specifically for us to
									provide you with the highest quality of care. Should you need
									to cancel or reschedule an appointment, please contact our
									office as soon as possible, and no later than 24 hours prior
									to your scheduled appointment. This allows us to schedule
									other patients who may be waiting for an appointment.
								</p>
							</td>
						</tr>
						
						<tr>
							<td>&nbsp;</td>
						</tr>
						
						<!-- Policy Details -->
						<tr>
							<td>
								<h1
                                style="text-align: center; font-size: 18px; font-family: Times New Roman, Times, serif;">
								Please carefully review our Appointment Cancellations and No-Show policy below.</h1>
								<br>
								<p class="policy-text">
									We, at Eye to Eyecare, understand that sometimes you may need
									to cancel or reschedule your appointment. However, please
									understand that when a patient does not show up for their
									scheduled appointment, it creates an unused appointment slot
									that could have been used to allow care for another patient.
									To be fair to all of our patients, we here at Eye to Eyecare
									have instituted the following policy:
								</p>
							</td>
						</tr>
						
						<!-- Policy List -->
						<tr>
							<td>
								<ul style="list-style-type: disc; padding-left: 10% !important; text-align: left;">
									<li>Please contact the office to cancel your appointment at
										least 24 hours in advance. This will allow us to accommodate
									other patients who are seeking an appointment.</li>
									<li>If you do not cancel your appointment 24 hours in advance
										and do not present to the office for your appointment, this
										will be documented as a "No-Show" appointment and you
										will be charged a $25 No-Show Fee per incident. Please note,
										the cancellation fee amount is at the discretion of the
									office.</li>
									<li>Repeated rescheduling, in some cases even within the 24
										hours period, may result in a "Walk-In Only" status on
										the patient's account, and the $25 No-Show fee may be
									assessed.</li>
								</ul>
							</td>
						</tr>
						
						<tr>
							<td>&nbsp;</td>
						</tr>
						
						<!-- Contact Information -->
						<tr>
							<td>
								<p class="policy-text">You may contact the office at 281-565-3937, via call or texting.
									Additionally, you can also reach the office via email at <b><a
									href="mailto:Contact@EyeToEyecareTX.com">Contact@EyeToEyecareTX.com</a>.</b></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="policy-text">Thank you for your understanding of our policies.</p>
							</td>
						</tr>
						
						<tr>
							<td>&nbsp;</td>
						</tr>
						
						<!-- Signature -->
						<tr>
							<td>
								<table>
									<tr>
										<td colspan="2">
											<b>By signing below, I hereby state that I have read, understood, and will abide
											by the above Appointments and Cancellations Policy.</b><span
                                            style="color: red;">*</span><br><br>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr id="signArea">
										<td style="width: 50%; text-align: center;" class="sig-area">
											<canvas id="sig-canvas3" class="sig-canvas"></canvas>
											<input type="button" id="sig-clearBtn3" style="margin: 5px; padding: 8px 10px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;" value="CLEAR">
											<input type="hidden" id="sig-image3" name="sig-image3"><br>
											<input type="hidden" name="issig3" id="issig3">
											<label style="font-weight: 600;">Patient or Patient's Legal
											Representative</label>
										</td>
										<td style="width: 50%; text-align: center;" class="sig-area">
											<input type="text" class="form-control1" id="todayDate2" style="text-align: center;"readonly /><br>
											<label>DATE</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Navigation Buttons -->
						<tr>
							<td>
								<table>
									<tr>
										<td style="text-align: center;">
											<span id="sig-submitBtn" class="btn" onclick="goBack(2);">PREVIOUS</span>
											<span id="sig-submitBtn3" class="btn">SUBMIT</span>
											<input type="hidden" name="formsubmit" id="formsubmit" value="1">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
					</table>
				</section>
			</div>
		</form>
	</div>
	
	<script>
		
		function initcanvas(canvasID)
		{
			var canvas = document.getElementById("sig-canvas"+canvasID);
			var ctx = canvas.getContext("2d");
			ctx.strokeStyle = "#222222";
			ctx.lineWidth = 4;
			
			var drawing = false;
			var mousePos = {
				x: 0,
				y: 0
			};
			var lastPos = mousePos;
			
			canvas.addEventListener("mousedown", function(e) {
				drawing = true;
				lastPos = getMousePos(canvas, e);
			}, false);
			
			canvas.addEventListener("mouseup", function(e) {
				drawing = false;
			}, false);
			
			canvas.addEventListener("mousemove", function(e) {
				mousePos = getMousePos(canvas, e);
			}, false);
			
			// Add touch event support for mobile
			canvas.addEventListener("touchstart", function(e) {
				
			}, false);
			
			canvas.addEventListener("touchmove", function(e) {
				var touch = e.touches[0];
				var me = new MouseEvent("mousemove", {
					clientX: touch.clientX,
					clientY: touch.clientY
				});
				canvas.dispatchEvent(me);
			}, false);
			
			canvas.addEventListener("touchstart", function(e) {
				mousePos = getTouchPos(canvas, e);
				var touch = e.touches[0];
				var me = new MouseEvent("mousedown", {
					clientX: touch.clientX,
					clientY: touch.clientY
				});
				canvas.dispatchEvent(me);
			}, false);
			
			canvas.addEventListener("touchend", function(e) {
				var me = new MouseEvent("mouseup", {});
				canvas.dispatchEvent(me);
			}, false);
			
			function getMousePos(canvasDom, mouseEvent) {
				var rect = canvasDom.getBoundingClientRect();
				return {
					x: mouseEvent.clientX - rect.left,
					y: mouseEvent.clientY - rect.top
				}
			}
			
			function getTouchPos(canvasDom, touchEvent) {
				var rect = canvasDom.getBoundingClientRect();
				return {
					x: touchEvent.touches[0].clientX - rect.left,
					y: touchEvent.touches[0].clientY - rect.top
				}
			}
			
			function renderCanvas() {
				if (drawing) {
					ctx.moveTo(lastPos.x, lastPos.y);
					ctx.lineTo(mousePos.x, mousePos.y);
					ctx.stroke();
					lastPos = mousePos;
				}
			}
			
			// Prevent scrolling when touching the canvas
			document.body.addEventListener("touchstart", function(e) {
				if (e.target == canvas) {
					e.preventDefault();
				}
			}, false);
			document.body.addEventListener("touchend", function(e) {
				if (e.target == canvas) {
					e.preventDefault();
				}
			}, false);
			document.body.addEventListener("touchmove", function(e) {
				if (e.target == canvas) {
					e.preventDefault();
				}
			}, false);
			
			(function drawLoop() {
				requestAnimFrame(drawLoop);
				renderCanvas();
			})();
			
			function clearCanvas() {
				ctx.clearRect(0, 0, canvas.width, canvas.height);
				ctx.beginPath();//ADD THIS LINE!<<<<<<<<<<<<<
				ctx.moveTo(0,0);
				ctx.stroke();
			}
			
			// Set up the UI
			var sigText = document.getElementById("issig"+canvasID);
			var sigImage = document.getElementById("sig-image"+canvasID);
			var clearBtn = document.getElementById("sig-clearBtn"+canvasID);
			var submitBtn = document.getElementById("sig-submitBtn"+canvasID);
			clearBtn.addEventListener("click", function(e) {
				clearCanvas();
				//sigText.innerHTML = "Data URL for your signature will go here!";
				sigImage.setAttribute("value", "");
			}, false);
			submitBtn.addEventListener("click", function(e) {
				var issig=1;
				const blank = document.createElement('canvas');
				
				blank.width = canvas.width;
				blank.height = canvas.height;
				if( canvas.toDataURL() === blank.toDataURL())
				{
					issig=2;
				}
				sigText.value = issig;	
				var dataUrl = canvas.toDataURL();
				// sigText.innerHTML = dataUrl;		
				sigImage.setAttribute("value", dataUrl);
				if(canvasID==2){checkpaientform2();}
				else{checkpaientform1();}
			}, false);
		}
		(function() {
			window.requestAnimFrame = (function(callback) {
				return window.requestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame ||
				window.oRequestAnimationFrame ||
				window.msRequestAnimaitonFrame ||
				function(callback) {
					window.setTimeout(callback, 1000 / 60);
				};
			})();
			initcanvas(1);initcanvas(2);	 
		})();	
	</script>

<!-- mobile script -->
	<script>
		const today = new Date();
        const formattedDate = `${(today.getMonth() + 1).toString().padStart(2, '0')}/${today.getDate().toString().padStart(2, '0')
		}/${today.getFullYear()}`;
        document.getElementById('todayDate').value = formattedDate;
		
		
        const today1 = new Date();
        const formattedDate1 = `${(today.getMonth() + 1).toString().padStart(2, '0')}/${today.getDate().toString().padStart(2, '0')
		}/${today.getFullYear()}`;
        document.getElementById('todayDate1').value = formattedDate1;
		
		const todayDate2 = new Date();
        const formattedDate2 = `${(today.getMonth() + 1).toString().padStart(2, '0')}/${today.getDate().toString().padStart(2, '0')
		}/${today.getFullYear()}`;
        document.getElementById('todayDate2').value = formattedDate2;
		
		const todayDate3 = new Date();
        const formattedDate3 = `${(today.getMonth() + 1).toString().padStart(2, '0')}/${today.getDate().toString().padStart(2, '0')
		}/${today.getFullYear()}`;
        document.getElementById('todayDate3').value = formattedDate2;
	</script>
	<?php include("model.php");?>
	<!-- The Modal -->
	<div id="myModal" class="modal">
		
		<!-- Modal content -->
		<div class="modal-content">
			<!-- <span class="close" id='cls'>&times;</span>-->
			<p id='cntenable' style='display: none;'></p>
			<p id='cntpart'></p>
			<button id="myBtn">OK</button>
		</div>
		
	</div>
	<div id="myModalsub" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<!-- <span class="close" id='cls'>&times;</span>-->
			<p id='cntpartsub'></p>
			<div>
				<button id="myBtnsubok" onclick='loadingandsub();'
				style='cursor: pointer;'>OK</button>
				<button id="myBtnsubcancel" style='cursor: pointer;'>CANCEL</button>
			</div>
		</div>
		
	</div>
	<?php
		get_footer();