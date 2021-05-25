<?php 
$title = 'View Details';
require_once 'includes/header.php'; 
require_once 'DB/conn.php'; 
require_once 'includes/auth_check.php';

//Get attendee by Id
if(!isset($_GET['id'])){
    //echo "<h1 class='text-danger'>Please check details and try again</h1>";
    
    include 'includes/errormsg.php';

}   else{
    $id = $_GET['id'];
    $result = $crud->getAtteneeDetails($id);

?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result ['firstName'].' '.$result['lastName']; ?></h5>
   
    <p class="card-text">Gender: <?php echo $result['name']; ?></p>
    <p class="card-text">Email: <?php echo $result['email']; ?></p>
    <p class="card-text">Phone: <?php echo $result['phone']; ?></p>
    <p class="card-text">DOB: <?php echo $result['DOB']; ?></p>
    
  </div>

</div>
<br/>
<a href="viewrecords.php" class="btn btn-info">Back to List</a> <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a> <a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>

<?php
}
?>

<br><br><br>

<?php require_once 'includes/footer.php'; ?>

    