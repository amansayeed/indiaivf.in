<?php 

// Turn off error reporting
// error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);




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

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Dr. Richika Sahay Shukla,<info@indiaivf.in>' . "\r\n";


$to="info@indiaivf.in,Abhash@ichelon.in,ichelonconsulting@gmail.com";

 $subject='Get a Treatment Advice';
 mail($to,$subject,$msg,$headers);
//  mail('ichelonconsulting@gmail.com',$subject,$msg,$headers);
//  mail('Abhash@ichelon.in',$subject,$msg,$headers);
//  mail('amanichelon@gmail.com',$subject,$msg,$headers);




header("Location: thankyou"); 	
	
}




?>



<?php

include"header.php";

?>  

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bda8f4a22b2be1613fe5405/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!--messanger-->

	
		
				
<section class="slider">
    <div class="container-fluid" style="padding:0;" >
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0; margin-top:86px;">
			<div class="container-fluid">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
   
    </ol>

    <!-- Wrapper for slides  -->
    <div class="carousel-inner">

     

      <div class="item active">
       <img src="images/banners/N1.jpg" alt="Best ivf Doctor in India" usemap="#planetmap"  >
   
       </div>
      
      <div class="item">
       <img src="images/banners/N2.jpg" alt="Best ivf Clinic in Gurgaon" usemap="#planetmap" >
    
       </div>
      <div class="item">
       <img src="images/banners/N3.jpg" alt="Best ivf Center in India" usemap="#planetmap" >
    
       </div>
	   
     <div class="item">
        <img src="images/banners/N4.jpg" alt="Best ivf Clinic in India"  usemap="#planetmap">
        
      </div>
	  
	  <div class="item">
        <img src="images/banners/N5.jpg" alt="Best ivf Clinic in Noida"  usemap="#planetmap" >
        
      </div>
	  
	  
	  <div class="item">
        <img src="images/banners/N6.jpg" alt="Best ivf Clinic in Delhi"  usemap="#planetmap" >
        
    	 </div>
    	 
    	 
	 
	
	</div>

    <!-- Left and right controls -->
    
  
  </div>
</div>

	 <map name="planetmap">
  <area shape="rect" coords="0,0,400,400" href="appointment.php" alt="Sun">
  
    </map>		
                
            </div>
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
        </div>
    </div>

</section>

	
		<!-- Wrapper For Sliders Ends -->
		<!-- Controls Starts -->
					
		<!-- Controls Ends -->
		
					<!-- Services Home Section Starts -->
<!--		<section class="section-area services-home text-center">-->
		<!-- Nested Container Starts -->
<!--			<div class="container-fluid" style="overflow:hidden">-->
<!--			<h1 >Our Centers</h1>-->
			
<!--			<div id="area">-->
			
				
				
			<!-- Services List Carousel Starts -->
			
<!--<marquee  scrollamount="10" onMouseout="this.start();" onMouseover="this.stop();">-->
				
				<!-- Col #1 Starts -->
<!--				<div id="centers" >-->
					
				
<!--				<center><a href="noida.php" target="_blank"><img src="images/slider/Noida.png" alt="Best ivf Center in Noida" class="img-responsive">-->
<!--				<p> Noida</p></a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
<!--				<div id="centers">-->
					
<!--					<center><a href="delhi.php" target="_blank"><img src="images/slider/d1.png" alt="Best ivf Center in Delhi" class="img-responsive">-->
<!--				<p> Delhi</p> </a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
				
<!--					<div id="centers">-->
				
<!--				<center><a href="gurugram.php" target="_blank"><img src="images/slider/g1.png" alt="Best ivf Center in Gurgaon" class="img-responsive">-->
<!--                  <p>  Gurugram</p></a></center>-->
				
<!--				</div>-->
				<!-- Col #1 Ends -->
<!--                <div id="centers">-->
					
				
<!--				<center><a href="Baghpat.php" target="_blank"><img src="images/slider/1.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p> Baghpat</p></a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
<!--				<div id="centers">-->
					
<!--					<center><a href="Kanpur.php" target="_blank"><img src="images/slider/5.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p> Kanpur</p> </a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
				
<!--					<div id="centers">-->
				
<!--				<center><a href="Uttarakhand.php"target="_blank"><img src="images/slider/2.png" alt="gurugram" class="img-responsive">-->
<!--                  <p> Haldwani</p></a></center>-->
				
<!--				</div>-->
				
		 
          <!-- Col #1 Ends -->
<!--                <div id="centers">-->
					
				
<!--				<center><a href="dibrugarh.php" target="_blank"><img src="images/slider/3.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p>Dibrugarh</p></a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
<!--				<div id="centers">-->
					
<!--					<center><a href="Durgapur.php" target="_blank"><img src="images/slider/4.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p> Durgapur</p> </a></center>-->
			
				
<!--				</div>-->
				
<!--					<div id="centers">-->
					
<!--					<center><a href="rewari.php" target="_blank"><img src="images/slider/4.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p> Rewari</p> </a></center>-->
			
				
<!--				</div>-->
				
<!--				<div id="centers">-->
					
<!--					<center><a href="Guwahati.php" target="_blank"><img src="images/slider/4.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p>Guwahati</p> </a></center>-->
			
<!--				</div>-->
<!--					</div>-->
				
		
			
				
				  <!-- Col #1 Ends -->
              
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
				
				
				
				<!-- Col #1 Ends -->
		

		<!-- Col #1 Starts -->
	
				
		 		
<!--		</marquee>-->

<!--		</div>-->
<!--		</div>-->
		
		<!--		<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>-->
  <!--<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>-->
			<!-- Services List Carousel Ends -->
<!--			</div>-->
		<!-- Nested Container Ends -->
<!--		</section>-->

<!--owl clouser start-->


<section class="section-area services-home text-center" >
    
    <h1 >Our Centers</h1>
<div class="owl-carousel1 owl-theme" id="owl-demo">
          
  <div class="item"><center><a href="noida.php" target="_blank"><img src="images/slider/n1.png" alt="Best ivf Center in Noida"  class="img-responsive"><p> Noida</p></a></center></div>
  <div class="item"><center><a href="delhi.php" target="_blank"><img src="images/slider/delhi.png" alt="Best ivf Center in Delhi" class="img-responsive">	<p> Delhi</p> </a></center></div>
  
  <div class="item"><center><a href="gurugram.php" target="_blank"><img src="images/slider/gurgaon.png" alt="Best ivf Center in Gurgaon" class="img-responsive"><p>  Gurugram</p></a></center></div>
  
 <div class="item">	<center><a href="Baghpat.php" target="_blank"><img src="images/slider/bhagat.png" alt="Thumb 1" class="img-responsive">	<p> Baghpat</p></a></center></div>
 <div class="item"><center><a href="Durgapur.php" target="_blank"><img src="images/slider/1.png" alt="Thumb 1" class="img-responsive">
	<p> Durgapur</p> </a></center></div>
 
 
 
 
  <div class="item"><center><a href="Kanpur.php" target="_blank"><img src="images/slider/400.png" alt="Thumb 1" class="img-responsive">
			<p> Kanpur</p> </a></center></div>
  <div class="item"><center><a href="Uttarakhand.php"target="_blank"><img src="images/slider/2.png" alt="gurugram" class="img-responsive"><p> Haldwani</p></a></center></div>
  <div class="item"><center><a href="dibrugarh.php" target="_blank"><img src="images/slider/3.png" alt="Thumb 1" class="img-responsive"><p>Dibrugarh</p></a></center></div>
  <div class="item"><center><a href="rewari.php" target="_blank"><img src="images/slider/r.png" alt="Thumb 1" class="img-responsive">	<p> Rewari</p> </a></center></div>
  <div class="item"><center><a href="Guwahati.php" target="_blank"><img src="images/slider/g.png" alt="Thumb 1" class="img-responsive">	<p>Guwahati</p> </a></center></div>
  <div class="item"><center><a href="panipat.php" target="_blank"><img src="images/slider/p.png" alt="Thumb 1" class="img-responsive">	<p>panipat</p> </a></center></div>
 
</div>

<!--owl clouser end -->

<!-- Our Center-->



<!-- our Client End-->

	<!-- Slider Ends -->
	<!-- Intro Section Starts -->
	
	
	
	<!--collage start-->
	

	    </div>
	    
	    <section class="section-area services-home text-center" style="background-color: #fff;" >
		<!-- Nested Container Starts -->
			<div class="container" >
			<h1>Our Wonderful Success Stories </h1>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
					    <a href="Our-Wonderful-Success-Stories.php" target="_blank"><img src="images/collage.png" alt="Thumb 1" class="img-responsive">
				
					</div>
				</div>
			</div>

		</section>
	<!-- collage End -->
	<section class="intro-home section-area text-center-xs">
		<!-- Nested Container Starts -->
			<div class="container" style="margin-top:-40px;">
			    
		<h3 class=" text-center">Why choose <br>India IVF Clinic ?</h3>		
	
				<div class="row">
					<div class="col-md-3 col-sm-12 col-xs-12">
					</div>
					
					<div class="col-md-12">
					 	<div class="container">
 
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel" data-interval="3000">
    <!-- Indicators -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
	  <p>Senior IVF Specialist Formerly at AIIMS & Sir Gangaram Hospital New Delhi.</p>
	  
        <img src="images/gallery/thumb/s1.jpeg" alt="first slider" id="slider1"usemap="slide2" class="img-thumbnail">
        
      </div>

      <div class="item">
<p>State of the Art IVF Lab.</p>      
	  <img src="images/gallery/thumb/s2.png" alt="second slider" id="slider1"usemap="slide2" class="img-thumbnail">
         
      </div>
      <div class="item">
        <p>Individualized fertility program that is right for you.</p>
		<img src="images/gallery/thumb/s3.jpeg" alt="second slider" usemap="slide2" id="slider1" class="img-thumbnail">
       
      </div>
      
      <div class="item">
        <p>Procedures done by Senior IVF Specialist only</p>
		<img src="images/gallery/thumb/fouth.jpeg" alt="second slider" usemap="slide2"  id="slider1" class="img-thumbnail">
       
      </div>
      <div class="item">
        <p> Ethical and transparent practices </p>
	<img src="images/gallery/thumb/ethics.jpg" alt="second slider"usemap="slide2" id="slider1" class="img-thumbnail"
	
	>
       
      </div>
      <div class="item">
        
		<p>0% EMI facility Available</p>
		<img src="images/gallery/thumb/s5.png" alt="second slider"usemap="slide2" id="slider1" class="img-thumbnail">
       
      </div>
    <div class="item">
<p>Free First consultation     
</p>    
    <img src="images/gallery/thumb/s6.jpeg" alt="second slider"  usemap="slide2" id="slider1" class="img-thumbnail">
       </div>
      
	  
	  
	  
	  
      	<div class="col-md-3 col-sm-12 col-xs-12">
					</div>
  
    </div>
<map name="slide2">
  <area shape="rect" coords="0,0,650,400" href="gallery-page.php" alt="Sun">
  
    </map>
    <!-- Left and right controls -->
    
  
  </div>
</div>
					</div>
					
				</div>
			</div>
		<!-- Nested Container Ends -->
		</section>
				
				<!-- links Ends -->
					
					<!-- query form -->
				<!-- row Ends -->
				
				<!-- container Ends -->

	<!-- Intro Section Ends -->
	<!-- Services Home Section Starts -->
	
	

		<section class="section-area services-home text-center" style="background-color: #fff;">
		<!-- Nested Container Starts -->
			<div class="container">
				<h1 >Our Services</h1>
				
			<!-- Services List Carousel Starts -->
				<div  id="services-home-carousel" class="owl-carousel">
				<!-- Col #1 Starts -->
					<div class="services-home-col">
						<img src="images/services/6.png" alt="Image" class="img-responsive img-center img-circle ">
						<h5 ><em>Fertility Workup</em></h5>
						<p>We provide testing for fertility by all modalities ranging from reproductive</p>
						<a href="fertility-service.php" class="btn btn-secondary animation">View More</a>
					</div>
				<!-- Col #1 Ends -->
				<!-- Col #2 Starts -->
					<div class="services-home-col">
						<img src="images/services/3.png" alt="Image" class="img-responsive img-center img-circle">
						<h5 ><em>Early Fertility Treatment</em></h5>
						<p>It suits women who are producing low levels of hormones for ovulation, or who are </p>
						<a href="early-fertility-treatment.php" class="btn btn-secondary animation">View More</a>
					</div>
				<!-- Col #2 Ends -->
				<!-- Col #3 Starts -->
					<div class="services-home-col">
						<img src="images/services/8.png" alt="Image" class="img-responsive img-center img-circle">
						<h5 ><em>IVF Services</em></h5>
						<p>In Vitro Fertilisation means Fertilisation “ in- glass that is fertilization outside </p>
						<a href="ivf-services.php" class="btn btn-secondary animation">View More</a>
					</div>
				<!-- Col #3 Ends -->
				<!-- Col #4 Starts -->
					<div class="services-home-col">
						<img src="images/services/2.png" alt="Image" class="img-responsive img-center img-circle">
						<h5 ><em>Fertility Preservation</em></h5>
						<p>If you are considering fertility preservation you should organise an appointment with us</p>
						<a href="fertility-preservation.php" class="btn btn-secondary animation">View More</a>
					</div>
				<!-- Col #4 Ends -->
				<!-- Col #5 Starts -->
					<div class="services-home-col">
						<img src="images/services/9.png" alt="Image" class="img-responsive img-center img-circle" >
						<h5 ><em> Ethical and Affordable Practices</em></h5>
						<p>Couples use donor sperm (DI) when the husband/partner has no sperm or a very poor</p>
						<a href="third-party-reproduction.php" class="btn btn-secondary animation">View More</a>
					</div>
				<!-- Col #5 Ends -->
				<!-- Col #6 Starts -->
					<div class="services-home-col">
						<img src="images/services/5.png" alt="Image" class="img-responsive img-center img-circle">
						<h5 ><em>Coping With Infertility </em></h5>
						<p>Infertility is perhaps one of the most stressful experiences a couple can go through.</p>
						<a href="coping-with-infertility.php" class="btn btn-secondary animation">View More</a>
					</div>
				<!-- Col #6 Ends -->
				<!-- Col #7 Starts -->
					<div class="services-home-col">
						<img src="images/services/1.png" alt="Image" class="img-responsive img-center img-circle">
						<h5 ><em>Counselling Services</em></h5>
						<p>Few couples are prepared for the diagnosis of infertility, and for most, this will be one </p>
						<a href="Counselling-services.php" class="btn btn-secondary animation">View More</a>
					</div>
				<!-- Col #7 Ends -->
				<!-- Col #8 Starts -->
					<div class="services-home-col">
						<img src="images/services/7.png" alt="Image" class="img-responsive img-center img-circle">
						<h5 ><em>Infertility And Dietetics </em></h5>
						<p>Your ovaries and your fat cells regulate estrogen, which affects ovulation. If you’re too </p>
						<a href="infertility-and-dietetics.php" class="btn btn-secondary animation">View More</a>
					</div>
			
		
		</div>
			<!-- Services List Carousel Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Services Home Section Ends -->
	<!-- Info Home Section Starts -->
	
	
	
	
	
	
	
	
		
			<section class="intro-home section-area text-center-xs" style="padding-bottom:0;">
		<!-- Nested Container Starts -->	<div class="container" ">
		 
				<h4 class=" text-center">Meet Our Specialist</h4>
					
				<div class="row">
					
					
					<div class="col-md-8 col-sm-7 col-xs-12" style="font-size:100%;text-align: left;" >
						<p><div><b>Dr. Richika Sahay Shukla</b><p>Infertility (IVF) Specialist &amp; Gynae Laparoscopic surgeon MBBS, DNB (Obst &amp; Gynec), MNAMS, MRCOG (London-UK), Fellow IVF, Fellow MAS.</p><b>Formerly at</b>:<p>AIIMS (All India Institute of medical Sciences), New Delhi &amp; Sir Ganga Ram Hospital, New Delhi</p><p>Know more about Dr Richika : &nbsp;<a href="http://drrichikasahayshukla.com">drrichikasahayshukla.com</a></p></div></p>
						<p>Dr. Richika Sahay Shukla is an IVF Consultant and Endoscopic Surgeon . She has experience of 10 yrs in Obstetrics &amp; Gynecology and has over 6 yrs. Experience in Infertility and IVF.<br><a href="meet-our-specialist.php" class="btn btn-secondary animation">Read More</a></p>
						
					</div>
					<div class="col-md-4 col-sm-5 col-xs-12">
						<img src="images/main.jpeg" alt="Dr._Richika_Sahay_Shukla" style=" border-radius:30%;margin-top:15px;" class="img-responsive ">
					</div>
				</div>
			</div>
		<!-- Nested Container Ends -->
<hr>
		</section  > 

		
		
			<!-- Info Home Section Ends -->
	<!-- Memories Home Section Starts -->
		<section class="section-area memoried-home-section text-center-xs"  style="background-color: #fff;" >
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Nested Row Starts --> <center><h3 class=" text-center"><b>Fertility Blog</b></h3><hr></center>
				<div class="row">
					
					<div class="col-md-3">
					<p > <a href="Recurrent-Pregnancy-loss-what-to-do.php" >Recurrent Pregnancy loss: what to do?</a></p>
						<img src="images/blog/blog3.jpg" alt="Blog Post Image" style="height: " width="" class="img-thumbnail">
					<p>Recurrent pregnancy loss is classically defined as the occurrence</p><a href="https://plus.google.com/u/2/109765596680089522078" target="_blank">
        <img id="logo2" src="images/logo/google.png" alt="Google" />
    </a>
	  <a href="https://www.facebook.com/indiaivfdelhi/" target="_blank">
        <img id="logo2" src="images/logo/facebook.png" alt="Facebook" />
    </a>
	 <!-- Twitter -->
    <a href="https://twitter.com/india_ivf" target="_blank">
        <img id="logo2" src="images/logo/twitter.png" alt="Twitter" />
    </a>
	<!--<a href="whatsapp://send" data-text="How to create the Share on WhatsApp button on your site:" data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog3" ><img id="logo2" src="images/logo/whatsup.png" alt="whatsup" /></a>
	
	
	<a href="whatsapp://send" data-text="Recurrent pregnancy loss is classically " data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog3" class="wa_btn wa_btn_s"></a>-->
	
	<br>
						<a href="" class="btn btn-secondary animation">View More</a>
				     </div>
					
					
					
					<div class="col-md-3">
					<p ><a href="Polycystic Ovarian syndrome Cause of infertility.php" >Polycystic Ovarian syndrome:Cause of infertility?</a></p>
						<img src="images/blog/p.jpeg" alt="Blog Post Image" style="height: " width="" class="img-thumbnail">
					<p>A Polycystic ovarian syndrome (PCOS) is a group of symptoms that affect </p>
					
					<a href="https://plus.google.com/u/2/109765596680089522078" target="_blank">
        <img id="logo2" src="images/logo/google.png" alt="Google" />
    </a>
	  <a href="https://www.facebook.com/indiaivfdelhi/" target="_blank">
        <img id="logo2" src="images/logo/facebook.png" alt="Facebook" />
    </a>
	 <!-- Twitter -->
    <a href="https://twitter.com/india_ivf" target="_blank">
        <img id="logo2" src="images/logo/twitter.png" alt="Twitter" />
    </a>
	<!--<a href="whatsapp://send" data-text="How to create the Share on WhatsApp button on your site:" data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog1" ><img id="logo2" src="images/logo/whatsup.png" alt="whatsup" /></a>-->
					<br>
					
						<a href="blog1.php" class="btn btn-secondary animation">View More</a>
				     </div>
					 
					 
                        <div class="col-md-3">
						<p ><a href="Causes-of-infertility-in-men-and-women.php" >Causes of infertility in men and women</a></p>
						<img src="images/blog/man.jpg"  alt="man"style="height: " width="" class="img-thumbnail">
					<p>Infertility is becoming a growing cause for concern in India. An infertility </p>
					
					
					<a href="https://plus.google.com/u/2/109765596680089522078" target="_blank">
        <img id="logo2" src="images/logo/google.png" alt="Google" />
    </a>
	  <a href="https://www.facebook.com/indiaivfdelhi/" target="_blank">
        <img id="logo2" src="images/logo/facebook.png" alt="Facebook" />
    </a>
	 <!-- Twitter -->
    <a href="https://twitter.com/india_ivf" target="_blank">
        <img id="logo2" src="images/logo/twitter.png" alt="Twitter" />
    </a>
	<!--<a href="whatsapp://send" data-text="How to create the Share on WhatsApp button on your site:" data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog2" ><img id="logo2" src="images/logo/whatsup.png" alt="whatsup" /></a>-->
					
					<br>
					
					
						<a href=" Causes-of-infertility-in-men-and-women.php" class="btn btn-secondary animation">View More</a>
				     </div>
				    
					<div class="col-md-3">
					
					<p ><a href="Traditional-vs-Gestational-Surrogacy.php" > Traditional vs Gestational Surrogacy</a></p>
						<img src="images/blog/blog4.jpg" alt="blog" style="height: " width="" class="img-thumbnail">
					<p>The term surrogacy is becoming increasingly popular day by day. For couples</p>
					
					
					
					
					<a href="https://plus.google.com/u/2/109765596680089522078" target="_blank">
        <img id="logo2" src="images/logo/google.png" alt="Google" />
    </a>
	  <a href="https://www.facebook.com/indiaivfdelhi/" target="_blank">
        <img id="logo2" src="images/logo/facebook.png" alt="Facebook" />
    </a>
	 <!-- Twitter -->
    <a href="https://twitter.com/india_ivf" target="_blank">
        <img id="logo2" src="images/logo/twitter.png" alt="Twitter" /><br>
    </a>
	<!--<a href="whatsapp://send" data-text="How to create the Share on WhatsApp" data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog4" ><img id="logo2" src="images/logo/whatsup.png" alt="whatsup" /></a>-->
					
					
					
						<a href="Traditional-vs-Gestational-Surrogacy.php" class="btn btn-secondary animation">View More</a>
				     </div>
					
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!--	<section class="section-area testimonials-section parallax text-center">
		<!-- Nested Container Starts -->
	
			<!--<div class="container">
				<h1>Testimonials</h1>
				<h5>What people say about us</h5>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
						<div id="testimonials-carousel" class="owl-carousel">
							<div>
								<p>
									Regardless of who you are - manager, cook, politician, rocker, lawyer, pensioner, or bank employee, in our clinic, first of all you are a person, who needs help, and we guarantee you specialist care and warm attitude, that are constant values for our staff.
								</p>
								<h5>Sainath Chillapuram</h5>
							</div>
							<div>
								<p>
									Regardless of who you are - manager, cook, politician, rocker, lawyer, pensioner, or bank employee, in our clinic, first of all you are a person, who needs help, and we guarantee you specialist care and warm attitude, that are constant values for our staff.
								</p>
								<h5>Chandra Shekar Rao</h5>
							</div>
							<div>
								<p>
									Regardless of who you are - manager, cook, politician, rocker, lawyer, pensioner, or bank employee, in our clinic, first of all you are a person, who needs help, and we guarantee you specialist care and warm attitude, that are constant values for our staff.
								</p>
								<h5>Vishnu Chitha</h5>
							</div>
						</div>
					</div>
				</div>
			</div>-->
		<!-- Nested Container Ends -->
		</section> 
	<!-- Memories Home Section Ends -->
	<!-- Subscribe Newsletter Section Starts -->
		<section class="section-area testimonials-section parallax text-center">
		<!-- Nested Container Starts -->
			<div class="container">
				<h1>Testimonials</h1>
				<h5>What people say about us</h5>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
						<div id="testimonials-carousel" class="owl-carousel">
							<div>
								<iframe width="520" height="380" src="https://www.youtube.com/embed/U8HRYu2Hkh4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div>
								<iframe width="520" height="380" src="https://www.youtube.com/embed/_1EsecOp-6g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div>
								<iframe width="520" height="380" src="https://www.youtube.com/embed/UHMrr2ECHl4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- Nested Container Ends -->
		</section>

<!--Whats app -->





		
	<!-- Subscribe Newsletter Section Ends -->
	<!-- Footer Starts -->
<!--messanger start-->








<!-- FACEBOOK CHAT WIDGET-->
<!-- See: https://www.labnol.org/software/facebook-messenger-chat-widget/9583/ -->
<!--<style>.fb-livechat,.fb-widget{display:none}.ctrlq.fb-button,.ctrlq.fb-close{position:fixed;right:24px;cursor:pointer}.ctrlq.fb-button{z-index:1;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff;width:60px;height:60px;text-align:center;bottom:42px;border:0;outline:0;border-radius:60px;-webkit-border-radius:60px;-moz-border-radius:60px;-ms-border-radius:60px;-o-border-radius:60px;box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16);-webkit-transition:box-shadow .2s ease;background-size:80%;transition:all .2s ease-in-out}.ctrlq.fb-button:focus,.ctrlq.fb-button:hover{transform:scale(1.1);box-shadow:0 2px 8px rgba(0,0,0,.09),0 4px 40px rgba(0,0,0,.24)}.fb-widget{background:#fff;z-index:2;position:fixed;width:360px;height:435px;overflow:hidden;opacity:0;bottom:0;right:24px;border-radius:6px;-o-border-radius:6px;-webkit-border-radius:6px;box-shadow:0 5px 40px rgba(0,0,0,.16);-webkit-box-shadow:0 5px 40px rgba(0,0,0,.16);-moz-box-shadow:0 5px 40px rgba(0,0,0,.16);-o-box-shadow:0 5px 40px rgba(0,0,0,.16)}.fb-credit{text-align:center;margin-top:8px}.fb-credit a{transition:none;color:#bec2c9;font-family:Helvetica,Arial,sans-serif;font-size:12px;text-decoration:none;border:0;font-weight:400}.ctrlq.fb-overlay{z-index:0;position:fixed;height:100vh;width:100vw;-webkit-transition:opacity .4s,visibility .4s;transition:opacity .4s,visibility .4s;top:0;left:0;background:rgba(0,0,0,.05);display:none}.ctrlq.fb-close{z-index:4;padding:0 6px;background:#365899;font-weight:700;font-size:11px;color:#fff;margin:8px;border-radius:3px}.ctrlq.fb-close::after{content:'x';font-family:sans-serif}</style>-->

<!--<div class="fb-livechat">-->
<!--  <div class="ctrlq fb-overlay"></div>-->
<!--  <div class="fb-widget">-->
<!--    <div class="ctrlq fb-close"></div>-->
<!--    <div class="fb-page" data-href="https://www.messenger.com/t/indiaivfdelhi" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false">-->
<!--        <blockquote cite="https://www.messenger.com/t/indiaivfdelhi" class="fb-xfbml-parse-ignore"> </blockquote>-->
<!--    </div>-->
<!--    <div class="fb-credit"> -->
<!--      <a href="http://bit.ly/2zNv2CL" target="_blank"></a>-->
<!--    </div>-->
<!--    <div id="fb-root"></div>-->
<!--  </div>-->
<!--  <a href="https://www.messenger.com/t/indiaivfdelhi" title="Send us a message on Facebook" class="ctrlq fb-button"></a> -->
<!--</div>-->


<!--form start-->

<div class="row rs_mobile_enquiry visible-xs">
  <div class="col-xs-6 text-center btn btn-secondary animation" >
     <!--<a href="tel:73-538-73-538" id="calldr"><button class="myButton btn-success""></i>  Book your first free consultation</button></a>-->
<a href="tel:73-538-73-538" id="calldr" style="color:#fff;">Free consultation</a>    
	
  </div>
  <div class="col-xs-6 text-center btn btn-secondary animation" >
    <!-- <a href="appointment.php"><button class="myButton btn-success""> <span style="font-size: 12px; ;">Book An Appointment</span></button></a>-->
     <a href="appointment.php"style="color:#fff;" >Book Appointment</a>





  <script> $(document).ready(function() {
   var owl = $('.owl-carousel1');
   owl.owlCarousel({
     	autoPlay: 1500, //Set AutoPlay to 1.5 seconds
		items : 4,
		loop:true,
		stopOnHover : true,
		navigation : true, // Show next and prev buttons
		pagination : true,
   });
 
 })</script>




  
     <script>
   $("#calldr").click(function(){
if(testing && testing==1){
    alert("You've just clicked Call button");
}
   dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "callClick",

});

  });
</script>
  
     <script>
   $("#enquiry").click(function(){
if(testing && testing==1){
    alert("You've just clicked Enquiry button");
}
dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "enquiryClick",

});
});
</script>

<style type="text/css">
  .rs_mobile_enquiry {
    position: fixed;
    z-index: 999;
    bottom: 0;
    left: 0;
    right: 0;
}

</style>

  </div>
</div>

<!--form end-->

  
  





	
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>$(document).ready(function(){var t={delay:125,overlay:$(".fb-overlay"),widget:$(".fb-widget"),button:$(".fb-button")};setTimeout(function(){$("div.fb-livechat").fadeIn()},8*t.delay),$(".ctrlq").on("click",function(e){e.preventDefault(),t.overlay.is(":visible")?(t.overlay.fadeOut(t.delay),t.widget.stop().animate({bottom:0,opacity:0},2*t.delay,function(){$(this).hide("slow"),t.button.show()})):t.button.fadeOut("medium",function(){t.widget.stop().show().animate({bottom:"30px",opacity:1},2*t.delay),t.overlay.fadeIn(t.delay)})})});</script>



<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "WebSite",
  "name": "Indiaivf",
  "alternateName": "indiaivf",
  "url": "https://www.indiaivf.in/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.indiaivf.in/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>







<!-- Gitter Chat Link -->
<!-- <div class="fixed-action-btn"><a class="btn-floating btn-large red" href="https://gitter.im/Dogfalo/materialize" target="_blank"><i class="large material-icons">chat</i></a></div> -->

<!-- Visual Breakpoint Helper for Materialize - http://materializecss.com/ -->
<div style="position:fixed;bottom:0;left:0;background-color:rgba(0,0,0,0.5);padding:10px;color:#fff;z-index: 73-538-73-538;">
  
</div>

<!--messanger end-->
<a href="https://api.whatsapp.com/send?phone=917353873538&text=Hi%20IndiaIVF" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>


</body>

	
		<?php
		
		include"footer.php";
		?>