<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'producto'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_productos'; // Clave primaria

    // Definir qué columnas se pueden modificar desde el formulario o la vista
    protected $allowedFields = ['nombre_producto', 'imagen_producto', 'precio_producto'];

    // Si deseas que las fechas se manejen automáticamente por CodeIgniter, habilita esta opción
    protected $useTimestamps = false;

    // Opcional: Si quieres manejar validaciones
    protected $validationRules = [
        'nombre_producto' => 'required|min_length[3]|max_length[100]',
        'precio_producto' => 'required|decimal',
        'imagen_producto' => 'permit_empty|max_length[255]',
    ];
}
