<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-request</title>

    <style>
      main {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			align-items: center;
			margin-top: 20vh;
			height: 60vh;
		}
		form{
	width:300px;
	padding:16px;
	border-radius:10px;
	margin:auto;
	background-color:#ccc;
            }
            form label{
	width:72px;
	font-weight:bold;
	display:inline-block;
}
		form input[type="submit"] {
	width:180px;
	padding:3px 10px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;
	margin:8px 0;
	display:inline-block;
}
        input {
			padding: 20px;
			border-radius: 10px;
			border: 5px solid #1289A7;
			outline: none;
			color: #ED4C67;
			background-color: #82ccdd;
		}
    </style>
</head>
<body>
    <?php
    if(isset($_POST["nombre"])){
        $nombre=$_POST["nombre"];
    }
    ?>
    <main id="contenedor">
		<div>
			<h2><label for="codigo">Introduce tu nombre</label></h2>
		</div>
        <div>
			
			<form name="seguir" action="form.php" method ="post">
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre"/>
                <input type="submit" value="Siguiente" name="siguiente"/>
            </form>
		</div>
</body>
</html>