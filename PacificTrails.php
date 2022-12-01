<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Feedback</title>
</head>
<body>
<?php // Script 2.5 - handle_form.php

// Create a shorthand for the form data:
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    //validate the first name
    if (!empty($firstName)) {
        $firstName = trim($firstName);
        $firstName = stripslashes($firstName);
        $firstName = htmlspecialchars($firstName);
    } else {
        $firstName = NULL;
        echo '<p>You forgot to enter your first name!</p>';
    }

    //validate the last name
    if (!empty($lastName)) {
        $lastName = trim($lastName);
        $lastName = stripslashes($lastName);
        $lastName = htmlspecialchars($lastName);
    } else {
        $lastName = NULL;
        echo '<p>You forgot to enter your last name!</p>';
    }

    //validate the email
    if (!empty($email)) {
        $email = trim($email);
        $email = stripslashes($email);
        $email = htmlspecialchars($email);
    } else {
        $email = NULL;
        echo '<p>You forgot to enter your email!</p>';
    }

    //validate the comments
    if (!empty($comments)) {
        $comments = trim($comments);
        $comments = stripslashes($comments);
        $comments = htmlspecialchars($comments);
    } else {
        $comments = NULL;
        echo '<p>You forgot to enter your comments!</p>';
    }




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
