<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Notepad</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="notepad.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

</head>

<body>

  <!-- Navbar -->
  <div class="nav">
    <input type="checkbox" id="nav-check" />
    <div class="nav-header">
      <div class="nav-title">
        <a href="index.html">
          <img src="images/logo.png" alt="logo" width="270px" height="80px" />
        </a>
      </div>
    </div>

    <div class="nav-links nav-item  active ms-5">
      <a href="http://localhost/Project/Apna%20karobar/index.php" target="_self" class="px-0 ms-5">Home</a>
      <a href="http://localhost/Project/Apna%20karobar/aboutus.php" target="_self" class="px-3 ms-5">About Us</a>
      <a href="http://localhost/Project/Apna%20karobar/faq.php" target="_self" class="px-3 ms-5"> FAQ</a>
      <a href="http://localhost/Project/Apna%20karobar/services.php" target="_self" class="px-3 ms-5">Services</a>
      <a href="http://localhost/Project/Apna%20karobar/contact.php" target="_self" class="px-3 ms-5">Contact</a>
    </div>
  </div>

  <!-- body -->
  <h1 class="headinng py-3"> Notepad</h1>
  <!--  <div class="notebook">
    <div class="container">-->
  <form action="" method="post">
    <div class="notebook">
      <div class="container">
        <textarea placeholder="You can write anything here " name="textdata"></textarea>

      </div>
    </div>
    <input type="submit" value="Save" class="btn sp-btn btnn butt " style="margin-left: 47%;" name="submit">
    <div class=" ">

    </div>

  </form>
  <!--
    </div>
  </div>
-->


  <!--
  <div class=" btn sp-btn">
    <button class="btnn butt"> <i class="fa fa-floppy-o" aria-hidden="true"></i>
      </i> save </button>

  </div>
-->


  <?php

  if (isset($_POST['textdata'])) {
    $data = $_POST['textdata'];
    $fp = fopen('data.txt', 'a');
    fwrite($fp, $data);
    fclose($fp);
  }
  ?>


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