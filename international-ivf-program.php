<?php
include"header.php";


?>

<?php 

if (isset($_POST['submit'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$query=$_POST['query'];

  $msg = "<html><body>
          <div id='appointmentTemplate' style='width:100%; background-color:#999; padding:20px;'>
                <div id='templateInner' style='margin:auto; width:70%; background-color:white; padding:20px;'>
                 Dear Dr. Richika Sahay Shukla,<br>
                 Someone has appointment request for you. Here are the details:
                 <hr>
                 <span><b>Name</b>: ".$name."</span> <br>
                 <span><b>Email</b>: ".$email."</span><br>
                  <span><b>Phone</b>:<a href='tel:".$mobile."'>".$mobile."</a> </span><br>
                 <span><b>Message</b>: ".$query."</span><br>
                 
                 <hr>
                 Thanks.<br>
                 Website:http://indiaivf.in
                </div>
           </div>
         </body></html>";
	
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Dr. Richika Sahay Shukla,<info@indiaivf.in>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$to='info@indiaivf.in';
$subject='Get a Treatment Advice';
 mail($to,$subject,$msg,$headers);
 mail('ichelonconsulting@gmail.com',$subject,$msg,$headers);
 mail('Abhash@ichelon.in',$subject,$msg,$headers);
  mail('amanichelon@gmail.com',$subject,$msg,$headers);


	
	
	
	
}




?>
	
	<!-- Intro doctors Section Starts -->
		<section class="section-area intro-about text-center-xs">
		    
		    
		<!-- Nested Container Starts -->
			<div class="container">
				<center><h1 style="margin-top: 70px;">International IVF Patient Program</h1></center>
				<hr>
				
					<div class="row">
				
					<div class="col-md-12 col-sm-12 col-xs-12" style="font-size:100%;">
					    	
							
							
							
							
							
					    
		<div class="container innr_page">
		    
		    <div class="row"><div class="col-xs6 inside_bnr">
		        
		        
		        
		         <article id="post-243" class="post-243 page type-page status-publish hentry"><div class="entry-content"><p>Our International IVF Patient Program provides you with access to our expertise and care, while minimising the time and travel involved. We offer phone consultations wherever possible, and work with your local physician to support you in your home country.</p>
		         
		         
		         
		         <div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item"src="https://www.youtube.com/embed/QyXKmzvLJg4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
		         
		         
		
		
		<h3>Step 1.</h3>
		
		
	<ul>	
	<li>Do all basic investigation as advised.</li>
	<li>please send history of taking any medicines and past history of major illness/treatment.</li>
		</ul>
		<h3>Step 2.</h3>
		
	<ul>
	    <li>
	        Send reports
	    </li>
	    <li>Consultation on mail.</li>
	    <li>If required do advance tests.</li>
	    <li>Management protocol decided.</li>
	    
	    
	    </ul>
		<h3>Step 3. </h3>
		
		<ul>
		    <li>
		        Plan travel to India and see the consultant on Day 1/Day 2/Day 3 of the menstrual cycle.
		    </li>
		</ul>
		
		<h3>Step 4.</h3>
		
		<ul><li>
		   IVF stimulation injections started. 
		</li>
		
		<li>
		    Ovum pick up to be done bet Day 12-day 16 of the menstrual cycle.
		</li>
		
		<li>Embryo transfer to be done bet day 14-day21 of the menstrual cycle.
		</li></ul>
		<h3>Step 5. </h3>
		<ul>
		    <li>
		        Can fly back three days after embryo transfer.
		        
		    </li>
		    <p>OR</p>
		    <li>
		        Stay back in India as pregnancy test comes 15 days after embryo transfer.
		    </li>
		</ul>
	
		
		</article></div></div>
		</div>
			
					
					</div>
				
        </div>
        
        
        
        
        
        
    </div>

					</div>
			
				</div>
			</div>
		<!-- Nested Container Ends -->
		</section>
		
		
		<section >
		
		   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right"  >
                   <form class="form-vertical slider-form" method="post" action="#"  id="form">
                        <h4 class="text-center"><b>Free Treatment Advice</b></h4>
                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Name*" name="name" required="required">
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <input type="email" class="form-control input-lg" placeholder="Email*" name="email">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                    	<input type="mobile" aria-required="true" size="30" value="" name="mobile"  class="form-control input-lg" placeholder="Mobile*" required="required">
                     
                    </div>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <textarea name="query" class="form-control input-lg" placeholder="Query*" required="required"></textarea>
                </div>
                
                
                <div class="form-group">
                  <p >* Fields are required</p>
                </div>
                <div class="form-group">
                  <input type="hidden" value="" name="url" id="current_url"/>
                  <input type="submit" name="submit"  value="Send" class="btn btn-success btn-lg" id="submit"/>
                  <span id="alert"></span>
                </div>
              </form>
            </div>
		</section>
		<!-- Visual Breakpoint Helper for Materialize - http://materializecss.com/ -->
<div style="position:fixed;bottom:0;left:0;background-color:rgba(0,0,0,0.5);padding:10px;color:#fff;z-index: 73-538-73-538;">
  
</div>

<!--messanger end-->
<a href="https://api.whatsapp.com/send?phone=917353873538&text=Hi%20IndiaIVF" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
	<!-- Intro About Section Ends -->
	<!-- Footer Starts -->
	
	<!-- Visual Breakpoint Helper for Materialize - http://materializecss.com/ -->
<div style="position:fixed;bottom:0;left:0;background-color:rgba(0,0,0,0.5);padding:10px;color:#fff;z-index: 73-538-73-538;">
  
</div>

<!--messanger end-->
<a href="https://api.whatsapp.com/send?phone=917353873538&text=Hi%20IndiaIVF" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>




<?php

include"footer.php";

?>



