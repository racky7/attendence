<?php

require_once 'db/conn.php';
//Get values from post operation

if(isset($_POST['submit'])){
    //extract values from the $_POST array
    $id = $_POST['id'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $dob = $_POST['DOB'];
    $phone = $_POST['phone'];
    $gender = $_POST['Gender'];

    //Call Crud function
    $result = $crud->editAttendee($id, $fname, $lname, $dob, $gender, $email, $phone);


    //Redirect to index.php
    if($result){
        header("Location: viewrecords.php");
    }
    else{
        //echo 'error';
        include 'includes/errormsg.php';
    }
}
else{
    //echo 'error';
    include 'includes/errormsg.php';
}




?>