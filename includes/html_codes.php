<?php
include("includes/connect.php");
include("header.php");
//header function
function headerstop()
{
	echo '
		<header id ="main_header">
			<div id= "rightAlign">
	';
	echo "
			</div>
		</header>
		<nav id = \"navMenu\">
	";
		navLinks();
	echo "
		</nav>
	";
}
// cool nav bar links
function navLinks()
{	if($_SESSION['user_type'] =="admin")
		{
			?>
				<ul>&nbsp <?php echo $_SESSION['username'];?>
                 <li><a href="account.php">Home</a></li>
				 <li><a href="reg_process.php">Students</a></li>
                 <li><a href="uploads.php">Uploads</a></li>
				 <li><a href="users.php">Users</a></li>
				 <li><a href="logout.php">Log out</a></li>
                </ul> 
			<?php	
		}
		else if($_SESSION['user_type'] =="bursar"){
			?>
			<ul>&nbsp <?php echo $_SESSION['username'];?>
                 <li><a href="account.php">Home</a></li>
				 <li><a href="payments.php">payments</a></li>
				 <li><a href="logout.php">Log out</a></li>
                </ul> 
			<?php
		}
		else if($_SESSION['user_type'] =="lecturer"){
			?>
			<ul>&nbsp <?php echo $_SESSION['username'];?>
                 <li><a href="account.php">Home</a></li>
				 <li><a href="payments.php">REGISTRATION</a></li>
				 <li><a href="logout.php">Log out</a></li>
                </ul> 
			<?php
		}
		else{
		?>
			<ul>&nbsp <?php echo $_SESSION['username'];?>
              <font color="#FF0000">PLEASE LOGIN TO ACCESS THE SYTEM: click</font> 
				 <li><a href="logout.php">LOGIN</a></li>
                </ul> 
			<?php
		}
}
//footer
function footer()
{

	echo"Copyright © 2015 ccsm All Rights Reserved ok.";
}
?>