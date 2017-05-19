<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book-O-Rama Search Results</title>
</head>

<body>
  <h1>Book-O-Rama Search Results</h1>
  <?php
    $searchtype = $_POST['searchtype'];
    $searchterm = $_POST['searchterm'];

    if (!$searchtype || !$searchterm) {
      echo '<p>You have not entered search details.<br />
        Please go back and try again.';
        exit;
    }

    // whitelist the searchtype
    switch ($searchtype) {
      CASE 'Title':
      CASE 'Author':
      CASE 'ISBN':
        break;
      default:
        echo '<p>That is not a valid search type.<br />
        Please go back and try again.';
        exit;
    }

    $db = new mysqli('localhost', 'username', 'password', 'books');
    if (mysqli_connect_errno()) {
      echo '<p>Error: Could not connect to database.<br />
        Please try again later.';
        exit;
    }

    $query = "SELECT isbn, author, title, price
      FROM books WHERE $searchtype = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $searchterm);
    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($isbn, $author, $title, $price);

    echo '<p>Number of books found: '.$stmt->num_rows.'</p>';

    while($stmt->fetch()) {
      echo '<p><strong>Title: '.$title.'</strong>';
      echo '<br />Author: '.$author;
      echo '<br />ISBN: '.$isbn;
      echo '<br />Price: '.number_format($price,2).'</p>';
    }

    $stmt->free_result();
    $db->close();
  ?>
  
</body>
</html>