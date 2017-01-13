<?php require APP_FILEPATH.'html_begin.php'; ?>
</head>
<body>
<form action="<?=APPPATH?>admin/process_login" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="log in">
</form>
</body>
