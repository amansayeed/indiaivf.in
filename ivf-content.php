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
		        
		        
		        
		         <article id="post-243" class="post-243 page type-page status-publish hentry">
		             
		             
		             <div class="entry-content">
		                 
		                 <p>انتامدخ
• مقعلا جلاع )ءاسنلاو لاجرلل( يصيخشت رابتخا ةضابلاا ضيرحت محرلا لخاد حيقلتلا
• باصخلاا تامدخ ةيعيبط ةرود – باصخلإا ربتخملا ىف باصخلإا يلويهلا لخاد ةيونملا تاناويحلا نقح قيرط نع ةيونملا تاناويحلا بحس ةحارجلا ( نم ةيونملا تاناويحلا حومط خبربلاو ةيصخلا / تاناويحلا جارختسا تاناويحلا حومط / )ريغص( ةيونملا / خبربلاو دلجلا قيرط نع ةيونملا )ةيصخلا نم ةيونملا تاناويحلا بحس اهلقنو ةنجلأا مييقت</p><p>
• ةبوصخلا ىلع ظافحلا ضيبلا ديمجت ةنجلأا ديمجت ةيونملا تاناويحلا ديمجت ةدمجملا ةنجلأا لقن
• جاتنلاا ةداعا – فرطلا ثلاثلا عربتم ب ةيونملا تاناويحلا ةنجلأاو ضيبلاب عربتم ماحرلأا ريجأت
لمحلل للها تازجعم
لملأا شن
:انتيؤر نم ملاعلا ءاحنا عيمج ىف لافطا مهيدل سيل نيذلا جاوزلأا هجو ىلع ةماستبلإا ىرن نأ وه انملح .نيلوقعمو نييداصتقا اننوك للاخ ةحارلا لئاسو ثدحأ ةطساوب لاماح كلعجل ادج نوسمحتم نحن ةحاتملا ةثيدحلا .
:انتمهم
نوكن نا وه يسيئرلا انأدبمو .ةينقتلا لئاسولا ثدحأ ةطساوب ةدوجلا ةيلاع تامدخلا رفون نا ىه .نيقداصو نيعراب ،لوصولا ىلباق ،نيصلخم
؟باصخلإل دنهلا ربتخم ةدايع راتختس اذامل
.مازتلاو صلاخاو ةيانعب اهزجننو انجهن ىه بحلا عم ةمدخلا نم ملاعلا ءاحنا عيمج ىف لافطا مهيدل سيل نيذلا جاوزلأا هجو ىلع ةماستبلإا ىرن نأ وه انملح .نيلوقعمو نييداصتقا اننوك للاخ نوسمحتم نحن ةياغلل كلعجل م ح او لم ةطساوب ةحاتملا ةثيدحلا ةحارلا لئاسو ثدحأ . ةدايعلا زيهجت مت مكنكمي .ةيلودلا تاهيجوتلا بسح ءاوهلاو ةنايصلا ةدوج طبض متو ،ةيبطلا تادعملا ثدحا عيمجب ربتخملاو سفن مكبناج نم عقوتنو انجهن هاجت نويباجياو مكهاجت نومزتلم نحنو ،ةدوقفملا مكتاماستبا ةداعلإ انب قوثولا .ةيباجيلإا ن نرب ىلع لمعن نح كشب ةبوصخلا جما يئانث لكل يدرف ل
باصخلإل دنهلا ربتخم ةدايع – يهلد وين ،لاهد ناجار يت ليا تلف سيتروف ىفشتسم – 9870108429
باصخلإل دنهلا ربتخم ةدايع – ىفشتسم ليا ،تاصصختلا ددعتمل ورتيم – 94 عاطق ، – 11 شيداربرتا ةيلاو ،اديون ، – 9870108429
باصخلإل دنهلا ربتخم ةدايع – كول تناشوس ،كلاب يب ،سكام ىفشتسم – 1 ناواجروج ، – 9870108429
</p>
		         
		         
		
		
	
		
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



