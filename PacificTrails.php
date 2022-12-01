<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Feedback</title>
</head>

<body>
    <?php
    // Create a shorthand for the form data:
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $arrivalDate = $_POST['arrivalDate'];
    $nights = $_POST['nights'];

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

    //validate the phone
    if (!empty($phone)) {
        $phone = trim($phone);
        $phone = stripslashes($phone);
        $phone = htmlspecialchars($phone);
    } else {
        $phone = NULL;
        echo '<p>You forgot to enter your phone!</p>';
    }

    //validate the age
    if (isset($_POST['age']) && $age = 'Under 30') {
        $salutation  = '<p><b>Your age is less than 30!</b></p>';
    } elseif (isset($_POST['age']) && $age = 'Between 30 and 60') {
        $salutation  = '<p><b>Your age is between 30 and 60!</b></p>';
    } elseif (isset($_POST['age']) && $age = 'Over 60') {
        $salutation  = '<p><b>Your age is over 60!</b></p>';
    } else {
        $salutation  = NULL;
        echo '<p>You forgot to enter your age!</p>';
    }

    //validate the arrival date
    if (!empty($arrivalDate)) {
        $arrivalDate = trim($arrivalDate);
        $arrivalDate = stripslashes($arrivalDate);
        $arrivalDate = htmlspecialchars($arrivalDate);
    } else {
        $arrivalDate = NULL;
        echo '<p>You forgot to enter your arrival date!</p>';
    }

    //validate the nights
    if (!empty($nights)) {
        $nights = trim($nights);
        $nights = stripslashes($nights);
        $nights = htmlspecialchars($nights);
    } else {
        $nights = NULL;
        echo '<p>You forgot to enter your nights!</p>';
    }

    //validate the gender
    if (isset($_POST['gender']) && $gender = 'M') {
        $greeting = '<p><b>Good day, Sir!</b></p>';
    } elseif (isset($_POST['gender']) && $gender = 'F') {
        $greeting = '<p><b>Good day, Madam!</b></p>';
    } else { // Unacceptable value.
        $gender = NULL;
        echo '<p><b>Your gender submission is not valid.</b></p>';
    }

    if (
        !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['comments']) && !empty($_POST['email']) && !empty($_POST['phone'])
        && !empty($_POST['age']) && !empty($_POST['arrivalDate']) && !empty($_POST['nights']) && !empty($_POST['gender'])
    ) {
        echo "<p>Thank you, <b>$firstName $lastName</b>, for the following comments:<br />
    <tt>$comments</tt></p>
    <p>We will reply to you at <i>$email</i>.</p>\n";
        echo "<p>Phone: $phone</p>\n";
        echo "<p>Arrival Date: $arrivalDate</p>\n";
        echo "<p>Nights: $nights</p>\n";
        echo $greeting;
        echo $salutation;
    } else {
        echo '<p>Please go back and fill out the form again.</p>';
    }
    ?>
</body>

</html>
