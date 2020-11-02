   
<?php 
if(isset($_POST['submitform'])){
    $to = "contact@kanhakislinationalpark.in"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['fullName'];
    $phone = $_POST['phone'];
    $date = $_POST['datetravel'];
    $messages = $_POST['messages'];
 
   
    
    $subject = "Kanha National Park Contact ";
    $subject2 = "Copy of your form submission";
    $message = "
            
Full Name : $name
Email : $from  
Phone Number :  $phone
Date of Travel : $date
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

   <!-- Enquiry form data-->
        <div class="form-design">
          <div class="form-main-heading">Book Your Trip</div>
            <form class="form-section needs-validation"  name="enqueryform" method="post" id="enqueryForm" novalidate>
              <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" required/>
                 <div class="valid-feedback">
                    Enter Valid Name
                  </div>
              </div>
              <div class="form-group">
                <label for="emailId">Email Id</label>
                <input type="email" class="form-control" id="emailId" name="email" placeholder="Email Id" required/>
                 <div class="invalid-feedback">
                    Enter Valid Email Id
                  </div>
              </div>
  
              <div class="form-group">
                <label for="phoneNo">Phone No</label>
                <input type="tel" class="form-control" id="phoneNo" name="phone" placeholder="Phone No" 
                onKeyDown="if(this.value.length==15 && event.keyCode!=8) return false;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[0-9]+" required/>
                 <div class="invalid-feedback">
                    Enter correct Number
                  </div>
              </div>
              <div class="form-group">
                <label for="dateoftravel">Date of Travel</label>
                <input type="date" class="form-control" id="dateoftravel" name="datetravel" required />
                 <div class="valid-feedback">
                    Select Upcoming Date
                  </div>
              </div>
              <div class="form-group">
                <label for="dateoftravel">Message Your Query</label>
                <textarea class="form-control h-100" rows="5" name="messages" required></textarea>
                 <div class="valid-feedback">
                    Looks good!
                  </div>
              </div>
             
            
              <button type="submit" class="btn theme-primary-btn mt-0 w-100" name="submitform"><i class="fas fa-paper-plane mr-2"></i>Book Your Trip</button>
            </form>
          </div>

        <!-- Category List -->
          <div class="category-list">
            <div class="list-group">
              <div class="category-heading">Hotles In Kanha</div>
              <a href="#" class="list-group-item list-group-item-action">Hotels One</a>
              <a href="#" class="list-group-item list-group-item-action">Hotels Two</a>
              <a href="#" class="list-group-item list-group-item-action">Hotels Three</a>
              <a href="#" class="list-group-item list-group-item-action">Hotels Four</a>
            </div>
          </div>
          
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