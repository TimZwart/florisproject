<!DOCTYPE HTML>	
<html>
<head>
	<title><?=CONST_BLOGTITLE?></title>
	<link rel="stylesheet" "css/overview.css">
</head>
</body>
<?php foreach($data as $result): ?> 
	<div class="blogpost_shortened">
		<div class="blogpost_content">
			<h2><?=xss_clean($result['title'])?></h2>
			<?=xss_clean($result['text'])?>	
		</div>
		<a href="posts/post/<?=$result['id']?>">lees verder</a>
	</div>
<?php	endforeach; ?>
</body>
</html>
