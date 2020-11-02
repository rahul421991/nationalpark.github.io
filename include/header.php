<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=stripslashes($meta_title);?></title>
    <meta name="description" content="<?=stripslashes($meta_description);?>" />
    <meta name="keywords" content="<?=stripslashes($meta_keywords);?>" />

    <link rel="stylesheet" href="css/bootstrap-min.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
</head>
<body>

<header class="sticky" >
    <div class="w-100 ">
        <div class="header-contact-info">
        <div class="container ">
            <div class="row mail-top">
                <div class="contact"><span><i class="fas fa-phone-alt"></i> 9871803300, 8376078520</span>
                <span class="vline">|</span>
                <span><i class="fas fa-clock"></i> 24x7 Support</span></div>
                <div class="email"><i class="fas fa-envelope"></i> contact@kanhakislinationalpark.in</div>
            </div>
        </div>
        </div>
        <div class="nav-section ">
          <div class="container p-0">
              <nav class="navbar navbar-expand-lg">
                <div class="mobile-menu">
                  <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-fluid logo-img" alt="Kanha National Park"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                  </button>
                </div>
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      <li class="nav-item <?php if($currentPage =='index'){echo 'active';}?>">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item <?php if($currentPage =='kanha-hotels'){echo 'active';}?>">
                        <a class="nav-link" href="kanha-hotels.php">Hotels In Kanha</a>
                      </li>
                      <li class="nav-item <?php if($currentPage =='tour-package'){echo 'active';}?>">
                        <a class="nav-link" href="tour-package.php">Tour Package</a>
                      </li>
                      <li class="nav-item <?php if($currentPage =='online-safari-booking'){echo 'active';}?>">
                        <a class="nav-link" href="online-safari-booking.php">Online Safari Booking</a>
                      </li>
                      <li class="nav-item <?php if($currentPage =='contact'){echo 'active';}?>">
                          <a class="nav-link" href="contact-us.php">Contact Us</a>
                      </li>
                    </ul>
                    <a class="nav-link pay-now" href="paynow.php">Pay Now</a>
                  </div>
                </nav>
          </div>
      </div>
      </div>
      <div class="maincont" id="loader">
      <div class="scroll-loader">~Loading~</div>
</div>
  </header>