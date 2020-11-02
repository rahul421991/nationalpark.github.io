<?php

$meta_title="Kanha National Park - India";
$meta_description="Welcome to the Kanha National Park. Visit here to know the information about the Kanha Reserve Park and for making a hassle free booking of the hotels & resorts, Jeep Safari in Kanha.";
$meta_keywords="about Kanha national park, info about Kanha";
include_once("include/header.php");

?> 
    <!--NavBar-->
    <div class="kanha-innerbanner">
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
    $to = "rs7503528883@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['fullName'];
    $SubjectHead = $_POST['subject'];
   
    $messages = $_POST['messages'];
 
   
    
    $subject = "Kanha National Park Contact ";
    $subject2 = "Copy of your form submission";
    $message = "
            
fullName : $name
Email : $from  
SubjectHead :  $SubjectHead
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

                    <form class="form-section border-0" name="contactform" method="post" id="contactForm" novalidate="novalidate">
                        <div class="form-group row">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name" />
                            </div>
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6 m-form-top">
                                <label for="emailId">Email Id</label>
                                <input type="email" class="form-control" name="email" id="emailId" placeholder="Email Id" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Subject">Subject</label>
                            <input type="email" class="form-control" name="subject" id="Subject" placeholder="Subject" />
                        </div>

                        <div class="form-group">
                            <label for="Message">Type Your Message Here</label>
                            <textarea id="Message" class="form-control h-auto" name="messages" rows="5"></textarea>

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
    <?php include_once("include/footer.php") ?>

</body>

</html>