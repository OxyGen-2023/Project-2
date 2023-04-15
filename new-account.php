<?php include 'header.php'; ?>

    <h1>New Account</h1>
    <form action="send-email.php" method="post">
        <input type="hidden" name="emailType" value="newAccount">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $_SESSION['title']; ?>">
        <br>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo $_SESSION['first_name']; ?>">
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo $_SESSION['last_name']; ?>">
        <br>
        <label for="role">Role:</label>
        <input type="text" name="role" id="role" value="<?php echo $_SESSION['role']; ?>">
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php include 'footer.php'; ?>

