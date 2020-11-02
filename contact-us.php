<?php

$meta_title="Kanha National Park - India";
$meta_description="Welcome to the Kanha National Park. Visit here to know the information about the Kanha Reserve Park and for making a hassle free booking of the hotels & resorts, Jeep Safari in Kanha.";
$meta_keywords="about Kanha national park, info about Kanha";
$currentPage ='contact';
include_once("include/header.php");

?> 
    <!--NavBar-->
    <div class="kanha-innerbanner contact-banner">
        <div class="container">
            <div class="title">
                <h2>Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    
<?php 
if(isset($_POST['submitedw'])){
    $to = "contact@kanhakislinationalpark.in"; // this is your Email address
    $from = $_POST['emailid']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phoneNum'];
   
    $messages = $_POST['messagestype'];
 
   
    
    $subject = "Kanha National Park Contact ";
    $subject2 = "Copy of your form submission";
    $message = "
            
Full Name : $name
Email : $from  
Phone Number :  $phone
Message : $messages

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
    <section class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <h1>Submit Your Query</h1>
                <div class="form-design mt-0 ">

                    <form class="form-section border-0 needs-validation" name="contactform" method="post" id="contactForm" novalidate>
                        <div class="form-group row">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" name="name" id="fullName" placeholder="Full Name" required />
                                <div class="valid-feedback">
                                    Enter Valid Name
                                 </div>
                                </div>
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6 m-form-top">
                                <label for="phoneno">Phone Number</label>
                                <input type="tel" class="form-control" name="phoneNum" id="phoneno" placeholder="Phone Number"
                                 onKeyDown="if(this.value.length==15 && event.keyCode!=8) return false;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[0-9]+" required/>
                                 <div class="invalid-feedback">
                                    Enter Valid Number
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emailId">Email Id</label>
                            <input type="email" class="form-control" name="emailId" id="emailId" placeholder="Email Id" required />
                             <div class="invalid-feedback">
                                Enter Valid Email Id
                              </div>
                        </div>

                        <div class="form-group">
                            <label for="Message">Type Your Message Here</label>
                            <textarea id="Message" class="form-control h-auto" name="messagestype" rows="5"></textarea>
                             <div class="valid-feedback">
                                    Enter Valid Name
                                 </div>

                        </div>
                        <div class="w-100 text-right">
                            <button type="submit" class="btn theme-primary-btn mt-0 " name="submitedw" >
                                <i class="fas fa-paper-plane mr-2"></i>Submit Your Query</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <h2>Contact Information</h2>
                <div class="mt-5">
                    <div class="address">
                        <p><i class="fas fa-map-marker-alt"></i><span>87 Rue Jeanne St, House 20, Block E, Nancy<br />
                                Middlesex, London</span></p>
                    </div>

                    <div class="address">
                        <p><i class="fas fa-envelope"></i> <span>support@Kanhanationalpark.com,<br />
                                info@Kanhanationalparl.com</span></p>
                    </div>
                    <div class="address">
                        <p><i class="fas fa-phone-alt"></i><span>(00) - 213 679 354,<br />
                                9871803300, 8376078520</span></p>
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