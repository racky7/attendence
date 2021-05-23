<?php 
$title = 'Edit Record';
require_once 'includes/header.php'; 
require_once 'DB/conn.php'; 

$result = $crud->getGender();

if(!isset($_GET['id'])){
    //echo 'error';
    include 'includes/errormsg.php';
    header("Location: viewrecords.php");
}
else{
    $id = $_GET['id'];
    $attendee = $crud->getAtteneeDetails($id);



?>


    <h1 class="text-center">Edit Record</h1>


    <form method="post" action="editpost.php">
    
        <input type="hidden" name="id" value = "<?php echo $attendee['attendee_id'] ?>">
        
           
        <div class="mb-3">
            <label for="firstName" class="form-label" >First Name</label>
            <input type="text" class="form-control" value = "<?php echo $attendee['firstName'] ?>" id="firstName" name="firstName" >
            
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label" >Last Name</label>
            <input type="text" class="form-control" value = "<?php echo $attendee['lastName'] ?>" id="lastName" name="lastName" >
            
        </div>

        <div class="mb-3">
            <label for="DOB" class="form-label" >Date of Birth</label>
            <input type="date" class="form-control" value = "<?php echo $attendee['DOB'] ?>" id="DOB" name="DOB" >
            
        </div>

        <div class="mb-3">
            <label for="Gender" class="form-label" >Gender</label>
            <select class="form-select" id="Gender" name="Gender">
            <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['gender_id'] ?>" <?php if($r['gender_id']==$attendee['gender_id']) echo 'selected' ?>>
                
                <?php echo $r['name']; ?>
                
                </option>
            <?php } ?>
            
            </select>
            
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" value = "<?php echo $attendee['email'] ?>" id="email" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Contact No</label>
            <input type="phone" class="form-control" value = "<?php echo $attendee['phone'] ?>" id="phone" name="phone">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            
        </div>

    
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="TaCs" name="TaCs">
            <label class="form-check-label" for="exampleCheck1">Agree with Terms and Conditions</label>
        </div>
        <div><a href="viewrecords.php" class="btn btn-info">Back to List</a> <button type="submit" name="submit" class="btn btn-success ">Save Changes</button></div>
        
    
    </form>
    <?php } ?>

    <?php require_once 'includes/footer.php'; ?>

    