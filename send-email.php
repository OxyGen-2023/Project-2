<?php include "header.php"; ?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email type from form data
    $emailType = $_POST['emailType'];

    // Get user data from form data
    $theTitle = $_POST['title'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $theRole = $_POST['role'];

    // Set session data
    $_SESSION['title'] = $theTitle;
    $_SESSION['first_name'] = $firstName;
    $_SESSION['last_name'] = $lastName;
    $_SESSION['role'] = $theRole;

    // Send email based on email type
    if ($emailType == 'newAccount') {
        // Compose new account email
        $to = 'ceo@gmail.com';
        $subject = 'New Account Request';
        $message = "Title: $theTitle \nFirst Name: $firstName \nLast Name: $lastName \nRole: $theRole";
        $headers = 'From: noreply@gmail.com' . "\r\n" .
            'Reply-To: noreply@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            // Email sent successfully
            header('Location: success.php');
            exit;
        } else {
            // Failed to send email
            header('Location: error.php');
            exit;
        }
    } elseif ($emailType == 'lostPassword') {
        // Compose lost password email
        $to = 'ceo@example.com';
        $subject = 'Lost Password Request';
        $message = "Title: $theTitle \nFirst Name: $firstName \nLast Name: $lastName \nRole: $theRole";
        $headers = 'From: noreply@gmail.com' . "\r\n" .
            'Reply-To: noreply@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            // Email sent successfully
            header('Location: success.php');
            exit;
        } else {
            // Failed to send email
            header('Location: error.php');
            exit;
        }
    } else {
        // Invalid email type
        header('Location: error.php');
        exit;
    }
} else {
    // Redirect to error page if accessed directly
    header('Location: error.php');
    exit;
}
?>

<?php include 'footer.php'; ?>