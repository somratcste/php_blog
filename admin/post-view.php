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
include("../config.php");
?>

			<h2>View All Posts</h2>
			<table class="tbl2" width="100%">
				<tr>
					<th width="5%">S.No.</th>
					<th width="70%">Title</th>
					<th width="25%">Action</th>
				</tr>
				
				<?php
				$i=0;
				$statement = $db->prepare("SELECT * FROM tbl_posts ORDER BY post_id DESC");
				$statement->execute();
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				foreach($result as $row)
				{
					$i++;
				?>
					<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['post_title']; ?></td>
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
										<td><?php echo $row['post_title']; ?></td>
									</tr>
									<tr>
										<td><b>Description</b></td>
									</tr>
									<tr>
										<td><?php echo $row['post_description']; ?></td>
									</tr>
									<tr>
										<td><b>Featured Image</b></td>
									</tr>
									<tr>
										<td><img src="../uploads/<?php echo $row['post_image']; ?>" alt=""></td>
									</tr>
									<tr>
										<td><b>Category Name</b></td>
									</tr>
									<tr>
										<td>
											<?php
											$statement1 = $db->prepare("SELECT * FROM tbl_categories WHERE cat_id=?");
											$statement1->execute(array($row['cat_id']));
											$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
											foreach($result1 as $row1)
											{
												echo $row1['cat_name'];
											}
											?>
										</td>
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
				<?php

				}
				
				?>
				
			</table>

<?php 
include('footer.php');
?>
		