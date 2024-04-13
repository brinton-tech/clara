<!-- register.php -->
<?php
// Include database connection 
include "connection.php";

// Handle registration form submission 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select_users ="SELECT email, password FROM users WHERE email='$email' "; 
    $result = mysqli_query($conn,$select_users)or die(mysqli_error());
    $num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    if( $num_row ==1 )
			{
				
				header("Location: index.php");
			}
      
    
        else {
            $message[] ='incorrect email or password';
        }

       }
    

?>