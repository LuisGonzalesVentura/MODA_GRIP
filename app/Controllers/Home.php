<?php

namespace App\Controllers;
use App\Models\ProductoModel;

class Home extends BaseController
{
    public function index(): string
    {
        // Cargar el modelo de productos
        $productoModel = new ProductoModel();

        // Obtener todos los productos de la base de datos
        $productos = $productoModel->findAll();

        // Pasar los productos a la vista
        return view('welcome_message', ['productos' => $productos]);
    }
  
}
