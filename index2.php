<?php include('header.php') ?>
<?php

if(!isset($_REQUEST['id'])) {
	header("location: index.php");
}
else {
	$id = $_REQUEST['id'];
}

?>

<?php 
include ('config.php');
$statement = $db->prepare("SELECT * FROM tbl_posts WHERE post_id = ?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row)
{
?>

<div class="post">
	<h2><?php echo $row['post_title']; ?></h2>
	<div><span class="date">Mar 18th</span><span class="categories">in: Photos, Retro</span></div>
	<div class="description">
		<p><img src="uploads/<?php echo $row['post_image']; ?>" alt="" width="200" height="140" />
		<?php echo $row['post_description']; ?></p>
	</div>
</div>

<?php
}
?>



<div id="comments">
	<img src="images/title3.gif" alt="" width="216" height="39" /><br />									
	<div class="comment">
		<div class="avatar">
			<img src="images/avatar1.jpg" alt="" width="80" height="80" /><br />
			<span>Name User</span><br />
			April 15th
		</div>
		<p>Lorem ipsum dolor sit amet, consectetuer adipi scing elit.Mauris urna urna, varius et, interdum a, tincidunt quis, libero. Aenean sit amturpis. Maecenas hendrerit, massa ac laoreet iaculipede mnisl ullamcorpermassa, cosectetuer feipsum eget pede. Donec nonummy, tellus er sodales enim, in tincidunmauris in odio. </p>
	</div>
	<div class="comment">
		<div class="avatar">
			<img src="images/avatar2.gif" alt="" width="80" height="80" /><br />
			<span>Name User</span><br />
			April 12th
		</div>
		<p>Lorem ipsum dolor sit amet, consectetuer adipi scing elit.Mauris urna urna, varius et, interdum a, tincidunt quis, libero. </p>
	</div>
	<div id="add">
		<img src="images/title4.gif" alt="" width="216" height="47" class="title" /><br />
		<div class="avatar">
			<img src="images/avatar2.gif" alt="" width="80" height="80" /><br />
			<span>Name User</span><br />
			April 12th
		</div>
		<div class="form">
			<form action="#">
				<textarea>Your Message...</textarea><br />
				<input type="text" value="Name" /><br />
				<input type="text" value="E-mail" /><br />
				<input type="text" value="URL (Optional)" /><br />
				<a href="#"><img src="images/button.gif" alt="" width="94" height="27" /></a>
			</form>
		</div>
	</div>
</div>
<?php include('footer.php') ?>