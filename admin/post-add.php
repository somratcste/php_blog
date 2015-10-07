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
			<h2>Add New Post</h2>
			<form method="post">
				<table class="tbl1">
					<tr><td>Post Title</td></tr>
				    <tr><td><input class="long" type="text" name="" ></td></tr>
				    <tr><td>Post Description</td></tr>
				    <tr>
					    <td>
					    	<textarea name="post_description" cols="30" rows="10"></textarea>
							<script type="text/javascript">
								if ( typeof CKEDITOR == 'undefined' )
								{
									document.write(
										'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
										'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
										'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
										'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
										'value (line 32).' ) ;
								}
								else
								{
									var editor = CKEDITOR.replace( 'post_description' );
									//editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );
								}

							</script>
					    </td>
				    </tr>
				    <tr><td>Image</td></tr>
				    <tr><td><input type="file" name="" ></td></tr>
				    <tr><td>Select A Category</td></tr>
				    <tr>
				    	<td>
				    		<select name="">
				    			<option value="">Computer</option>
				    			<option value="">Technology</option>
				    			<option value="">EEE</option>
				    		</select>
				    	</td>
				    </tr> 
				    <tr><td>Select A Tag</td></tr>
				    <tr>
				    	<td>
				    		<input type="checkbox" name="">&nbsp;Computer <br>
				    		<input type="checkbox" name="">&nbsp;Technology <br>
				    		<input type="checkbox" name="">&nbsp;EEE <br>
				    	</td>
				    </tr> 
					<tr><td><input type="submit" value="SAVE"></td></tr>
				</table>
			</form>


<?php 
include('footer.php');
?>
		