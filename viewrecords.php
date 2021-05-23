<?php 
$title = 'View Records';
require_once 'includes/header.php'; 
require_once 'DB/conn.php'; 

$results = $crud->getAttendees();

?>

    <table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        <?php
        while($r = $results->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $r['attendee_id'] ?></td>
                <td><?php echo $r['firstName'] ?></td>
                <td><?php echo $r['lastName'] ?></td>
                <td><?php echo $r['name'] ?></td>
                
                
                <td><a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a> <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a> <a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>


<br><br><br>

<?php require_once 'includes/footer.php'; ?>

    