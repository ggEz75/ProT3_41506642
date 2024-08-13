<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    
    public function index()
    {
        $data['titulo'] = 'Página principal';
        echo view('/front/header', $data);
        echo view('/front/principal');
        echo view('/front/footer');
    }

    public function servicios()
    {
        $data['titulo'] = 'Servicios';
        echo view('/front/header', $data);
        echo view('/front/servicios');
        echo view('/front/footer');

    }

    public function sobre_nosotros()
    {
        $data['titulo'] = 'Acerca de nosotros';
        echo view('/front/header', $data);
        echo view('/front/nosotros');
        echo view('/front/footer');
    }

    public function usuarios()
    {

        $UsuariosModel = new UsuariosModel();
        $usuarios['usuarios'] = $UsuariosModel->findAll();

        $data['titulo'] = 'Lista de Usuarios';
        echo view('/front/header', $data);
        echo view('/front/usuarios',$usuarios);
        echo view('/front/footer');

    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        $data['titulo'] = 'Registrarse';
        echo view('/front/header', $data);
        echo view('/front/registro');
        echo view('/front/footer');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $reglas = [
            'pass' => 'required|min_length[5]|max_length[20]|is_unique[usuarios.pass]',
            'nombre' => 'required',
            'apellido' => 'required',
            'usuario' => 'required',
            'email' => 'valid_email'

        ];

        if(!$this->validate($reglas)){
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $post = $this->request->getPost([
            'nombre',
            'apellido',
            'usuario',
            'email',
            'pass'
        ]);

        $UsuariosModel = new UsuariosModel();
        $UsuariosModel -> insert([
            'nombre' => trim($post['nombre']),
            'apellido' => $post['apellido'],
            'usuario' => $post['usuario'],
            'email' => $post['email'],
            'pass' => trim($post['pass']),
        ]);

        return redirect()->to('usuarios');

    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id)
    {

        $usuariosModel = new UsuariosModel();
        $data['titulo'] = 'Editar Usuario';
        $data['usuario'] = $usuariosModel->find($id);
        
        echo view('/front/header', $data);
        echo view('/front/edit',$data);
        echo view('/front/footer');
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */


    public function update($id)
    {
        $reglas = [
            'pass' => "required|min_length[5]|max_length[20]|is_unique[usuarios.pass,id,{$id}]",// comillas dobles para variables
            'nombre' => 'required',
            'apellido' => 'required',
            'usuario' => 'required',
            'email' => 'valid_email'
        ];

        if(!$this->validate($reglas)){
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $post = $this->request->getPost([
            'nombre',
            'apellido',
            'usuario',
            'email',
            'pass'
        ]);

        $UsuariosModel = new UsuariosModel();
        $UsuariosModel -> update($id,[
            'nombre' => trim($post['nombre']),
            'apellido' => $post['apellido'],
            'usuario' => $post['usuario'],
            'email' => $post['email'],
            'pass' => trim($post['pass']),
        ]);

        return redirect()->to('usuarios');
    }


    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id)
    {

        $usuariosModel = new UsuariosModel();
        $usuariosModel->delete($id);

        return redirect()->to('usuarios');
    }

    public function login(){

        $data['titulo'] = 'Iniciar Sesión';
        
        echo view('/front/header', $data);
        echo view('/front/login');
        echo view('/front/footer');
    
    }

}



