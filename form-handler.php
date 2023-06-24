<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $school = $_POST['school'];
    $job_title = $_POST['job-title'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile-number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Save form data to a file or database
    $data = "First Name: $fname\n";
    $data .= "Last Name: $lname\n";
    $data .= "School: $school\n";
    $data .= "Job Title: $job_title\n";
    $data .= "Email: $email\n";
    $data .= "Mobile Number: $mobile_number\n";
    $data .= "Password: $password\n";
    $data .= "Confirm Password: $confirm_password\n";

    file_put_contents('form-data.txt', $data, FILE_APPEND);

    // Redirect to the thank you page
    header('Location: thankyou.html');
    exit;
}
?>
