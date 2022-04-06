<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
    $nombre=$_POST["nombre"];
    if(isset($_POST["nom"])){
        $nom=$_POST["nom"];
    }
    if(isset($_POST["apell"])){
        $apell=$_POST["apell"];
    }
    if(isset($_POST["dni"])){
        $dni=$_POST["dni"];
    }
    if(isset($_POST["email"])){
        $email=$_POST["email"];
    }
    if(isset($_POST["tel"])){
        $tel=$_POST["tel"];
    }
    ?>
    <div>
        <h2>Formulario</h2>
        <form action="resum.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nom" value=<?php echo $nombre?>/>
            <label for="apell">Apellidos:</label>
            <input type="text" name="apell"/>
            <label for="dni">NIF:</label>
            <input type="text" name="dni"/>
            <label for="pobl">Población:</label>
            <input type="text" name="pobl"/>
            <label for="data">Fecha de Nacimiento:</label>
            <input type="text" name="data"/>
            <label for="email">Email:</label>
            <input type="text" name="email"/>
            <label for="tel">Teléfono:</label>
            <input type="text" name="tel"/>
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
            <input type="submit" value="Siguiente" name="siguiente"/>
            </form>
            <form name="cancel" action="index.php" method ="post">
                <input type="submit" value="Cancelar" name="cancel"/>
            </form>
    </div>
</body>
</html>