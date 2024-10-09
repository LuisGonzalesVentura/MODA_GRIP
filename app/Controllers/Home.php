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

    public function view_simulacion($id_productos): string
    {
        // Cargar el modelo de productos
        $productoModel = new ProductoModel();

        // Obtener el producto por ID
        $producto = $productoModel->find($id_productos);

        // Verificar si el producto existe
        if (!$producto) {
            return redirect()->to('/')->with('error', 'Producto no encontrado.');
        }

        // Pasar el producto a la vista
        return view('simulacion_de_prendas', ['producto' => $producto]);
    }
  
}
