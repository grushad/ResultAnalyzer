<html>

<?php
if($_POST['username']=='admin'&&$_POST['password']=='12345'){
	header(location: localhost/analyzer/admin.html);
}
else{
	echo "Invalid login credentials";
}

?>

</html>