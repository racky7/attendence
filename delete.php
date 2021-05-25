<?php 

require_once 'includes/auth_check.php';
require_once 'DB/conn.php'; 


if(!$_GET['id']){
    header("Location: viewrecords.php");
}else{
    //GET ID Values
    $id = $_GET['id'];

    //Call Delete Function
    $result = $crud->deleteAttendee($id);

    //Redirect to viewrecords
    if($result){
        header("Location: viewrecords.php");
    }
    else{
        echo 'error';
    }

}

?>
