<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['add']))
{
	$id=$_REQUEST['id'];
	
	$title=$_POST['title'];
	$ptype=$_POST['ptype'];
	// $stype=$_POST['stype'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	
	$aimage=$_FILES['aimage']['name'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	move_uploaded_file($temp_name,"property/$aimage");
	
	
	$sql = "UPDATE property SET title= '{$title}',  ptype='{$ptype}',   price='{$price}', city='{$city}', state='{$state}',
	pimage='{$aimage}' WHERE id = {$id}";
	
	$result=mysqli_query($conn,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Property Updated</p>";
		header("Location:propertyview.php?msg=$msg");
	}
	else{
		$msg="<p class='alert alert-warning'>Property Not Updated</p>";
		header("Location:propertyview.php?msg=$msg");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>TATUCITYPROJECT</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Property</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Property</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Update Property Details</h4>
									<?php echo $error; ?>
									<?php echo $msg; ?>
								</div>
								<form method="post" enctype="multipart/form-data">
								
								<?php
									
									// $pid=$_REQUEST['pid'];
									$query=mysqli_query($conn,"select * from property ");
									while($row=mysqli_fetch_row($query))
                                    // where pid='$pid'
									{
								?>
												
								<div class="card-body">
									<h5 class="card-title">Property Detail</h5>
										<div class="row">
											<div class="col-xl-12">
                                            <div class="form-group row">
													<label class="col-lg-2 col-form-label">ID</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required value="<?php echo $row['0']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required value="<?php echo $row['1']; ?>">
													</div>
												</div>
												
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="ptype">
															<option value="">Select Type</option>
															<option value="appartment">Appartment</option>
															<option value="flat">Flat</option>
															<option value="bunglow">Bunglow</option>
															<option value="house">House</option>
															<option value="villa">Villa</option>
															<option value="office">Office</option>
														</select>
													</div>
												</div>
												
												
												
												
											</div>   
											
										</div>
										<h4 class="card-title">Price & Location</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required value="<?php echo $row['4']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" required value="<?php echo $row['5']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required value="<?php echo $row['6']; ?>">
													</div>
												</div>
											</div>
											
										</div>
										
										
												
										<h4 class="card-title">Image & Status</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" required="">
														<img src="property/<?php echo $row['7'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												
												
												
												
											</div>
											
										</div>

										
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
										
									</div>
								</form>
								
								<?php
									} 
								?>
												
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>