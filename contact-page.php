<?php 

if (isset($_POST['submit'])){
	
$name=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$query=$_POST['msg'];

  $msg = "<html><body>
          <div id='appointmentTemplate' style='width:100%; background-color:#999; padding:20px;'>
                <div id='templateInner' style='margin:auto; width:70%; background-color:white; padding:20px;'>
                 Dear Dr. Richika Sahay Shukla,<br>
                 Someone has appointment request for you. Here are the details:
                 <hr>
                 <span><b>Name</b>: ".$name.$lname."</span> <br>
                 <span><b>Email</b>: ".$email."</span><br>
                  <span><b>Phone</b>:<a href='tel:".$mobile."'>".$mobile."</a> </span><br>
                 <span><b>Message</b>: ".$query."</span><br>
                 
                 <hr>
                 Thanks.<br>
                 Website:http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/index.
                </div>
           </div>
         </body></html>";
	
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Dr. Richika Sahay Shukla,<indiaivfclinic@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$to='indiaivfclinic@gmail.com';
$subject='Contect_us';
	
	
	
	
	
	
 mail($to,$subject,$msg,$headers);
 $ds=mail('anandkumar.kumar190@gmail.com',$subject,$msg,$headers);
  $mailSend = mail('Abhash@ichelon.in',$subject,$msg,$headers);
	
	header("location:thankyou.php");


	
	
	
	
}




?>







<?php

include"header.php";

?>
	<!-- Navbar Ends -->
	
	<!-- Main Container Starts -->
		<div class="container main-container text-center-sm text-center-xs">
			<h1 style="margin-top: 70px;">Contact Us</h1>
			<div class="row">
			<!-- Address Starts -->
				<div class="col-md-4 col-xs-12">
					<ul class="list-unstyled contact-address text-size-big">
						<li>
							<h5>Address :New Delhi</h5>
							<p>
								
Morning 9 AM- 4 PM:
Fortis India IVF Clinic, 
<br>Fortis Flt Lt Rajan Dhall Hospital,
<br> Sector B, Pocket 1,Aruna Asaf Ali Marg, 
<br>Vasant Kunj , New Delhi.
Visit: www.bestivfsurrogacydelhi.com
							</p>
						</li>
						<li>
							<h5>Address :Noida</h5>
							<p>
								
Morning 9 AM- 4 PM:
 
<br>Metro Multi speciality Hospital, 
<br> L- 94 , Sector – 11 , Noida ,
<br> Uttar Pradesh, 201301
Visit: Visit: www.bestivfsurrogacynoida.com
							</p>
						</li>
						<li>
							<h5>Address :Gurgaon,Harynana</h5>
							<p>
								
Morning 9 AM- 4 PM:
 
<br>Max IndiaIvf Hospital,
<br>  B Block, Sushant Lok 1,
 <br>Near Huda City Centre, Gurugram, Haryana 122001
Visit: Visit: www.bestivfsurrogacygurgaon.com
							</p>
						</li>
						<li>
							<h5>Toll Free Number :</h5>
							<p>
								73-538-73-538</p>
								
								
					<p>whatsapp: +91-73538-73538	</p>		
						</li>
						<li>
							
							<p>
								SMS IVF to 57575
<br>
E-mail:drrichikasahay@gmail.com<br>

www.info@indiaivf.in<br>

www.indiaivf.in
							</p>
						</li>
					</ul>
				</div>
					<!-- Address Ends -->
			<!-- Form Starts -->
				<div class="col-md-8 col-xs-12">
					<form action="" class="contact-form" method="post">
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<div class="form-group">
									<label for="contact-first-name" class="sr-only">First Name</label>
									<input type="text" class="form-control" id="contact-first-name" placeholder="First Name" name="fname">
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="form-group">
									<label for="contact-last-name" class="sr-only">Last Name</label>
									<input type="text" class="form-control" id="contact-last-name" placeholder="Last Name" name="lname">
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="form-group">
									<label for="contact-subject" class="sr-only">Phone no.</label>
									<input type="text" class="form-control" id="contact-subject" placeholder="Phone " name="mobile" >
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="form-group">
									<label for="contact-email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="contact-email" style="height:43px;" placeholder="Email" name="email">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="contact-message" class="sr-only">Message</label>
							<textarea class="form-control" rows="5" placeholder="Message" name="msg"></textarea>
						</div>
						<div class="text-center">
							<input type="submit" class="btn btn-secondary animation  btn-lg" name="submit">
						</div>
					</form>
				</div>
			<!-- Form Ends -->
			</div>
		</div>
	<!-- Main Container Ends -->
	<!-- Map Starts -->
	
	<div class="row">
	
	<div class="col-md-4">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d448726.6949571095!2d77.160306!3d28.519355!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3e086d7f2cecb8e8!2sFortis+India+IVF+Clinic+in+Delhi+-+Best+IVF+Doctor+in+Delhi%2C+IVF+Center+in+Delhi%2C+India!5e0!3m2!1sen!2sin!4v1536391050030" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

	
	</div>
	<div class="col-md-4">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112098.4690685226!2d77.335948!3d28.597462!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1d6cc67fbadddff!2sMetro+India+IVF+Clinic+Best+IVF+centre+noida!5e0!3m2!1sen!2sin!4v1536391256920" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	</div>
	<div class="col-md-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14030.408362897115!2d77.074631!3d28.461409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1123ba8cd09898e2!2sMax+Healthcare+Hospital%2C+Gurugram!5e0!3m2!1sen!2sin!4v1536391318857" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	</div>
	
	</div>

		<!-- Visual Breakpoint Helper for Materialize - http://materializecss.com/ -->
<div style="position:fixed;bottom:0;left:0;background-color:rgba(0,0,0,0.5);padding:10px;color:#fff;z-index: 73-538-73-538;">
  
</div>

<!--messanger end-->
<a href="https://api.whatsapp.com/send?phone=917353873538&text=Hi%20IndiaIVF" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
	<!-- Map Ends -->
	<!-- Footer Starts -->
		<?php
		include"footer.php";
		?>