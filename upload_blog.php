<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
		
		<div class = "blog_only">
		<form action="include/upload_blog_action.php" method="POST">
			<textarea cols="100" rows="2" style="resize: none;" name="blog_title" placeholder=" blog-title..." required></textarea>
			<br><br>
			<div id="editor" class="editorClass" style="width: 90%;margin-left: 80px;">
				<textarea name="blog_text" rows="5" cols="20" placeholder="Start writing here..."></textarea>
			</div>
			<br><br>
			<button style="margin-left: 150px;font-size: 20px;" name="submit">Insert</button>
		</form>
		</div>
					<script>
                        CKEDITOR.replace( 'blog_text' );        
						CKEDITOR.resize( '100%', '350', true )
						//CKEDITOR.config.height = '100%';   // CSS unit (percent).
						CKEDITOR.config.resize_enabled = false; 
					</script>

</body>
</html>