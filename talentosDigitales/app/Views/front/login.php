
<!--          Registro de usuario  -->

<div class="container mt-5" style="width: 50% ;">
        <div class="row">
        <div class="col text-white">

            <?php if(session()->getFlashdata('error') !== null){ ?>

            <div class="alert alert-danger">
                <?= session()->getFlashdata('error');?>

            </div>
            <?php } ?>

            <form action="login.php" method="post">

            <div class="mb-3">
                <label for="usuario" class="form-label">Crea tu nombre de usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario">
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

    