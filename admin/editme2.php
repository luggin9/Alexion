<?php
// include database connection file
include_once("../assets/data/umconfig.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $specialty=$_POST['specialty'];
    $email=$_POST['email'];
    $npi=$_POST['npi'];
    $event=$_POST['event'];
    $phone=$_POST['phone'];
    $status=$_POST['status'];

    // update user data
    $result2 = mysqli_query($mysqli2, "UPDATE event SET firstname='$firstname',lastname='$lastname',specialty='$specialty', email='$email', npi='$npi',event='$event', phone='$phone', status='$status' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: registrants.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id
$result2 = mysqli_query($mysqli2, "SELECT * FROM event WHERE id=$id");

while($user_data = mysqli_fetch_array($result2))
{
    $firstname = $user_data['firstname'];
    $lastname = $user_data['lastname'];
    $specialty = $user_data['specialty'];
    $email = $user_data['email'];
    $npi = $user_data['npi'];
    $event = $user_data['event'];
    $phone = $user_data['phone'];
    $status = $user_data['status'];
}
//Head

?>
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
          <div class="card-header" ">Registrant Update Interface</div>
      <form name="update_user" method="post" action="editme.php">
      <tbody>
      <table class="table card-table" >
          <tr>
              <td>First Name</td>
              <td><input type="text" name="firstname" value=<?php echo $firstname;?>></td>
          </tr>
          <tr>
              <td>Last Name</td>
              <td><input type="text" name="lastname" value=<?php echo $lastname;?>></td>
          </tr>
          <tr>
              <td>Specialty</td>
              <td><input type="text" name="specialty" value=<?php echo $specialty;?>></td>
          </tr>
          <tr>
              <td>Email</td>
              <td><input type="text" name="email" value=<?php echo $email;?>></td>
          </tr>
          <tr>
              <td>NPI #</td>
              <td><input type="text" name="npi" value=<?php echo $npi;?>></td>
          </tr>
          <tr>
              <td>Event Attending</td>
              <td><input type="text" name="event" value=<?php echo $event;?>></td>
          </tr>
          <tr>
              <td>Phone</td>
              <td><input type="text" name="phone" value=<?php echo $phone;?>></td>
          </tr>
          <tr>
              <td>Status</td>
              <td><input type="text" name="status" value=<?php echo $status;?>></td>
          </tr>
          <tr>
              <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
              <td><input type="submit" name="update" value="Update"></td>
          </tr>
      </table>
      </tbody>
      </form>

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