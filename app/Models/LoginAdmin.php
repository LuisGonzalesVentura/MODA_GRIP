<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginAdmin extends Model
{
    protected $table = 'login_admin'; // Tabla de la base de datos
    protected $primaryKey = 'id_login'; // Clave primaria de la tabla
    protected $allowedFields = ['usuario_login', 'contrasenia_login']; // Campos permitidos

    // Si tienes campos de tiempo como created_at, updated_at, puedes habilitarlos:
    protected $useTimestamps = true; // Si tienes campos created_at y updated_at
    protected $createdField  = 'created_at'; // Campo para created_at
    protected $updatedField  = 'updated_at'; // Campo para updated_at

    /**
     * Encuentra un usuario por su nombre de usuario.
     *
     * @param string $usuario
     * @return array|null
     */
    public function findByUsername(string $usuario)
    {
        return $this->where('usuario_login', $usuario)->first();
    }

    /**
     * Verifica si la contraseña es correcta.
     *
     * @param string $hash
     * @param string $password
     * @return bool
     */
    public function verifyPassword(string $hash, string $password)
    {
        return password_verify($password, $hash);
    }
}
