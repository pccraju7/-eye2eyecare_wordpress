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

<!-- Page Header Start -->
    	 <section class="hero1">
		<div class="container hero-content">
			<h1 data-aos="zoom-in-up" data-aos-duration="1000">Patient Forms</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤ Patient Forms</p>
			
		</div>
	</section>
<section class="wrapper1 wow fadeInUp">

<div class="container">
    <div class="row justify-content-center">

		<div class="col-lg-10 align-self-center contact-form ">
			<p>Eye To Eyecare strives to make your visit as efficient as
				possible. Our patient forms can be downloaded by clicking on an icon
				below. Please fill out the forms and bring with you on your visit.</p>
			<p></br>
				If you have any questions about this form, please contact us and we
				will respond to your inquiry. Thanks for choosing Eye To Eyecare for
				your eyecare needs!<br />

			</p>


		</div>
			</div>

</section>
        <form name='patientform' id='patientform' method='post' onsubmit='javascript:return checkpaientform1();'>
		<div id='panel_1'>
			<section
				style="width:800px; margin: 0px auto; padding: 15px; background-color: #fff;">
			<table width="100%" bgcolor="#fff" align="center" cellspacing="0"
				cellpadding="0" style="font-family: Arial, Helvetica, sans-serif;">
				<tr>
					<td>
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%;">
										<h1
											style="margin-bottom: 0px; font-size: 30px; margin-top: 20px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;">EYE
											TO EYECARE</h1>
										<h2
											style="margin-bottom: 0px; font-size: 20px; margin-bottom: 20px; margin-top: 10px; font-weight: 400; color: #000; padding: 0px; font-family: Arial, Helvetica, sans-serif;">Registration
											Form</h2>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</table>


			<table width="100%" bgcolor="#fff" align="center" cellspacing="0"
				cellpadding="0"
				style="font-family: Arial, Helvetica, sans-serif; border: 2px solid #000">
				<tr
					style="border-bottom: 2px solid #000; display: block; background-color: #c0c0c0; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 15px; margin-top: 0px; color: #000; padding: 0px; font-family: Arial, Helvetica, sans-serif;">PATIENT
											INFORMATION</h1>

									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr style="border-bottom: 2px solid #000; display: block;">
					<td style="display: block">
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; width: 100%; padding: 5px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
										TODAY's DATE: <input
										style="width: 20%; border: 0px; border-bottom: 1px solid #000; font-weight: bold;"
										type="text" class="form-control1" id="exampleInputEmail1"
										value="06/18/2025" readonly>
									
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td
										style="padding: 0px; font-size: 12px; width: 20%; border-right: 2px solid #000;">
										<label for="Firstname" style='padding-left: 5px;'>Gender<span
											style='font-size: 10px; color: red;'>*</span></label><br /> <input
										type="radio" name="optionsRadios" id="Gender2" value="Male"> <label
											style="font-size: 10px;" for="Gender2">Male</label> <br /> <input
											type="radio" name="optionsRadios" id="Gender1" value="Female">
												<label style="font-size: 10px;" for="Gender1">Female</label>
									
									</td>

									<td style="padding: 5px; font-size: 12px; width: 13%;"><label
										for="Firstname">First Name<span
											style='font-size: 10px; color: red;'>*</span>:
									</label><br /> <input
										style="border: 0px; border-bottom: 1px solid #000;"
										style="width: 98%;" type="text" id="Firstname"
										name='Firstname'></td>
									<td style="padding: 5px; font-size: 12px; width: 13%;"><label
										for="Middlename">Middle Name:</label><br /> <input
										style="border: 0px; border-bottom: 1px solid #000;"
										style="width: 98%;" type="text" id="Middlename"
										name='Middlename'></td>
									<td
										style="padding: 5px; font-size: 12px; width: 13%; border-right: 2px solid #000;">
										<label for="Lastname">Last Name<span
											style='font-size: 10px; color: red;'>*</span>:
									</label><br /> <input
										style="border: 0px; border-bottom: 1px solid #000;"
										style="width: 98%;" type="text" id="Lastname" name="Lastname">
									
									</td>
									<td style="padding: 5px; font-size: 12px; width: 41%;"><label
										for="SSV">SSN:</label> <input
										style="width: 30px; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="SSN1" name="SSN1"
										onkeyup="movetoNext(this, 'SSN2')" maxlength="3"> - <input
											style="width: 20px; border: 0px; border-bottom: 1px solid #000;"
											type="text" id="SSN2" name="SSN2"
											onkeyup="movetoNext(this, 'SSN3')" maxlength="2"> - <input
												style="border: 0px; width: 40px; border-bottom: 1px solid #000;"
												type="text" id="SSN3" name="SSN3" maxlength="4"
												onkeyup="movetoNext(this, '')"><br /> <label>DOB<span
														style='font-size: 10px; color: red;'>*</span>:
												</label> <input
													style="width: 77%; margin-top: 3px; border: 0px; border-bottom: 1px solid #000;"
													width="100%;" type="date"
													onchange='javascript:getAge(this);' id='DOB' name='DOB'><br />
														<label for="age">Age<span
															style='font-size: 10px; color: red;'>*</span>:
													</label><input
														style="border: 0px; border-bottom: 1px solid #000; width: 30px;"
														type="text" id="Age" name='Age' placeholder="" readonly></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>


				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">


									<td
										style="padding: 5px; font-size: 12px; width: 50%; border-right: 2px solid #000;">
										<label for="Streetaddress">Street Address<span
											style='font-size: 10px; color: red;'>*</span>:
									</label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Streetaddress" name="Streetaddress">
									
									</td>
									<td
										style="padding: 5px; font-size: 12px; width: 30%; border-right: 2px solid #000;">
										<label for="Citystate">City/State<span
											style='font-size: 10px; color: red;'>*</span>:
									</label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Citystate" name="Citystate">
									
									</td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><label
										for="Zipcode">Zip Code<span
											style='font-size: 10px; color: red;'>*</span>:
									</label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Zipcode" name="Zipcode" maxlength="6"
										onkeyup="javascript:movetoNext(this, '');"></td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">


									<td
										style="padding: 5px; font-size: 12px; width: 33.33333%; border-right: 2px solid #000;">
										<label for="Homephone">Home Phone<span
											style='font-size: 10px; color: red;'>*</span>:
									</label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Homephone" name="Homephone" maxlength="10"
										onkeyup="javascript:movetoNext(this, '');">
									
									</td>
									<td
										style="padding: 5px; font-size: 12px; width: 33.33333%; border-right: 2px solid #000;">
										<label for="Cellphone">Cell Phone<span
											style='font-size: 10px; color: red;'>*</span>:
									</label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Cellphone" name="Cellphone" maxlength="10"
										onkeyup="javascript:movetoNext(this, '');">
									
									</td>
									<td style="padding: 5px; font-size: 12px; width: 33.33333%;"><label
										for="Workphone">Work Phone:</label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Workphone" name="Workphone"
										onkeyup="javascript:movetoNext(this, '');" maxlength="10"></td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">


									<td
										style="padding: 5px; font-size: 12px; width: 33.33333%; border-right: 2px solid #000;">
										<label for="Occupation">Occupation<span
											style='font-size: 10px; color: red;'>*</span>:
									</label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Occupation" name="Occupation">
									
									</td>
									<td
										style="padding: 5px; font-size: 12px; width: 33.33333%; border-right: 2px solid #000;">
										<label for="employer">Employer: </label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Employer" name="Employer">
									
									</td>
									<td style="padding: 5px; font-size: 12px; width: 33.33333%;"><label
										for="Emailaddress">Email Address<span
											style='font-size: 10px; color: red;'>*:</label><br /> <input
										style="width: 98%; border: 0px; border-bottom: 1px solid #000;"
										type="email" id="Emailaddress" name="Emailaddress"></td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 20%;">Check
										appropriate box<span style='font-size: 10px; color: red;'>*</span>
									</td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><input
										type="radio" id="margstatus1" name="Margstatus" value="SINGLE">
											<label for="margstatus1">SINGLE</label></td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><input
										type="radio" id="margstatus2" name="Margstatus"
										value="MARRIED"> <label for="margstatus2"> MARRIED</label></td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><input
										type="radio" id="margstatus3" name="Margstatus"
										value="DIVORCED"> <label for="margstatus3"> DIVORCED</label></td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><input
										type="radio" id="margstatus4" name="Margstatus"
										value="WIDOWED"> <label for="margstatus4"> WIDOWED</label></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>


				<tr
					style="border-bottom: 2px solid #000; display: block; background-color: #c0c0c0; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 15px; margin-top: 0px; color: #000; padding: 0px; font-family: Arial, Helvetica, sans-serif;">How
											Did You Hear About Us?</h1>

									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">

									<td style="padding: 5px; font-size: 12px; width: 15%;"><input
										type="radio" id="website" name="Youhear" value="1"
										onclick="javascript:document.getElementById('referralPerson').value='';">
											<label for="website"> WEBSITE </label></td>
									<td style="padding: 5px; font-size: 12px; width: 15%;"><input
										type="radio" id=" MAILOUT" name="Youhear" value="2"
										onclick="javascript:document.getElementById('referralPerson').value='';">
											<label for=" MAILOUT"> MAIL OUT</label></td>
									<td style="padding: 5px; font-size: 12px; width: 15%;"><input
										type="radio" id="LOCATION" name="Youhear" value="3"
										onclick="javascript:document.getElementById('referralPerson').value='';">
											<label for="LOCATION"> LOCATION </label></td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><input
										type="radio" id=" INSURANCEPLAN " name="Youhear" value="4"
										onclick="javascript:document.getElementById('referralPerson').value='';">
											<label for=" INSURANCEPLAN "> INSURANCE PLAN </label></td>
									<td style="padding: 5px; font-size: 12px; width: 45%;"><input
										type="radio" id="REFERRALBY" name="Youhear" value="5"> <label
											for=" REFERRALBY "> REFERRAL BY </label> <input
											style="border: 0px; border-bottom: 1px solid #000; width: 55%;"
											type="text" id="referralPerson" name="referralPerson"
											onchange="javascript:checkyes('REFERRALBY');"></td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="border-bottom: 2px solid #000; display: block; background-color: #c0c0c0; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 15px; margin-top: 0px; color: #000; padding: 0px; font-family: Arial, Helvetica, sans-serif;">VISION
											AND MEDICAL INSURANCE INFORMATION</h1>

									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 40%;">Do you
										have Vision Insurance?<span
										style='font-size: 10px; color: red;'>*</span> <input
										type="radio" id="Vision_Insurance_yes" name="Visioninsurance"
										value="1"> <label for=" Vision_Insurance_yes"> YES </label> <input
											type="radio" id="Vision_Insurance_no" name="Visioninsurance"
											value="2"
											onclick='javascript:changeoption("Visioninsurancename@@VisioninsuranceDOB@@VisioninsuranceSSN");'>
												<label for="Vision_Insurance_no"> NO </label>
									
									</td>
									<td style="padding: 5px; font-size: 12px; width: 60%;"><label
										for="Visioninsurancename">IF YES, Which One?</label> <input
										style="width: 73%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Visioninsurancename"
										name="Visioninsurancename"
										onchange="javascript:checkyes('Vision_Insurance_yes');"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 100%;"><label
										for="VisioninsuranceDOB"> Name of Primary Insurance Holder &
											Date of Birth: </label> <input
										style="width: 63%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="VisioninsuranceDOB" name="VisioninsuranceDOB"
										onchange="javascript:checkyes('Vision_Insurance_yes');"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">


									<td style="padding: 5px; font-size: 12px; width: 100%;"><label
										for="VisioninsuranceSSN">Primary Holder ID or SSN #: </label>

										<input
										style="width: 59%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="VisioninsuranceSSN" name="VisioninsuranceSSN"
										onchange="javascript:checkyes('Vision_Insurance_yes');validateSSN('VisioninsuranceSSN');"
										maxlength="13"></td>


								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 40%;">Do you
										have Medical Insurance?<span
										style='font-size: 10px; color: red;'>*</span> <input
										type="radio" id="Medical_Insurance_yes"
										name="Medicalinsurance" value="1"> <label
											for="Medical_Insurance_yes"> YES </label> <input type="radio"
											id="Medical_Insurance_no" name="Medicalinsurance" value="2"
											onclick='javascript:changeoption("Medicalinsurancename@@MedicalinsuranceDOB@@MedicalinsuranceSSN");'>
												<label for="Medical_Insurance_no"> NO </label>
									
									</td>
									<td style="padding: 5px; font-size: 12px; width: 60%;"><label
										for="Medicalinsurancename">IF YES, Which One?</label> <input
										style="width: 73%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Medicalinsurancename"
										name="Medicalinsurancename"
										onchange="javascript:checkyes('Medical_Insurance_yes');"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 100%;"><label
										for="MedicalinsuranceDOB">Name of Primary Insurance Holder &
											Date of Birth:</label> <input
										style="width: 63%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="MedicalinsuranceDOB"
										name="MedicalinsuranceDOB"
										onchange="javascript:checkyes('Medical_Insurance_yes');"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 100%;"><label
										for="MedicalinsuranceSSN">Primary Holder ID or SSN #: </label>
										<input
										style="width: 59%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="MedicalinsuranceSSN"
										name="MedicalinsuranceSSN"
										onchange="javascript:checkyes('Medical_Insurance_yes');validateSSN('MedicalinsuranceSSN');"
										maxlength="13"></td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="border-bottom: 2px solid #000; display: block; background-color: #c0c0c0; text-align: center;">
					<td style="display: block">
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 15px; margin-top: 0px; color: #000; padding: 0px; font-family: Arial, Helvetica, sans-serif;">OCULAR
											HEALTH</h1>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 30%;"><label
										for="Reasontodayexam"> What is the reason for today's Exam?<span
											style='font-size: 10px; color: red;'>*</span>
									</label></td>
									<td style="padding: 5px; font-size: 12px; width: 70%;"><input
										style="width: 100%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Reasontodayexam" name="Reasontodayexam"></td>
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 30%;"><label
										for="Lasteyeexam">When was your last eye exam?<span
											style='font-size: 10px; color: red;'>*</span></label></td>
									<td style="padding: 5px; font-size: 12px; width: 70%;"><input
										style="width: 100%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Lasteyeexam" name="Lasteyeexam"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">

									<td style="padding: 5px; font-size: 12px; width: 40%;">What do
										you primarily use to correct your Vision?<span
										style='font-size: 10px; color: red;'>*</span>

									</td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><input
										type="checkbox" id="Correctprimaryvision1"
										name="Correctprimaryvision[]" value="1"
										onclick="javascript:checkno('Correctprimaryvision3');"> <label
											for=" GLASSES ">GLASSES </label></td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><input
										type="checkbox" id="Correctprimaryvision2"
										name="Correctprimaryvision[]" value="2"
										onclick="javascript:checkno('Correctprimaryvision3');"> <label
											for=" CONTACTS ">CONTACTS </label></td>
									<td style="padding: 5px; font-size: 12px; width: 20%;"><input
										type="checkbox" id="Correctprimaryvision3"
										name="Correctprimaryvision[]" value="3"
										onclick="javascript:checkno('Correctprimaryvision1');checkno('Correctprimaryvision2');">
											<label for=" NONE ">NONE </label></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="font-size: 12px; width: 50%;">
										<table cellspacing="0" cellpadding="0"
											style="display: inline-table; ! important; width: 100%;">
											<tbody style="width: 100%; display: inline-table;">
												<tr style="">
													<td style="padding: 5px; font-size: 12px; width: 70%;"></td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><label
														for=" GLASSES ">YES</label></td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><label
														for=" GLASSES ">NO</label></td>
												</tr>
												<tr>
													<td
														style="padding: 5px; font-size: 12px; width: 70%; text-align: right;">
														Do you wear glasses?<span
														style='font-size: 10px; color: red;'>*</span>
													</td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id="wear_glasses1" name="Wearglasses"
														value="1"></td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id="wear_glasses2" name="Wearglasses"
														value="2"
														onclick="javascript:checkno('vision-issue1');checkno('vision-issue2');checkno('vision-issue3');checkno('vision-issue4');"></td>
												</tr>
												<tr>
													<td
														style="padding: 5px; font-size: 12px; width: 70%; text-align: right;">
														Do you wear contacts?<span
														style='font-size: 10px; color: red;'>*</span>
													</td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id="wear_contacts1" name="Wearcontacts"
														value="1"></td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id="wear_contacts2" name="Wearcontacts"
														value="2"
														onclick="javascript:clearcheckno('wear_contacts2','Wearcontactreason');"></td>
												</tr>

												<tr style="">
													<td
														style="padding: 5px; font-size: 12px; width: 70%; text-align: right;">
														Do you take eye drops?<span
														style='font-size: 10px; color: red;'>*</span>
													</td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id="eye_drops1" name="Eyedrops" value="1"></td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id="eye_drops2" name="Eyedrops" value="2"
														onclick="javascript:clearcheckno('eye_drops2','Takeeyedrops');"></td>
												</tr>

												<tr style="">
													<td
														style="padding: 5px; font-size: 12px; width: 70%; text-align: right;">
														Would you like to try contacts?<span
														style='font-size: 10px; color: red;'>*</span>
													</td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id=" try_contacts1 " name="Trycontacts"
														value="1"></td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id=" try_contacts2 " name="Trycontacts"
														value="2"></td>
												</tr>

												<tr style="">
													<td
														style="padding: 5px; font-size: 12px; width: 70%; text-align: right;">
														Would you like laser vision correction?<span
														style='font-size: 10px; color: red;'>*</span>
													</td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id=" vision_correction1 "
														name="Visioncorrection" value="1"></td>
													<td style="padding: 5px; font-size: 12px; width: 15%;"><input
														type="radio" id=" vision_correction2 "
														name="Visioncorrection" value="2"></td>
												</tr>

											</tbody>
										</table>

									</td>

									<td style="font-size: 12px; width: 50%; vertical-align: top;">
										<table cellspacing="0" cellpadding="0"
											style="display: inline-table; ! important; width: 100%;">
											<tbody style="width: 100%; display: inline-table;">
												<tr style="">
													<td
														style="padding: 3px; height: 19.5px; font-size: 12px; width: 100%;">
												
												</tr>
												<tr style="">
													<td style="padding: px; font-size: 12px; width: 100%;">If
														yes, for <input type="checkbox" id="vision-issue1"
														name="Visionissue[]" value="Distance"
														onclick="javascript:checkyes('wear_glasses1');"> <label
															for="vision-issue1" style="font-size: 11px;">Distance</label>
															<input type="checkbox" id="vision-issue2"
															name="Visionissue[]" value="Reading"
															onclick="javascript:checkyes('wear_glasses1');"> <label
																for="vision-issue2" style="font-size: 11px;">Reading</label>
																<input type="checkbox" id="vision-issue3"
																name="Visionissue[]" value="Computer"
																onclick="javascript:checkyes('wear_glasses1');"> <label
																	for="vision-issue3" style="font-size: 11px;">Computer</label>
																	<input type="checkbox" id="vision-issue4"
																	name="Visionissue[]" value="Full Time"
																	onclick="javascript:checkyes('wear_glasses1');"> <label
																		for="vision-issue4" style="font-size: 11px;">Full Time</label>
													
													</td>
												</tr>
												<tr style="">
													<td
														style="padding: 10px 0px; font-size: 12px; width: 100%;">
														<label for="Wearcontactreason">If yes, what type?</label>
														<input id="Wearcontactreason" name="Wearcontactreason"
														style="width: 50%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('wear_contacts1');">
												
												</tr>
												<tr style="">
													<td style="padding: 0px 0px; font-size: 12px; width: 100%;">
														<label for="Takeeyedrops">If yes, what type?</label> <input
														id="Takeeyedrops" name="Takeeyedrops"
														style="width: 50%; border: 0px; border-bottom: 1px solid #000;"
														type="text" onchange="javascript:checkyes('eye_drops1');">
												
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="display: block; border-bottom: 2px solid #000; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td colspan="4"
										style="padding: 5px; font-size: 12px; width: 25%;"><br />
										Please check any symptoms you may be experiencing<span
										style='font-size: 10px; color: red;'>*</span>:</td>
								</tr>
								<tr
									style="width: 100%; display: inline-table; vertical-align: top;">
									<td style="padding: 5px; font-size: 12px; width: 25%;"><input
										type="checkbox" id="vision-problem1" name="problem[]"
										value="Blurred Vision"
										onclick='javascript:checkno("vision-problem26");'> <label
											for="vision-problem1"> Blurred Vision </label><br /> <input
											type="checkbox" id="vision-problem2" name="problem[]"
											value="Discharge"
											onclick='javascript:checkno("vision-problem26");'> <label
												for="vision-problem2"> Discharge </label><br /> <input
												type="checkbox" id="vision-problem3" name="problem[]"
												value="Eye Pain"
												onclick='javascript:checkno("vision-problem26");'> <label
													for="vision-problem3"> Eye Pain </label><br /> <input
													type="checkbox" id="vision-problem4" name="problem[]"
													value="Dryness"
													onclick='javascript:checkno("vision-problem26");'> <label
														for="vision-problem4"> Dryness </label><br /> <input
														type="checkbox" id="vision-problem5" name="problem[]"
														value="Tearing/Watering"
														onclick='javascript:checkno("vision-problem26");'> <label
															for="vision-problem5"> Tearing/Watering </label><br /> <input
															type="checkbox" id="vision-problem6" name="problem[]"
															value="Burning"
															onclick='javascript:checkno("vision-problem26");'> <label
																for="vision-problem6"> Burning </label><br /> <input
																type="checkbox" id="vision-problem7" name="problem[]"
																value="Eye Pain"
																onclick='javascript:checkno("vision-problem26");'> <label
																	for="vision-problem7"> Eye Pain </label></td>

									<td style="padding: 5px; font-size: 12px; width: 25%;"><input
										type="checkbox" id="vision-problem8" name="problem[]"
										value="Red Eyes"
										onclick='javascript:checkno("vision-problem26");'> <label
											for="vision-problem8"> Red Eyes </label><br /> <input
											type="checkbox" id="vision-problem9" name="problem[]"
											value="Sandy / Gritty"
											onclick='javascript:checkno("vision-problem26");'> <label
												for="vision-problem9"> Sandy / Gritty </label><br /> <input
												type="checkbox" id="vision-problem10" name="problem[]"
												value="Foreign Object Sensation"
												onclick='javascript:checkno("vision-problem26");'> <label
													for="vision-problem10"> Foreign Object Sensation </label><br />
													<input type="checkbox" id="vision-problem11"
													name="problem[]" value="Irritation"
													onclick='javascript:checkno("vision-problem26");'> <label
														for="vision-problem11"> Irritation </label><br /> <input
														type="checkbox" id="vision-problem12" name="problem[]"
														value="Eye Strain"
														onclick='javascript:checkno("vision-problem26");'> <label
															for="vision-problem12"> Eye Strain </label><br /> <input
															type="checkbox" id="vision-problem13" name="problem[]"
															value="Difficulty driving at night"
															onclick='javascript:checkno("vision-problem26");'> <label
																for="vision-problem13"> Difficulty driving at night </label><br />
																<input type="checkbox" id="vision-problem14"
																name="problem[]" value="Glare"
																onclick='javascript:checkno("vision-problem26");'> <label
																	for="vision-problem14"> Glare </label></td>

									<td style="padding: 5px; font-size: 12px; width: 25%;"><input
										type="checkbox" id="vision-problem15" name="problem[]"
										value="Light Sensitivity"
										onclick='javascript:checkno("vision-problem26");'> <label
											for="vision-problem15"> Light Sensitivity </label><br /> <input
											type="checkbox" id="vision-problem16" name="problem[]"
											value="Flashes of Light"
											onclick='javascript:checkno("vision-problem26");'> <label
												for="vision-problem16"> Flashes of Light </label><br /> <input
												type="checkbox" id="vision-problem17" name="problem[]"
												value="Floating Spots"
												onclick='javascript:checkno("vision-problem26");'> <label
													for="vision-problem17"> Floating Spots </label><br /> <input
													type="checkbox" id="vision-problem18" name="problem[]"
													value="Distorted Vision"
													onclick='javascript:checkno("vision-problem26");'> <label
														for="vision-problem18"> Distorted Vision </label><br /> <input
														type="checkbox" id="vision-problem19" name="problem[]"
														value="Fluctuating Vision"
														onclick='javascript:checkno("vision-problem26");'> <label
															for="vision-problem19"> Fluctuating Vision </label><br />
															<input type="checkbox" id="vision-problem20"
															name="problem[]" value="Loss of Vision"
															onclick='javascript:checkno("vision-problem26");'> <label
																for="vision-problem20"> Loss of Vision </label><br /></td>

									<td style="padding: 5px; font-size: 12px; width: 25%;"><input
										type="checkbox" id="vision-problem21" name="problem[]"
										value="Loss of side vision"
										onclick='javascript:checkno("vision-problem26");'> <label
											for="vision-problem21"> Loss of side vision </label><br /> <input
											type="checkbox" id="vision-problem22" name="problem[]"
											value="Double Vision"
											onclick='javascript:checkno("vision-problem26");'> <label
												for="vision-problem22"> Double Vision </label><br /> <input
												type="checkbox" id="vision-problem23" name="problem[]"
												value="Sties / Chalazion"
												onclick='javascript:checkno("vision-problem26");'> <label
													for="vision-problem23"> Sties / Chalazion </label><br /> <input
													type="checkbox" id="vision-problem24" name="problem[]"
													value="Eye Injury"
													onclick='javascript:checkno("vision-problem26");'> <label
														for="vision-problem24"> Eye Injury </label><br /> <input
														type="checkbox" id="vision-problem25" name="problem[]"
														value="Other"
														onclick="javascript:clearcheckno('vision-problem25','other_symptoms');checkno('vision-problem26')">
															<label for="vision-problem25"> Other </label> <input
															id="other_symptoms" name="other_symptoms"
															style="width: 60%; border: 0px; border-bottom: 1px solid #000;"
															type="text"
															onchange="javascript:checkyes('vision-problem25');checkno('vision-problem26');"></br>
																<input type="checkbox" id="vision-problem26"
																name="problem[]" value="None"
																onclick="javascript:checknogrp('26','vision-problem','1','25','other_symptoms');">
																	<label for="vision-problem25"> None </label></td>
								</tr>

							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="border-bottom: 2px solid #000; display: block; background-color: #c0c0c0; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 15px; margin-top: 0px; color: #000; padding: 0px; font-family: Arial, Helvetica, sans-serif;">OCULAR
											AND MEDICAL HISTORY</h1>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td colspan="4"
										style="padding: 5px; font-size: 12px; width: 25%;"><br />
										Please check any condition that applies to you<span
										style='font-size: 10px; color: red;'>*</span>:</td>
								</tr>

								<tr
									style="width: 100%; display: inline-table; vertical-align: top;">
									<td style="padding: 5px; font-size: 12px; width: 50%;"><input
										type="checkbox" id="OCULAR_MEDICAL1" name="OCULAR_MEDICAL[]"
										value="1" onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
											for="OCULAR_MEDICAL1"> DIABETES </label><br /> <input
											type="checkbox" id="OCULAR_MEDICAL2" name="OCULAR_MEDICAL[]"
											value="2" onclick='javascript:checkno("OCULAR_MEDICAL21");'>
												<label for="OCULAR_MEDICAL2"> HIGH BLOOD PRESSURE </label><br />
												<input type="checkbox" id="OCULAR_MEDICAL3"
												name="OCULAR_MEDICAL[]" value="3"
												onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
													for="OCULAR_MEDICAL3"> HIGH CHOLESTEROL </label><br /> <input
													type="checkbox" id="OCULAR_MEDICAL4"
													name="OCULAR_MEDICAL[]" value="4"
													onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
														for="OCULAR_MEDICAL4"> THYROID </label><br /> <input
														type="checkbox" id="OCULAR_MEDICAL5"
														name="OCULAR_MEDICAL[]" value="5"
														onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
															for="OCULAR_MEDICAL5"> HEART PROBLEMS </label><br /> <input
															type="checkbox" id="OCULAR_MEDICAL6"
															name="OCULAR_MEDICAL[]" value="6"
															onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
																for="OCULAR_MEDICAL6"> RESPIRATORY PROBLEMS </label><br />
																<input type="checkbox" id="OCULAR_MEDICAL7"
																name="OCULAR_MEDICAL[]" value="7"
																onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
																	for="OCULAR_MEDICAL7"> STROKE </label><br /> <input
																	type="checkbox" id="OCULAR_MEDICAL8"
																	name="OCULAR_MEDICAL[]" value="8"
																	onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
																		for="OCULAR_MEDICAL8"> CANCER </label><br /> <input
																		type="checkbox" id="OCULAR_MEDICAL9"
																		name="OCULAR_MEDICAL[]" value="9"
																		onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
																			for="OCULAR_MEDICAL9"> HEADACHES </label><br /> <input
																			type="checkbox" id="OCULAR_MEDICAL10"
																			name="OCULAR_MEDICAL[]" value="10"
																			onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
																				for="OCULAR_MEDICAL10"> HEAD / EYE INJURY </label><br />
																				<input type="checkbox" id="OCULAR_MEDICAL11"
																				name="OCULAR_MEDICAL[]" value="11"
																				onclick="javascript:clearcheckno('OCULAR_MEDICAL11','OCULAR_MEDICAL_Specify');checkno('OCULAR_MEDICAL21');">
																					<label for="OCULAR_MEDICAL11"> OTHER </label> <input
																					id="OCULAR_MEDICAL_Specify"
																					name="OCULAR_MEDICALSPECIFY"
																					style="width: 50%; border: 0px; border-bottom: 1px solid #000;"
																					type="text"
																					onchange="javascript:checkyes('OCULAR_MEDICAL11');checkno('OCULAR_MEDICAL21');"
																					maxlength="20"></td>

									<td style="padding: 5px; font-size: 12px; width: 50%;"><input
										type="checkbox" id="OCULAR_MEDICAL12" name="OCULAR_MEDICAL[]"
										value="12" onclick='javascript:checkno("OCULAR_MEDICAL21");'>
											<label for="OCULAR_MEDICAL12"> RETINAL DETACHMENT </label><br />
											<input type="checkbox" id="OCULAR_MEDICAL13"
											name="OCULAR_MEDICAL[]" value="13"
											onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
												for="OCULAR_MEDICAL13"> MACULAR DEGENERATION </label><br />
												<input type="checkbox" id="OCULAR_MEDICAL14"
												name="OCULAR_MEDICAL[]" value="14"
												onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
													for="OCULAR_MEDICAL14"> CATARACTS </label><br /> <input
													type="checkbox" id="OCULAR_MEDICAL15"
													name="OCULAR_MEDICAL[]" value="15"
													onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
														for="OCULAR_MEDICAL15"> GLAUCOMA </label><br /> <input
														type="checkbox" id="OCULAR_MEDICAL16"
														name="OCULAR_MEDICAL[]" value="16"
														onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
															for="OCULAR_MEDICAL16"> BLINDNESS / LOSS OF VISION </label><br />
															<input type="checkbox" id="OCULAR_MEDICAL17"
															name="OCULAR_MEDICAL[]" value="17"
															onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
																for="OCULAR_MEDICAL17"> LAZY EYE </label><br /> <input
																type="checkbox" id="OCULAR_MEDICAL18"
																name="OCULAR_MEDICAL[]" value="18"
																onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
																	for="OCULAR_MEDICAL18"> DOUBLE VISION </label><br /> <input
																	type="checkbox" id="OCULAR_MEDICAL19"
																	name="OCULAR_MEDICAL[]" value="19"
																	onclick='javascript:checkno("OCULAR_MEDICAL21");'> <label
																		for="OCULAR_MEDICAL19"> EYE SURGERY </label><br /> <input
																		type="checkbox" id="OCULAR_MEDICAL20"
																		name="OCULAR_MEDICAL[]" value="20"
																		onclick="javascript:clearcheckno('OCULAR_MEDICAL20','OCULAR_MEDICAL_Specify2');checkno('OCULAR_MEDICAL21');">
																			<label for="OCULAR_MEDICAL20"> OTHER </label> <input
																			id="OCULAR_MEDICAL_Specify2" name="OCULAR_MEDICAL20"
																			style="width: 50%; border: 0px; border-bottom: 1px solid #000;"
																			type="text"
																			onchange="javascript:checkyes('OCULAR_MEDICAL20');checkno('OCULAR_MEDICAL21');"
																			maxlength="20"><br /> <input type="checkbox"
																				id="OCULAR_MEDICAL21" name="OCULAR_MEDICAL[]"
																				value="21"
																				onclick="javascript:checknogrp('21','OCULAR_MEDICAL','1','20','OCULAR_MEDICAL_Specify@@@OCULAR_MEDICAL_Specify2');">
																					<label for="OCULAR_MEDICAL21"> NONE </label></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="border-bottom: 2px solid #000; display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%; margin-top: 10px;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 40%;"><label>Female
											patients - Are you pregnant? </label></td>
									<td style="padding: 5px; font-size: 12px; width: 60%;"><input
										type="radio" id="pregnant_yes " name="pregnant" value="1"> <label
											for="pregnant_yes "> YES </label> <input type="radio"
											id="pregnant_no" name="pregnant" value="2"> <label
												for="pregnant_no"> NO </label></td>
								</tr>


								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 40%;"><label>Do
											you use or smoke any tobacco products? </label></td>
									<td style="padding: 5px; font-size: 12px; width: 60%;"><input
										type="radio" id="tobacco_yes " name="tobacco" value="1"> <label
											for="tobacco_yes "> YES </label> <input type="radio"
											id="tobacco_no" name="tobacco" value="2"> <label
												for="tobacco_no"> NO </label></td>
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 40%;"><label>Do
											you drink alcohol? </label></td>
									<td style="padding: 5px; font-size: 12px; width: 60%;"><input
										type="radio" id="alcohol_yes " name="alcohol" value="1"> <label
											for="alcohol_yes "> YES </label> <input type="radio"
											id="alcohol_no" name="alcohol" value="2"> <label
												for="alcohol_no"> NO </label></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="border-bottom: 2px solid #000; display: block; background-color: #c0c0c0; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 15px; margin-top: 0px; color: #000; padding: 0px; font-family: Arial, Helvetica, sans-serif;">FAMILY
											OCULAR AND MEDICAL HISTORY</h1>

									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="display: block; border-bottom: 2px solid #000; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%; margin: 5px 0px;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="padding: 5px; width: 100%; display: inline-table;">
									<td colspan="2" style="font-size: 12px;"><label>Please check
											any condition that applies to a family member and indicate
											your relationship<span style='font-size: 10px; color: red;'>*</span>:
									</label></td>
								</tr>
								<tr style="padding: 5px; width: 100%; display: inline-table;">
									<td style="font-size: 12px; width: 50%;">
										<table cellspacing="0" cellpadding="0"
											style="display: inline-table; ! important; width: 100%;">
											<tbody style="width: 100%; display: inline-table;">
												<tr>
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL1"
														name="FAMILY_OCULAR_MEDICAL1" value="1"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL1','FAMILY_OCULAR_MEDICAL_R1');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL1"> DIABETES </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R1"
														name="FAMILY_OCULAR_MEDICAL_R1"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL1');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>

												<tr>
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL2"
														name="FAMILY_OCULAR_MEDICAL2" value="2"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL2','FAMILY_OCULAR_MEDICAL_R2');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL2"> HIGH BLOOD PRESSURE
														</label></td>

													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R2"
														name="FAMILY_OCULAR_MEDICAL_R2"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL2');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL3"
														name="FAMILY_OCULAR_MEDICAL3" value="3"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL3','FAMILY_OCULAR_MEDICAL_R3');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL3"> HIGH CHOLESTEROL </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R3"
														name="FAMILY_OCULAR_MEDICAL_R3"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL3');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL4"
														name="FAMILY_OCULAR_MEDICAL4" value="4"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL4','FAMILY_OCULAR_MEDICAL_R4');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL4"> THYROID </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R4"
														name="FAMILY_OCULAR_MEDICAL_R4"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL4');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL5"
														name="FAMILY_OCULAR_MEDICAL5" value="5"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL5','FAMILY_OCULAR_MEDICAL_R5');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL5"> HEART PROBLEMS </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R5"
														name="FAMILY_OCULAR_MEDICAL_R5"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL5');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL6"
														name="FAMILY_OCULAR_MEDICAL6" value="6"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL6','FAMILY_OCULAR_MEDICAL_R6');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL6"> RESPIRATORY PROBLEMS
														</label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R6"
														name="FAMILY_OCULAR_MEDICAL_R6"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL6');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL7"
														name="FAMILY_OCULAR_MEDICAL7" value="7"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL7','FAMILY_OCULAR_MEDICAL_R7');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL7"> STROKE </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R7"
														name="FAMILY_OCULAR_MEDICAL_R7"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL7');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL8"
														name="FAMILY_OCULAR_MEDICAL8" value="8"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL8','FAMILY_OCULAR_MEDICAL_R8');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL8"> CANCER </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R8"
														name="FAMILY_OCULAR_MEDICAL_R8"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL8');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL9"
														name="FAMILY_OCULAR_MEDICAL9" value="9"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL9','FAMILY_OCULAR_MEDICAL_R9');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL9"> HEADACHES </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R9"
														name="FAMILY_OCULAR_MEDICAL_R9"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL9');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL10"
														name="FAMILY_OCULAR_MEDICAL10" value="10"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL10','FAMILY_OCULAR_MEDICAL_R10');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL10"> HEAD / EYE INJURY </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R10"
														name="FAMILY_OCULAR_MEDICAL_R10"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL10');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL11"
														name="FAMILY_OCULAR_MEDICAL11" value="11"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL11','FAMILY_OCULAR_MEDICAL_R11','FAMILY_OCULAR_MEDICAL11OTHER');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL11"> OTHER </label> <input
															id="FAMILY_OCULAR_MEDICAL11OTHER"
															name="FAMILY_OCULAR_MEDICAL11OTHER"
															style="width: 50%; border: 0px; border-bottom: 1px solid #000;"
															type="text"
															onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL11');checkno('FAMILY_OCULAR_MEDICAL21');"
															maxlength='15'></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R11"
														name="FAMILY_OCULAR_MEDICAL_R11"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL11');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
											</tbody>
										</table>

									</td>

									<td style="font-size: 12px; width: 50%; vertical-align: top;">
										<table cellspacing="0" cellpadding="0"
											style="display: inline-table; ! important; width: 100%;">
											<tbody style="width: 100%; display: inline-table;">

												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL12"
														name="FAMILY_OCULAR_MEDICAL12" value="12"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL12','FAMILY_OCULAR_MEDICAL_R12');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL12"> RETINAL DETACHMENT
														</label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R12"
														name="FAMILY_OCULAR_MEDICAL_R12"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL12');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL13"
														name="FAMILY_OCULAR_MEDICAL13" value="13"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL13','FAMILY_OCULAR_MEDICAL_R13');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL13"> MACULAR
																DEGENERATION </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R13"
														name="FAMILY_OCULAR_MEDICAL_R13"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL13');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL14"
														name="FAMILY_OCULAR_MEDICAL14" value="14"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL14','FAMILY_OCULAR_MEDICAL_R14');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL14"> CATARACTS </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R14"
														name="FAMILY_OCULAR_MEDICAL_R14"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL14');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL15"
														name="FAMILY_OCULAR_MEDICAL15" value="15"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL15','FAMILY_OCULAR_MEDICAL_R15');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL15"> GLAUCOMA </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R15"
														name="FAMILY_OCULAR_MEDICAL_R15"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL15');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL16"
														name="FAMILY_OCULAR_MEDICAL16" value="16"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL16','FAMILY_OCULAR_MEDICAL_R16');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL16"> BLINDNESS / LOSS OF
																VISION </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R16"
														name="FAMILY_OCULAR_MEDICAL_R16"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL16');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL17"
														name="FAMILY_OCULAR_MEDICAL17" value="17"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL17','FAMILY_OCULAR_MEDICAL_R17');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL17"> LAZY EYE </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R17"
														name="FAMILY_OCULAR_MEDICAL_R17"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL17');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL18"
														name="FAMILY_OCULAR_MEDICAL18" value="18"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL18','FAMILY_OCULAR_MEDICAL_R18');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL18"> DOUBLE VISION </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R18"
														name="FAMILY_OCULAR_MEDICAL_R18"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL18');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL19"
														name="FAMILY_OCULAR_MEDICAL19" value="19"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL19','FAMILY_OCULAR_MEDICAL_R19');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL19"> EYE SURGERY </label></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R19"
														name="FAMILY_OCULAR_MEDICAL_R19"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL19');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL20"
														name="FAMILY_OCULAR_MEDICAL20" value="20"
														onclick="javascript:clearcheckno('FAMILY_OCULAR_MEDICAL20','FAMILY_OCULAR_MEDICAL_R20','FAMILY_OCULAR_MEDICAL20OTHER');checkno('FAMILY_OCULAR_MEDICAL21');">
															<label for="FAMILY_OCULAR_MEDICAL20"> OTHER </label> <input
															id="FAMILY_OCULAR_MEDICAL20OTHER"
															name="FAMILY_OCULAR_MEDICAL20OTHER"
															style="width: 50%; border: 0px; border-bottom: 1px solid #000;"
															type="text"
															onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL20');checkno('FAMILY_OCULAR_MEDICAL21');"
															maxlength='15'></td>
													<td style="font-size: 12px; width: 40%;"><input
														id="FAMILY_OCULAR_MEDICAL_R20"
														name="FAMILY_OCULAR_MEDICAL_R20"
														style="width: 70%; border: 0px; border-bottom: 1px solid #000;"
														type="text"
														onchange="javascript:checkyes('FAMILY_OCULAR_MEDICAL20');checkno('FAMILY_OCULAR_MEDICAL21');"
														maxlength='20'></td>
												</tr>
												<tr style="">
													<td style="font-size: 12px; width: 60%;"><input
														type="checkbox" id="FAMILY_OCULAR_MEDICAL21"
														name="FAMILY_OCULAR_MEDICAL21" value="21"
														onclick="javascript:checknogrp('21','FAMILY_OCULAR_MEDICAL','1','20','FAMILY_OCULAR_MEDICAL11OTHER@@@FAMILY_OCULAR_MEDICAL20OTHER','FAMILY_OCULAR_MEDICAL_R');">
															<label for="FAMILY_OCULAR_MEDICAL21"> NONE </label></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="border-bottom: 2px solid #000; display: block; background-color: #c0c0c0; text-align: center;">
					<td style="display: block">
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 15px; margin-top: 0px; color: #000; padding: 0px; font-family: Arial, Helvetica, sans-serif;">MEDICATIONS
											AND ALLERGIES</h1>

									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 100%;"><label
										for="currently_taking_medicines" style="margin-bottom: 5px;">Please
											list all medications you are currently taking (including
											birth control, vitamins & herbs):</label><br /> <textarea
											id="currently_taking_medicines"
											name="currently_taking_medicines"
											style="width: 99%; font-size: 12px; font-family: Arial, Helvetica, sans-serif;"></textarea>
									</td>
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td
										style="padding: 5px; padding-top: 0px; font-size: 12px; width: 100%;">
										<label for="eye_drops" style="margin-bottom: 10px;">Please
											list any eye drops you are currently using:</label><br /> <textarea
											id="eye_drops" name="eye_drops"
											style="width: 99%; font-size: 12px; font-family: Arial, Helvetica, sans-serif;"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table style="display: inline-table; ! important; width: 100%;"
							cellspacing="0" cellpadding="0">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 50%;">Are you
										allergic to any medications?<span
										style='font-size: 10px; color: red;'>*</span> <input
										type="radio" id="allergic_yes" name="allergic" value="1"> <label
											for=" allergic_yes "> YES </label> <input type="radio"
											id="allergic_no" name="allergic" value="2"
											onclick='javascript:changeoption("Allergicname");'> <label
												for="allergic_no"> NO </label>
									
									</td>
									<td style="padding: 5px; font-size: 12px; width: 50%;"><label
										for="Allergicname">IF YES, Which One?</label> <input
										style="border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Allergicname" name="Allergicname"
										onchange="javascript:checkyes('allergic_yes');"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table style="display: inline-table; ! important; width: 100%;"
							cellspacing="0" cellpadding="0">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 12px; width: 50%;">Do you
										have general / seasonal allergies?<span
										style='font-size: 10px; color: red;'>*</span> <input
										type="radio" id="seasonal_allergies_yes"
										name="Seasonalallergies" value="1"> <label
											for="seasonal_allergies_yes "> YES </label> <input
											type="radio" id="seasonal_allergies_no"
											name="Seasonalallergies" value="2"
											onclick='javascript:changeoption("Seasonalallergiesname");'>
												<label for="seasonal_allergies_no"> NO </label>
									
									</td>
									<td style="padding: 5px; font-size: 12px; width: 50%;"><label
										for="Seasonalallergiesname">IF YES, Which One?</label> <input
										style="border: 0px; border-bottom: 1px solid #000;"
										type="text" id="Seasonalallergiesname"
										name="Seasonalallergiesname"
										onchange="javascript:checkyes('seasonal_allergies_yes');"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table style="display: inline-table; ! important; width: 100%;"
							cellspacing="0" cellpadding="0">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td colspan="2" style="padding: 5px; font-size: 12px;"><br />
										Please sign below to indicate that all the information
										provided above is correct.<span
										style='font-size: 10px; color: red;'>*</span></td>
								</tr>
								<tr style="width: 100%; display: inline-table;" id='signArea'>
									<td
										style="padding: 5px; font-size: 12px; width: 50%; text-align: center;">
										<canvas id='sig-canvas1'
											style="height:150px; width: 100%;  border: 1px solid #000;"></canvas>
										<input type='button' id='sig-clearBtn1'
										style="margin: 5px; padding: 8px 10px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;"
										value='CLEAR'> <input
											style="width: 100%; border: 0px; border-bottom: 1px solid #000;"
											type="hidden" id='sig-image1' name="sig-image1"><br /> <input
												type='hidden' name='issig1' id='issig1'> <label
													for="seasonal_allergies_name"
													style="font-weight: 600; font-size: 13px;"> Signature of
														patient (or parent/guardian if minor) </label>
									
									</td>
									<td
										style="padding: 5px; font-size: 12px; width: 50%; text-align: center;">
										<input
										style="border: 0px; border-bottom: 1px solid #000; text-align: center; font-weight: 600;"
										type="text" id="seasonal_allergies_name"
										value="06/18/2025" readonly><br /> <label
											for="seasonal_allergies_name" style="font-size: 13px;"> DATE
										</label>
									
									</td>
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td colspan="2" style="padding: 5px; font-size: 12px;"><br /></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr
					style="border-bottom: 2px solid #000; display: block; text-align: center;">
					<td style="display: block">
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%; padding: 5px;">
										<span id='sig-submitBtn1'
										style="padding: 8px 30px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;">NEXT</span>
										<input type='hidden' name="formsubmit" id="formsubmit"
										value="1">
									
									</td>
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td colspan="2" style="padding: 5px; font-size: 12px;"><br /></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</table>
		
		</div>
		<div id='panel_2' style='display: none;'>
			<section
				style="width:800px; margin: 0px auto; padding: 15px; background-color: #fff;">
			<table width="100%" bgcolor="#fff" align="center" cellspacing="0"
				cellpadding="0" style="font-family: Arial, Helvetica, sans-serif;">
				<tr>
					<td>
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%;">
										<h1	style="margin-bottom: 0px; font-size: 24px; margin-top: 20px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif; margin-bottom: 15px;">
											<u>EYE TO EYECARE OFFICE POLICY</u>
										</h1>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</table>


			<table width="100%" bgcolor="#fff" align="center" cellspacing="0"
				cellpadding="0"
				style="font-family: Arial, Helvetica, sans-serif; border: 2px solid #000; padding: 5px;">
				<tr
					style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: left; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 18px; margin-top: 0px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;">
											<u><b>Financial Policy</b></u></h1>
										<p
											style="font-size: 15px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">All co-pays and payments are due at the time of service. Fees paid for eye examination, contact lens evaluation, medical
services, purchase of glasses and/or contact lenses are to be made in FULL on the day of purchase and are <b>non-refundable.</b></p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				
				<tr
					style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: left; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 18px; margin-top: 0px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;">
											<u><b>Appointments</b></u></h1>
										<p
											style="font-size: 15px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">
											Please help us better serve you and other patients by keeping your scheduled appointments. We require you to call, email,
or message the office at least 24 hours prior to your appointment time if you need to cancel or reschedule your appointment.
Any patient that comes to their appointment more than 10 minutes late, will be considered a "No-Show" and may need to
be rescheduled. <b>At the Office's discretion, "No-Shows" to scheduled appointments or repeated rescheduling may
result in a "Walk-In Only" status on the patient’s account and a $25 no-show fee may be assessed. Please see our
"Appointments and Cancellations Policy" for more information.</b></p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				

				<tr
					style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: left; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 18px; margin-top: 0px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;"><u><b>Glasses</b></u></h1>
										<p
											style="font-size: 15px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">All orders for glasses are FINAL. After your exam, you can return to the office within 60 days at no charge for a re-check
with the doctor if you are experiencing any problems such as blurred vision, headaches, or any other discomfort. <b>After 60 days, there is a $50 fee.</b></p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: left; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 18px; margin-top: 0px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;"><b><u>Manufacturer Warranty on Glasses and/or Lenses</u></b></h1>
										<p
											style="font-size: 15px; margin-top: 5px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif;">
											Frames and Premium lenses that have a manufacturer's warranty can be replaced one time within one year of purchase upon approval from the manufacturer for defects. <b>A handling fee of $25 for will apply per frame or pair of lenses replaced. Some restrictions apply.</b>
										</p>
										
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: left; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 18px; margin-top: 0px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;">
											<u><b>Contact Lenses</b></u></h1>
										<p
											style="font-size: 15px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">
											All orders for contact lenses are <b>FINAL</b>. All contact lens follow-up visits or finalization of contact lens prescriptions must
be done within 30 days of the Contact Lens Exam, unless otherwise instructed by the doctor. <b>After 30 days, there is a $30 fee.</b>
											</p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">

						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: left; width: 100%; padding: 5px;">
										<h1
											style="text-align: center;margin-bottom: 0px; font-size: 18px; margin-top: 0px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;">
											<u><b>HIPAA Privacy Acknowledgement of Notice of Privacy Practices</b></u></h1>
										<p
											style="font-size: 15px; margin-top: 5px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif;">I understand, acknowledge, and agree that I have received a copy of the Notice of Privacy Practices for review and to keep
for my records if I desire on the date identified below.</p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td colspan="3">
										<h1
											style="margin-bottom: 10px; font-size: 18px; margin-top: 10px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;">
											The following person (s) may have access to information in my records:
											</h1>
									</td>
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 14px; width: 32.333%;"><label
										for="First_Name">Name:</label> <input
										style="width: 80%; border: 0px; border-bottom: 1px solid #000;"
										style="width: 98%;" type="text" id="AccessFirstName1"
										name="AccessFirstName1"></td>
									<td style="padding: 5px; font-size: 14px; width: 33.333%;"><label
										for="Middle_Name">Relationship:</label> <input
										style="width: 65%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="AccessRelation1" name="AccessRelation1"></td>
									<td style="padding: 5px; font-size: 14px; width: 33.333%;"><label
										for="Last_name">Phone Number:</label> <input
										style="width: 56%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="AccessPhone1" name="AccessPhone1"
										maxlength='10'></td>
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 14px; width: 32.333%;"><label
										for="First_Name">Name:</label> <input
										style="width: 80%; border: 0px; border-bottom: 1px solid #000;"
										style="width: 98%;" type="text" id="AccessFirstName2"
										name="AccessFirstName2"></td>
									<td style="padding: 5px; font-size: 14px; width: 33.333%;"><label
										for="Middle_Name">Relationship:</label> <input
										style="width: 65%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="AccessRelation2" name="AccessRelation2"></td>
									<td style="padding: 5px; font-size: 14px; width: 33.333%;"><label
										for="Last_name">Phone Number:</label> <input
										style="width: 56%; border: 0px; border-bottom: 1px solid #000;"
										type="text" id="AccessPhone2" name="AccessPhone2"
										maxlength='10'></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr
									style="width: 100%; display: inline-table; padding-top: 10px;">
									<td style="padding: 5px; font-size: 14px; width: 100%;">Can we
										leave a detailed message with the person (s) listed above? <input
										type="radio" id="Is_Message_yes1" name="Is_Message" value="1">
											<label> YES </label> <input type="radio" id="Is_Message_no1"
											name="Is_Message" value="2"> <label> NO </label>
									
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 14px; width: 100%;">Can we
										release prescriptions and/or contacts to the person (s) listed
										above? <input type="radio" id="Is_Message_yes2"
										name="Is_Message2" value="1"> <label> YES </label> <input
											type="radio" id="Is_Message_no2" name="Is_Message2" value="2">
												<label> NO </label>
									
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table style="display: inline-table; ! important; width: 100%;"
							cellspacing="0" cellpadding="0">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td colspan="2" style="padding: 5px; font-size: 14px;"><br />
										By signing below, I hereby state that I have read, understood, and will abide by the above office policies.<span
										style='font-size: 10px; color: red;'>*</span><br /> <br /></td>
								</tr>
								<tr style="width: 100%; display: inline-table;" id='signArea'>
									<td
										style="padding: 5px; font-size: 12px; width: 50%; text-align: center;">
										<canvas id='sig-canvas2'
											style="height:150px; width: 100%;  border: 1px solid #000;"></canvas>
										<input type='button' id='sig-clearBtn2'
										style="margin: 5px; padding: 8px 10px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;"
										value='CLEAR'> <input
											style="width: 100%; border: 0px; border-bottom: 1px solid #000;"
											type="hidden" id='sig-image2' name="sig-image2"><br /> 
											<input type='hidden' name='issig2' id='issig2'> <label
													style="font-weight: 600; font-size: 13px;"> Signature of patient (or parent/guardian if minor) </label>									
									</td>
									<td
										style="padding: 5px; font-size: 12px; width: 50%; text-align: center;">
										<input
										style="border: 0px; border-bottom: 1px solid #000; text-align: center; font-weight: 600;"
										type="text" value="06/18/2025" readonly><br />
											<label style="font-size: 13px;"> DATE </label>
									
									</td>									
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td colspan="2" style="padding: 5px; font-size: 12px;"><br /></td>
								</tr>
							
								<tr style="display: block; text-align: center;">
									<td style="display: block">
										<table cellspacing="0" cellpadding="0"
											style="display: block; ! important; width: 100%;">
											<tbody style="width: 100%; display: block;">
												<tr style="display: block !important; width: 100%;">
													<td
														style="display: block !important; text-align: center; width: 100%; padding: 5px;">
														<span id='sig-submitBtn'
														style="padding: 8px 30px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;"
														onclick='goBack(1);'>PREVIOUS</span> &nbsp;&nbsp; 
														<span id='sig-submitBtn2'
														style="padding: 8px 30px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;">NEXT</span>
														<input type='hidden' name="formsubmit" id="formsubmit"
														value="1">													
													</td>
												</tr>
												<tr style="width: 100%; display: inline-table;">
													<td colspan="2" style="padding: 5px; font-size: 12px;"><br />
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</table>
			</section>
		</div>
		<div id='panel_3' style='display: none;'>
			<section style="width:800px; margin: 0px auto; padding: 15px; background-color: #fff;">
			<table width="100%" bgcolor="#fff" align="center" cellspacing="0"
				cellpadding="0" style="font-family: Arial, Helvetica, sans-serif; border: 2px solid #000; padding: 5px;">
				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table cellspacing="0" cellpadding="0"
							style="display: inline-table; ! important; width: 100%;">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td style="padding: 5px; font-size: 14px; width: 100%;text-align:center;">
										<img src='../EYE_TO_EYECARE.png' width='150px' height='150px' style='align:center;'>													
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr	style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: left; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 18px; margin-top: 0px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;text-align:center;">
											Appointments and Cancellations Policy</h1>
										<p
											style="font-size: 15px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">
											Thank you for trusting us with your Eyecare. When you schedule an appointment, we set aside time specifically for us to
provide you with the highest quality of care. Should you need to cancel or reschedule an appointment, please contact our
office as soon as possible, and no later than 24 hours prior to your scheduled appointment. This allows us to schedule other
patients who may be waiting for an appointment.</p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				
				<tr><td>&nbsp;</td></tr>
				<tr	style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: left; width: 100%; padding: 5px;">
										<h1
											style="margin-bottom: 0px; font-size: 18px; margin-top: 0px; color: #000; padding: 0px; font-family: Times New Roman, Times, serif;text-align:center;">
											Please carefully review our Appointment Cancellations and No-Show policy below.</h1>
										<br/>
										<p
											style="font-size: 15px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">
											We, at Eye to Eyecare, understand that sometimes you may need to cancel or reschedule your appointment. However,
please understand that when a patient does not show up for their scheduled appointment, it creates an unused appointment
slot that could have been used to allow care for another patient. To be fair to all of our patients, we here at Eye to Eyecare
have instituted the following policy:</p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr	style="display: block; background-color: #fff; text-align: center;">
					<td style="display: block">
						<table cellspacing="0" cellpadding="0"
							style="display: block; ! important; width: 100%;">
							<tbody style="width: 100%; display: block;">
								<tr style="display: block !important; width: 100%;">
									<td
										style="display: block !important; text-align: center; width: 100%;">
										<ul style="list-style-type:disc; padding-left: 10%!important;text-align:left;">
										<li>
										Please contact the office to cancel your appointment at least 24 hours in advance. This will allow us to
accommodate other patients who are seeking an appointment.
										</li>
										<li>
										If you do not cancel your appointment 24 hours in advance and do not present to the office for your appointment,
this will be documented as a “No-Show” appointment and you will be charged a $25 No-Show Fee per incident.
Please note, the cancellation fee amount is at the discretion of the office.
										</li>
										<li>
										Repeated rescheduling, in some cases even within the 24 hours period, may result in a “Walk-In Only” status on the
patient’s account, and the $25 No-Show fee may be assessed.
										</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr	style="display: block; background-color: #fff; text-align: left; padding: 5px;">
					<td style="display: block">
					You may contact the office at 281-565-3937, via call or texting. Additionally, you can also reach the office via email at
<b><a href="mailto:Contact@EyeToEyecareTX.com">Contact@EyeToEyecareTX.com</a>.</b>
					</td>
				</tr>
				<tr	style="display: block; background-color: #fff; text-align: left; padding: 5px;">
					<td style="display: block">Thank you for your understanding of our policies.
					</td>
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr
					style="display: block; font-family: Arial, Helvetica, sans-serif;">
					<td style="display: block;">
						<table style="display: inline-table; ! important; width: 100%;"
							cellspacing="0" cellpadding="0">
							<tbody style="width: 100%; display: inline-table;">
								<tr style="width: 100%; display: inline-table;">
									<td colspan="2" style="padding: 5px; font-size: 14px;">
									<b>By signing below, I hereby state that I have read, understood, and will abide by the above Appointments and
Cancellations Policy.</b><span style='font-size: 10px; color: red;'>*</span><br /> <br /></td>
								</tr><tr><td>&nbsp;</td></tr>
								<tr style="width: 100%; display: inline-table;" id='signArea'>
									<td
										style="padding: 5px; font-size: 12px; width: 50%; text-align: center;">
										<canvas id='sig-canvas3'
											style="height:150px; width: 100%;  border: 1px solid #000;"></canvas>
										<input type='button' id='sig-clearBtn3'
										style="margin: 5px; padding: 8px 10px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;"
										value='CLEAR'> <input
											style="width: 100%; border: 0px; border-bottom: 1px solid #000;"
											type="hidden" id='sig-image3' name="sig-image3"><br /> <input
												type='hidden' name='issig3' id='issig3'> <label
													style="font-weight: 600; font-size: 13px;"> Patient or Patient’s Legal Representative </label>									
									</td>
									<td
										style="padding: 5px; font-size: 12px; width: 50%; text-align: center;">
										<input
										style="border: 0px; border-bottom: 1px solid #000; text-align: center; font-weight: 600;"
										type="text" value="06/18/2025" readonly><br />
											<label style="font-size: 13px;"> DATE </label>
									
									</td>									
								</tr>
								<tr style="width: 100%; display: inline-table;">
									<td colspan="2" style="padding: 5px; font-size: 12px;"><br /></td>
								</tr>
							<tr	style="display: block; background-color: #fff; text-align: center;">
								<td style="display: block">
									<table cellspacing="0" cellpadding="0"
										style="display: block; ! important; width: 100%;">
										<tbody style="width: 100%; display: block;">
											<tr style="display: block !important; width: 100%;">
												<td
													style="display: block !important; text-align: center; width: 100%; padding: 5px;">
													<span id='sig-submitBtn'
													style="padding: 8px 30px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;"
													onclick='goBack(2);'>PREVIOUS</span> &nbsp;&nbsp; 
													<span id='sig-submitBtn3'
													style="padding: 8px 30px; font-size: 15px; background-color: #000; color: #fff; border: 0px; margin-bottom: 10px; cursor: pointer;">SUBMIT</span>
													<input type='hidden' name="formsubmit" id="formsubmit"
													value="1">													
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							</tbody>
						</table>
					</td>
				</tr>
				
				
			</table>	
			</section>
		</div>
	</form>
	</div>
<!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- Modal content -->
	  <div class="modal-content">
	  <!-- <span class="close" id='cls'>&times;</span>-->
		<p id='cntenable' style='display:none;'></p> 
		<p id='cntpart'></p>
		<button id="myBtn">OK</button>
	  </div>

	</div>
	<div id="myModalsub" class="modal">
	  <!-- Modal content -->
	  <div class="modal-content">
	   <!-- <span class="close" id='cls'>&times;</span>-->
		<p id='cntpartsub'></p>
		<div><button id="myBtnsubok" onclick='loadingandsub();' style='cursor:pointer;'>OK</button>
		<button id="myBtnsubcancel"  style='cursor:pointer;'>CANCEL</button></div>
	  </div>

	</div>
<?php
get_footer();
