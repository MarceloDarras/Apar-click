<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio sesión</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/inicio_sesion-style.css">
</head>
<body background="img/maps.png">
	<main>
		<form action="" class="formulario" id="formulario">

			<h1 class="formulario__titulo">¡Hola de nuevo!</h1>
            <h3 class="formulario__subtitulo">Nos alegramos mucho de verte</h3>

			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo">
				</div>
			</div>

			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" id="password">
				</div>
			</div>

            <div class="formulario__olvido" >
				<a class="grupo__olvido" href="iniciar-sesion.html">¿Has olvidado la contraseña?</a>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Registro</button>
                <?php

                    
                
                ?>
			</div>


			<div>
				<p class="formulario__necesitas">¿Necesitas una cuenta?<a class="formulario__nuevo" href="registro.php"> Registrarse</a></p>
			</div>
		</form>
	</main>

	<script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>