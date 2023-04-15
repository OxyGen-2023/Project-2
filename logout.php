<?php include 'header.php'; ?>

<!--header("Location: index.php") ; -->

<?php

session_destroy();

echo "
<div>
  <h1>Confirm Logout</h1>
  <p>You have successfully logged out.</p>
</div>";

?>

<?php include 'footer.php'; ?>