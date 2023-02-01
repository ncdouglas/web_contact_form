<?php

  $name = filter_input(INPUT_POST, 'name');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $message = filter_input(INPUT_POST, 'message');

  //validate all fields completed
  if(empty($name)) {
    $name_error = '* please enter your name';
  } 
  
  if(empty($email)) {
    $email_error = '* please enter a valid email address';
  }

  if(empty($message)) {
    $message_error = '* please submit a message';
  }

  if(empty($name_error) && empty($email_error) && empty($message_error)) {
    include('results.php');
  } else {
      include('index.php');
  }

?>

