<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Admin giriş ekranı</h1>
	<form action="<?php echo base_url("admin/login_post")?>" method="post">
		<input type="text" name="username" id="username" placeholder="Kullanıcı adı" required>
		<input type="password" name="password" id="password" placeholder="Şifre" required>
		<input type="submit" value="Gönder">
	</form>
	<?php echo base64_encode("berat")?>
	<?php echo $this->session->userdata("username")?>
</body>
</html>