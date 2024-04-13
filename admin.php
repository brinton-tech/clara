
<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
           <title>Admin</title>
           <link rel ="stylesheet" href ="admin.css">
           <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        </head>
    <body>
    <header class="header">
      <div class="dash">
        <h5>Admin Dashboard</h5>
       
    
      <div class="flex">
            <li> 
                <ul>       
                <a href="admin_pannel.php">Home</a>
                <a href="#admin_user">Users</a>
                <a href="#admin_products">Products</a>
                <a href="#admin_orders">Orders</a>
                <a href="#admin_message">Messages</a>
            </ul>
        </li>
        
</div>
<div class="log">

            <h4>Name: <span>TATU CITY<? php echo $_SESSION['admin_name']; ?></span></h4>
            <h4>Email : <span>TATU CITY@gmail.com<? php echo $_SESSION['admin_email']; ?></span></h4>

        </div>
        <form method="POST">
            <button type= "submit" class="logout_btn"><span class="material-symbols-outlined">logout</span></button>
        </form>
</div>
    </header>                             

        </body>
        </html>