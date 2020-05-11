<?php


session_start();

d($_POST);

?>


<form method="post">
	<label>login</label>
	<input type="text" name="login" />
	<br/>
	<label>password</label>
	<input type="text" name="pass" />
	<br/>
	<label>remember</label>
	<input type="checkbox" name="remember" />
	<br/>
	<input type="submit"/>
</form>