<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\SimulacionModel;

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
        // Cargar el modelo de productos y simulaciones
        $productoModel = new ProductoModel();
        $simulacionModel = new SimulacionModel();
    
        // Obtener el producto y la simulación asociados por ID
        $producto = $productoModel->find($id_productos);
        $simulacion = $simulacionModel->where('id_productos', $id_productos)->first();
    
        // Verificar si el producto o la simulación no existen
        if (!$producto || !$simulacion) {
            return redirect()->to('/')->with('error', 'Producto o simulación no encontrado.');
        }
    
        // Pasar el producto y el archivo de simulación a la vista
        return view('simulacion_de_prendas', [
            'producto' => $producto,
            'archivo_simulacion' => $simulacion['archivo_simulacion']
        ]);
    }
    

    
}
