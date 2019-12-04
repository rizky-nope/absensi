<html>
	<head>
		<title>Login System</title>
	</head>
	<body>
		<form action="" method="post">
		<table align="center" position="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="txt_user" placeholder="admin"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="txt_pass" placeholder="admin"></td>
			</tr>
			<tr>
				<td><a href="<?php echo site_url('application/controllers/Reg'); ?>"class="btn btn-info" >>Registrasi</a></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="btn_login" value="Login">
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>