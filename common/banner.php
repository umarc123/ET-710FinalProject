<!-- banner.php -->
<div id="logo"  style="background-color:white">
  <img src="images/mlpmslogo.png" alt="Nature's Source"
  width="608px" height="90px" />
</div>
<div id="Welcome"  style="background-color:white">
  <?php
  //Please make sure that you have called session_start()
  //at the beginning of the file that includes this script.
  $salutation = $_SESSION["salutation"];
  $customer_first_name = $_SESSION["customer_first_name"];
  $customer_middle_initial = $_SESSION["customer_middle_initial"];
  $customer_last_name = $_SESSION["customer_last_name"];
  $customer_id = $_SESSION["customer_id"];
          //include 'scripts/updateCart.php';

  $items = $_SESSION["productsInCart"];

  if ($_REQUEST['nodisplay'] != true)
  {
      if ($customer_id == "")
      {
          echo "<h5>Welcome!<br />";
          echo "It's ".date("l, F jS").".<br />";
          echo "Our time is ".date('g:ia').".</h5>";
          echo "<strong><a href = \"login.php\">Click here to log in</a></strong>";
      }
      else
      {
          echo "<h5>Welcome, " . $customer_first_name . "!<br />";
          echo  $salutation . " " .
          $customer_first_name . " " .
          $customer_middle_initial . " " .
          $customer_last_name . "<br/>";
          echo "It's ".date("l, F jS").".<br />";
		 
		 if ($items==1){
		  	echo "You have ".$items." title in your cart.<br />";
			}
			else
			{
			echo "You have ".$items." titles in your cart.<br />";
			}
			
          echo "Our time is ".date('g:ia').".</h5>";
          
          echo "<strong><a href = \"logout.php\">Click here to log out</a></strong>";
      }
  }
  ?>
</div>
