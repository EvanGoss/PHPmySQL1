<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Testing server test</title>
<link href="../styles/examples.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>The Moment of Truth</h1>
<p>Click the Live View button. If the current time is displayed below, your testing server is working.</p>
<?php
echo '<p>Congratulations. The time is now ' . date('g:i a') . '</p>';
?>
</body>
</html>