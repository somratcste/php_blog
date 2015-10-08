</div>
<div id="sidebar">
    <div id="search">
		<input type="text" value="Search"> <a href="#"><img src="images/go.gif" alt="" width="26" height="26" /></a>	
	</div>
	<div class="list">
		<img src="images/title1.gif" alt="" width="186" height="36" />
		<ul>
			<?php
			    include ('config.php');
				$statement = $db->prepare("SELECT * FROM tbl_categories");
				$statement->execute();
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				foreach($result as $row) 
				{
					?>
					<li><a href="#"><?php echo $row['cat_name']; ?></a></li>
					<?php
				}
			?>
			
			
		</ul>
		<img src="images/title2.gif" alt="" width="180" height="34" />
		<ul>
			<li><a href="#">January</a></li>
			<li><a href="#">July</a></li>
			<li><a href="#">February</a></li>
			<li><a href="#">August</a></li>
			<li><a href="#">March</a></li>
			<li><a href="#">September</a></li>
			<li><a href="#">April</a></li>
			<li><a href="#">October</a></li>
			
		</ul>
	</div>
</div>
</div>
<div id="footer">
<p>
	<?php
	    include ('config.php');
		$statement = $db->prepare("SELECT * FROM tbl_footer WHERE id = 1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row) 
		{
			echo $row['description'];
		}
	?>
</p>																													
</div>
</body>
</html>
