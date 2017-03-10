<?php
  // create variables
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $feedback = trim($_POST['feedback']);

  // setup static information
  $toaddress = "evan.goss@gmail.com";
  $subject = "Feedback from web site";
  $mailcontent = "Customer name: " . str_replace("\r\n", "", filter_var($name)) . "\n" .
                 "Customer email: " . str_replace("\r\n", "", $email) . "\n" .
                 "Customer comments:\n" . str_replace("\r\n", "", $feedback) . "\n";
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
  <p>Your feedback (shown below) has been sent.</p>
  <p>
    <?php
      echo "name: " . nl2br(htmlspecialchars($name)) . "\n";
      echo "email: " . nl2br(htmlspecialchars($email)) . "\n";
      echo "comments: " . nl2br(htmlspecialchars($feedback));
    ?>
  </p>
</body>
</html>