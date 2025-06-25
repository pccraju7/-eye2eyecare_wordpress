<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
table{
	font-family:Arial, Helvetica, sans-serif;
}
tr.border_bottom td {
  border-bottom:1px solid #000;
}
tr.border_top td {
  border-top:1px solid #000;
}
h1{
	margin-bottom:0px; font-size:25px; margin-top: 0px; color:#000; padding: 0px; font-family: Times New Roman, Times, serif;
}
h2{
	margin-bottom:0px; font-size:18px; margin-bottom: 10px; margin-top: 5px; font-weight: 400; color:#000; padding: 0px; font-family: Arial, Helvetica, sans-serif;
}
.breakalways{page-break-before: always;}
</style>
</head>
<body>
<table width='100%' bgcolor='#fff' align='center' cellspacing='0' cellpadding='0'><tbody><tr><td>				
	<table cellspacing='0' cellpadding='0' style='width:100%;'>
		<tbody>
		<tr style='width: 100%;'>
			<td style='text-align: center; width: 100%;'>
				<h1>EYE TO EYECARE </h1>
				<h2>Registration Form </h2>
			</td>
		</tr>
		</tbody>
	</table>
	</td></tr></tbody>
</table>
<table width='100%'  bgcolor='#fff' align='center' cellspacing='0' cellpadding='0' style='border:2px solid #000;'><tbody>
	<tr class="border_bottom" style='background-color: #c0c0c0; text-align: center;'>
	<td>
	<table cellspacing='0' cellpadding='0' style='width:100%;border-spacing:-1px;'>
		<tbody>
		<tr>
			<td style='text-align: center; width: 100%; padding: 1px 5px;'>
				<h1 style=' margin-bottom:0px; font-size: 11px;  margin-top: 0px; color:#000; padding: 0px; font-family: Arial, Helvetica, sans-serif;'>PATIENT INFORMATION </h1>				
			</td>
		</tr>
		</tbody>
	</table>
	</td></tr>
	<tr class="border_bottom">
		<td><table cellspacing='0' cellpadding='0' style='width:100%;'>
				<tbody>
				<tr>
					<td style='width: 100%; padding: 1px 5px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;'>
						TODAY's DATE: <b><?php echo date('m/d/Y');?></b>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	
	<tr class="border_bottom" >
				<td>
				<table cellspacing='0' cellpadding='0'  style='width:100%;'>
					<tbody>
					<tr>
					<td style='font-size: 11px; width:70px;border-right: 2px solid #000;padding:5px;'>	
							<div style='margin:0px;padding:0px;width:100%;'>                        
							<input style=' float:left;' type='radio' value='Male' <?php if(isset($_POST['optionsRadios']) && $_POST['optionsRadios']=='Male'){?>checked<?php }?>>
								<label style='font-size: 10px; padding:0px; margin-top:8px; float:left;' for='Gender2'>&nbsp;Male</label>
                            </div>
							<div style="clear:both; height:0px;"></div>
                            <div  style='margin:0px;padding:0px;'>                        
							<input style=' float:left;' type='radio' value='Male' <?php if(isset($_POST['optionsRadios']) && $_POST['optionsRadios']=='Female'){?>checked<?php }?>>
								<label style='font-size: 10px; padding:0px;  margin-top:8px; float:left;' for='Gender2'>&nbsp;Female</label>
                            </div>
							<div style="clear:both; height:0px;"></div>
					</td>						
					<td style='padding: 1px 5px; font-size: 11px; width:15%;'>	
						<label for='Firstname'>First Name:</label><br/>				
						<input style='height: 14px;border:0px; border-bottom: 1px solid #000; min-height: 14px;' type='text' value="<?php if(isset($_POST['Firstname'])){echo $_POST['Firstname'];}?>" readonly>
					</td>
					<td style='padding: 1px 5px; font-size: 11px; width:15% ' >	
							<label for='Middlename'>Middle Name:</label><br/>	
							<input style='height: 14px;border:0px; border-bottom: 1px solid #000; min-height: 19px;' type='text' value="<?php if(isset($_POST['Middlename'])){echo $_POST['Middlename'];}?>" readonly>
						
					</td>
					<td style='padding: 1px 5px; font-size: 11px; width:15%; border-right: 2px solid #000;' >	
						<label for='Lastname'>Last Name:</label><br/>	
						<input style='height: 14px;border:0px; border-bottom: 1px solid #000; min-height: 19px;' type='text' value="<?php if(isset($_POST['Lastname'])){echo $_POST['Lastname'];}?>" readonly>
					</td>
					<td style='padding: 1px 5px; font-size: 11px; width: 130px;' >	
						<label for='SSV'>SSN:</label>
						<input style='width:20px; border:0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['SSN1'])){echo $_POST['SSN1'];}?>"> - <input  style='width: 15px; border:0px; border-bottom: 1px solid #000;' type='text'  id='SSN2' value="<?php if(isset($_POST['SSN2'])){echo $_POST['SSN2'];}?>"> - <input style='border:0px; width: 30px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['SSN3'])){echo $_POST['SSN3'];}?>" >						
						<br/>
						<label>DOB:</label><?php if(isset($_POST['DOB'])){echo date("m/d/Y",strtotime($_POST['DOB']));}?><br/>
						<label for='age'>Age:</label><?php echo $_POST['Age'];?>			
					</td>
				</tr>
				</tbody>
				</table>
			</td>
		</tr>
		<tr class="border_bottom">
			<td>
				<table cellspacing='0' cellpadding='0' style=' width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; font-size: 11px; width:300px ; border-right: 2px solid #000;'>	
							<label for='Streetaddress'>Street Address: </label>&nbsp;
							<input style='border:0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Streetaddress'])){echo $_POST['Streetaddress'];}?>" readonly>
						</td>
						<td style='padding: 1px 5px; font-size: 11px; width:200px;border-right: 2px solid #000;'>	
							<label for='Citystate'>City/State:</label>&nbsp;
							<input style='border:0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Citystate'])){echo $_POST['Citystate'];}?>" readonly>						
						</td>
						<td style='padding: 1px 5px; font-size: 11px; width: 150px;'>	
							<label for='Zipcode'>Zip Code:</label>&nbsp;
							<input style=' width:80px;border:0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Zipcode'])){echo $_POST['Zipcode'];}?>" readonly>
						</td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr class="border_bottom">
				<td>
				<table cellspacing='0' cellpadding='0' style=' width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; font-size: 11px;width:220px ; border-right: 2px solid #000;'>	
								<label for='Homephone'>Home Phone No:  </label>&nbsp;
							<input  style='border:0px; border-bottom: 1px solid #000; width:100px;' type='text' value="<?php if(isset($_POST['Homephone'])){echo $_POST['Homephone'];}?>" readonly>
								
						
						</td>
						<td style='padding: 1px 5px; font-size: 11px;width:220px ; border-right: 2px solid #000;'>	
								<label for='Cellphone'>Cell Phone: </label>&nbsp;
							<input  style='height: 14px;border:0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Cellphone'])){echo $_POST['Cellphone'];}?>" readonly>
								
						
						</td>
						<td style='padding: 1px 5px; font-size: 11px; width:220px;'>	
								<label for='Workphone'>Work Phone:</label>&nbsp;
							<input  style='height: 14px;border:0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Workphone'])){echo $_POST['Workphone'];}?>" readonly>
						</td>

					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		 <tr class="border_bottom">
				<td >
				<table cellspacing='0' cellpadding='0'  style=' width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; font-size: 11px; width:220px ; border-right: 2px solid #000;' >	
							<label for='Occupation'>Occupation:  </label>&nbsp;
							<input  style='border:0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Occupation'])){echo $_POST['Occupation'];}?>" readonly>
						</td>
						<td style='padding: 1px 5px; font-size: 11px; width:220px; border-right: 2px solid #000; ' >	
							<label for='Employer'>Employer: </label>&nbsp;
							<input  style='height: 14px;border:0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Employer'])){echo $_POST['Employer'];}?>" readonly>
						</td>
						<td style='padding: 1px 5px; font-size: 11px; width:220px; ' >	
							<label for='Emailaddress'>Email Address:</label>&nbsp;
							<input  style='border:0px; border-bottom: 1px solid #000;  width:100px;' type='text' value="<?php if(isset($_POST['Emailaddress'])){echo $_POST['Emailaddress'];}?>" readonly>
						</td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr class="border_bottom">
			<td>
				<table cellspacing='0' cellpadding='0' style=' width:100%;'>
					<tbody >
					<tr>						
						<td style='padding: 1px 5px; font-size: 11px; width:150px; ' >	
								Check appropriate box
						</td>
                        <td style='padding: 1px 5px; font-size: 11px; width:120px; ' > 
							<div style='margin:0px;padding:0px;width:100%;'>    				
								<input style=' float:left;' type='radio' id='margstatus1' name='Margstatus' value='SINGLE' <?php if(isset($_POST['Margstatus']) && $_POST['Margstatus']=='SINGLE'){?>checked<?php }?>>
								<label style='font-size: 11px; padding:0px; margin-top:7px; float:left;' for='margstatus1'>&nbsp;SINGLE</label>
							 </div>
							 <div style="clear:both; height:0px;"></div>
                        </td>
                         <td style='padding: 1px 5px; font-size: 11px; width:120px ' >
							<div style='margin:0px;padding:0px;width:100%;'>    	
                             <input style=' float:left;'  type='radio' id='margstatus2' name='Margstatus' value='MARRIED' <?php if(isset($_POST['Margstatus']) && $_POST['Margstatus']=='MARRIED'){?>checked<?php }?>>
                              <label style='font-size: 11px; padding:0px; margin-top:7px; float:left;' for='margstatus2'> &nbsp;MARRIED</label>
							 </div>
							 <div style="clear:both; height:0px;"></div>
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:120px; ' >
							<div style='margin:0px;padding:0px;width:100%;'>    
                             <input style=' float:left;' type='radio' id='margstatus3' name='Margstatus' value='DIVORCED' <?php if(isset($_POST['Margstatus']) && $_POST['Margstatus']=='DIVORCED'){?>checked<?php }?>>
                              <label style='font-size: 11px; padding:0px; margin-top:7px; float:left;' for='margstatus3'> &nbsp;DIVORCED</label></div>
							  <div style="clear:both; height:0px;"></div>
                        </td>
                         <td style='padding: 1px 5px; font-size: 11px; width:120px; ' >
                            <div style='margin:0px;padding:0px;width:100%;'>    
                             <input style=' float:left;' type='radio' id='margstatus4' name='Margstatus' value='WIDOWED' <?php if(isset($_POST['Margstatus']) && $_POST['Margstatus']=='WIDOWED'){?>checked<?php }?>>
                            <label style='font-size: 11px; padding:0px; margin-top:7px; float:left;' for='margstatus4'>&nbsp;WIDOWED</label></div>
							<div style="clear:both; height:0px;"></div>
						</td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		 <tr style=' background-color: #c0c0c0; text-align: center;' class="border_bottom">
				<td>

				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr>
						<td style='text-align: center; width: 100%; padding: 1px 5px;'>
							<h1 style=' margin-bottom:0px; font-size: 11px;  margin-top: 0px; color:#000; padding: 0px; font-family: Arial, Helvetica, sans-serif;'>How Did You Hear About Us? </h1>							
						</td>
					</tr>
					</tbody>
				</table>
		</td></tr>
		<tr class="border_bottom">
			<td>
				<table cellspacing='0' cellpadding='0' style=' width:100%;'>
					<tbody >
					<tr>						
                       <td style='padding: 1px 5px; font-size: 11px; width:80px; ' >      
                             <div style='margin:0px;padding:0px;width:100%;'>    				
								<input style=' float:left;' type='radio' id='website' name='Youhear' <?php if(isset($_POST['Youhear']) && $_POST['Youhear']=='1'){?>checked<?php }?>>
                                 <label style='font-size: 11px; padding:0px; margin-top:6px; float:left;' for='website'> &nbsp;WEBSITE </label></div>
							  <div style="clear:both; height:0px;"></div>
                        </td>
                       <td style='padding: 1px 5px; font-size: 11px; width:80px; ' >      
                                <div style='margin:0px;padding:0px;width:100%;'>    				
								<input style=' float:left;' type='radio' id='MAILOUT' name='Youhear' <?php if(isset($_POST['Youhear']) && $_POST['Youhear']=='2'){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:6px; float:left;' for=' MAILOUT'>&nbsp;MAIL OUT</label></div>
							  <div style="clear:both; height:0px;"></div>
                            </td>
                       <td style='padding: 1px 5px; font-size: 11px; width:80px; ' >      
                            <div style='margin:0px;padding:0px;width:100%;'>    				
								<input style=' float:left;' type='radio' id='LOCATION' name='Youhear' <?php if(isset($_POST['Youhear']) && $_POST['Youhear']=='3'){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:6px; float:left;' for='LOCATION'>&nbsp;LOCATION </label> </div>
							  <div style="clear:both; height:0px;"></div>
                            </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:100px; ' >      
                            <div style='margin:0px;padding:0px;width:100%;'>    				
								<input style=' float:left;' type='radio' id='INSURANCEPLAN' name='Youhear' <?php if(isset($_POST['Youhear']) && $_POST['Youhear']=='4'){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:6px; float:left;' for=' INSURANCEPLAN '>&nbsp;INSURANCE PLAN </label></div>
							  <div style="clear:both; height:0px;"></div>
                            </td>
                       <td style='padding: 1px 5px; font-size: 11px; width:140px; ' >      
                            <div style='margin:0px;padding:0px;width:100%;'>    				
							  <input style=' float:left;' type='radio' <?php if(isset($_POST['Youhear']) && $_POST['Youhear']=='5'){?>checked<?php }?>>
							  <label style='font-size: 11px; padding:0px; margin-top:10px; float:left;' for='REFERRALBY'>&nbsp;REFERRAL BY </label> &nbsp;&nbsp;
							  <input  style='height:14px; margin-top:8px;width:35%;border: 0px;<?php if(isset($_POST['referralPerson']) && $_POST['referralPerson']!=''){?>margin-top:8px;<?php } ?> border-bottom: 1px solid #000;float:left;' type='text' value="<?php if(isset($_POST['referralPerson'])){echo $_POST['referralPerson']; }?>">
							</div>
							  <div style="clear:both; height:0px;"></div>
						</td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		 <tr style='text-align: center;background-color: #c0c0c0;' class="border_bottom">
				<td>
				<table cellspacing='0' cellpadding='0' style=' width:100%;'>
					<tbody>
					<tr>
						<td style='text-align: center; width: 100%; padding: 1px 5px;'>
							<h1 style=' margin-bottom:0px; font-size: 11px;  margin-top: 0px; color:#000; padding: 0px; font-family: Arial, Helvetica, sans-serif;'>VISION AND MEDICAL INSURANCE INFORMATION </h1>
							
						</td>
					</tr>
					</tbody>
				</table>
			</td></tr>
			<tr>
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; font-size: 11px; width:200px; ' >	
							 <div style='padding:0px;width:100%;'>   
								<span style=' float:left;margin-top:5px;'>Do you have Vision Insurance?</span>
								<input style=' float:left;margin-top:-5px;' type='radio' <?php if(isset($_POST['Visioninsurance']) && $_POST['Visioninsurance']=='1'){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:2px; float:left;'>&nbsp;YES&nbsp;</label>    				
								<input style=' float:left;margin-top:-5px;' type='radio' <?php if(isset($_POST['Visioninsurance']) && $_POST['Visioninsurance']=='2'){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:2px; float:left;'>&nbsp;NO </label>
							</div>
							  <div style="clear:both; height:0px;"></div>
						</td>
                        <td style='padding: 1px 5px; font-size: 11px;width:200px;' >
                            <label for='Visioninsurancename'>IF YES, Which One?</label>
                            <input  style='border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Visioninsurancename'])){echo $_POST['Visioninsurancename']; }?>">
                        </td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		  
           <tr >
				<td >
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody >
					<tr style=' width: 100%;'>
						<td style='width:200px;padding: 1px 5px; font-size: 11px; width:100%; ' >
                            <label for='VisioninsuranceDOB'>
								Name of Primary Insurance Holder & Date of Birth:
                            </label>                    
                            <input style='width:400px;border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['VisioninsuranceDOB'])){echo $_POST['VisioninsuranceDOB']; }?>">
                        </td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr class="border_bottom">
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px;width:200px; font-size: 11px; width:100%; ' >	
							<label for='VisioninsuranceSSN'>Primary Holder ID or SSN #: </label>
                    
                            <input  style='width:450px;border: 0px; border-bottom: 1px solid #000;' type='text'  id='VisioninsuranceSSN' name='VisioninsuranceSSN' value="<?php if(isset($_POST['VisioninsuranceSSN'])){echo $_POST['VisioninsuranceSSN']; }?>">
                        </td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		
		<tr >
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; font-size: 11px; width:200px; ' >	
							 <div style='padding:0px;width:100%;'>   
								<span style=' float:left;margin-top:5px;'>Do you have Medical Insurance?</span>
								<input style=' float:left;margin-top:-5px;' type='radio' <?php if(isset($_POST['Medicalinsurance']) && $_POST['Medicalinsurance']=='1'){?>checked<?php }?>>
								<label style='font-size: 11px; padding:0px; margin-top:2px; float:left;'>&nbsp;YES&nbsp;</label> 
								<input style=' float:left;margin-top:-5px;' type='radio' <?php if(isset($_POST['Medicalinsurance']) && $_POST['Medicalinsurance']=='2'){?>checked<?php }?>>
								<label style='font-size: 11px; padding:0px; margin-top:2px; float:left;'>&nbsp;NO</label> 								
							</div>
							  <div style="clear:both; height:0px;"></div>
						</td>
                        <td style='padding: 1px 5px; font-size: 11px; width:200px;' >                            
                            <label for='Medicalinsurancename'>IF YES, Which One?</label>
                            <input  style='border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Medicalinsurancename'])){echo $_POST['Medicalinsurancename']; }?>">
                        </td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
            
            
          <tr>
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; width:200px; font-size: 11px; width:100%; ' >	
                            <label for='MedicalinsuranceDOB'>Name of Primary Insurance Holder & Date of Birth:</label>
                    
                            <input  style='width:400px;  border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['MedicalinsuranceDOB'])){echo $_POST['MedicalinsuranceDOB']; }?>">
                        </td>
                        

					</tr>
					</tbody>
				</table>
			</td>
		</tr>
            
            
             <tr class="border_bottom">
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; width:200px; font-size: 11px; width:100%; ' >	
                            <label for='MedicalinsuranceSSN'>Primary Holder ID or SSN #: </label>
                    
                            <input  style='width:450px;  border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['MedicalinsuranceSSN'])){echo $_POST['MedicalinsuranceSSN']; }?>">
                        </td>
                        

					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		
             <tr style='background-color: #c0c0c0; text-align: center;' class="border_bottom">
				<td>

				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr>
						<td style='text-align: center; width: 100%; padding: 1px 5px;'>
							<h1 style=' margin-bottom:0px; font-size: 11px;  margin-top: 0px; color:#000; padding: 0px; font-family: Arial, Helvetica, sans-serif;'>OCULAR HEALTH </h1>
							
						</td>
					</tr>
					</tbody>
				</table>
			</td></tr>
			 <tr>
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr >
						<td style='padding: 1px 5px; font-size: 11px; width:30%; ' >
                            <label for='Reasontodayexam'>
								What is the reason for today's Exam?
                                </label>
                    
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:70%; ' >	
								
                            <input  style='width: 100%; border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Reasontodayexam'])){echo $_POST['Reasontodayexam']; }?>">
                        </td>
                        

					</tr>
                        <tr>
						

						<td style='padding: 1px 5px; font-size: 11px; width:30%; ' >	
								<label for='Lasteyeexam'>When was your last eye exam?</label>
                    
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:70%; ' >	
								
                            <input   style='width: 100%; border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Lasteyeexam'])){echo $_POST['Lasteyeexam']; }?>" >
                        </td>
                        

					</tr>
					</tbody>
				</table>
			</td>
		</tr>
             <tr class="border_bottom">
				<td >
				<table cellspacing='0' cellpadding='0' style=' width:100%;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; font-size: 11px; width:40%; ' >	
								What do you primarily use to correct your Vision?                    
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:20%; ' >	
							 <div style='padding:0px;width:100%;'>  	
                             <input style=' float:left;margin-top:-5px;' type='checkbox' id='GLASSES' <?php if(isset($_POST['Correctprimaryvision']) && in_array('1',$_POST['Correctprimaryvision'])){?>checked<?php }?>>
                               <label style='font-size: 11px; padding:0px; margin-top:8px; float:left;'>&nbsp;GLASSES </label> 
							</div>
							  <div style="clear:both; height:0px;"></div>
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:20%; ' >	
                             <input style=' float:left;margin-top:-5px;' type='checkbox' id='CONTACTS' <?php if(isset($_POST['Correctprimaryvision']) && in_array('2',$_POST['Correctprimaryvision'])){?>checked<?php }?> >
                               <label style='font-size: 11px; padding:0px; margin-top:3px; float:left;'>&nbsp;CONTACTS </label>
							
							  <div style="clear:both; height:0px;"></div>								
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:20%; ' >
                              <div style='padding:0px;width:100%;'>  
							  <input style=' float:left;margin-top:-5px;'  type='checkbox' id='NONE' <?php if(isset($_POST['Correctprimaryvision']) && in_array('3',$_POST['Correctprimaryvision'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:8px; float:left;'>&nbsp;NONE </label> 
								</div>
							  <div style="clear:both; height:0px;"></div>
                        </td>
					</tr>                        
					</tbody>
				</table>
			</td>
		</tr>
          <tr style='font-family: Arial, Helvetica, sans-serif;  ' >
				<td style='border-top:1px solid #000;'>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody style='width: 100%;'>
					<tr style=' width: 100%;'>
						<td style=' font-size: 11px; width:50%; ' >	
								<table cellspacing='0' cellpadding='0' style='width:100%;'>
                                    <tbody style='width: 100%;'>
                                    <tr>
                                        <td style='padding: 1px 5px; font-size: 11px; width:70%; ' ></td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                                <label for=' GLASSES '>YES</label> 
                                        </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                                <label for=' GLASSES '>NO</label> 
                                        </td>
                                    </tr>                                        
                                        
                                    <tr>
                                        <td style='padding: 1px 5px; font-size: 11px; width:70%; text-align: right; ' >
                                            Do you wear glasses? 
                                        </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id='wear_glasses1 ' name='Wearglasses' value='1' <?php if(isset($_POST['Wearglasses']) && $_POST['Wearglasses']=='1'){?>checked<?php }?>>  
                                        </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id='wear_glasses2' name='Wearglasses' value='2' <?php if(isset($_POST['Wearglasses']) && $_POST['Wearglasses']=='2'){?>checked<?php }?>> 
                                        </td>
                                    </tr>
                                        
                                    <tr>
                                        <td style='padding: 1px 5px; font-size: 11px; width:70%; text-align: right; ' >
                                            Do you wear contacts? 
                                        </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id='wear_contacts1' name='Wearcontacts' value='1' <?php if(isset($_POST['Wearcontacts']) && $_POST['Wearcontacts']=='1'){?>checked<?php }?>>  
                                        </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id='wear_contacts2' name='Wearcontacts' value='2' <?php if(isset($_POST['Wearcontacts']) && $_POST['Wearcontacts']=='2'){?>checked<?php }?>> 
                                        </td>
                                    </tr>
                                        
                                    <tr>
                                        <td style='padding: 1px 5px; font-size: 11px; width:70%; text-align: right; ' >
                                            Do you take eye drops? 
                                            </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id='eye_drops1 ' name='Eyedrops' value='1'  <?php if(isset($_POST['Eyedrops']) && $_POST['Eyedrops']=='1'){?>checked<?php }?>>  
                                        </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id='eye_drops2' name='Eyedrops' value='2' <?php if(isset($_POST['Eyedrops']) && $_POST['Eyedrops']=='2'){?>checked<?php }?>> 
                                        </td>
                                    </tr>
                                        
                                    <tr>
                                        <td style='padding: 1px 5px; font-size: 11px; width:70%; text-align: right; ' >
                                            Would you like to try contacts?
                                            </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id=' try_contacts1 ' name='Trycontacts' value='1' <?php if(isset($_POST['Trycontacts']) && $_POST['Trycontacts']=='1'){?>checked<?php }?>>  
                                        </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id=' try_contacts2 ' name='Trycontacts' value='2' <?php if(isset($_POST['Trycontacts']) && $_POST['Trycontacts']=='2'){?>checked<?php }?>> 
                                        </td>
                                    </tr>
                                        
                                    <tr>
                                        <td style='padding: 1px 5px; font-size: 11px; width:70%; text-align: right; ' >
                                            Would you like laser vision correction?
                                            </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id=' vision_correction1 ' name='Visioncorrection' value='1' <?php if(isset($_POST['Visioncorrection']) && $_POST['Visioncorrection']=='1'){?>checked<?php }?>>  
                                        </td>
                                        <td style='padding: 1px 5px; font-size: 11px; width:15%; ' >	
                                             <input type='radio' id=' vision_correction2 ' name='Visioncorrection' value='2' <?php if(isset($_POST['Visioncorrection']) && $_POST['Visioncorrection']=='2'){?>checked<?php }?>> 
                                        </td>
                                    </tr>                            

                                    </tbody>
                                </table>
                    
                        </td>
                        
                        <td style=' font-size: 11px; vertical-align: top; ' >	
								<table cellspacing='0' cellpadding='0' style='width:100%;'>
                                    <tbody style='width: 100%;'>
                                     <tr>
                                        <td style='padding: 3px; height: 19.5px; font-size: 11px; width:100%; ' >   
                                    </tr>    
                                    <tr>
                                        <td style='padding: px; font-size: 11px; width:100%; '>	
                                            <div style='padding:0px;width:100%;'>   
											<span style=' float:left;margin-top:5px;'> If yes,</span>
											<input style=' float:left;margin-top:-5px;' type='checkbox' id='vision-issue1' name='Visionissue[]' value='Distance'<?php if(isset($_POST['Visionissue']) && in_array('Distance',$_POST['Visionissue'])){?>checked<?php }?>>
                                            <label style='font-size: 11px; padding:0px; margin-top:2px; float:left;'>&nbsp;Distance</label>
                                            <input style=' float:left;margin-top:-5px;' type='checkbox' id='vision-issue2' name='Visionissue[]' value='Reading' <?php if(isset($_POST['Visionissue'])  && in_array('Reading',$_POST['Visionissue'])){?>checked<?php }?>>
                                           <label style='font-size: 11px; padding:0px; margin-top:2px; float:left;'>&nbsp;Reading</label>
                                            <input style=' float:left;margin-top:-5px;' type='checkbox' id='vision-issue3' name='Visionissue[]' value='Computer' <?php if(isset($_POST['Visionissue']) && in_array('Computer',$_POST['Visionissue'])){?>checked<?php }?>>
                                            <label style='font-size: 11px; padding:0px; margin-top:2px; float:left;'>&nbsp;Computer</label>
                                            <input style=' float:left;margin-top:-5px;' type='checkbox' id='vision-issue4' name='Visionissue[]' value='Full Time' <?php if(isset($_POST['Visionissue'])  && in_array('Full Time',$_POST['Visionissue'])){?>checked<?php }?>>
                                            <label style='font-size: 11px; padding:0px; margin-top:2px; float:left;'>&nbsp;Full Time</label>
											</div>
											<div style="clear:both; height:0px;"></div>
                                            </td>                                       
                                    </tr>
                                    <tr>
                                        <td style='padding: 10px 0px; font-size: 11px; width:100%; ' >	
                                            <label for='Wearcontactreason'>If yes, what type?</label>
                                             <input id='Wearcontactreason' name='Wearcontactreason'  style='width: 50%; border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Wearcontactreason'])){echo $_POST['Wearcontactreason'];}?>">
                                       
                                    </tr>
                                    <tr>
                                        <td style='padding: 0px 0px; font-size: 11px; width:100%; ' >	
                                             <label for='Takeeyedrops'>If yes, what type?</label>	
                                             <input id='Takeeyedrops' name='Takeeyedrops' style='width: 50%; border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Takeeyedrops'])){echo $_POST['Takeeyedrops'];}?>">
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                </tr>
					</tbody>
				</table>
			</td>
		</tr>  
		 <tr>
			<td>
				<table cellspacing='0' cellpadding='0' style=' width:100%;'>
					<tbody style='width: 100%;'>
					<tr style=' width: 100%;'>
						<td colspan='4' style='font-size: 11px; width:25%;padding:5px;'>
                            <br/>
								Please check any symptoms you may be experiencing:                  
                        </td>
                        </tr >                        
                        <tr style=' width: 100%;vertical-align: top; line-height: 12px;'>
                            <td style='padding: 1px 5px; font-size: 11px; width:25%; line-height: 12px;' >
								<div style='padding:0px;width:100%;'>   
								<input style=' float:left;margin-top:-5px;' type='checkbox' <?php if(isset($_POST['problem']) && in_array('Blurred Vision',$_POST['problem'])){?>checked<?php }?>>
                                 <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Blurred Vision </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' <?php if(isset($_POST['problem']) && in_array('Discharge',$_POST['problem'])){?>checked<?php }?>>
                                 <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Discharge </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' <?php if(isset($_POST['problem']) && in_array('Eye Pain',$_POST['problem'])){?>checked<?php }?>>
                                 <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Eye Pain  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' <?php if(isset($_POST['problem']) && in_array('Dryness',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Dryness </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem5' name='problem' value='Tearing/Watering' <?php if(isset($_POST['problem']) && in_array('Tearing/Watering',$_POST['problem'])){?>checked<?php }?>>
                                 <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Tearing/Watering  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem6' name='problem' value='Burning' <?php if(isset($_POST['problem']) && in_array('Burning',$_POST['problem'])){?>checked<?php }?>>
                                 <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Burning  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem7' name='problem' value='Eye Pain' <?php if(isset($_POST['problem']) && in_array('Eye Pain',$_POST['problem'])){?>checked<?php }?>>
                                 <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Eye Pain  </label>
								 </div>
								<div style="clear:both; height:0px;"></div>
                            </td>
                            
                            <td style='padding: 1px 5px; font-size: 11px; width:25%; line-height: 12px;' >
							    <div style='padding:0px;width:100%;'>   
								<input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem8' name='problem' value='Red Eyes' <?php if(isset($_POST['problem']) && in_array('Red Eyes',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Red Eyes </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem9' name='problem' value='Sandy / Gritty' <?php if(isset($_POST['problem']) && in_array('Sandy / Gritty',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Sandy / Gritty  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem10' name='problem' value='Foreign Object Sensation' <?php if(isset($_POST['problem']) && in_array('Foreign Object Sensation',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Foreign Object Sensation  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem11' name='problem' value='Irritation' <?php if(isset($_POST['problem']) && in_array('Irritation',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Irritation </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem12' name='problem' value='Eye Strain' <?php if(isset($_POST['problem']) && in_array('Eye Strain',$_POST['problem'])){?>checked<?php }?>>
                               <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Eye Strain   </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem13' name='problem' value='Difficulty driving at night' <?php if(isset($_POST['problem']) && in_array('Difficulty driving at night',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Difficulty driving at night   </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem14' name='problem' value='Glare' <?php if(isset($_POST['problem']) && in_array('Glare',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp; Glare  </label>
								</div>
								<div style="clear:both; height:0px;"></div>
                            </td>
                            
                            <td style='padding: 1px 5px; font-size: 11px; width:25%; line-height: 12px;' >
                                  <div style='padding:0px;width:100%;'>   
								<input style=' float:left;margin-top:-5px;' type='checkbox' id='vision-problem15' name='problem' value='Light Sensitivity' <?php if(isset($_POST['problem']) && in_array('Light Sensitivity',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Light Sensitivity  </label><div style="clear:both; height:0px;"></div>
                               <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem16' name='problem' value='Flashes of Light' <?php if(isset($_POST['problem']) && in_array('Flashes of Light',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Flashes of Light  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem17' name='vproblem' value='Floating Spots' <?php if(isset($_POST['problem']) && in_array('Floating Spots',$_POST['problem'])){?>checked<?php }?>>
                               <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Floating Spots   </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem18' name='problem' value='Distorted Vision' <?php if(isset($_POST['problem']) && in_array('Distorted Vision',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Distorted Vision  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem19' name='problem' value='Fluctuating Vision' <?php if(isset($_POST['problem']) && in_array('Fluctuating Vision',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Fluctuating Vision   </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem20' name='problem' value='Loss of Vision' <?php if(isset($_POST['problem']) && in_array('Loss of Vision',$_POST['problem'])){?>checked<?php }?>>
                               <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Loss of Vision  </label></div>
								<div style="clear:both; height:0px;"></div>
                                
                            </td>
                            
                             <td style='padding: 1px 5px; font-size: 11px; width:25%; line-height: 12px;' >
                                  <div style='padding:0px;width:100%;'>   
								<input style=' float:left;margin-top:-5px;' type='checkbox' id='vision-problem21' name='vehicle1' value='Loss of side vision' <?php if(isset($_POST['problem']) && in_array('Loss of side vision',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Loss of side vision  </label><div style="clear:both; height:0px;"></div>
                                 <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem22' name='problem' value='Double Vision' <?php if(isset($_POST['problem']) && in_array('Double Vision',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Double Vision  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem23' name='problem' value='Sties / Chalazion' <?php if(isset($_POST['problem']) && in_array('Sties / Chalazion',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Sties / Chalazion  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem24' name='problem' value='Eye Injury' <?php if(isset($_POST['problem']) && in_array('Eye Injury',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Eye Injury  </label><div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem25' name='problem' value='Other' <?php if(isset($_POST['problem']) && in_array('Other',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;Other </label>
								 <input style=' float:left;width: 60%;height:17px; border: 0px; border-bottom: 1px solid #000;' type="text" value="<?php echo $_POST['other_symptoms'];?>">	
								<div style="clear:both; height:0px;"></div>
                                <input style=' float:left;margin-top:-5px;'  type='checkbox' id='vision-problem26' name='problem' value='None' <?php if(isset($_POST['problem']) && in_array('None',$_POST['problem'])){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;None</label></div>
								<div style="clear:both; height:0px;"></div>
                            </td>
                        

					   </tr>
                        
					</tbody>
				</table>
			</td>
		</tr>
	
         <tr style='background-color: #c0c0c0; text-align: center;' class="border_bottom border_top breakalways">
				<td>

				<table cellspacing='0' cellpadding='0' style='width:100%;' class='breakalways'>
					<tbody style='width: 100%;'>
					<tr style='width: 100%;'>
						<td style='text-align: center; width: 100%; padding: 1px 5px;'>
							<h1 style=' margin-bottom:0px; font-size: 11px;  margin-top: 0px; color:#000; padding: 0px; font-family: Arial, Helvetica, sans-serif;'>OCULAR AND MEDICAL HISTORY </h1>
							
						</td>
					</tr>
					</tbody>
				</table>
			</td></tr>
            
            <tr style='font-family: Arial, Helvetica, sans-serif; '>
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%; '>
					<tbody>
					<tr>
						<td colspan='4' style='padding: 1px 5px; font-size: 11px; width:25%; ' >
                           
								Please check any condition that applies to you:
                        </td>
					</tr>                        
					<tr style=' width: 100%;vertical-align: top; line-height: 12px;'>
						<td style='padding: 1px 5px; font-size: 10px; width:50%; line-height: 12px; ' >	
							<div style='padding:0px;width:100%;'>   
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL1' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('1',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;DIABETES </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL2' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('2',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;HIGH BLOOD PRESSURE  </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL3' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('3',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;HIGH CHOLESTEROL   </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL4' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('4',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;THYROID  </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL5' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('5',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;HEART PROBLEMS   </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;'  type='checkbox' id='OCULAR_MEDICAL6' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('6',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;RESPIRATORY PROBLEMS   </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL7' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('7',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;STROKE   </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL8' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('8',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;CANCER    </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL9' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('9',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;HEADACHES    </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL10' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('10',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;HEAD / EYE INJURY </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL11' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('11',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;OTHER   </label>
							 <input style=' float:left;width: 70%;height:17px; border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['OCULAR_MEDICALSPECIFY'])){echo $_POST['OCULAR_MEDICALSPECIFY']; }?>">
							 </div>
							<div style="clear:both; height:0px;"></div>
						</td>
						<td style='padding: 1px 5px; font-size: 10px; width:50%; ' >	
							 <div style='padding:0px;width:100%;'>   
							 <input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL12' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('12',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;RETINAL DETACHMENT  </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;'  type='checkbox' id='OCULAR_MEDICAL13' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('13',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; MACULAR DEGENERATION </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL14' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('14',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;CATARACTS </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;'  type='checkbox' id='OCULAR_MEDICAL15' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('15',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;GLAUCOMA </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;'  type='checkbox' id='OCULAR_MEDICAL16' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('16',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;BLINDNESS / LOSS OF VISION </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;' type='checkbox' id='OCULAR_MEDICAL17' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('17',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;LAZY EYE </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;'  type='checkbox' id='OCULAR_MEDICAL18' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('18',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;DOUBLE VISION </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;'  type='checkbox' id='OCULAR_MEDICAL19' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('19',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;EYE SURGERY    </label><div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;'  type='checkbox' id='OCULAR_MEDICAL20' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('20',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;OTHER   </label>
							 <input style=' float:left;width: 70%;height:17px; border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['OCULAR_MEDICAL20'])){echo $_POST['OCULAR_MEDICAL20']; }?>">
							 <div style="clear:both; height:0px;"></div>
							<input style=' float:left;margin-top:-5px;'  type='checkbox' id='OCULAR_MEDICAL21' name='OCULAR_MEDICAL' <?php if(isset($_POST['OCULAR_MEDICAL']) && in_array('21',$_POST['OCULAR_MEDICAL'])){?>checked<?php }?>>
							 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;NONE    </label></div>
							<div style="clear:both; height:0px;"></div>
						</td>
				   </tr>
				</tbody>
				</table>
			</td>
		</tr>
		 <tr>
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%; margin-top: 10px;'>
					<tbody>
					<tr>
						<td style='padding: 1px 5px; font-size: 11px; width:40%; ' >	
                            <label >Female patients - Are you pregnant? </label>
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:60%; ' >	
                               <div style='padding:0px;width:100%;'>   
								<input style=' float:left;margin-top:-5px;' type='radio' id='pregnant_yes ' name='pregnant' <?php if(isset($_POST['pregnant']) && $_POST['pregnant']==1){?>checked<?php }?>>
                                <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;YES&nbsp; </label> 
								<input style=' float:left;margin-top:-2px;'  type='radio' id='pregnant_no' name='pregnant' <?php if(isset($_POST['pregnant']) && $_POST['pregnant']==2){?>checked<?php }?>>
                                 <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;NO </label> 
								</div>
							<div style="clear:both; height:0px;"></div>								 
                        </td>
					</tr>
                    <tr>
						<td style='padding: 1px 5px; font-size: 11px; width:40%; ' >	
                            <label >Do you use or smoke any tobacco products?   </label>
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:60%; ' >	
							<div style='padding:0px;width:100%;'> 
                             <input style=' float:left;margin-top:-5px;'  type='radio' id='tobacco_yes ' name='tobacco' <?php if(isset($_POST['tobacco']) && $_POST['tobacco']==1){?>checked<?php }?>>
                               <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;YES&nbsp; </label> 
                            <input style=' float:left;margin-top:-2px;' type='radio' id='tobacco_no' name='tobacco' <?php if(isset($_POST['tobacco']) && $_POST['tobacco']==2){?>checked<?php }?>>
                               <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;NO </label> 
							</div>
							<div style="clear:both; height:0px;"></div>									
                        </td>
					</tr>                        
                    <tr style=' width: 100%;'>
						<td style='padding: 1px 5px; font-size: 11px; width:40%; ' >	
                            <label >Do you drink alcohol? </label>
                        </td>
                        <td style='padding: 1px 5px; font-size: 11px; width:60%; ' >
							<div style='padding:0px;width:100%;'> 						
                              <input style=' float:left;margin-top:-5px;'   type='radio' id='alcohol_yes ' name='alcohol' <?php if(isset($_POST['alcohol']) && $_POST['alcohol']==1){?>checked<?php }?>>
                               <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;YES&nbsp; </label> 
                            <input style=' float:left;margin-top:-2px;' type='radio' id='alcohol_no' name='alcohol' <?php if(isset($_POST['alcohol']) && $_POST['alcohol']==2){?>checked<?php }?>>
                               <label style='font-size: 11px; padding:0px; margin-top:5px; float:left;'>&nbsp;NO </label> 
							</div>
							<div style="clear:both; height:0px;"></div>  
                        </td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr> 
		
		<tr class="border_bottom border_top" style='background-color: #c0c0c0; text-align: center;margin-top:20px;'>
				<td>

				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody>
					<tr style='width: 100%;'>
						<td style='text-align: center; width: 100%; padding: 1px 5px;'>
							<h1 style=' margin-bottom:0px; font-size: 11px;  margin-top: 0px; color:#000; padding: 0px; font-family: Arial, Helvetica, sans-serif;'>FAMILY OCULAR AND MEDICAL HISTORY </h1>
							
						</td>
					</tr>
					</tbody>
				</table>
		</td></tr>
		<tr>
			<td>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody >
                        <tr>
                        <td colspan='2' style=' font-size: 11px;padding: 1px 5px; border-top:1px solid #000; ' >
                            <label>Please check any condition that applies to a family member and indicate your relationship:</label>
                        </td>
                        </tr>
						
					<tr style=' width: 100%; '>						
                       
						<td style='padding: 1px 5px; font-size: 10px; width:50%; ' >
								<table cellspacing='0' cellpadding='0' style='  width:100%;'>
                                    <tbody style='width: 100%; '>
                                    <tr>
                                        <td style=' font-size: 10px; width:50%; ' >
										<div style='padding:0px;width:100%;'>   
											<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL1']) && $_POST['FAMILY_OCULAR_MEDICAL1']==1){?>checked<?php }?>>
                                            <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;DIABETES </label>
										</div>
										<div style="clear:both; height:0px;"></div>			
                                        </td>                                       
                                        <td style=' font-size: 10px; width:50%; ' >	                                        
                                           <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'><?php echo $_POST['FAMILY_OCULAR_MEDICAL_R1']; ?></div>
												 <div style="clear:both; height:0px;"></div>
                                        </td>
                                    </tr>
                                        
                                     <tr>
                                        <td style=' font-size: 10px; width:60%; ' >
											<div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL2']) && $_POST['FAMILY_OCULAR_MEDICAL2']==2){?>checked<?php }?>>
												<label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; HIGH BLOOD PRESSURE  </label>
											</div>
										<div style="clear:both; height:0px;"></div>	
                                        </td>
                                       
                                        <td style=' font-size: 10px; width:40%; ' >	
												<div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R2'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R2']; }?></div>
												 <div style="clear:both; height:0px;"></div>
												 </td>
                                    </tr>
                                         <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                               <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox'  <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL3']) && $_POST['FAMILY_OCULAR_MEDICAL3']==3){?>checked<?php }?>>
                                               <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; HIGH CHOLESTEROL</label>
												</div>
												<div style="clear:both; height:0px;"></div>	
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R3'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R3']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                 <div style='padding:0px;width:100%;'>   
												<input style=' float:left;'  type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL4']) && $_POST['FAMILY_OCULAR_MEDICAL4']==4){?>checked<?php }?>>
                                                  <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;THYROID  </label>
												</div>
												<div style="clear:both; height:0px;"></div>	
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
                                                 <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R4'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R4']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL5']) && $_POST['FAMILY_OCULAR_MEDICAL5']==5){?>checked<?php }?>>
                                                 <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;HEART PROBLEMS </label>
												 </div>
												<div style="clear:both; height:0px;"></div>	
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
                                                   <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R5'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R5']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;'  type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL6']) && $_POST['FAMILY_OCULAR_MEDICAL6']==6){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;RESPIRATORY PROBLEMS   </label>
												</div>
												<div style="clear:both; height:0px;"></div>	
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
                                                 <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R6'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R6']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                               <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL7']) && $_POST['FAMILY_OCULAR_MEDICAL7']==7){?>checked<?php }?>>
                                               <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; STROKE   </label>
											   </div>
												<div style="clear:both; height:0px;"></div>	
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
                                                  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R7'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R7']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL8']) && $_POST['FAMILY_OCULAR_MEDICAL8']==8){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; CANCER</label>
												</div>
												<div style="clear:both; height:0px;"></div>	
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
                                                  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R8'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R8']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                 <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL9']) && $_POST['FAMILY_OCULAR_MEDICAL9']==9){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;HEADACHES </label>
												</div>
												<div style="clear:both; height:0px;"></div>	
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
                                                <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R9'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R9']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                 <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL10']) && $_POST['FAMILY_OCULAR_MEDICAL10']==10){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; HEAD / EYE INJURY    </label>
												</div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
                                                 <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R10'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R10']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                               <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL11']) && $_POST['FAMILY_OCULAR_MEDICAL11']==11){?>checked<?php }?>>
												<label style='font-size: 10px; padding:0px;margin-top:7px; float:left;'>&nbsp;  OTHER   </label>												
												
												<div  style='<?php if(isset($_POST['FAMILY_OCULAR_MEDICAL11OTHER']) && $_POST['FAMILY_OCULAR_MEDICAL11OTHER']!=''){?>margin-top:11px;<?php }else{?>margin-top:17px;<?php }?>margin-left:80px;width: 50%; border: 0px; border-bottom: 1px solid #000;' type='text'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL11OTHER'])){echo $_POST['FAMILY_OCULAR_MEDICAL11OTHER']; }?></div>	
												</div>
												<div style="clear:both; height:0px;"></div>
												
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
                                                  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R11'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R11']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                    </tbody>
                                </table>                    
                        </td>
                       
                        <td style=' font-size: 10px; width:50%; vertical-align: top; ' >	
								<table cellspacing='0' cellpadding='0' style='  width:100%; '>
                                    <tbody style='width: 100%; '>                                        
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
											<div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL12']) && $_POST['FAMILY_OCULAR_MEDICAL12']==12){?>checked<?php }?>>
                                               <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; RETINAL DETACHMENT  </label>											   
												</div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											   <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R12'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R12']; }?></div>
												 <div style="clear:both; height:0px;"></div>   
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                               <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL13']) && $_POST['FAMILY_OCULAR_MEDICAL13']==13){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; MACULAR DEGENERATION </label>
												</div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
													<?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R13'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R13']; }?></div>
												 <div style="clear:both; height:0px;"></div>     
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL14']) && $_POST['FAMILY_OCULAR_MEDICAL14']==14){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;CATARACTS </label>
												</div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
												<div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R14'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R14']; }?></div>
												 <div style="clear:both; height:0px;"></div>        
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL15']) && $_POST['FAMILY_OCULAR_MEDICAL15']==15){?>checked<?php }?>>
												<label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;GLAUCOMA </label>												
												</div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R15'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R15']; }?></div>
												 <div style="clear:both; height:0px;"></div>    
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                 <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL16']) && $_POST['FAMILY_OCULAR_MEDICAL16']==16){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;BLINDNESS / LOSS OF VISION </label></div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R16'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R16']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL17']) && $_POST['FAMILY_OCULAR_MEDICAL17']==17){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp;LAZY EYE </label>
												</div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R17'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R17']; }?></div>
												 <div style="clear:both; height:0px;"></div>    
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL18']) && $_POST['FAMILY_OCULAR_MEDICAL18']==18){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; DOUBLE VISION </label>
												</div>
												<div style="clear:both; height:0px;"></div>                                              
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R18'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R18']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL19']) && $_POST['FAMILY_OCULAR_MEDICAL19']==19){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; EYE SURGERY    </label>
												</div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R19'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R19']; }?></div>
												 <div style="clear:both; height:0px;"></div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td style=' font-size: 10px; width:60%; ' >
													<div style='padding:0px;width:100%;'>   
														<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL20']) && $_POST['FAMILY_OCULAR_MEDICAL20']==20){?>checked<?php }?>>
													   <label style='font-size: 10px; padding:0px; margin-top:7px; float:left;'>&nbsp;OTHER   </label>
													   <div style='<?php if(isset($_POST['FAMILY_OCULAR_MEDICAL20OTHER']) && $_POST['FAMILY_OCULAR_MEDICAL20OTHER']!=''){?>margin-top:11px;<?php }else{?>margin-top:17px;<?php }?>margin-left:80px;width: 50%; border: 0px; border-bottom: 1px solid #000;'>
														<?php if(isset($_POST['FAMILY_OCULAR_MEDICAL20OTHER'])){echo $_POST['FAMILY_OCULAR_MEDICAL20OTHER']; }else {echo " ";}?></div> 
													  </div>
												<div style="clear:both; height:0px;"></div>
                                            </td>
                                              <td style=' font-size: 10px; width:40%; ' >
											  <div style='width: 80%; border: 0px; border-bottom: 1px solid #000;'>
                                                 <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL_R20'])){echo $_POST['FAMILY_OCULAR_MEDICAL_R20']; }?></div> 
												 <div style="clear:both; height:0px;"></div>
                                             </td>
											
                                        </tr>
					<tr>
                                            <td style=' font-size: 10px; width:60%; ' >
                                                <div style='padding:0px;width:100%;'>   
												<input style=' float:left;' type='checkbox' <?php if(isset($_POST['FAMILY_OCULAR_MEDICAL21']) && $_POST['FAMILY_OCULAR_MEDICAL21']==21){?>checked<?php }?>>
                                                <label style='font-size: 10px; padding:0px; margin-top:5px; float:left;'>&nbsp; NONE    </label>
												</div>
												<div style="clear:both; height:0px;"></div>
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
		<tr class="border_bottom border_top"  style='background-color: #c0c0c0; text-align: center;'>
				<td>
				<table cellspacing='0' cellpadding='0' style='width:100%;'>
					<tbody >
					<tr >
						<td style='text-align: center; width: 100%; padding: 1px 5px;'>
							<h1 style=' margin-bottom:0px; font-size: 11px;  margin-top: 0px; color:#000; padding: 0px; font-family: Arial, Helvetica, sans-serif;'>MEDICATIONS AND ALLERGIES </h1>
							
						</td>
					</tr>
					</tbody>
				</table>
		</td></tr>
		<tr style='font-family: Arial, Helvetica, sans-serif; '>
			<td>
			<table  cellspacing='0' cellpadding='0' style='width:100%;'>
				<tbody>
				<tr style=' width: 100%;'>
					<td style='padding: 1px 5px; font-size: 11px; width:100%; ' >	
						<label for='currently_taking_medicines' style='margin-bottom: 5px;'>Please list all medications you are currently taking (including birth control, vitamins & herbs):</label><br/><b><?php if(isset($_POST['currently_taking_medicines'])){echo $_POST['currently_taking_medicines']; }?></b>
					</td>
				</tr>
				<tr style=' width: 100%;'>
					<td style='padding: 1px 5px; padding-top: 0px; font-size: 11px; width:100%; ' >	
						<label for='eye_drops' style='margin-bottom: 10px;'>Please list any eye drops you are currently using:</label><br/>
						<b><?php if(isset($_POST['eye_drops'])){echo $_POST['eye_drops']; }?></b>
					</td>
				</tr>
					
				</tbody>
			</table>
		</td>
		</tr>
		 <tr style='font-family: Arial, Helvetica, sans-serif;'>
				<td >
				<table style=' width:100%;' cellspacing='0' cellpadding='0'>
					<tbody>
					<tr style=' width: 100%;'>
						<td style='padding: 1px 5px; font-size: 11px; width:50%; '>	
								<div style='padding:0px;width:100%;'>   					
								<span style=' float:left;'>Are you allergic to any medications? &nbsp; </span>    
								<input style=' float:left;margin-top:-6px;' type='radio' <?php if(isset($_POST['allergic']) && $_POST['allergic']==1){?>checked<?php }?>>
									   <label style='font-size: 11px; padding:0px; margin-top:1px; float:left;'>&nbsp;YES&nbsp; </label> 
									<input style=' float:left;margin-top:-6px;' type='radio' <?php if(isset($_POST['allergic']) && $_POST['allergic']==2){?>checked<?php }?>>
									   <label style='font-size: 11px; padding:0px; margin-top:1px; float:left;'>&nbsp;NO </label> 
									   </div>
								<div style="clear:both; height:0px;"></div>
								</td>
								<td style='padding: 1px 5px; font-size: 11px; width:50%; '>	
									 <label for='Allergicname'>IF YES, Which One?</label>
									<input style='border: 0px; border-bottom: 1px solid #000;'  value="<?php if(isset($_POST['Allergicname'])){echo $_POST['Allergicname']; }?>" type='text'>
									
                        </td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr style='font-family: Arial, Helvetica, sans-serif;'>
				<td>
				<table style='width:100%;' cellspacing='0' cellpadding='0'>
					<tbody style='width: 100%;'>
					<tr style=' width: 100%;'>
						<td style='padding: 1px 5px; font-size: 11px; width:50%; '>	
							<div style='padding:0px;width:100%;'>   					
							<span style=' float:left;'>Do you have general / seasonal allergies&nbsp; </span>                           
                           <input style=' float:left;margin-top:-5px;' type='radio' <?php if(isset($_POST['Seasonalallergies']) && $_POST['Seasonalallergies']==1){?>checked<?php }?>>
                            <label style='font-size: 11px; padding:0px; margin-top:1px; float:left;'>&nbsp;YES &nbsp; </label> 
                            <input style=' float:left;margin-top:-5px;' type='radio'  <?php if(isset($_POST['Seasonalallergies']) && $_POST['Seasonalallergies']==2){?>checked<?php }?>>
                            <label style='font-size: 11px; padding:0px; margin-top:1px; float:left;'>&nbsp;NO </label> 
							</div>
								<div style="clear:both; height:0px;"></div>
						</td>
                        <td style='padding: 1px 5px; font-size: 11px; width:50%; '>	
                             <label for='Seasonalallergiesname'>IF YES, Which One?</label>
                            <input style='border: 0px; border-bottom: 1px solid #000;' type='text' value="<?php if(isset($_POST['Seasonalallergiesname'])){echo $_POST['Seasonalallergiesname']; }?>">
                        </td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr style='font-family: Arial, Helvetica, sans-serif; '>
				<td>
				<table style=' width:100%;' cellspacing='0' cellpadding='0'>
					<tbody style='width: 100%;'>
                     <tr style=' width: 100%;'>
                         <td colspan='2' style='padding: 1px 5px; font-size: 11px;'>
                           
                             Please sign below to indicate that all the information provided above is correct.<br/>
                         </td>
                    </tr>
					<tr style=' width: 100%;margin-top:11px;margin-bottom:1px;'>
						<td style='padding: 0px; font-size: 11px; width:50%; text-align: center;'>	
							<img src='<?php echo $file ;?>' height='100px'><br/>
                            <label for='seasonal_allergies_name' style='font-weight: 600; font-size: 13px;'>
								Signature of patient (or parent/guardian if minor)
                            </label>
						</td>
                        <td style='padding: 1px 5px; font-size: 11px; width:50%; '>
                            <input style=' border: 0px; border-bottom: 1px solid #000;text-align:center;font-weight: 600;' type='text' value='<?php echo date('m/d/Y');?>' readonly><br/>
                            <label style='font-size: 13px;text-align:center;padding-left:55px;'>DATE</label>
                        </td>
					</tr> 
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<table width="100%"  bgcolor="#fff" align="center" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif;page-break-before: always; ">
	<tr><td>				
		<table cellspacing="0" cellpadding="0" style="width:100%;">
			<tbody>
			<tr>
				<td style="text-align: center; width: 100%;">
					<h1 style=" margin-bottom:0px; font-size:24px; margin-top: 20px; color:#000; padding: 0px; font-family: Times New Roman, Times, serif; margin-bottom: 15px; ">EYE TO EYECARE OFFICE POLICY </h1>
					
				</td>
			</tr>
			</tbody>
		</table>
	</td></tr>
</table>
<table width="100%"  bgcolor="#fff" align="center" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; border:2px solid #000;padding:5px;font-size:12px !important;">
	<tr style=" background-color: #fff; text-align: center;">
		<td>

		<table cellspacing="0" cellpadding="0" style="width:100%;font-size:12px !important;">
			<tbody style="width: 100%;">
			<tr style="width: 100%;">
				<td style="text-align: left; width: 100%; padding: 1px 5px;">
					<h1 style=" margin-bottom:0px; font-size:20px;  margin-top: 0px; color:#000; padding: 0px;  font-family: Times New Roman, Times, serif;">Financial Policy</h1>
					<p style="font-size: 11px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">All co-pays and payments are due at the time of service. Fees paid for eye examination, contact lens evaluation,medical services, purchase of glasses and/or contact lenses are to be made in FULL on the day of purchase and are non-refundable.</p>
					
					  <p style="font-size: 11px; margin-bottom: 5px; margin-top: 5px; font-family: Arial, Helvetica, sans-serif;">Patients with insurance – We accept insurance for payment of services on plans for which we are participatingproviders. If for whatever reason your insurance denies payment, you will be responsible for the remaining balance.</p>
					
				</td>
			</tr>
			</tbody>
		</table>
	</td></tr>
	
	
	<tr style="background-color: #fff; text-align: center;">
		<td >

		<table cellspacing="0" cellpadding="0" style="width:100%;">
			<tbody style="width: 100%;">
			<tr style="width: 100%;">
				<td style="text-align: left; width: 100%; padding: 1px 5px;">
					<h1 style=" margin-bottom:0px; font-size:20px;  margin-top: 0px; color:#000; padding: 0px;  font-family: Times New Roman, Times, serif;">Appointments</h1>
					<p style="font-size: 11px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">We encourage you to call, email or leave a message at least 24 hours prior to your appointment time if you need to cancel or reschedule your appointment. Please help us better serve you and other patients by keeping your scheduled appointments.</p>   
				</td>
			</tr>
			</tbody>
		</table>
	</td></tr>
	
	<tr style="background-color: #fff; text-align: center;">
		<td >

		<table cellspacing="0" cellpadding="0" style="width:100%;">
			<tbody style="width: 100%;">
			<tr style="width: 100%;">
				<td style="text-align: left; width: 100%; padding: 1px 5px;">
					<h1 style=" margin-bottom:0px; font-size:20px;  margin-top: 0px; color:#000; padding: 0px;  font-family: Times New Roman, Times, serif;">Glasses</h1>
					<p style="font-size: 11px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">All orders for glasses are FINAL. After your exam, you can return to the office within 60 days at no charge for a re-check with the doctor if you are experiencing any problems such as blurred vision, headaches, or any other discomfort. After 60 days, there is a $50 fee.</p>   
				</td>
			</tr>
			</tbody>
		</table>
	</td></tr>
	
	 <tr style=" background-color: #fff; text-align: center;">
		<td >

		<table cellspacing="0" cellpadding="0" style=" width:100%;">
			<tbody style="width: 100%;">
			<tr style="width: 100%;">
				<td style="text-align: left; width: 100%; padding: 1px 5px;">
					<h1 style=" margin-bottom:0px; font-size:20px;  margin-top: 0px; color:#000; padding: 0px;  font-family: Times New Roman, Times, serif;">Manufacturer Warranty on Glasses and/or Lenses</h1>
					<p style="font-size: 11px; margin-top: 5px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif;"><b>Frames</b> that have a manufacture's warranty can be replaced one time within one year of purchase upon approval
					from the manufacture for defects. Some restrictions apply. A shipping and handling fee of $20 will apply.</p>
					 <p style="font-size: 11px; margin-top: 5px; margin-bottom: 5px;font-family: Arial, Helvetica, sans-serif;"><b>Lenses</b> – Premium lenses can be replaced under a manufacture's warranty one time within one year of purchase upon approval from the manufacture for defects. A handling fee of $20 will apply. Some restrictions apply.</p>   
				</td>
			</tr>
			</tbody>
		</table>
	</td></tr>
	
	 <tr style="background-color: #fff; text-align: center;">
		<td>

		<table cellspacing="0" cellpadding="0" style="width:100%;">
			<tbody style="width: 100%;">
			<tr style="width: 100%;">
				<td style="text-align: left; width: 100%; padding: 1px 5px;">
					<h1 style=" margin-bottom:0px; font-size:20px;  margin-top: 0px; color:#000; padding: 0px;  font-family: Times New Roman, Times, serif;">Contact Lenses</h1>
					<p style="font-size: 11px; margin-top: 5px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;">All order for contact lenses are FINAL. All contact lens follow-up visits or finalization of contact lens prescriptions have to be done within 30 days of the Contact Lens Exam, unless otherwise instructed by the
					doctor. After 30 days, there is a $30 fee.</p>   
				</td>
			</tr>
			</tbody>
		</table>
	</td></tr>
	
	<tr style="background-color: #fff; text-align: center;">
		<td>

		<table cellspacing="0" cellpadding="0" style="width:100%;">
			<tbody style="width: 100%;">
			<tr style="width: 100%;">
				<td style="text-align: left; width: 100%; padding: 1px 5px;">
					<h1 style=" margin-bottom:0px; font-size:20px;  margin-top: 0px; color:#000; padding: 0px;  font-family: Times New Roman, Times, serif;">HIPPA PRIVACY ACKNOWLEGEMENT OF NOTICE OF PRIVACY PRACTICES</h1>
					<p style="font-size: 11px; margin-top: 5px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif;">I understand, acknowledge and agree that I have received a copy of the Notice of Privacy Practices for review and to keep for my records if I desire on the date identified below.</p>   
				</td>
			</tr>
			</tbody>
		</table>
	</td></tr>

<tr style="font-family: Arial, Helvetica, sans-serif;">
		<td>
		<table cellspacing="0" cellpadding="0" style="width:100%;">
			<tbody style="width: 100%;">
				<tr style=" width: 100%;">
					<td colspan="3">
						<h1 style=" margin-bottom:10px; font-size:20px;  margin-top: 10px; color:#000; padding: 0px;  font-family: Times New Roman, Times, serif;">The following person (s) may have access to information in my records:</h1>
					</td>
				</tr>
				<tr style=" width: 100%;">
					<td style="padding: 1px 5px; font-size: 14px; width:33.333%; " >	
							<label for="First_Name">Name:</label>
						<input  style="width: 80%; border:0px; border-bottom: 1px solid #000;"  style="width: 98%;" type="text" value='<?php if(isset($_POST['AccessFirstName1'])){echo $_POST['AccessFirstName1']; }?>'>
					</td>
					<td style="padding: 1px 5px; font-size: 14px;width:33.333%;" >	
							<label for="Middle_Name">Relationship:</label>
						<input   style="width: 65%;border:0px; border-bottom: 1px solid #000;"  type="text" value='<?php if(isset($_POST['AccessRelation1'])){echo $_POST['AccessRelation1']; }?>'>
					</td>
					<td style="padding: 1px 5px; font-size: 14px; width:33.333%; " >	
							<label for="Last_name">Phone Number:</label>
						<input  style="width: 56%;border:0px; border-bottom: 1px solid #000;"  type="text" value='<?php if(isset($_POST['AccessPhone1'])){echo $_POST['AccessPhone1']; }?>'>
					</td>
				</tr>
				<tr style=" width: 100%;">
					<td style="padding: 1px 5px; font-size: 14px; width:33.333%; " >	
							<label for="First_Name">Name:</label>
						<input  style="width: 80%; border:0px; border-bottom: 1px solid #000;"  style="width: 98%;" type="text" value='<?php if(isset($_POST['AccessFirstName2'])){echo $_POST['AccessFirstName2']; }?>'>
					</td>
					<td style="padding: 1px 5px; font-size: 14px;width:33.333%;" >	
							<label for="Middle_Name">Relationship:</label>
						<input   style="width: 65%;border:0px; border-bottom: 1px solid #000;"  type="text" value='<?php if(isset($_POST['AccessRelation2'])){echo $_POST['AccessRelation2']; }?>' >
					</td>
					<td style="padding: 1px 5px; font-size: 14px; width:33.333%; " >	
							<label for="Last_name">Phone Number:</label>
						<input  style="width: 56%;border:0px; border-bottom: 1px solid #000;" type="text" value='<?php if(isset($_POST['AccessPhone2'])){echo $_POST['AccessPhone2']; }?>' >
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
	
<tr style="font-family: Arial, Helvetica, sans-serif; ">
		<td>
		<table cellspacing="0" cellpadding="0" style="width:100%;">
			<tbody style="width: 100%;">
			<tr style=" width: 100%;padding-top: 10px;">
				<td style="padding: 1px 5px; font-size: 14px; width:100%; " >	
						Can we leave a detailed message with the person (s) listed above?
					<input type="radio" <?php if(isset($_POST['Is_Message']) && $_POST['Is_Message']==1){?>checked<?php }?>>
						<label> YES </label> 
					<input type="radio" <?php if(isset($_POST['Is_Message']) && $_POST['Is_Message']==2){?>checked<?php }?>>
						<label> NO </label> 
				</td>
			</tr>
			</tbody>
		</table>
	</td>
</tr>
	
  <tr style="font-family: Arial, Helvetica, sans-serif; ">
		<td>
		<table cellspacing="0" cellpadding="0" style="width:100%;">
			<tbody style="width: 100%;">
			<tr style=" width: 100%;">
				<td style="padding: 1px 5px; font-size: 14px; width:100%; " >	
						Can we release prescriptions and/or contacts to the person (s) listed above?
					<input type="radio" <?php if(isset($_POST['Is_Message2']) && $_POST['Is_Message2']==1){?>checked<?php }?>>
						<label for=" Vision_Insurance_yes "> YES </label> 
					<input type="radio" <?php if(isset($_POST['Is_Message2']) && $_POST['Is_Message2']==2){?>checked<?php }?>>
						<label for="Vision_Insurance_no"> NO </label> 
				</td>
			</tr>
			</tbody>
		</table>
	</td>
</tr>            
<tr style='font-family: Arial, Helvetica, sans-serif;'>
				<td>
				<table style=' width:100%;' cellspacing='0' cellpadding='0'>
					<tbody style='width: 100%;'>
                     <tr style=' width: 100%;'>
                         <td colspan='2' style='padding: 1px 5px; font-size: 11px;'>
                             
                              By signing below, I hereby state that I have read, understood, and will abide by the above office policies.<br/><br/>
                         </td>
                    </tr>
					<tr style=' width: 100%;margin-top:11px;margin-bottom:1px;'>
						<td style='padding: 0px; font-size: 11px; width:50%; text-align: center;'>	
							<img src='<?php echo $file ;?>' height='100px'><br/>
                            <label for='seasonal_allergies_name' style='font-weight: 600; font-size: 13px;'>
								Signature of patient (or parent/guardian if minor)
                            </label>
						</td>
                        <td style='padding: 1px 5px; font-size: 11px; width:50%; '>
                            <input style=' border: 0px; border-bottom: 1px solid #000;text-align:center;font-weight: 600;' type='text' value='<?php echo date('m/d/Y');?>' readonly><br/>
                            <label style='font-size: 13px;text-align:center;padding-left:55px;'>DATE</label>
                        </td>
					</tr> 
					</tbody>
				</table>
			</td>
		</tr>
</table>
</body>
</html>