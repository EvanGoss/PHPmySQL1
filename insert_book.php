<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book-O-Rama Book Entry Results</title>
</head>
<body>
  <h1>Book-O-Rama Book Entry Results</h1>

  <?php
    if (!isset($_POST['ISBN']) || !isset($_POST['Author'])
      || !isset($_POST['Title']) || !isset($_POST['Price'])) {
        
      echo '<p>You have not entered all of the required details.<br />
        Please go back and try again.</p>';
    }

    $isbn = $_POST['ISBN'];
    $author = $_POST['Author'];
    $title = $_POST['Title'];
    $price = $_POST['Price'];
    $price = doubleval($price);

    $db = new mysqli('localhost', 'username', 'password', 'books');
    if (mysqli_connect_errno()) {
      echo '<p>Error: Could not connect to database.<br />
        Please try again later.</p>'
        .'<p>' . $db->connect_errno . '</p>'
        .'<p>' . $db->error . '</p>';
        exit;
    }

    $query = "INSERT INTO books VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sssd', $isbn, $author, $title, $price);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
      echo '<p>Book inserted into the database</p>';
    } else {
      echo '<p>An error has occurred.<br />
        The item was not added.</p>'
        .'<p>' . $db->connect_errno . '</p>'
        .'<p>' . $db->error . '</p>';
    }

    $db->close();

  ?>
</body>
</html>