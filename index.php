<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>
<?php function hey(){
	echo "Hello World!";}
	hey()?>

<div class="container" id="main-content">
	    
	<h2>This is my Homework 2 site!</h2>
	<p>Please fill out the below form to test using POST.</p>
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
	
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

	<p>Please fill out the below form to test using GET.</p>
<form action="page3.php" method="get">
Name: <input type="text" name="name"><br>
	
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</div>

<?php include("includes/footer.php");?>

</body>
</html>
