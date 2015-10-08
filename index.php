<?php include('header.php') ?>

<?php 
include ('config.php');
$statement = $db->prepare("SELECT * FROM tbl_posts ORDER BY post_id DESC");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row)
{
	?>

	<div class="post">
	<h2><?php echo $row['post_title']; ?></h2>
	<div><span class="date">Mar 18</span><span class="categories">in: Photos, Retro</span></div>
	<div class="description">
		<p><img src="uploads/<?php echo $row['post_image']; ?>" alt="" width="200" height="140" />
		<?php
			$pieces = explode(" ", $row['post_description']);
			$final_words = implode(" ", array_splice($pieces, 0, 200)); 
			$final_words = $final_words . "  .........";
			echo $final_words ;
		?>
	</div>
	<p class="comments">Comments - 17   <span>|</span>   <a href="index2.php?id=<?php echo $row['post_id'] ?>">Continue Reading</a></p>
	</div>

	<?php
}

?>

<?php include('footer.php') ?>