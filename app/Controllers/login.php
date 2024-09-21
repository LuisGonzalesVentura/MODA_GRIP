<?php

namespace App\Controllers;

use App\Models\LoginAdmin;

class Login extends BaseController
{

    public function __construct()
    {
        // Asegúrate de que la sesión esté iniciada
        helper('session');
        session();
    }
    public function index()
    {
        // Muestra la vista del formulario de login
        return view("Login/login");
    }

    public function validarIngreso()
    {
        // Instancia del modelo LoginAdmin
        $login_admin = new LoginAdmin();

        // Obtener datos del formulario de forma segura
        $usuario = $this->request->getPost('usuario_login');
        $contrasenia = $this->request->getPost('contrasenia_login');

        // Buscar el usuario en la base de datos
        $user = $login_admin->where('usuario_login', $usuario)->first();

        if ($user) {
            if (password_verify($contrasenia, $user['contrasenia_login'])) {
                // Establecer la sesión del usuario
                $sessionData = [
                    'id_login' => $user['id_login'],
                    'usuario_login' => $user['usuario_login'],
                    'logged_in' => true
                ];
                session()->set($sessionData);

                // Redirigir o mostrar mensaje de éxito
                return redirect()->to(base_url('home_admin'));
            } else {
                return $this->mostrarAlerta('Contraseña incorrecta');
            }
        } else {
            return $this->mostrarAlerta('Usuario no encontrado o inactivo');
        }
    }

    private function mostrarAlerta($mensaje)
    {
        echo "<script>alert('$mensaje'); window.location.href = '" . base_url('login') . "';</script>";
    }
    
    
}
