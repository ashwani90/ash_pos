<html>
<head>
	<title>POS</title>
	<meta name="keywords" content="" />
		<meta name="description" content="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"  type="text/javascript"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
</head>
<body>
	<section class="login-page-bg">
		<div class="container">
			<form action="<?php echo base_url();?>index.php/login/admin_login" method="post">
			<div class="col-md-6 col-md-offset-3 login-box">
				<div class="row">
					<div class="col-md-12">
						<center><img src="<?php echo base_url();?>images/logo-1.png" class="img-responsive" style="width:200px;height:78px;margin-top:10px;"></center>
					</div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-10 col-md-offset-1">
						<input type="text" name="user_email" placeholder="User Name" 
							value="<?php echo set_value('user_email'); ?>" class="input-box">
							<span><?php echo form_error('user_email') ?></span>
						<input type="password" name="user_password" placeholder="Password" class="input-box">
						<span><?php echo form_error('user_password') ?></span>
					</div>
				</div>
				<div class="row" style="margin-bottom:30px;">
					<div class="col-md-6 col-md-offset-3">
						<input type="submit" name="submit" value="Sing In" class="btn btn-login-button">
					</div>
				</div>
			</div>
		</form>
		</div>

	</section>
</body>
</html>