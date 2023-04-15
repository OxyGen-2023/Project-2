<?php include "header.php"; ?>



<div id="welcomeBox">

	<h1 class="middleText">Welcome to you IT Support System</h1>
	<br>

	<form action="problem.php" method="POST">

		<div class="whiteBg leftSide">
		<select title="title" class="firstFormField inARow">
			<option value="Mr">Mr</option>
			<option value="Mrs">Mrs</option>
			<option value="Dr">Dr</option>
			<option value="Mx">Mx</option>
		</select>

		<input title="first_name" type="text" class="inARow" placeholder="First Name">

		<input title="last_name" type="text" class="inARow" placeholder="Last Name">

		<select title="role" class="inARow">
			<option value="admin">Admin</option>
			<option value="manager">Manager</option>
			<option value="ceo">CEO</option>
		</select>

        </div>

		
		<input type="submit" name="submit" value="Submit" class="lastFormField blueButton">

	</form>

	<br>

</div> 

<br> <p></p> <br> <p></p>

<?php include "footer.php"; ?>	


