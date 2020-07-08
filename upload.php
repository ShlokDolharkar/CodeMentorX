<!DOCTYPE html>
<html>
<head>
	<title>this is upload page</title>
	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>
<body>
	<form action="upload_blog.php" method="POST">
		<textarea cols="100" rows="2" style="resize: none;" name="blog_title" placeholder="Title here..."></textarea>
		<div id="editor" class="editorClass">
			<textarea name="blog_content" rows="5" cols="20" placeholder="Put your code snippet here..."></textarea>
			</div>
		<button style="margin-left: 150px;font-size: 20px;" name="submit">Insert</button>
	</form>
	<script>
                        CKEDITOR.replace( 'blog_content' );
                        CKEDITOR.config.width = 500;     // 500 pixels wide.
						CKEDITOR.config.height = '75%';   // CSS unit (percent).
						CKEDITOR.config.resize_enabled = false; 
                </script>

</body>
</html>