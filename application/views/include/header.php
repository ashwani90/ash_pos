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
       
<!-- Need to use datatables.net -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>
		
		 <!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"  type="text/javascript"></script>
		
<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>
		<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"  type="text/javascript"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/morrisjs/morris.css" rel="stylesheet">
	
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );



$(function () {
    $(".img-nocolor1").click(function () {
        var seconds = 2;
		$('.img-nocolor1').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/sale-colour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor2").click(function () {
        var seconds = 2;
		$('.img-nocolor2').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/purchasecolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor3").click(function () {
        var seconds = 2;
		$('.img-nocolor3').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/vendorscolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor4").click(function () {
        var seconds = 2;
		$('.img-nocolor4').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/clientscolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor5").click(function () {
        var seconds = 2;
		$('.img-nocolor5').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/productscolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor6").click(function () {
        var seconds = 2;
		$('.img-nocolor6').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/reportscolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor7").click(function () {
        var seconds = 2;
		$('.img-nocolor7').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/reportscolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor8").click(function () {
        var seconds = 2;
		$('.img-nocolor8').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/returnscolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor9").click(function () {
        var seconds = 2;
		$('.img-nocolor9').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/pricelevelcolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor10").click(function () {
        var seconds = 2;
		$('.img-nocolor10').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/pointofsalecolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor11").click(function () {
        var seconds = 2;
		$('.img-nocolor11').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/sendsmscolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor12").click(function () {
        var seconds = 2;
		$('.img-nocolor12').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/sendemailcolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor12").click(function () {
        var seconds = 2;
		$('.img-nocolor11').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/sendemailcolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
	$(".img-nocolor13").click(function () {
        var seconds = 2;
		$('.img-nocolor13').fadeOut(900, function(){
			$(this).attr('src','<?php echo base_url();?>images/offerscolour.png').bind('onreadystatechange load', function(){
				if (this.complete) $(this).fadeIn(900);
			});
		});
		
        $("#lblCount").html(seconds);
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "product-view.php";
            }
        }, 800);
    });
	
});

</script>	
</head>
<body>
	<section class="header-bg">
		<div class="container-fluid">
			<div class="col-md-2">
				<img src="<?php echo base_url();?>images/logo-1.png" class="img-responsive" style="width:200px;height:78px;margin-top:10px;">
			</div>
			<div class="col-md-3">
				<input type="text" name="" placeholder="Search" class="search-box"> <i class="fa fa-search" aria-hidden="true"></i>
			</div>
			<div class="col-md-2">
				<select class="date-dropdown">
					<option>10/02/2016 - 11/02/2017</option>
				</select>
			</div>
			<div class="col-md-2 icon-top">
				<i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-cog" aria-hidden="true"></i>
			</div>
			<div class="col-md-2 details text-right">
				<p style="margin-top: 20px;">Aditya Tyagi</p>
				<p>Aditya@sudhamrit.com</p>
			</div>
			<div class="col-md-1">
				<img src="<?php echo base_url();?>images/Graphicloads-100-Flat-2-People.ico" style="width:83px;height: 59px;margin-top: 20px;">
			</div>
		</div>
		<div>
		</div>
	</section>