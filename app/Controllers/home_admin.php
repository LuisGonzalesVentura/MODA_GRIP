<?php

namespace App\Controllers;

class home_admin extends BaseController
{
    public function index()
    {
        // Asegurarse de que la sesión esté activa
        if (session()->get('logged_in')) {
            return view("view_admin/home_admin");
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        // Destruir la sesión
        session()->destroy();
        
        // Redirigir al controlador Home
        return redirect()->to(base_url('home'));
    }
}