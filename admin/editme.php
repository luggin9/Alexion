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
    <body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
<div class="layout-wrapper layout-2">
    <div class="layout-inner">

    <!--Sidebar Navigation Start-->


    <!-- [ Layout container ] Start -->
    <div class="layout-container">

    <!-- [ Layout content ] Start -->
    <div class="layout-content">
    <!--Top Navigation Start-->


    <hr class="border-light container-m--x my-4">
    <div class="card">
        <div class="card-header" ">User Administration Interface</div>

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
    </div>
    <!-- [ content ] End -->
