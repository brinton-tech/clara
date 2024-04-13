<?php

include("connection.php");
$error="";
$msg="";
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message))
	{
		
		$sql="INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
		   $result=mysqli_query($conn, $sql);
		   if($result){
			   echo"<p class='alert alert-success'>Message Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Message Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <!-- <link rel="stylesheet" href="contact.css"> -->
    <style>
      .content {
        margin-top: 7%;
        width: 40%;
        background-color: cadetblue;
        margin-left: auto;
        margin-right: auto;
      }



      #contact_form {
        background-color: cadetblue;
        padding-top: 20px;
        padding-bottom: 20px;
        width: 100%;
        
        }
      .row label{
        color: black;
        font-size: 25px;
        margin-left: 10px;
        
        
      }
      input[type=number], input[type=text], textarea {
        text-align: center;
        background-color: white;
        border-radius: 20px;
        border: solid black;
        margin: auto 0; 
        color: #000;
        margin-left: 10px;
        font-size: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
        box-shadow: 5px 5px 10px #3e4444;
        width: 80%;
        } 
      /* input[type=text] {
        height: 25px; 
      } */
      input[type=submit] {
        background-color: #ff7b25;
        color: #FFFFFF;
        border-radius: 10px;
        font-size: 18px;
        margin-left: 30%;
        margin-right: auto;
        box-shadow: 5px 5px 5px #3e4444; 
        width: 40%;
      }  */

      /* .content {
        
        margin-top: 10%;
      }

      #contact_form{
        width: 40%;
        margin-left: auto;
        margin-right: auto;
        justify-content: justify;
        align-items: center;
        text-align: center;
        
      }

      #contact_form .row{
        width: 100%;
      }

      #contact_form .row .required{
        width: 100%;
      } */
    </style>
</head>
<body>
<?php
include('header.php');
?>

<!-- form  -->
<div class="content">
<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
  <div class="row">
    <label class="required" for="name">Your name:</label><br>
    <input id="name" class="input" name="name" type="text" value="" size="30" required><br>
    <span id="name_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="email">Your email:</label><br>
    <input id="email" class="input" name="email" type="text" value="" size="30" required><br>
    <span id="email_validation" class="error_message"></span>
  </div>

  <div class="row">
    <label class="required" for="name">Your Phone Number:</label><br>
    <input id="phone" class="input" name="phone" type="number" value="" size="30" required ><br>
    <span id="name_validation" class="error_message"></span>
  </div>

  <div class="row">
    <label class="required" for="name">Subject:</label><br>
    <input id="subject" class="input" name="subject" type="text" value="" size="30" required><br>
    <span id="name_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="message">Your message:</label><br>
    <textarea id="message" class="input" name="message" rows="7" cols="30" required></textarea>
    <span id="message_validation" class="error_message"></span>
  </div>
    
    <input id="submit_button" type="submit" value="Send email" name="send">
</form>
</div>

</body>
</html>