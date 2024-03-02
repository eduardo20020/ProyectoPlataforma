<form action="../php/postPasante.php" method="post">
    <div class="mb-3">
        <label class="form-label">Usuario:</label>
        <input type="text" class="form-control" name="usuario" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Correo:</label>
        <input type="email" class="form-control" name="correo" required>
    </div>    
    <div class="mb-3">
        <label class="form-label">Password:</label>
        <input type="password" class="form-control" name="password" required>
    </div>    
    <div class="mb-3">
        <label class="form-label">Nombre (s):</label>
        <input type="text" class="form-control" name="nombres" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Apellidos:</label>
        <input type="text" class="form-control" name="apellidos" required>
    </div>    
    <div class="mb-3">
        <label class="form-label">Telefono:</label>
        <input type="text" class="form-control" name="telefono" required>
    </div>    
    <div class="mb-3">
        <label class="form-label">Carrera:</label>
        <input type="text" class="form-control" name="carrera" required>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
