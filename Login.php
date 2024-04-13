<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel = "stylesheet" href = "style.css">

</head>
<body>

<div class="card">
<form action="sign.php" method="post">
        <div class="label">
        <h1><center>Login</center></h1>
        <form action="process_form php" method="post">
        
            <!--email-->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <br>
            <!--password-->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <br>
        
        
            <!--submit button-->
        <button type="submit">Login</button>
        </div>
        If you don't have an account <A HREF = "register.php">Register</A>
        </form>
</div>


</body>
</html>