<?php

namespace App\Models;

use CodeIgniter\Model;

class SimulacionModel extends Model
{
    protected $table = 'simulaciones'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_simulaciones'; // Clave primaria

    // Definir qué columnas se pueden modificar desde el formulario o la vista
    protected $allowedFields = ['archivo_simulacion', 'id_productos'];

    // Opcional: Si deseas que las fechas se manejen automáticamente por CodeIgniter
    protected $useTimestamps = false;

    // Opcional: Si quieres manejar validaciones
    protected $validationRules = [
        'archivo_simulacion' => 'required|max_length[255]',
        'id_productos' => 'permit_empty|integer',
    ];
}
