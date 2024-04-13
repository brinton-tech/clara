<?php
include 'connection.php';
'start_session()';

$admin_id = $_SESSION ['admin_name'];
if (!isset($admin_id)) {
    header ('location:login.php');
}
if (isset($_POST['logout']))
session_destroy()
    header ('location:login.php');
    die()
)
?>

<!DOCTYPE html>
<html>
<head>
</head>
<title>Admin</title>
<body>
    <?php include 'admin.php;'?>
    <section class=" Admin dashboard">
        <div class="box container">
            <div class="box">
                <?php
                $total_pendings=0;
                $select_pending = MYsQL_query($conn, "SELECT * FROM orders WHERE payment_status = 'pending'");
                or die ('query failed');
                while ($fetch_pending = mysqli_fetch_assoc($select_pending)) {
                    $total_pendings += $fetch_pending['total_price'];
                }
                <h3> $<?php echo $total_pendings;?>-</h3>
                <p> total pending</p>
                ?>

</body>
</html>
