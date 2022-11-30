<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Feedback</title>
</head>
<body>
<?php // Script 2.5 - handle_form.php

//print the submitted information:
echo "<p>Data recieved. Thank you!</p>";



if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['comments']) && !empty($_POST['email'])) {
    echo "<p>Thank you, <b>{$_POST['firstName']}</b> <b>{$_POST['lastName']}</b>, for the following comments:</p>
    
    for the following comments:<br />
    <tt>{$_POST['comments']}</tt></p>
    <p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
}



//end file
?>
</body>
</html>