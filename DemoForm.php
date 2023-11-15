<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "monisha.s@vuedata.in";
    $subject = "Demo Request Form Submission";

    $name = $_POST["recipient-name"];
    $email = $_POST["recipient-email"];
    $company = $_POST["recipient-company"];
    $jobTitle = $_POST["recipient-job-title"];
    $shippingVolume = $_POST["shippingVolume"];

    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Company Name: $company\n";
    $message .= "Job Title: $jobTitle\n";
    $message .= "Shipping Volume: $shippingVolume\n";

    if (mail($recipient, $subject, $message)) {
        echo "Thank you for your submission. We will contact you shortly.";
    } else {
        echo "There was an error. Please try again later.";
    }
}
?>
