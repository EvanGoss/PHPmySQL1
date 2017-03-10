<?php
  // create variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  // setup static information
  $toaddress = "evan.goss@gmail.com";
  $subject = "Feedback from web site";
  $mailcontent = "Customer name: " . filter_var($name) . "\n" .
                 "Customer email: " . $email . "\n" .
                 "Customer comments:\n" . $feedback . "\n";
  $fromaddress = "evan.goss@gmail.com";

  // invoke mail() function to send mail
  putenv("TMPDIR=/tmp");
  mail($toaddress, $subject, $mailcontent, $fromaddress);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Feedback Submitted</title>
</head>

<body>
  <h1>Feedback submitted</h1>
  <p>Your feedback has been sent.</p>
</body>
</html>