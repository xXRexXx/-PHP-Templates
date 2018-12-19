<?php

/*connect to DB first*/


/*============================================== Validation =============================================*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $usernameErr = "Username is required";
    } else {	
        $name = clean($_POST["name"]);
    }

    if (empty($_POST["pass"])) {
        $passwordErr = "Password is required";
    } else {
        $pass = clean($_POST["pass"]);
    }

}   

/*================================================ Login ===============================================*/

if (isset($_POST['login']))
	{

		$sql = "SELECT * FROM user_login WHERE name='$name'";
    	$result = $conn->query($sql);
		

			if ($result->num_rows > 0) {
        
        		while($row = $result->fetch_assoc()) 
        		{
            		if($row['pass'] == $pass)
            			{
                			$_SESSION['name'] = $row['name'];
                			header("location:manage.php"); /*specify the location to land after login*/
            			} else {
                			$passwordErr = '<br><br><div class="alert alert-warning">
                        				<strong>Login!</strong>Failed</div>';
                			$name = $row['name'];
            			}
        		}
    		} else {
        			$usernameErr = '<br><br><div class="alert alert-danger">
  							<strong>Username</strong>Not Found</div>';
        			$name = "";
    		}
	}

?>