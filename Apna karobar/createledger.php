<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Ledger</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

</head>

<body>
  <!-- header -->

  <!-- NAVBAR -->
  <div class="nav">
    <input type="checkbox" id="nav-check" />
    <div class="nav-header">
      <div class="nav-title">
        <a href="http://localhost/Project/Apna%20karobar/index.php">
          <img src="images/logo.png" alt="logo" width="270px" height="80px" />
        </a>
      </div>
    </div>
    <div class="nav-links nav-item  active ms-5">
      <a href="http://localhost/Project/Apna%20karobar/index.php" target="_self" class="px-3 ms-5">Home</a>
      <a href="http://localhost/Project/Apna%20karobar/aboutus.php" target="_self" class="px-3 ms-5">About Us</a>
      <a href="http://localhost/Project/Apna%20karobar/faq.php" target="_self" class="px-4 ms-5"> FAQ</a>
      <a href="http://localhost/Project/Apna%20karobar/services.php" target="_self" class="px-3 ms-5">Services</a>
      <a href="http://localhost/Project/Apna%20karobar/contact.php" target="_self" class="px-3 ms-5">Contact</a>
    </div>

  </div>

  <!-- body -->

  <h1 class="text-uppercase py-3 text-center">ledger</h1>
  <div class="container mt-5">
    <form class="row g-3" action="I.php" method="post">
      <div class="col-md-6">
        <label for="FirstName" class="form-label">
          <h6>First Name</h6>
        </label>
        <input type="text" class="form-control" placeholder="First Name" name="X_firstname" required />
      </div>
      <div class="col-md-6">
        <label for="LastName" class="form-label">
          <h6>Last Name</h6>
        </label>
        <input type="text" class="form-control" placeholder="Last Name" name="X_lastname" required />
      </div>

      <div class="col-md-4">
        <label for="username" class="form-label">
          <h6>Username</h6>
        </label>
        <input type="text" class="form-control" placeholder="username" name="X_username" required />
      </div>

      <div class="col-md-4">
        <label for="email" class="form-label">
          <h6>Email</h6>
        </label>
        <input type="email" class="form-control" placeholder="Example@gmail.com" name="X_email" required />
      </div>

      <div class="col-md-4">
        <label for="contact" class="form-label">
          <h6>Contact No</h6>
        </label>
        <input type="text" class="form-control" placeholder="0300-1234567" name="X_contact" required />
      </div>

      <div class="col-md-2">
        <label for="age" class="form-label">
          <h5>Age</h5>
        </label>
        <input type="number" class="form-control" name="X_age" placeholder="0" />
      </div>
      <div class="col-md-4">
        <label for="Dob" class="form-label">
          <h6>Date of Birth</h6>
        </label>
        <input type="date" class="form-control" name="X_Dob" placeholder="1999-00-00" required />
      </div>

      <div class="col-md-12">
        <input type="submit" class="btn btn-danger w-25 mt-3" value="submit" />
      </div>
    </form>

    <div class="col-md-12">
      <a href="read.php"><button class="btn btn-danger mt-2 w-25" type="submit">
          View Data
        </button>
      </a>
    </div>

    <form class="row g-3" action="update.php" method="post">
      <div class="container">
        <div class="col-md-5 mt-5">
          <input type="text" class="form-control text-dark" placeholder="Enter Username which you want to Update record." name="U_username" required />
        </div>
        <div class="col-md-7 mb-1">
          <input type="submit" class="btn btn-danger w-25 mt-3" value="Update Data" />
        </div>
      </div>
    </form>

    <form class="row g-3" action="Delet.php" method="post">
      <div class="container">
        <div class="col-md-5 mt-5">
          <input type="text" class="form-control text-dark" placeholder="Enter Username which you want to delete record." name="D_username" required />
        </div>
        <div class="col-md-7 mb-5">
          <input type="submit" class="btn btn-danger w-25 mt-3" value="Delete" />
        </div>
      </div>
    </form>
  </div>


  <!-- Footer -->


  <footer class="flex-rw py-3">
    <a href="index.html">
      <img src="images/logo.png" alt="logo" width="470px" height="180px " class="mt" />
    </a>

    <ul class="footer-list-top" style="float: right" style="display: inline">
      <li>
        <h4 class="footer-list-header">About Apna Karobar</h4>
      </li>
      <li>
        <a href="aboutus.html" class="generic-anchor footer-list-anchor text-decoration-none" itemprop="significantLink">GET TO KNOW US</a>
      </li>
      <li>
        <a href="#" itemprop="significantLink" class="generic-anchor footer-list-anchor text-decoration-none">JOB OPENINGS</a>
      </li>
      <li>
        <a href="./contact.html" class="generic-anchor footer-list-anchor text-decoration-none" itemprop="significantLink">CONTACT</a>
      </li>

      <li>
        <a href="#" class="generic-anchor footer-list-anchor text-decoration-none" itemprop="significantLink">EVENTS</a>
      </li>
      <li>
        <a href="/faq.html" class="generic-anchor footer-list-anchor text-decoration-none" itemprop="significantLink">FAQ</a>
      </li>
    </ul>
    <!--
   <ul class="footer-list-top" style="float: left;" style="display: inline;">
     <li id='help'>
       <h4 class="footer-list-header ">Please Help Me</h4></li>
     <li><a href='./contact.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a></li>
     <li><a href='/faq.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a></li>
   </ul>-->



    <section class="footer-social-section flex-rw">
      <span class="footer-social-overlap footer-social-icons-wrapper">
        <a href="https://www.pinterest.com/" class="generic-anchor" target="_blank" title="Pinterest" itemprop="significantLink"><i class="fa fa-pinterest"></i></a>
        <a href="https://www.facebook.com/" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><i class="fa fa-twitter"></i></a>
        <a href="http://instagram.com/" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink"><i class="fa fa-instagram"></i></a>
      </span>
    </section>
    <section class="footer-bottom-section flex-rw">
      <div class="footer-bottom-wrapper">
        <i class="fa fa-copyright" role="copyright"> </i> 2019 Apna Karobar
        <address class="footer-address" role="company address">
          Lahore
        </address>
        <span class="footer-bottom-rights"> - All Rights Reserved - </span>
      </div>
      <div class="footer-bottom-wrapper">
        <a href="#" class="generic-anchor text-decoration-none" rel="nofollow">Terms</a> |
        <a href="#" class="generic-anchor text-decoration-none" rel="nofollow">Privacy</a>
      </div>
    </section>
  </footer>
</body>

</html>