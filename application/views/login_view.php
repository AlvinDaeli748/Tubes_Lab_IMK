<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">

</head>


<body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1 style="color: white;">Admin Dashboard</h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Log In</h6>
							<form action="<?php echo base_url().'login/login_act/';?>" method="post">
								<input class="form-control" type="text" name="uname" placeholder="Username" required>
								<input class="form-control" type="password" name="pass" placeholder="Password" required>
								<input class="btn btn-primary" type="submit" name="submit" value="Login">
							</form>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
  </body>
</html>