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
			<h2>Change Footer Text</h2>
			<form method="post">
				<table class="tbl1">
					<tr>
						<td>Footer Text</td>
						
					</tr>
					<tr>
						<td><input class="long" type="text" name="" value="Copyright 2015. Nazmul Hossain "></td>
						
					</tr>
					<tr>
						<td><input type="submit" value="SAVE"></td>
						
					</tr>
				</table>
			</form>

<?php 
include('footer.php');
?>
		