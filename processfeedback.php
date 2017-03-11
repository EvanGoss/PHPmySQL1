<?php
  // create variables
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $feedback = trim($_POST['feedback']);

  // send feedback to appropriate department
  if (strstr($feedback, 'shop')) {
    $toaddress = "evan.goss+retail@gmail.com";
  } else if (strstr($feedback, 'delivery')) {
    $toaddress = "evan.goss+fulfillment@gmail.com";
  } else if (strstr($feedback, 'bill')) {
    $toaddress = "evan.goss+accounts@gmail.com";
  } else {
    $toaddress = "evan.goss@gmail.com";
  }

  // setup static information
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
  <p>Your feedback (shown below) has been sent to <?php echo $toaddress ?>.</p>
  <p>
    <?php
      echo "name: " . nl2br(htmlspecialchars($name)) . "<br />";
      echo "email: " . nl2br(htmlspecialchars($email)) . "<br />";
      echo "comments: " . nl2br(htmlspecialchars($feedback));
    ?>
  </p>
</body>
</html>