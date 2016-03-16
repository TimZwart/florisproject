<?php require APP_FILEPATH."/html_begin.php";?>
</head>
<body>
<form action="<?=APPPATH?>posts/process_post" method="post">
<h2>title</h2>
<input name="title" type="title">
<h2>text</h2>
<input name="text" type="text">
<input type="submit" value="post toevoegen">
</form>
</body>
</html>
