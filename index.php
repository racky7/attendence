<?php 
$title = 'Home';
require_once 'includes/header.php'; 
require_once 'DB/conn.php'; 

$result = $crud->getGender();

?>


    <h1 class="text-center">Registration for Trip to Goa</h1>


    <form method="post" action="success.php">
    
        <!-- 
            - First name
            - Last Name
            - Email Address
            - Contact Number
            - DOB
            - Gender

         -->
           
        <div class="mb-3">
            <label for="firstName" class="form-label" >First Name</label>
            <input required type="text" class="form-control" id="firstName" name="firstName" >
            
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label" >Last Name</label>
            <input required type="text" class="form-control" id="lastName" name="lastName" >
            
        </div>

        <div class="mb-3">
            <label for="DOB" class="form-label" >Date of Birth</label>
            <input type="date" class="form-control" id="DOB" name="DOB" >
            
        </div>

        <div class="mb-3">
            <label for="Gender" class="form-label" >Gender</label>
            <select class="form-select" id="Gender" name="Gender">
            <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['gender_id'] ?>" ><?php echo $r['name']; ?></option>
            <?php } ?>
            
            </select>
            
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Contact No</label>
            <input required type="phone" class="form-control" id="phone" name="phone">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            
        </div>

    
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="TaCs" name="TaCs">
            <label class="form-check-label" for="exampleCheck1">Agree with Terms and Conditions</label>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto my-3"><button type="submit" name="submit" class="btn btn-danger ">Submit</button></div>
        
    
    </form>

    <?php require_once 'includes/footer.php'; ?>

    