<!-- WARNING THIS CODE IS PROBABLY TOTAL GARBAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Feedback</title>
    <style type="text/css">
        .error {
            font-weight: bold;
            color: #C00;
        }
    </style>
</head>
<body>
<?php // Script 2.4 - handle_form.php #3
// This page receives the data from reservations.html
// It will receive: first name, last name, email, phone number, arrival date, number of nights, gender, age, comments, and submit button in $_POST

// Create shorthand versions of the variables:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$arrival_date = $_POST['arrival_date'];
$nights = $_POST['nights'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$comments = $_POST['comments'];

//validate the first name:
if (!empty($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
} else {
    $first_name = NULL;
    echo '<p class="error">You forgot to enter your first name!</p>';
}

//validate the last name:
if (!empty($_POST['last_name'])) {
    $last_name = $_POST['last_name'];
} else {
    $last_name = NULL;
    echo '<p class="error">You forgot to enter your last name!</p>';
}

//validate the email:
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = NULL;
    echo '<p class="error">You forgot to enter your email!</p>';
}

//validate the phone:
if (!empty($_POST['phone'])) {
    $phone = $_POST['phone'];
} else {
    $phone = NULL;
    echo '<p class="error">You forgot to enter your phone number!</p>';
}

//validate the arrival date:
if (!empty($_POST['arrival_date'])) {
    $arrival_date = $_POST['arrival_date'];
} else {
    $arrival_date = NULL;
    echo '<p class="error">You forgot to enter your arrival date!</p>';
}

//validate the number of nights:
if (!empty($_POST['nights'])) {
    $nights = $_POST['nights'];
} else {
    $nights = NULL;
    echo '<p class="error">You forgot to enter the number of nights!</p>';
}

//validate the comments:
if (!empty($_POST['comments'])) {
    $comments = $_POST['comments'];
} else {
    $comments = NULL;
    echo '<p class="error">You forgot to enter your comments!</p>';
}

//validate the gender:
if (isset($_POST['gender']) && $gender == 'M') {
    $gender = $_POST['gender'];
    $greeting = '<p><b>Good day, Sir!</b></p>';
} elseif ( isset($_POST['gender']) && $gender == 'F') {
    $gender = $_POST['gender'];
    $greeting = '<p><b>Good day, Madam!</b></p>';
} else { $gender = NULL;
    echo '<p class="error">You forgot to enter your gender!</p>';
}

//validate the age:
if (!empty($_POST['age'])) {
    $age = $_POST['age'];
} else {
    $age = NULL;
    echo '<p class="error">You forgot to enter your age!</p>';
}

//if everything is OK, print the message:
if ($first_name && $last_name && $email && $phone && $arrival_date && $nights && $gender && $age && $comments) {
    echo "<p>Thank you, <b>$first_name $last_name</b>, for the following comments:<br />
    <tt>$comments</tt></p>
    <p>We will reply to you at <i>$email</i>.</p>\n";
    echo $greeting;
    echo "<p>You stated that you are <b>$age</b> years old, staying for <b>$nights</b> nights, arriving on <b>$arrival_date</b>, your phone number is <b>$phone</b>, and you are a <b>$gender</b>.</p>\n";
} else { // Missing form value.
    echo '<p>Please go back and fill out the form again.</p>';
}

?>
</body>
</html>
