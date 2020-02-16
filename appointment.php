<?php
if(isset($_POST['submit']))
 { $fname = $_POST['fname']; 
   $lname = $_POST['lname']; 
   $email = $_POST['email'];
   $phone = $_POST['phone'];
    $appointmentTime = $_POST['appointmentTime'];
   $date = $_POST['date'];
   $message = $_POST['message'];
  
   $message = wordwrap($message,70);
   
   $html1 = "<html><body>
          <div id='appointmentTemplate' style='width:100%; background-color:#009973; padding:20px;'>
                <div id='templateInner' style='margin:auto; width:70%; background-color:white; padding:20px;'>
                 Dear Dr. Richika Sahay Shukla,<br>
                 Someone has appointment request for you. Here are the details:
                 <hr>
                 <span><b>Fname</b>: ".$fname."</span> <br>
                 <span><b>Lname</b>: ".$lname."</span> <br>
                 <span><b>Email</b>: ".$email."</span><br>

                  <span><b>Phone</b>:<a href='tel:".$phone."'>".$phone."</a> </span><br>
                  <span><b>Time</b>:".$appointmentTime."</span><br>
                  <span><b>Date</b>: ".$date."</span><br>
                 <span><b>Message</b>: ".$message."</span><br>
                
                 <hr>
                 Thanks.<br>
                 Website:http://indiaivf.in
                </div>
           </div>
         </body></html>";

    //$headers .= "MIME-Version: 1.0\r\n";
   $headers = "From:India_IVF ;\r\nContent-Type: text/html;\r\n charset=ISO-8859-1;";
   
   $mailSend = mail('info@indiaivf.in','Appointment Request.', $html1, $headers);
   $mailSend = mail('naresh@ichelon.in','Appointment Request.', $html1, $headers);
   $mailSend = mail('Abhash@ichelon.in','Appointment Request.', $html1, $headers);
   $mailSend = mail('amanichelon@gmail.com
','Appointment Request.', $html1, $headers);
   
   header("Location: thankyou"); 	

 }
  
?>  


  



<?php include"header.php"; ?>
					
<!--start -->

	 <?php 
if(isset($_POST['submit']))
   echo "<script type='text/javascript'>alert('Your appointment has been fixed.');</script>";

?>
				



	<div class="container" >
    <div class="row">
        <div class="col-md-12" style="padding-top:30%;"style="margin-top: 70px;">
            <div>
            	 
                <form class="form-horizontal" action="appointment.php" method="post" onsubmit="return checkAppointment();">
                    <fieldset>
                        <p class="text-center"  style=" font-size:200%; color:#111;">Book An Appointment</p>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-times bigicon "></i></span>
                            <div class="col-md-8">
                                <select class="appointform-item" id="appointmentTime" name="appointmentTime">
            <option>Select Time</option>
          <option>06:00PM - 06:30PM</option>
          <option>06:30PM - 07:00PM</option>
          <option>07:00PM - 07:30PM</option>
          <option>07:30PM - 08:00PM</option>
         </select>
                            </div>
                        </div>
                     <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="date" name="date" type="date" placeholder="Date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you!" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button id="submitBtn" name="submit" type="submit" class="btn btn-success btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>




    
<style>
    .bigicon {
        font-size: 35px;
        color: #1B883D;
    }
</style>
			
<script type="text/javascript">
	 <script>
   function checkAppointment()
          { var fname= document.getElementById("fname").value;
          var lname= document.getElementById("lname").value;
            var email= document.getElementById("email").value;
            var phone= document.getElementById("phone").value;
            
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

            if(!fname || (fname.trim()).length==0)
              { alert("Please enter your fname.");
                return false;
                
              } 
              else if(!lname || (lname.trim()).length==0)
              { alert("Please enter your lname.");
                return false;
                
              } 
            else if(!email || (email.trim()).length==0)
              { alert("Please enter your email id.");
                return false;
              }

            else if(!email.match(mailformat))  
              { alert("Please enter  a valid  email.");
                return false;

              } 
            else if(!phone || (phone.trim()).length==0)
              { alert("Please enter your phone number.");
                return false;

              }
            else if((phone.trim()).length!=10)
              { alert("Please enter a valid phone number.");
                return false;

              }
               else if(!date || (date.trim()).length==0)
              { alert("Please enter date.");
                return false;

              }
               else if(document.getElementById("appointmentTime").selectedIndex == 0)
              { alert("Please select a time slot for appointment.");
                return false;
              }
           
            else
               { return true;
               }
          }
</script>
<!--end-->
				
				
 <br><br><br>
  
			<?php include"footer.php"; ?>