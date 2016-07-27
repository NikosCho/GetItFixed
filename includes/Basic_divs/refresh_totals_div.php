<div id="centralized">




	<?php 
		require_once ('../../_func/db_connect.php');
		require_once('../../_func/home_functions.php'); 
	?>
	


	Σύνολο Αναφορών:<?php echo "<span id='totals_div_css_data'><b>".total_reports()."</b></span>"; ?>
	Άλυτες:<?php echo "<span id='totals_div_css_data_none'><b>".total_none_reports()."</b></span>"; ?>
	Επιλυμένες:<?php echo "<span id='totals_div_css_data_fixed'><b>".total_fixed_reports()."</b></span>"; ?>
	Διεγραμμένες:<?php echo "<span id='totals_div_css_data_deleted'><b>".total_deleted_reports()."</b></span>"; ?>
	Εγγεγραμμένα Μέλη:<?php echo "<span id='totals_div_css_data'><b>".total_users()."</b></span>"; ?>
	Μέσος χρόνος επίλυσης:<?php echo "<span id='totals_div_css_data'><b>".average_time_to_get_fixed()."</b></span>"; ?>

</div>
	

	
