// Preloader
window.addEventListener('load', function () {
  const preloader = document.getElementById('preloader');
  setTimeout(() => {
    preloader.style.opacity = '0';
    preloader.style.transition = 'opacity 0.5s ease';
    setTimeout(() => {
      preloader.style.display = 'none';
    }, 500); // wait for transition to complete
  }, 300); // show loader for at least 2 seconds
});

 document.addEventListener('DOMContentLoaded', function() {
            const accordionHeaders = document.querySelectorAll('.accordion-header');
            const accordionContents = document.querySelectorAll('.accordion-content');
            const accordionItems = document.querySelectorAll('.accordion-item');

            function closeAllAccordionsExcept(activeContent) {
                accordionContents.forEach(content => {
                    if (content !== activeContent && content.classList.contains('open')) {
                        content.classList.remove('open');
                        const header = content.previousElementSibling;
                        const arrow = header.querySelector('.accordion-arrow');
                        arrow.classList.remove('rotated');

                        // Reset rounded classes for the header and item
                        header.classList.add('rounded-xl'); // Re-add default rounded to header
                        header.classList.remove('rounded-t-xl'); // Remove top-rounded from header
                        header.closest('.accordion-item').classList.add('rounded-xl'); // Re-add default rounded to item
                        header.closest('.accordion-item').classList.remove('rounded-t-xl'); // Remove top-rounded from item
                    }
                });
            }

            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const arrow = this.querySelector('.accordion-arrow');
                    const isOpening = !content.classList.contains('open');

                    // Close all other accordions if opening a new one
                    if (isOpening) {
                        closeAllAccordionsExcept(content);
                    }

                    // Toggle the 'open' class for smooth transition
                    content.classList.toggle('open');
                    // Toggle the 'rotated' class for the arrow animation
                    arrow.classList.toggle('rotated');

                    // Adjust border-radius for header and parent item
                    if (content.classList.contains('open')) {
                        this.classList.remove('rounded-xl'); // Remove full rounded
                        this.classList.add('rounded-t-xl'); // Add top rounded
                        this.closest('.accordion-item').classList.remove('rounded-xl'); // Remove full rounded from parent
                        this.closest('.accordion-item').classList.add('rounded-t-xl'); // Add top rounded to parent
                    } else {
                        this.classList.add('rounded-xl'); // Add full rounded
                        this.classList.remove('rounded-t-xl'); // Remove top rounded
                        this.closest('.accordion-item').classList.add('rounded-xl'); // Add full rounded to parent
                        this.closest('.accordion-item').classList.remove('rounded-t-xl'); // Remove top rounded from parent
                    }
                });
            });

            // Set the first accordion item to be open by default
            const firstHeader = document.querySelector('.accordion-header');
            if (firstHeader) {
                const firstContent = firstHeader.nextElementSibling;
                const firstArrow = firstHeader.querySelector('.accordion-arrow');
                firstContent.classList.add('open'); // Use 'open' for smooth transition
                firstArrow.classList.add('rotated');
                firstHeader.classList.remove('rounded-xl');
                firstHeader.classList.add('rounded-t-xl');
                firstHeader.closest('.accordion-item').classList.remove('rounded-xl');
                firstHeader.closest('.accordion-item').classList.add('rounded-t-xl');
            }
        });




// custom-menu.js

jQuery(document).ready(function ($) {
  $("li.menu-item-has-children").on("click", function (e) {
    e.stopPropagation();

    if ($(this).hasClass("menu-item-type-post_type")) {
      return;
    } else {
      if ($(this).children("ul").css("display") == "none") {
        $(this)
          .children("ul")
          .attr("style", "display: block !important");
      } else {
        $(this)
          .children("ul")
          .attr("style", "display: none !important");
      }
      $(this).toggleClass("open");
      return false;
    }
  });

  $(".menu-item-type-post_type").on("click", function (e) {
    e.stopPropagation();
    return;
  });

  $(".dwnbut").on("click", function (e) {
    e.stopPropagation();
    return;
  });

  $(".client-box img").on("click", function () {
    window.location = "/prc-partners";
  });
});


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
			nextForm(2);
		}
		function nextForm(nextf)
		{
			if(form1Valid && nextf==2)
			{
				document.getElementById("panel_1").style.display='none';
				document.getElementById("panel_2").style.display='';
			}
			if(form1Valid && nextf==3)
			{
				document.getElementById("panel_2").style.display='none';
				document.getElementById("panel_3").style.display='';
			}
		}
		function goBack(prevf)
		{
			if(prevf==1)
			{
				document.getElementById("panel_2").style.display='none';
				document.getElementById("panel_1").style.display='';
			}
			if(prevf==2)
			{
				document.getElementById("panel_3").style.display='none';
				document.getElementById("panel_2").style.display='';
			}
		}
		function checkpaientform2()
		{
			form1Valid=false;
			
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
			form1Valid=true;
			nextForm(3);
			//modalsub.style.display = "block";
			//document.getElementById("cntpartsub").innerHTML="Do you want to submit the form. Once submited data can not be changed again.";
			/*var conf=confirm("Do you want to submit the form. Once submited data can not be changed again.");
			if(conf)
			{
				document.patientform.submit();
			}*/
		}
		function checkpaientform3()
		{
			form1Valid=false;
			
			// Use local variable to check signature status to avoid DOM timing issues
			var canvas = document.getElementById("sig-canvas3");
			var issig3Local = 1; // Assume signature exists
			
			if (canvas) {
				// Check if canvas is blank by comparing with empty canvas
				const blank = document.createElement('canvas');
				blank.width = canvas.width;
				blank.height = canvas.height;
				if (canvas.toDataURL() === blank.toDataURL()) {
					issig3Local = 2; // No signature
				}
				
				// Update the DOM element with current signature status
				var issig3Element = document.getElementById("issig3");
				if (issig3Element) {
					issig3Element.value = issig3Local;
				}
			} else {
				// If no canvas found, check DOM element
				var issig3Element = document.getElementById("issig3");
				issig3Local = issig3Element ? issig3Element.value : "2";
			}
			
			console.log("checkpaientform3: issig3Local=" + issig3Local);
			
			if(issig3Local == 2 || issig3Local == "2") {
				modal.style.display = "block";
				document.getElementById("cntpart").innerHTML='Please Put Signature';
				document.getElementById("cntenable").innerHTML="issig3";
				return false;
			}
			
			form1Valid=true;
			
			// Navigate from Panel 3 to Panel 4 since signature is valid
			console.log("main.js checkpaientform3() - navigating to Panel 4");
			document.getElementById('panel_3').style.display = 'none';
			document.getElementById('panel_4').style.display = 'block';
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
		jQuery(function($) {
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




    function initcanvas(canvasID)
	{
		 var canvas = document.getElementById("sig-canvas"+canvasID);
		 
		 // Check if canvas exists before trying to initialize it
		 if (!canvas) {
			 console.log("Canvas sig-canvas" + canvasID + " not found, skipping initialization");
			 return;
		 }
		 
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
		  
		  // For panels 4-7, submitBtn won't exist, so check for required elements differently
		  if (canvasID >= 1 && canvasID <= 3) {
			  // Panels 1-3 require all UI elements including submit button
			  if (!sigText || !sigImage || !clearBtn || !submitBtn) {
				  console.log("Required UI elements for canvas " + canvasID + " not found, skipping UI setup");
				  return;
			  }
		  } else {
			  // Panels 4-7 only require sigText, sigImage, and clearBtn (no submit button)
			  if (!sigText || !sigImage || !clearBtn) {
				  console.log("Required UI elements for canvas " + canvasID + " not found, skipping UI setup");
				  return;
			  }
		  }
		  
		  clearBtn.addEventListener("click", function(e) {
			clearCanvas();
			//sigText.innerHTML = "Data URL for your signature will go here!";
			sigImage.setAttribute("value", "");
			// For panels 4-7, automatically save signature when cleared (set to no signature)
			if (canvasID >= 4 && canvasID <= 7) {
				sigText.value = "2"; // No signature
			}
		  }, false);
		  
		  // Only add submit button event listener if the button exists (panels 1-3)
		  if (submitBtn) {
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
				 
				 // Panels 1-3 have save signature functionality with validation
				 if(canvasID==1){checkpaientform1();}
				 else if(canvasID==2){checkpaientform2();}
				 else if(canvasID==3){
					 console.log("main.js canvas handler for Panel 3 - navigating to Panel 4, issig=" + issig);
					 // For Panel 3, the signature has already been saved above (sigText.value = issig)
					 // Use the local issig variable instead of checking the DOM element to avoid timing issues
					 if(issig == 1) {
						 // Signature exists, navigate to Panel 4
						 console.log("Panel 3 signature valid, navigating to Panel 4");
						 document.getElementById('panel_3').style.display = 'none';
						 document.getElementById('panel_4').style.display = 'block';
					 } else {
						 // No signature, show error
						 console.log("Panel 3 signature invalid, showing error");
						 var modal = document.getElementById('myModal');
						 modal.style.display = "block";
						 document.getElementById("cntpart").innerHTML='Please Put Signature';
						 document.getElementById("cntenable").innerHTML="issig3";
						 return false;
					 }
				 }
			  }, false);
		  }
		  
		  // For panels 4-7, add canvas drawing event to automatically save signature
		  if (canvasID >= 4 && canvasID <= 7) {
			  canvas.addEventListener("mouseup", function(e) {
				  // Auto-save signature after drawing
				  setTimeout(function() {
					  var issig=1;
					  const blank = document.createElement('canvas');
					  blank.width = canvas.width;
					  blank.height = canvas.height;
					  if( canvas.toDataURL() === blank.toDataURL()) {
						  issig=2;
					  }
					  sigText.value = issig;	
					  var dataUrl = canvas.toDataURL();
					  sigImage.setAttribute("value", dataUrl);
					  console.log("Auto-saved signature for panel " + canvasID + ", issig=" + issig);
				  }, 100); // Small delay to ensure drawing is complete
			  }, false);
			  
			  canvas.addEventListener("touchend", function(e) {
				  // Auto-save signature after touch drawing
				  setTimeout(function() {
					  var issig=1;
					  const blank = document.createElement('canvas');
					  blank.width = canvas.width;
					  blank.height = canvas.height;
					  if( canvas.toDataURL() === blank.toDataURL()) {
						  issig=2;
					  }
					  sigText.value = issig;	
					  var dataUrl = canvas.toDataURL();
					  sigImage.setAttribute("value", dataUrl);
					  console.log("Auto-saved signature for panel " + canvasID + " (touch), issig=" + issig);
				  }, 100); // Small delay to ensure drawing is complete
			  }, false);
		  }
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
		// Initialize only the canvases that exist on the current page
		for (let i = 1; i <= 7; i++) {
			if (document.getElementById("sig-canvas" + i)) {
				initcanvas(i);
			}
		}
	})();	

window.addEventListener('load', () => {
  const $recaptcha = document.querySelector('#g-recaptcha-response');
  if ($recaptcha) {
    $recaptcha.setAttribute('required', 'required');
  }
})



// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	//var span = document.getElementsByClassName("close")[0];

	// When the user clicks on the button, open the modal
	btn.onclick = function() {
	   modal.style.display = "none";
	  var cntenable=document.getElementById("cntenable").innerHTML; 
	  if(cntenable)
	  {
	  var iscntenablearray=cntenable.split("@@@");
	  if(iscntenablearray.length>1)
	  {
		  document.getElementsByName(iscntenablearray[0])[0].focus();
	  }
	  else{
		document.getElementById(cntenable).focus();
	  }
	  }
	}
	var btnsub = document.getElementById("myBtnsubcancel");
	btnsub.onclick = function() {
		modalsub.style.display = "none";
	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}
	var modalsub = document.getElementById("myModalsub");
	function loadingandsub()
	{
		document.getElementById("cntpartsub").innerHTML='Sending...';
		document.patientform.submit();
	}
	
	// Validation functions for policy panels 4-7
	function checkpaientform4()
	{
		form1Valid=false;
		
		var issig4Element = document.getElementById("issig4");
		var issig4 = issig4Element ? issig4Element.value : "2";
		
		console.log("checkpaientform4: issig4Element=", issig4Element, "issig4=", issig4);
		
		if(!issig4Element) {
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Signature element not found for Office Policy';
			document.getElementById("cntenable").innerHTML="";
			return false;
		}
		
		if(issig4 == "2" || issig4 == 2 || issig4 == "" || issig4 == null || issig4 == undefined) {
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Please Put Signature for Office Policy';
			document.getElementById("cntenable").innerHTML="issig4";
			return false;
		}
		form1Valid=true;
		
		// Navigate from Panel 4 to Panel 5 only if validation passes
		console.log("main.js checkpaientform4() - navigating to Panel 5");
		document.getElementById('panel_4').style.display = 'none';
		document.getElementById('panel_5').style.display = 'block';
		return true;
	}
	
	function checkpaientform5()
	{
		form1Valid=false;
		
		var issig5Element = document.getElementById("issig5");
		var issig5 = issig5Element ? issig5Element.value : "2";
		
		console.log("checkpaientform5: issig5Element=", issig5Element, "issig5=", issig5);
		
		if(!issig5Element) {
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Signature element not found for Appointments Policy';
			document.getElementById("cntenable").innerHTML="";
			return false;
		}
		
		if(issig5 == "2" || issig5 == 2 || issig5 == "" || issig5 == null || issig5 == undefined) {
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Please Put Signature for Appointments Policy';
			document.getElementById("cntenable").innerHTML="issig5";
			return false;
		}
		form1Valid=true;
		
		// Navigate from Panel 5 to Panel 6
		console.log("main.js checkpaientform5() - navigating to Panel 6");
		document.getElementById('panel_5').style.display = 'none';
		document.getElementById('panel_6').style.display = 'block';
		return true;
	}
	
	function checkpaientform6()
	{
		form1Valid=false;
		
		var issig6Element = document.getElementById("issig6");
		var issig6 = issig6Element ? issig6Element.value : "2";
		
		console.log("checkpaientform6: issig6Element=", issig6Element, "issig6=", issig6);
		
		if(!issig6Element) {
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Signature element not found for Contact Lens Policy';
			document.getElementById("cntenable").innerHTML="";
			return false;
		}
		
		if(issig6 == "2" || issig6 == 2 || issig6 == "" || issig6 == null || issig6 == undefined) {
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Please Put Signature for Contact Lens Policy';
			document.getElementById("cntenable").innerHTML="issig6";
			return false;
		}
		form1Valid=true;
		
		// Navigate from Panel 6 to Panel 7
		console.log("main.js checkpaientform6() - navigating to Panel 7");
		document.getElementById('panel_6').style.display = 'none';
		document.getElementById('panel_7').style.display = 'block';
		return true;
	}
	
	function checkpaientform7()
	{
		form1Valid=false;
		
		// Check if retinal option is selected (now radio buttons)
		if(!checkradio('retinal_option'))
		{
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Please select an option for Advanced Retinal Screening';
			document.getElementById("cntenable").innerHTML="retinal_option@@@0";
			return false;
		}
		
		var issig7Element = document.getElementById("issig7");
		var issig7 = issig7Element ? issig7Element.value : "2";
		
		console.log("checkpaientform7: issig7Element=", issig7Element, "issig7=", issig7);
		
		if(!issig7Element) {
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Signature element not found for Advanced Retinal Screening';
			document.getElementById("cntenable").innerHTML="";
			return false;
		}
		
		if(issig7 == "2" || issig7 == 2 || issig7 == "" || issig7 == null || issig7 == undefined) {
			modal.style.display = "block";
			document.getElementById("cntpart").innerHTML='Please Put Signature for Advanced Retinal Screening';
			document.getElementById("cntenable").innerHTML="issig7";
			return false;
		}
		form1Valid=true;
		
		// Panel 7 is the final policy panel - show submit modal
		console.log("main.js checkpaientform7() - showing submit modal");
		showFinalSubmissionModal();
		return true;
	}
	
	// Function to show final submission modal - ONLY called from Panel 7
	function showFinalSubmissionModal()
	{
		console.log("showFinalSubmissionModal() called!");
		console.trace("Stack trace for showFinalSubmissionModal()");
		
		// Only show the modal if Panel 7 is currently visible
		var panel7 = document.getElementById('panel_7');
		if (panel7 && panel7.style.display !== 'none') {
			modalsub.style.display = "block";
			document.getElementById("cntpartsub").innerHTML="Do you want to submit the form. Once submitted data can not be changed again.";
		} else {
			console.log("Panel 7 is not visible, not showing submit modal");
		}
	}
	
	// Navigation functions for policy panels
	function goBackToPanel1() {
		document.getElementById("panel_4").style.display='none';
		document.getElementById("panel_1").style.display='';
	}
	
	function goBackToPanel4() {
		document.getElementById("panel_5").style.display='none';
		document.getElementById("panel_4").style.display='';
	}
	
	function goBackToPanel5() {
		document.getElementById("panel_6").style.display='none';
		document.getElementById("panel_5").style.display='';
	}
	
	function goBackToPanel6() {
		document.getElementById("panel_7").style.display='none';
		document.getElementById("panel_6").style.display='';
	}
	
	function goBackToPanel3() {
		document.getElementById("panel_4").style.display='none';
		document.getElementById("panel_3").style.display='';
	}
	

	document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.dropdown-submenu').forEach(function (el) {
    el.addEventListener('mouseover', function () {
      let submenu = el.querySelector('.dropdown-menu');
      if (submenu) submenu.style.display = 'block';
    });
    el.addEventListener('mouseleave', function () {
      let submenu = el.querySelector('.dropdown-menu');
      if (submenu) submenu.style.display = 'none';
    });
  });
});


