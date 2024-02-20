<?php
echo '
<form action="../php/postEmpresa.php" method="post">
<div class="mb-3">
    <label class="form-label">Nombre de la empresa:</label>
    <input name="nombreempresa" type="text" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">Sector de la empresa:</label>
    <input name="sector" type="text" class="form-control">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input name="correo" type="text" class="form-control" >
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input name="password" type="password" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">Ubicacion de la empresa:</label>
    <input name="ubicacion" type="text" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">Telefono de la empresa:</label>
    <input name="telefono" type="text" class="form-control">
    <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

';
?>