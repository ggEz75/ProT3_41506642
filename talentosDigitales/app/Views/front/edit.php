

<div class="container mt-5">
        <div class="row">
          <div class="$usuario text-white">

            <form action="<?= base_url('UsuariosController/'.$usuario['id']); ?>" method="post">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="usuario_id" value="<?= $usuario['id']; ?>">
              

              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $usuario['nombre']; ?>" >
              </div>

              <div class="mb-3">
                <label for="apellido" class="form-label">Apellido/s</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value="<?= $usuario['apellido']; ?>" >
              </div>

              <div class="mb-3">
                <label for="usuario" class="form-label">Crea tu nombre de usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" value="<?= $usuario['usuario']; ?>" >
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Introduce tu correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $usuario['email']; ?>" >
              </div>

              <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="pass">
              </div>
              
              <button type="submit" class="btn btn-outline-light m-1">Enviar</button>
            </form>

          </div>
        </div>
      </div>







      