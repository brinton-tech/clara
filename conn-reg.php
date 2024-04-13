<!-- register.php -->
<?php
// Include database connection
include "connection.php";

// Handle registration form submission
if (isset(($_POST['sub']))) {
    // Retrieve form data
    // $userid = $_POST["userid"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $cpassword = $_POST["cpassword"];
    
        $select_user = mysqli_query($conn, "SELECT * FROM users WHERE email= '$email'") or die ('query failed');
        if (mysqli_num_rows($select_user)>0) {
            echo "User already exists";
        }else{
           
        
    // inserting in the query users
    // $request = "INSERT INTO users(firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

    $request = "INSERT INTO users(firstname, lastname, email, password) VALUES('$name','$name', '$email', '$password')";
    $request = mysqli_query($conn, $request);

    
    // Execute the query
    if ($request) {
        // Registration successful
        
        header('Location: index.php'); // Redirect to a success page
         // Terminate script execution after redirection
    } 
    else {
        // Registration failed
        // Display error message or handle the error accordingly
        echo "Registration failed. Please try again.";
    }

        }
    }
