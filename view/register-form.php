<!-- allows the user to be apart of the blog, if not a user
won't be allowed to post-->
<?php 
//finding and going into the folders selected
 require_once(__DIR__ . "/../model/config.php");
 ?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
		<label for="email">Email:</label>	
		<input type="text" name="email" /> 
	</div>
	<div>
		<label for="username">Username:</label>	
		<input type="text" name="username" /> 
	</div>
	<div>
		<label for="password">Password:</label>	
		<input type="password" name="password" /> 
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
</form>