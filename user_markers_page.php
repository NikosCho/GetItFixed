<?php include('includes/initialize.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to GetItFixed</title>
		<link rel="shortcut icon" href="img//getitfixed.ico">
		<meta charset="utf-8" />
		<link href='http://fonts.googleapis.com/css?family=Orbitron|Audiowide|Black+Ops+One' rel='stylesheet' type='text/css'>

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?AIzaSyAoA7iExx0zK60WO1H9tA7YhGyH3CZrQOc=API_KEY"></script>
		
		<link rel="stylesheet" href="_css/view_this_report_page_css.css" type="text/css" />
		<link rel="stylesheet" href="_css/home_admin_page_css.css" type="text/css" />

		<script src="_js/jquery-2.1.1.min.js"></script>

	</head>

	<body>
		<div id="wrapper">

			<div id="header">
				<?php 
					if( isset($_SESSION['admin_status']) ) {
							include('includes/nav_bars/nav_bar_admin.php');
					} else {

						include('includes/nav_bars/nav_bar.php');
					}
				?>
			</div>
		
			<div id="content">

				<div id="centralized">
					Ακολουθούν οι αναφορές από τον χρήστη
					<!-- ENTER SOME TEXT-->
				</div>


				<?php 
					$reptoview_id=$_GET['id']; 
					$reptoview ="_xml/certain_user_markers.php?id=$reptoview_id";				
				?>
				
				<script type="text/javascript">
				    var myVariable = <?php echo(json_encode($reptoview)); ?>;
					var markersfile = myVariable;
				</script>



				<div id="googleMap_div_top"></div>
					<?php 
						include('includes/Gmaps/gmap_certain_user.html') 
					?> 
				<div id="googleMap_div_bottom"></div>
			

			</div>
			
			<div id="footer">
				<?php
					include('/includes/Basic_divs/footer.html');
				?>
			</div>

		</div>
	</body>
</html>