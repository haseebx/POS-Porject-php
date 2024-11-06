<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dashboard</title>
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

    <div class="nav-links py-2">
      <!--        <a href="index.html" target="_self">Home</a>
        <a href="aboutus.html" target="_self">About Us</a>
        <a href="faq.html " target="_self"> FAQ</a>
        <a href="services.html" target="_self">Services</a>
        <a href="contact.html" target="_self">Contact</a> -->
      <a href="http://localhost/Project/Apna%20karobar/signup.php">
        <button class="btn login text-white" style="margin-left: 750%">
          Sign up
        </button>
      </a>

      <a href="http://localhost/Project/Apna%20karobar/login.php"><button class="btn login text-white " style="margin-left: 800%">
          Log in
        </button>
      </a>
    </div>
  </div>

  <!--Body-->

  <div class="container-fuild py-1">
    <div class="carousel">
      <input type="radio" id="carousel-3" name="carousel[]" checked />
      <input type="radio" id="carousel-4" name="carousel[]" />
      <input type="radio" id="carousel-5" name="carousel[]" />
      <ul class="carousel__items">
        <li class="carousel__item">
          <img src="./images/c3.png" alt="" width="100%" height="100%" />
        </li>
        <li class="carousel__item">
          <img src="./images/c4.png" alt="" width="100%" height="100%" />
        </li>
        <li class="carousel__item">
          <img src="./images/c5.png" alt="" width="100%" height="100%" />
        </li>
      </ul>
      <div class="carousel__prev">
        <label for="carousel-3"></label>
        <label for="carousel-4"></label>
        <label for="carousel-5"></label>
      </div>
      <div class="carousel__next">
        <label for="carousel-3"></label>
        <label for="carousel-4"></label>
        <label for="carousel-5"></label>
      </div>
      <div class="carousel__nav">
        <label for="carousel-3"></label>
        <label for="carousel-4"></label>
        <label for="carousel-5"></label>
      </div>
    </div>
  </div>

  <br /><br />

  <div>
    <h1 style="font-size: 58px" class="text-uppercase py-1 text-center text-danger">
      Apna Karobar
    </h1>
    <p class="py-3 text-justify">
      Apna Karobar is web based platform which provide services of online
      receipt & invoice maker, notepad, daily usage sheet, ledger. our web
      based online invoice and receipt maker is a ready to use software to
      conveniently generate cash sales receipts on mobile and desktop. If
      you're outside somewhere and you have to check or make a receipt or
      invoice for any shop/customer. Just go on website an login into your
      account and use our services. you have any kind of business just make an
      account and manage your business. your business requires professional
      receipts to help you stand out and track your bills and sales at the
      same time. So save your time processing receipts & invest more in
      servicing, selling & helping.
    </p>
  </div>

  <br />
  <h1 class="headingS text-danger"> Services </h1>
  <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(./images/receipt.png)"></div>
      <ul class="details">
        <!-- <li class="author"><a href="#">John Doe</a></li> -->
        <!-- <li class="date">Aug. 24, 2015</li> -->
        <li class="tags">

        </li>
      </ul>
    </div>
    <div class="description">
      <h1 class="headingCards">RECEIPT </h1>

      <p> Firstly, our receipt template has been designed and tweaked
        by expert user experience designers and graphic designers.
        People who are paid to make products easy to use and beautiful.
        This means your receipts will look great on mobile, desktop and paper.
      </p>
    </div>
  </div>

  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(./images/ledger.png)"></div>
      <ul class="details">

        <ul>

        </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1 class="headingCards" class="text-decoration-none">lEDGER</h1>

      <p>Clear dynamic statements
        Your reports, the way you like them.

        Easily create your earnings report, balance sheet or cash flow statements.

      </p>
    </div>
  </div>
  <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(./images/notepad.png)"></div>
      <ul class="details">
        <li class="tags">

        </li>
      </ul>
    </div>
    <div class="description">
      <h1 class="headingCards">NOTEPAD </h1>

      <p> Design your notepads online with our premade Notepad Templates. Each notepad design is custom made by our design team.</p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(./images/invoice.png)"></div>
      <ul class="details">


        <ul>

        </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1 class="headingCards ">INVOICE</h1>

      <p>Create a professional invoice in minutes with no design or accounting training.
        Simply add your information to our invoice template and get paid faster.
        You can add your logo, brand colors, and use any of the multiple payment methods supported by Indy.</p>
    </div>
  </div>
  </div>



  <br><br><br>
  <!-- Footer -->

  <footer class="flex-rw py-2">
    <a href="index.html">
      <img src="images/logo.png" alt="logo" width="470px" height="180px " class="mt" />
    </a>

    <ul class="footer-list-top" style="float: right" style="display: inline">
      <li>
        <h4 class="footer-list-header py-2">About Apna Karobar</h4>
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
        <a href="#" class="generic-anchor text-decoration-none" rel="nofollow">Terms</a>
        |
        <a href="#" class="generic-anchor text-decoration-none" rel="nofollow">Privacy</a>
      </div>
    </section>
  </footer>
</body>

</html>