<?php
		session_start();
		if(!empty($_SESSION['message']) && isset($_SESSION['message'])){
				$message = $_SESSION['message'];
				unset($_SESSION['message']);
		}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
		<h3>
			<?php
				if(!empty($message)){
					echo $message;
				}
			?>
		</h3>
    <form action="login.php" method="post">
        <input type="text" name="username" id="username" placeholder="Usuario">
        <input type="password" name="password" id="password" placeholder="Contraseña">

				<button type="submit">Ingresar</button>
    </form>

</body>
</html>
