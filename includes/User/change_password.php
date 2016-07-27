
	<?php
		require_once('_func/myfunctions.php');


	if ( !logged())	{
			header('Location: home_page.php'); //in case there is allready a user logged redirect to home
	}	else	{

		if (isset($_POST['changepass'])) {

			if ($_POST['password']==$_POST['password2']) {	

			$changepassdata = array($_SESSION['user_id'],trim($_POST['password']));
			require_once ('_func/db_connect.php');
			
			change_password($changepassdata);	
			echo "Ο κωδικός άλλαξε με επιτυχία!";

		}	else	{
				echo "Οι κωδικοί δεν είναι οι ίδιοι";
		}

	}	else {	


	?>
	
	<div id="forms" >

		<form name="myForm" method="post" action="change_password_page.php">
			</br>	
			<span class="main_titles">Αλλαγή κωδικού</span> </br> </br>	
	
			<div class="line_height">

			Εισάγετε τον κωδικό:</br> <input type="password" name="password" pattern="^[a-zA-ZαβγδεζηθικλμνξοπρστυφχψωςάέήίύόώΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩ0-9 ]{5,30}$" required>	</br>
			Εισάγετε ξανά:</br> <input type="password" name="password2" pattern="^[a-zA-ZαβγδεζηθικλμνξοπρστυφχψωςάέήίύόώΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩ0-9 ]{5,30}$" required>	</br></br>

			</div>
			<input type="submit" name="submit" class="transition" value="Αλλαγή κωδικού"/>
			<input type="hidden" name="changepass" value="TRUE"/></br></br>
		</form>
 	</div>

	<?php
 		 	}
		}
	?>


