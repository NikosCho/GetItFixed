<?php require_once('_func/myfunctions.php'); 

	if ( logged() || isset($_SESSION['admin_status']))	{
		header('Location: home_page.php'); //in case there is allready a user logged redirect to home
	}	else	{

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			$logindata = array($_POST["email"],$_POST["password"]);
			
			require_once ('_func/db_connect.php');
			
			if( if_admin($logindata) ) {
				 admin_login($logindata);
			}	else {

				switch(login_check($logindata)) {
					case '0':
						echo "Δώσατε λάθος στοιχεία!";
						break;
					case '1':
						$usertologin = user_who_data($logindata[0]);
						login($usertologin);
					case '2':
						header('Location:home_admin_page.php');
						break;
				}
			}
			
		}	else	{	
		
?>

<div id="forms" >
	<form name="myForm" method="post" action="">

		</br> <span class="main_titles">Σύνδεση</span> </br> </br>	
		<div class="line_height">
		Email:</br> <input type="text" name="email" placeholder="Εισάγετε email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>	</br>
		Κωδικός:</br> <input type="password" name="password" placeholder="Εισάγετε κωδικό" pattern="^[a-zA-Z0-9]{5,30}$" required>	</br></br>
		<input type="submit" name="newsubmission" value="Σύνδεση"> </br></br>
		</div>
	</form>

</br>
Δεν είστε ακόμα μέλος? <a href="register_page.php" class="a_links_css">Εγγραφείτε! </a>

</div>

<?php
		}	 
	}

?>


