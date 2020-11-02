<?php

$meta_title="Kanha National Park - India";
$meta_description="Welcome to the Kanha National Park. Visit here to know the information about the Kanha Reserve Park and for making a hassle free booking of the hotels & resorts, Jeep Safari in Kanha.";
$meta_keywords="about Kanha national park, info about Kanha";
$currentPage ='online-safari-booking';
include_once("include/header.php");

?> 

<?php 
if(isset($_POST['bookSafari'])){
    $to = "contact@kanhakislinationalpark.in"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['fullName'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $time = $_POST['jeepTime'];
    $totalP = $_POST['totalp'];
    $totalKid = $_POST['totalKid'];

 
   
    
    $subject = "Kanha National Park Contact ";
    $subject2 = "Copy of your form submission";
    $message = "
            
Full Name : $name
Email : $from  
Phone Number :  $phone
City : $city
Date : $date
Timing : $time
Number of Adults: $totalP
Number of Kids : $totalkid

            ";
         
   

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
//    mail($from,$subject2,$message2,$headers2); 

// sends a copy of the message to the sender
   phpAlert(   "Mail Sent. Thank you " . $name . ", Kanha National Park."); 
  
    // You cannot use header and echo together. It's one or the other.
    }
    
    
   function phpAlert($msg) {
    echo '<script type="text/javascript"> alert("' . $msg . '")</script>';
}

?>


        <!--NavBar-->
    <div class="kanha-innerbanner">
      <div class="container">
      <div class="title">
        <h2>Book Your Safari</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Safari Booking</li>
          </ol>
        </nav>
      </div>
      </div>
        </div>
 <section class="container">
   <div class="row">
     <div class="col-12 col-sm-12">
       <h1>Kanha ONLINE SAFARI BOOKING</h1>
       <div class="view-page-content">
        <p>Online safari booking in Kaziranga is a great way to eliminate hassle associated with jeep safari or elephant safari 
          booking personally from the Kaziranga zonal centres. It helps saving the most precious time of the tourists that they 
          have to spend to get their safari booked by visiting Kaziranga safari zonal centers personally. But, when you have online
           safari booking solution, it eliminates all such hassles and enhance the visit in Kaziranga National Park.
      </div>
      

        <div class="w-100 mx-auto safari-form-section">
        
          <div class="safari-form">
            <div class="row">            
            
              <div class="col-10 mx-auto white-bg">
                  
          
              <div class="view-page-content">
                <div class="table-responsive">
                    <h3><span class="jeep-show">JEEP SAFARI ONLINE BOOKING</span></h3>
                  <table class="table table-bordered price-table">
                    <tbody>
                      <tr>
                        <th scope="row">Price (Indian)</th>
                        <td>
                          <span class="jeep-show">₹  3800 / Jeep ( Maximum 5 Persons are allowed in ONE Jeep ).</span></td>
                      </tr>
                      <tr>
                        <th scope="row">Price (Foreigner)</th>
                        <td><span class="jeep-show">₹  7500 / Jeep ( Maximum 5 Persons are allowed in ONE Jeep )</span></td>
                      </tr>
                      <tr>
                        <th scope="row">Zones</th>
                        <td><span class="jeep-show">Central Range / Western Range / Eastern Range / Burapahar Range or Panbari</span></td>
                      </tr>
                      <tr>
                        <th scope="row">Timings</th>
                          <td><span class="jeep-show">Morning | Evening</span></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
          
              </div>

              <div class="form-design mt-0 ">
                    
                <form class="form-section border-0 px-0 needs-validation" name="safaribookingform" method="post" id="safaribookingform" novalidate>
                  <div class="form-group row">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                      <label for="fullName">Full Name</label>
                      <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name" required/>
                       <div class="invalid-feedback">
                                    Enter Full Name
                                  </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                      <label for="emailId">Email Id</label>
                      <input type="email" class="form-control" id="emailId" name="email" placeholder="Email Id" required/>
                       <div class="invalid-feedback">
                                    Enter Valid Email Id
                                  </div>
                    </div>
                  </div>
        
                  <div class="form-group row">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                      <label for="mobilenumber">Mobile Number</label>
                      <input type="tel" class="form-control" name="phone" id="mobilenumber" placeholder="Phone Number"
                                 onKeyDown="if(this.value.length==15 && event.keyCode!=8) return false;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[0-9]+" required/>
                                 <div class="invalid-feedback">
                                    Enter Valid Number
                                  </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city" placeholder="City" name="city" required />
                       <div class="invalid-feedback">
                                    Enter Valid City Name
                                  </div>
                    </div>
                  </div>
        
                  <div class="form-group row">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="date" name="date" required/>
                       <div class="invalid-feedback">
                                    Enter Valid Date
                                  </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                      <label for="date">Timing</label>
                      <div id="safari-time">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jeepTime" id="jeepMorn" value="option1" checked />
                          <label class="form-check-label" for="jeepMorn">Morning</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jeepTime" id="jeepEven" value="option1" />
                          <label class="form-check-label" for="jeepEven">Evening</label>
                        </div>
                  </div>
                    
                    </div>
                  </div>
        
                  <div class="form-group row">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                      <label for="totalPerson">Number Of Person</label>
                      <input type="number" class="form-control" id="totalPerson" name="totalp" required />
                       <div class="invalid-feedback">
                         Enter Number of Person
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                      <label for="totalkids">Number Of Kids</label>
                      <input type="number" class="form-control" id="totalkids" name="totalKid" required />
                       <div class="invalid-feedback">
                         Enter Number of Kids
                      </div>
                    </div>
                  </div>
                
                  <div class="w-100 text-right">
                  <button type="submit" class="btn theme-primary-btn mt-0 " name="bookSafari">
                    <i class="fas fa-paper-plane mr-2"></i>Book Your Trip</button>
                  </div>
              
                </form>
          </div>

              </div>
            </div>
      
        </div>
        
        </div>
    
  <div class="view-page-content my-5">
    <h2>Complete booking procedure for Online Safari Booking in Kaziranga</h2>
    <p>If you want to take the benefit of online safari booking in Kaziranga National park, then here are some critical things to consider.</p>
     <!-- Extra info -->
     <div class="extra-info">
      <ul class="inner-accom">
          <li><i class="fas fa-check mr-2"></i><em>Add full name, gender, age of every visitor as per the ID cards.</em></li>
          <li><i class="fas fa-check mr-2"></i><em>The choicest date and time for safari in Kaziranga.</em></li>
          <li><i class="fas fa-check mr-2"></i><em>Number of ID card that you would be required to furnish during your visit toKaziranga National Park and safari. </em></li>
          <li><i class="fas fa-check mr-2"></i><em>Complete charges for safari booking to be paid in advance.</em></li>
          <li><i class="fas fa-check mr-2"></i><em>Once you get the confirmed E-permit, it will be non-refundable.</em></li>
          <li><i class="fas fa-check mr-2"></i><em>If you are a foreigner visitor, you would have to add your information related to yourPassport to make successful reservation for safari. </em></li>
          <li><i class="fas fa-check mr-2"></i><em>The permits will be issued on the basis of first come first serve.</em></li>
          <li><i class="fas fa-check mr-2"></i><em>The price included elephant safari, online payment gateway charges, pick up & drop facility from any hotel / resort in kaziranga (Upto 1kms only), our service charges and taxes. </em></li>
          <li><i class="fas fa-check mr-2"></i><em>If any reason safari can not be confirmed or cancelled. your elephant safari amount fully refunded in 1-2 days.  </em></li>
      </ul>
    </div>
  </div>
       <div class="w-100">
       
          <div class="view-page-content">
          <h2>AMOUNT FOR ONLINE JEEP SAFARI BOOKING IN KAZIRANGA</h2>
          <p>For Indian tourists, the charges for a jeep is INR 3700 in which 5 people can accommodate. However, for foreigner tourists, the cost is 
            INR 7100 per jeep with similar accommodation options as for Indians. The zones covered with jeep safari include Central zone, 
            Eastern Zone, Western Zone and Burapahar Zone. The first jeep safari commences at 7 AM and evening safari is being conducted 
            at 1 PM.</p>
           </div>
           <div class="view-page-content">
            <h2>AMOUNT FOR ONLINE ELEPHANT SAFARI BOOKING IN KAZIRANGA</h2>
            <p>The fee for elephant safari for Indian travellers is INR 1500 per person; whereas, for foreigner travellers, this fee is INR 
              3200 per person. The zones covered under elephant safari are Kohora zone and Bagori Zone. The timings for elephant safari in 
              Kaziranga are 5 AM to 6 AM, and 6 AM to 7 AM. The third shift depends on the choice of Kaziranga forest officials.</p>
             </div>
            
       </div>
     </div>
    
   </div>
 </section>
       <script>
              

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

          </script>
 <?php include_once("include/footer.php") ?>
   
</body>
</html>