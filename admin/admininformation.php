<?php
    include "db/db.php";
	include "db/session.php";
	include "db/functions.php";
	login_restricted();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Contact Information</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"><span>Waffle City</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								
							</a>
							
						</li>
						<!-- start: Notifications Dropdown -->
						
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						
						<!-- end: Message Dropdown -->
						
						<!-- start: User Dropdown -->
						<?php include"asset/profile.php"?>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php include "asset/menu.php"?>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Information</a></li>
			</ul>

			<div class="row-fluid sortable">		
				
			<!-- Content start -->
            <?php
				echo error_signal();
				echo success_signal();
			?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Contact Information Adding</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    <?php
						if (isset($_POST['submit'])) {

							$restnt = $_POST['name'];
                            $road   = $_POST['Rname'];
                            $area   = $_POST['arname'];
                            $country= $_POST['Cname'];
                            $callTx = $_POST['callText'];
                            $callNm = $_POST['callNumber'];
                            $mailTx = $_POST['emailText'];
                            $mailAdr= $_POST['emailAddr'];

							
							$info = "UPDATE contact_information SET restName='$restnt', road='$road',area='$area', country='$country',callText='$callTx', callNumber='$callNm',emailText='$mailTx', emailAdd='$mailAdr' ";
							$getInfo    = $db->query($info);
							if($getInfo==true){
								$_SESSION['success_signal']="Successfully Updated";
                                echo "<script>window.open('admininformation.php','_self')</script>";
							}else{
								$_SESSION['error_signal']="Wrong! try again";
							}
						}
					?>
                    <?php
						$sql = "SELECT * FROM contact_information";
						$stmt= $db->query($sql);
						while ($row = $stmt->fetch()) {
							
						?>
						<form class="form-horizontal" action="" method="post">
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Restaurant Name: </label>
							  <div class="controls">
								<input type="text" name="name" class="span6 typeahead"  value="<?php echo $row['restName']?>" >
							  </div>
							</div>

                            <div class="control-group">
							  <label class="control-label" for="typeahead">Road Name: </label>
							  <div class="controls">
								<input type="text" name="Rname" class="span6 typeahead"  value="<?php echo $row['road']?>" >
							  </div>
							</div>

                            <div class="control-group">
							  <label class="control-label" for="typeahead">Area Name: </label>
							  <div class="controls">
								<input type="text" name="arname" class="span6 typeahead"  value="<?php echo $row['area']?>" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead"> Country: </label>
							  <div class="controls">
								<input type="text" name="Cname" class="span6 typeahead"  value="<?php echo $row['country']?>" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead"> Call Us: </label>
							  <div class="controls">
								<input type="text" name="callText" class="span6 typeahead"  value="<?php echo $row['callText']?>" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead"> Call Number: </label>
							  <div class="controls">
								<input type="text" name="callNumber" class="span6 typeahead"  value="<?php echo $row['callNumber']?>" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">  E-mail Us: </label>
							  <div class="controls">
								<input type="text" name="emailText" class="span6 typeahead"  value="<?php echo $row['emailText']?>" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">  E-mail Address: </label>
							  <div class="controls">
								<input type="text" name="emailAddr" class="span6 typeahead"  value="<?php echo $row['emailAdd']?>" >
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
							</div>
						  </fieldset>
						</form>
                        <?php } ?>

					</div>
				</div><!--/span-->

			</div><!--/row-->
			<!-- Content end -->

			</div><!--/row-->

			
			
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<?php include "asset/footer.php"?>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
