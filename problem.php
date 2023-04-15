<?php include 'header.php'; ?>


<?php
if ( isset($theTitle) || isset($firstName) || isset($lastName) || isset($theRole) ) {
$theTitle = $_POST['title'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$theRole = $_POST['role'];

//echo "The role you selected $role";


$_SESSION["title"] = $theTitle;
$_SESSION["first_name"] = $firstName;
$_SESSION["last_name"] = $lastName;
$_SESSION["role"] = $theRole;
}
?>

<?php
//specifics based on the role
$theRole = 'admin';

if ($theRole == 'admin') {
    echo '<h1>Hello Admin <br></h1>';
    echo '<h2>Here are your options</h2>';
    echo '<ul>';
    echo '<li><a href="new-account.php">New Account</a></li>';
    echo '<li><a href="isnt-working.php">PC Not Working</a></li>';
    echo '</ul>';      
    }

$theRole = 'manager';

if ($theRole == 'manager') {
    echo '<h1>Hello Manager</h1>';
    echo '<h2>Here are your options</h2>';
    echo '<ul>';
    echo '<li><a href="lost-password.php">Lost Password</a></li>';
    echo '<li><a href="isnt-working.php">PC Not Working</a></li>';
    echo '</ul>'; 
    }  

$theRole = 'ceo';

if ($theRole == "ceo") {
    echo '<h1>Hello CEO</h1>';
    echo '<h2>Here are your options</h2>';
    echo '<ul>';
    echo '<li><a href="need-help.php">Need Help</a></li>';
    echo '<li><a href="isnt-working.php">PC Not Working</a></li>';
    echo '</ul>'; 
}  
else {
    echo '<p>Invalid Role</p>';
}

?>

<?php include 'footer.php'; ?>