<?php

include_once '/xampp/htdocs/Citas/Resources/templates/header.php';

?>
        <div class="container mb-3 col-4" >
            <h2>Registro de Pacientes</h2>
            <form method="post" action="../../Controllers/PacienteController.php">
                <!--PacIdentificacion, PacNombres, PacApellidos, PacFechaNacimiento, 
                PacSexo, PacUsuario, PacClave-->
                <div class="mb-3">
                    <label for="pacIdentificacion" class="form-label">Identificacion</label>
                    <input type="text" class="form-control" id="pacIdentificacion" name="pacIdentificacion" required>
                </div>
                <div class="mb-3">
                    <label for="pacNombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="pacNombres" name="pacNombres" required>
                </div>
                <div class="mb-3">
                    <label for="pacApellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="pacApellidos" name="pacApellidos" required>
                </div>
                <div class="mb-3">
                    <label for="pacFechaNacimiento" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="pacFechaNacimiento" name="pacFechaNacimiento" required>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pacSexo" id="rdbFemenino" value="F" checked>
                        <label class="form-check-label" for="rdbFemenino">
                            Femenino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pacSexo" value="M" id="rdbMasculino">
                        <label class="form-check-label" for="rdbMasculino">
                            Masculino
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="pacUsuario" required>
                </div>    
                <div class="mb-3">
                    <label for="clave" class="form-label">Clave</label>
                    <input type="password" class="form-control" id="clave" name="pacClave" required>
                </div>
                <input type="submit" value="Adicionar" name="accion" class="btn btn-success" />
                <a href="lista.php" class="btn btn-warning" >Cancelar</a>
            </form>
        </div>

<?php include_once '/xampp/htdocs/Citas/Resources/templates/footer.php'; ?>