<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<h1>Login</h1>
<form method="post">
<label>
Email:
<input type="email" name="email" value="<?= (isset($email)) ? $email: "" ?>"/>
</label>
<label>
Password:
<input type="password" name="password" />
</label>
<input type="submit" value="login" />
<input type="button" value="sign up">
</form>

</body>
</html>