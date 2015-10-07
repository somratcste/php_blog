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

			<h2>View All Posts</h2>
			<table class="tbl2" width="100%">
				<tr>
					<th width="5%">S.No.</th>
					<th width="70%">Title</th>
					<th width="25%">Action</th>
				</tr>
				<tr>
					<td>01.</td>
					<td>Computer </td>
					<td>
						<a class="fancybox" href="#inline">view</a>
						<div id="inline" style="width:700px;display: none;">
							<h3 style="border-bottom:2px solid blue; margin-top:10px;">Edit Data</h3>
							<p>
								<form action="" method="post">
								<table>
									<tr>
										<td><b>Title Name</b></td>
									</tr>
									<tr>
										<td>Original Wordpress Theme</td>
									</tr>
									<tr>
										<td><b>Description</b></td>
									</tr>
									<tr>
										<td><p>Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . Put it on description . </p></td>
									</tr>
									<tr>
										<td><b>Featured Image</b></td>
									</tr>
									<tr>
										<td><img src="" alt=""></td>
									</tr>
									<tr>
										<td><b>Tag Name</b></td>
									</tr>
									<tr>
										<td>Computer, Technology, Bangladesh</td>
									</tr>
									<tr>
										<td><input type="submit" value="UPDATE" name="form2"></td>
									</tr>
								</table>
								</form>
							</p>
						</div>
						&nbsp;|&nbsp;
						<a href="post-edit.php">Edit</a>
						&nbsp;|&nbsp;
							<a onclick='return confirmDelete();' href="">Delete</a>
				</td>
				</tr>
				
				
			</table>

<?php 
include('footer.php');
?>
		