

   <div class="container">
      <div class="header clearfix">
         <h1 class="myhead">GetItFixed</h1>

         <div class="nav">
            <input type="checkbox" id="toggle" />
            
            <div>
               <label for="toggle" class="toggle" data-open="Menu" data-close="Close Menu" onclick></label>
               
               <ul class="menu">
                  <li><a href="home_admin_page.php"><b>Αρχική</b></a></li>
                  <li><a href="view_users_page.php">Χρήστες</a></li>
                  
                  
                  <li><a href="view_categories_page.php">Κατηγορίες</a></li>
                  <li><a href="view_reports_page.php">Αναφορές</a></li>
                  <li><?php echo "<a href='edit_this_admin_page.php' id='iflogged' >".$_SESSION['admin_username']."</a>"; ?></li>
                  <li><a href="includes/logout.php" id="logout" >Αποσύνδεση</a></li>
                  



               </ul>
            </div>
         </div><!-- End of Navigation -->

      </div><!-- End of Header --> 

   </div><!-- End of Container -->
