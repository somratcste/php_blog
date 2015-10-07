<?php
ob_start();
session_start();
if($_SESSION['name']!='admin')
{
	header('location: login.php');
}
?>
<?php
include ('header.php');
?>
			<h2>Welcome to the Admin Panel</h2>
			<div id="content_info">
				WELCOME TO THE DASHBOARD <br>
				SAMPLE BLOG WITH PHP
			</div>

<?php 
include('footer.php');
?>
		