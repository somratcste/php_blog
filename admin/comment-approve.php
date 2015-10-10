<?php
ob_start();
session_start();
if($_SESSION['name']!='admin')
{
	header('location: login.php');
}
?>

<?php 
include('header.php');
include('../config.php');
?>

<?php

if(isset($_REQUEST['id'])) {
	
	try {
	
		$statement = $db->prepare("UPDATE tbl_comments SET active = 1 WHERE c_id=?");
		$statement->execute(array($_REQUEST['id']));
		
		$success_message = "Comment is Approved . Thank you.";
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
	
}
?>

<?php

if(isset($_REQUEST['cid'])) {
	
	try {
	
		$statement = $db->prepare("UPDATE tbl_comments SET active = 0 WHERE c_id=?");
		$statement->execute(array($_REQUEST['cid']));
		
		$success_message = "Comment is Unapproved . Thank you.";
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
	
}
?>


<h2>All Unapproved Comments</h2>
<?php
if(isset($error_message)) {echo "<div class='error'>".$error_message."</div>";}
if(isset($success_message)) {echo "<div class='success'>".$success_message."</div>";}
?>

<table class="tbl2" width="100%">
	<tr>
		<th width="">S.No.</th>
		<th width="">Name</th>
		<th width="">Email</th>
		<th width="">URL</th>
		<th width="">Message</th>
		<th width="">Post ID</th>
		<th width="">Active</th>
	</tr>
	
	<?php
	$i=0;
	$statement = $db->prepare("SELECT * FROM tbl_comments WHERE active = 0 ORDER BY c_id DESC");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
		$i++;
	?>
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['c_name']; ?></td>
		<td><?php echo $row['c_email']; ?></td>
		<td><?php echo $row['c_url']; ?></td>
		<td><?php echo $row['c_message']; ?></td>
		<td><?php echo $row['post_id']; ?></td>
		<td><a href="comment-approve.php?id=<?php echo $row['c_id']; ?>">Approved</td></a>

		</tr>
	<?php
	}	
	 ?>
</table>

  

<h2>All Approved Comments</h2>

<table class="tbl2" width="100%">
	<tr>
		<th width="">S.No.</th>
		<th width="">Name</th>
		<th width="">Email</th>
		<th width="">URL</th>
		<th width="">Message</th>
		<th width="">Post ID</th>
		<th width="">Active</th>
	</tr>
	
	<?php
	$i=0;
	$statement = $db->prepare("SELECT * FROM tbl_comments WHERE active = 1 ORDER BY c_id DESC");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
		$i++;
	?>
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['c_name']; ?></td>
		<td><?php echo $row['c_email']; ?></td>
		<td><?php echo $row['c_url']; ?></td>
		<td><?php echo $row['c_message']; ?></td>
		<td><?php echo $row['post_id']; ?></td>
		<td><a href="comment-approve.php?cid=<?php echo $row['c_id']; ?>">Unapproved</td></a>

		</tr>
	<?php
	}	
	 ?>
</table>

			

<?php 
include('footer.php');
?>
		