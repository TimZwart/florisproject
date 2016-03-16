<html>
<head>
<title><?=CONST_BLOGTITLE?></title>
</head>
<body>
<div class="text">
<h1><?=$data['post']['title']?></h1>
<?=xss_clean($data['post']['text']);?>
</div>
<div class="comments">
<?php foreach($data['comments'] as $comment): ?>
	<div class="comment">
		<?=xss_clean($comment['text'])?>
	</div>
<?php endforeach; ?>
<form id='comment_form' action="posts/process_comment">
	<input type='text' name="comment_text">
	<input type='submit' value="comment">
</form>
</div>
<div 
</body>
</html>
