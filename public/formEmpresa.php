<?php
echo '
<form action="" method="post">
<div class="mb-3">
    <label class="form-label">Nombre de la empresa:</label>
    <input type="text" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">Sector de la empresa:</label>
    <input type="text" class="form-control">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
    <label class="form-label">Ubicacion de la empresa:</label>
    <input type="text" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">Telefono de la empresa:</label>
    <input type="text" class="form-control">
    <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

';
?>