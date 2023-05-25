<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form method="post">
        Nombre:
        <input type=" text" name="nombre" /><br />
        Correo:
        <input type="email" name="email" /><br />
        Edad:
        <input type="number" name="edad" /><br />
        <input type="submit" value="Enviar Mis Datos" />
    </form>
    <br />
    Tu nombre es:
    <?php echo $_POST["nombre"] ?? "invitado" ; ?>
    <br />

    Tu edad es:
    <?php echo $_POST["edad"]  ?? ""; ?>
    <br />

    Tu email es:
    <?php echo $_POST["email"]  ?? ""; ?>
</body>

</html>