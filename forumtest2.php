

    <?php
    	session_start();
	$_SESSION['username'] = 'root';
    	$con = mysqli_connect('localhost', 'root', 'root', 'forumTEST') or die(mysql_error());
    	if (isSet($_POST['createThread'])) {
    		if (isSet($_POST['title']) && $_POST['title'] != '' && isSet($_POST['description']) && $_POST['description'] != '' && isSet($_SESSION['username']) && $_SESSION['username'] != '') {
    			$title = $_POST['title'];
    			$description = $_POST['description'];
    			$user = $_SESSION['username'];
    			$q = mysqli_query($con, "INSERT INTO `forum_table_2` VALUES ('', '$title', '$description', '$user')") or die(mysql_error());
    			if ($q) {
    				echo 'Thread created.';
    			}else
    				echo 'Failed to create thread.';
    		}
    	}
    ?>
    <html>
    	<head></head>
    	<body>
    		<h1>Create Thread:</h1>
    		<form action='forumtest2.php' method='POST'>
    		<table>
    			<tbody>
    				<tr>
    					<td>Title: </td><td><input type='text' name='title' /></td>
    				</tr>
    				<tr>
    					<td>Description: </td><td><input type='text' name='description' /></td>
    				</tr>
    				<tr>
    					<td></td><td><input type='submit' value='Create Thread' name='createThread' /></td>
    				</tr>
    			</tbody>
    		</table>
    		</form>
    	</body>
    </html>
