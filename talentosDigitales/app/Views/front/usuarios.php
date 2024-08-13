<div class="container mt-5">

    <div class="card col-12">

        <div class="card-header">
            <p> Lista de Usuarios</p>
            <td>
            <a href="<?= base_url('new') ?>" class="btn btn-success m-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
</svg> Agregar</a>
        </td>
        </div>

        <div class="table-responsive text-center"> 

        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col-12">N°</th>
            <th scope="col-12">Nombre</th>
            <th scope="col-12">Apellido</th>
            <th scope="col-12">E-Mail</th>
            <th scope="col-12">Nombre Usuario</th>
            <th scope="col-12">Editar</th>
            <th scope="col-12">Eliminar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($usuarios as $usuario): ?> 
            <tr>

            <th scope="row"> <?php echo $usuario['id']; ?> </th>
            <td class="p-1"><?php echo $usuario['nombre']; ?></td>
            <td class="p-1"><?php echo $usuario['apellido']; ?></td>
            <td class="p-1"><?php echo $usuario['email']; ?></td>
            <td class="p-1"><?php echo $usuario['usuario']; ?></td>
            
            <td class="p-1"><a href="<?= base_url('UsuariosController/'.$usuario['id'].'/edit'); ?>" class="btn btn-warning m-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a></td>
            <td class="p-1"><a href="<?= base_url('UsuariosController/delete/'.$usuario['id']); ?>" class="btn btn-danger m-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a></td>
            

        </tr>
            
            <?php endforeach; ?>
        </tbody>
        </table>

        <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="eliminaModalLabel">Aviso</h1>
                        <button type="botton" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Desea eliminar este usuario?</p>
                    </div>
                    <div class="modal-footer">
                        <form id="form-elimina" method="post" action="">
                            <input type="hidden" name="_method" value="delete">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
