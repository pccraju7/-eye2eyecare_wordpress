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
		<button id="myBtnsubok" onclick='document.patientform.submit();' style='cursor:pointer;'>OK</button>&nbsp;&nbsp;
		<button id="myBtnsubcancel"  style='cursor:pointer;'>CANCEL</button>
	  </div>

	</div>
	<script>
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
</script>

<style>
	/* The Modal (background) */
	.modal {
	  display: none; /* Hidden by default */
	  position: fixed; /* Stay in place */
	  z-index: 1; /* Sit on top */
	  left: 0;
	  top: 0;
	  width: 100%; /* Full width */
	  height: 100%; /* Full height */
	  overflow: auto; /* Enable scroll if needed */
	  background-color: rgb(0,0,0); /* Fallback color */
	  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	.close {
		float: right;
		font-size: 28px;
		font-weight: bold;
		color: #ff3f3f;
		margin-top: -8px;
		margin-right: -7px;
	}
	.modal-content {
		background-color: #FFF;
		margin: 15% auto;
		padding: 5px 10px;
		width: 40%;
		color: #000;
		font-family: arial;
		border-radius: 11px;
		border: 1px solid #ff3f3f;
		text-align: center;
	}
	.modal-content p{
	margin-bottom:5px;
	}

	.modal-content button{
	background-color: #000;
	border: 0px;
	color: #fff;
	padding: 10px 15px;
	margin: 10px auto;
	text-align: center;
	border-radius: 4px;

	}
	#myBtnsubok{
	background-color: #1aa569;
	border: 0px;
	color: #000;
	padding: 10px 15px;
	margin: 10px auto;
	text-align: center;
	border-radius: 4px;

	}
	#myBtnsubcancel{
	background-color: #ff3f3f;
	border: 0px;
	color: #000;
	padding: 10px 15px;
	margin: 10px auto;
	text-align: center;
	border-radius: 4px;

	}
	.close:hover,.close:focus {
	  color: black;
	  text-decoration: none;
	  cursor: pointer;
	}
</style>