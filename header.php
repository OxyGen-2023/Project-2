<!-- when i add <?php session-start(); ?> it doesn't work -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<a href="logout.php" class="rightSide paddingRightOnly">Logout</a>

	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>


<div id="topBanner">

	<img id="leftNavBtn" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" height="60px" class="leftSide">


	<h2 class="whiteText middleText spaceInTopBanner">Halifax Canoe and Kayak </h2>
	
	<img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" height="60px" class="topRight" >

</div>

<script> 
$(document).ready(function(){
  $("#leftNavBtn").click(function(){
    $("#leftNav").slideToggle("fast");
  });
});
</script>


<div id="leftNav">
	
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="">Book a Trip</a></li>
		<li><a href="">IT System</a></li>
	</ul>

</div>

<br><p></p><br><p></p>
<a href="logout.php" class="rightSide paddingRightOnly">Logout</a>

    
</body>
</html>
