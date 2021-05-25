<?php 
$title = 'Success';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'DB/conn.php';

if(isset($_POST['submit'])){
    //extract values from the $_POST array
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $dob = $_POST['DOB'];
    $phone = $_POST['phone'];
    $gender = $_POST['Gender'];
    
    //Call function to insert and trackif sucess or not
    $isSuccess = $crud->insertAttendee($fname, $lname, $dob, $gender, $email, $phone);

    if($isSuccess){
      include 'includes/successmsg.php';
    }
    else{
      include 'includes/errormsg.php';
    }
}
?>


<br>
<br>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstName'].' '.$_POST['lastName']; ?></h5>
   
    <p class="card-text">Gender: <?php echo $_POST['Gender']; ?></p>
    <p class="card-text">Email: <?php echo $_POST['email']; ?></p>
    <p class="card-text">Phone: <?php echo $_POST['phone']; ?></p>
    <p class="card-text">DOB: <?php echo $_POST['DOB']; ?></p>
    
  </div>
</div>





<br>
<br>
<?php require_once 'includes/footer.php'; ?>