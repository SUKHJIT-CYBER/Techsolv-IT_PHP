<?php

// task 2 code 
// Table name: contact_form

// Upon successful form submission:

// Save the form data, the user's IP address, and the current timestamp to the database table.

// Send an email notification to the site owner containing the form submission details.

// Provide the necessary error messages in case of invalid input, etc., and a success message if the information is valid after form submission.

// ###


$name  = $_POST['name'];
$phone  = $_POST['phone-number'];
$email  = $_POST['email'];
$subject = $_POST['subject'];
$message  = $_POST['message'];

// - Validate each of the fields to make sure they are filled in with correct and valid input using PHP.
// - The input that is already filled should remain when you display an error for any other field.

if(empty($name) || empty($phone)|| empty($email)||empty($subject)||empty($message)){
  echo "Required !! Please fill the details";
} else {

//    Table name: contact_form

// Upon successful form submission:

// Save the form data, the user's IP address, and the current timestamp to the database table.

  $db = new mysqli("");

  //not connected to db 
  if($db->connection_aborted()){
  	echo "Connection Failed";
  }


 //if connected record ip and timestamp
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = date("d-m-Y H:i:s");

//insert data in table contact_form
  $sql = "Write SQL command for insert into";
  

}














?>
