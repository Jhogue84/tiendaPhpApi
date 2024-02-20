<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="Resources/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mb-3 col-4" >
            <h1>Formulario para subir foto</h1>
            <h2>Inicio de Sesion</h2>
        
        <form  action="imgSubir.php" method="post" enctype="multipart/form-data">
            <label for="imgCampo">Selecciona una imagen/archivo:</label>
             <input id="imgCampo" name="imgCampo" type="file">
             <button type="submit">Cargar</button>
         </form>
        </div>
    </body>
</html>
