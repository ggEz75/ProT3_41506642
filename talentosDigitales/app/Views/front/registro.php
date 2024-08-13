
<div class="container m-auto text-white">
        <div class="row fw-medium mt-5">
          <div class="col">

            <ul class="liCaracteristicas"> 
              <li>
                <svg class="bi m-1" width="32" height="32" fill="currentColor">
                  <use xlink:href="icons/bootstrap-icons.svg#check2-circle"/>
                </svg>Beta.1.0 Disponible
                </li>
              <li>
                <svg class="bi m-1" width="32" height="32" fill="currentColor">
                  <use xlink:href="icons/bootstrap-icons.svg#check2-circle"/>
                </svg>Soporte tecico.
                </li>
              <li>
                <svg class="bi m-1" width="32" height="32" fill="currentColor">
                  <use xlink:href="icons/bootstrap-icons.svg#check2-circle"/>
                </svg> 100% Gratuito.
              </li>
              <li>
                <svg class="bi m-1" width="32" height="32" fill="currentColor">
                  <use xlink:href="icons/bootstrap-icons.svg#check2-circle"/>
                </svg>Foro activos para consultas.
              </li>
          </ul>
          </div>
  
          <div class="col">
            <p class="bg-secondary p-2 text-white bg-opacity-25">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque iusto exercitationem iure blanditiis, autem, commodi illo adipisci, beatae ipsam sapiente fuga incidunt! Asperiores nesciunt voluptatibus repellat architecto velit? Minus, cum! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum omnis id tempore delectus dicta ab, distinctio quisquam exercitationem hic, et consequuntur aliquam deleniti accusamus quibusdam, est veniam eos sit! Doloremque.</p>
          </div>
  
        </div>
      </div>
  

<!--          Registro de usuario  -->

      <div class="container mt-5" style="width: 50% ;">
        <div class="row">
          <div class="col text-white">

            <?php if(session()->getFlashdata('error') !== null){ ?>

              <div class="alert alert-danger">
                <?= session()->getFlashdata('error');?>

              </div>
              <?php } ?>

            <form action="<?= base_url('UsuariosController'); ?>" method="post">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="inputText" placeholder="Ej: Lionel Andrés">
              </div>

              <div class="mb-3">
                <label for="apellido" class="form-label">Apellido/s</label>
                <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="inputText" placeholder="Ej: Messi">
              </div>

              <div class="mb-3">
                <label for="usuario" class="form-label">Crea tu nombre de usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Introduce tu correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ej: lioMessi_10@AFA.com">
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