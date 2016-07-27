
	<?php
		require_once('_func/myfunctions.php');

		if ( logged())	{
			header('Location: home_page.php');
		} else	{	
			if (isset($_POST['newsubmission']))	{
				
				if ($_POST['password']==$_POST['password2']) {	
					$registerdata = array(trim($_POST['fname']),trim($_POST['lname']),trim($_POST['email']),trim($_POST['password']));
					
					require_once ('_func/db_connect.php');

				
					switch(email_check($registerdata[2])) {
						case '0':
							create_user($registerdata);
							echo "Εισαγωγή καινούριου χρήστη.<hr/> Καλώς ορίσατε! ".$registerdata[0];
							break;
						case '1':
							echo "Το παρών email υπάρχει ήδη!";
							break;
						}
				}	else	{
					echo "Οι κωδικοί δεν είναι οι ίδιοι!";
				}
			}	else 	{
	?>
	
	<div id="forms" >
  	
		
		<form name="myForm" method="post" action="register_page.php">
	
			</br> <span class="main_titles">Εγγραφή</span> </br> </br>	
			
			<div class="line_height">
			Όνομα:</br> <input type="text" name="fname" placeholder="Εισάγετε όνομα" pattern="^[aa-zA-ZαβγδεζηθικλμνξοπρστυφχψωςάέήίύόώΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩ]{2,30}$" required>	</br> 
			Επίθετο:</br> <input type="text" name="lname" placeholder="Εισάγετε επίθετο" pattern="^[a-zA-ZαβγδεζηθικλμνξοπρστυφχψωςάέήίύόώΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩ]{2,30}$" required>	</br> 
			Email:</br> <input type="text" name="email" placeholder="Εισάγετε email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>	</br>
			Κωδικός (τουλάχιστον 5 χαρακτήρες):</br> <input type="password" name="password" placeholder="Εισάγετε κωδικό"  pattern="^[a-zA-Z0-9]{5,30}$" required>	</br>
			Επαναλάβετε τον κωδικό:</br> <input type="password" name="password2" placeholder="Εισάγετε κωδικό"  pattern="^[a-zA-Z0-9]{5,30}$" required>	</br></br>
			</div>

			<input type="submit" name="newsubmission" class="transition" value="Εγγραφή"/>
			<!--<input type="hidden" name="newsubmission" value="TRUE"/></br></br>-->
		</form>
 	</div>

	<?php
 		 	}
		}
	?>


