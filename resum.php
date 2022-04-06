<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
    <style>
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
form input[type="text"],[type="submit"] {
	width:180px;
	padding:3px 10px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;
	margin:8px 0;
	display:inline-block;
}
        h2{text-align: center;}
    </style>
</head>
<body>
    <?php
        $nombre=$_POST["nom"];
        $apell=$_POST["apell"];
        $dni=$_POST["dni"];
        $pobl=$_POST["pobl"];
        $data=$_POST["data"];
        $email=$_POST["email"];
        $tel=$_POST["tel"];
        
    ?>
        <h2>Resumen de tus datos</h2>
        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nom" value=<?php echo $nombre?>/>
            <label for="apell">Apellidos:</label>
            <input type="text" name="apell" value=<?php echo $apell?>/>
            <label for="dni">NIF:</label>
            <input type="text" name="dni"  value=<?php echo $dni?>/>
            <label for="pobl">Población:</label>
            <input type="text" name="pobl"  value=<?php echo $pobl?>/>
            <label for="data">Fecha de Nacimiento:</label>
            <input type="text" name="data"  value=<?php echo $data?>/>
            <label for="email">Email:</label>
            <input type="text" name="email"  value=<?php echo $email?>/>
            <label for="tel">Teléfono:</label>
            <input type="text" name="tel"  value=<?php echo $tel?>/>
            <label for="sex">Sexo:</label>
            <select name="opcion">
                <option value="man">Hombre</option>
                <option value="women">Mujer</option>
            </select> <br/>
            <label for="e civil">Estado Civil:</label>
            <select name="estado_civil">
                <option value="casado">Casado</option>
                <option value="soltero">Soltero</option>
                <option value="viudo">Viudo</option>
                <option value="separado">Separado</option>
                <option value="otros">Otros</option>
            </select><br/>
            </form>
        <form name="cancel" action="index.php" method ="post">
            <input type="submit" value="Cancelar" name="cancel"/>
        </form>
        <form name="seguir" action="resum.php" method ="post">
            <input type="submit" value="Siguiente" name="siguiente"/>
        </form>
</body>
</html>