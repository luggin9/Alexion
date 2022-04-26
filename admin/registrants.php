<?php
//Connection Configuration
require '../assets/data/config.php';

// We need to use sessions, so you should always start sessions using the below code.
require '../assets/data/session.php';

// We don't have the password or email info stored in sessions so instead we can get the results from the database.
require '../assets/data/query.php';

//Head
//include'assets/templates/head.php'
?>

<?php
include '../assets/data/umconfig.php';
// Fetch all users data from database

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS & Font-Awesome CDNs -->
    <link rel="stylesheet" href="../styles/bootstrap@4.3.1.min.css">
    <link rel="stylesheet" href="../styles/all.min.css">
    <link rel="stylesheet" href="../styles/main.css">

    <title>ULTOMIRIS® (ravulizumab-cwz) - Login | Signup</title>
  </head>
  <body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand bg-light py-0 justify-content-center">
        <div class="row navbar-nav" id="navbarSupportedContent">
            <!-- Links -->            
            <a class="nav-link" href="#fullPrescribingInformation">FULL PRESCRIBING INFORMATION</a>
            <a class="nav-link" href="#medicationGuide">MEDICATION GUIDE</a>
            <a class="nav-link" href="#ultomirisRes">ULTOMIRIS REMS</a>
            <!-- Links -->
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Cookie Modal -->
    <div class="modal" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="cookieModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content shadow">
            <div class="modal-body row">
                <div class="col-11 col-lg-7 col-xl-7" id="cookieBannerContent">This website uses cookies to improve user experience and to improve performance and analyze traffic on this webpage. By clicking “Accept All Cookies”, you agree to the storing of cookies on your device to enhance site navigation, analyze site usage, and assist in our marketing efforts.</div>
                <button type="button" class="close col-1" id="closeBtnSmall" data-dismiss="modal" aria-label="Close" onclick="closeModal('#cookieModal')">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="text-center col-12 col-lg-5 col-xl-5 row my-auto">
                    <a href="#" class="green col-12 col-lg-5 col-xl-5 h6" id="cookieSettingsLink"><u>Cookie Settings</u></a>
                    <button type="button" class="btn bg-green text-white col-12 col-lg-6 col-xl-6" id="acceptCookiesBtn" onclick="closeModal('#cookieModal')">Accept All Cookies</button>
                    <button type="button" class="close col-lg-1 col-xl-1" id="closeBtnLarge" data-dismiss="modal" aria-label="Close" onclick="closeModal('#cookieModal')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Cookie Modal -->

    <!-- Background image -->
    <div class="text-left bg-image">
        <div class="mask p-5" style="background-color: rgba(13, 66, 16, 0.6); height: 100%">
        <div class="d-flex justify-content-left align-items-left h-100">
            <div class="text-white col-12 col-lg-7 col-xl-7">
                <h1 class="mb-0 reduce-h1-for-phone">ULTOMIRIS<span class="rball h5">®</span> <span class="reduce-h2-for-phone h2">(ravulizumab-cwz)</span></h1>
                <h1 class="orange reduce-h1-for-phone">National Webinar Series</h1>
                <h5 class="reduce-h5-for-phone col-12 col-xl-9 col-lg-11 my-3 px-0">
                    Join a gMG expert as they guide you through a 1-hour long presentation about ULTOMIRIS, the first and only long-acting C5 complement inhibitor
                </h5>
            </div>
        </div>
        </div>
    </div>
    <!-- Background image -->
  </header>

  <div class="container-fluid bg-grey py-5 main-content-wrapper">
      <tbody>
      <div class="card">
          <div class="card-header" ">Registrant Administration Interface</div>
      <table class="table card-table" >
          <thead class="thead-light">
          <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Specialty</th>
              <th>Email</th>
              <th>NPI</th>
              <th>Event</th>
              <th>Phone</th>
              <th>Status</th>
              <th>Action</th>

          </tr>
          <?php
          while($user_data = mysqli_fetch_array($result2)) {
              echo "<tr>";
          echo "<td>".$user_data['firstname']."</td>";
          echo "<td>".$user_data['lastname']."</td>";
          echo "<td>".$user_data['specialty']."</td>";
          echo "<td>".$user_data['email']."</td>";
          echo "<td>".$user_data['npi']."</td>";
          echo "<td>".$user_data['event']."</td>";
          echo "<td>".$user_data['phone']."</td>";
          echo "<td>".$user_data['status']."</td>";
          echo "<td><a href='editme2.php?id=$user_data[id]'>Edit</a> | <a href='../admin/delete.php?id=$user_data[id]'>Delete</a></td></tr>";
          }
          ?>
          </thead>
      </table>

</div>
    <!-- Footer -->
    <footer class="text-center text-white bg-purple">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Links -->
            <section>
                <ul class="list-unstyled justify-content-center footer-links">
                    <!--Footer Links-->
                    <li>
                        <a href="#!" class="text-white"><small>Contact Us</small></a>
                    </li>
                    <li>
                        <a href="#!" class="text-white"><small>Terms and Conditions</small></a>
                    </li>
                    <li>
                        <a href="#!" class="text-white"><small>Privacy Notice</small></a>
                    </li>
                    <!--Footer Links-->
                </div>
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-0 m-0">
            <small>
                <p class="m-0">Alexion, ULTOMIRIS®, the ULTOMIRIS logo, and the OneSource logo are registered trademarks of Alexion Pharmaceuticals, Inc., and OneSourceTM is a trademark of Alexion Pharmaceuticals, Inc.</p>
                <p class="m-0">©2022, Alexion Pharmaceuticals, Inc. All rights reserved. 04/22</p>
                <p class="m-0">US/ULT-g/0143</p>
            </small>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </body>
</html>