<?php

namespace App\Controllers;
use App\Models\ProductoModel;

class home_admin extends BaseController
{
    public function index()
    {
        // Asegurarse de que la sesión esté activa
        if (session()->get('logged_in')) {
            $model = new ProductoModel();
            // Obtener todos los productos de la base de datos
            $data['productos'] = $model->findAll();

            // Cargar la vista y pasarle los datos
            return view("view_admin/home_admin", $data);
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
    
    public function view_producto()
    {
        // Asegurarse de que la sesión esté activa
        if (session()->get('logged_in')) {
            $model = new ProductoModel();
            // Obtener todos los productos de la base de datos
            $data['productos'] = $model->findAll();
            
            // Cargar la vista y pasarle los datos
            return view("view_admin/anadir_prendas", $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }




    public function guardar_producto()
{
    if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
    }

    $model = new ProductoModel();

    // Validar los datos del formulario
    $validation = $this->validate([
        'nombre_producto' => 'required|min_length[3]|max_length[100]',
        'precio_producto' => 'required|decimal',
        'imagen_producto' => 'uploaded[imagen_producto]|max_size[imagen_producto,2048]|is_image[imagen_producto]'
    ]);

    if (!$validation) {
        // Redirigir a la misma pantalla con errores de validación
        return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
    }

    // Subida de la imagen
    $imagen = $this->request->getFile('imagen_producto');
    $nombreImagen = $imagen->getRandomName();
    $imagen->move('imagenes_producto/imgs', $nombreImagen);

    // Guardar los datos del producto en la base de datos
    $model->save([
        'nombre_producto' => $this->request->getPost('nombre_producto'),
        'imagen_producto' => $nombreImagen,
        'precio_producto' => $this->request->getPost('precio_producto'),
    ]);

    // Redirigir a la misma pantalla con un mensaje de éxito
    return redirect()->back()->with('success', 'Producto añadido exitosamente');
}



public function view_modificar_producto()
{
    // Asegurarse de que la sesión esté activa
    if (session()->get('logged_in')) {
        $model = new ProductoModel();
        // Obtener todos los productos de la base de datos
        $data['productos'] = $model->findAll();  // Pasamos todos los productos a la vista

        // Cargar la vista y pasarle los datos
        return view("view_admin/modificar_prendas", $data);
    } else {
        return redirect()->to(base_url('login'));
    }
}

public function obtener_producto($id)
{
    $model = new ProductoModel();
    $producto = $model->find($id);
    
    // Devolver el producto en formato JSON
    return $this->response->setJSON($producto);
}
public function modificar_producto()
{
    // Verificar si la sesión está activa
    if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
    }

    // Obtener el ID del producto desde el formulario
    $id_producto = $this->request->getPost('producto_select');

    // Verificar que el producto existe
    $model = new ProductoModel();
    $producto = $model->find($id_producto);

    if (!$producto) {
        return redirect()->back()->with('error', 'Producto no encontrado.');
    }

    // Validar los datos del formulario
    $validation = $this->validate([
        'nombre_producto' => 'required|min_length[3]|max_length[100]',
        'precio_producto' => 'required|decimal',
        'imagen_producto' => 'permit_empty|max_size[imagen_producto,2048]|is_image[imagen_producto]'
    ]);

    if (!$validation) {
        // Redirigir con errores de validación
        return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
    }

    // Preparar los datos a actualizar
    $data = [
        'nombre_producto' => $this->request->getPost('nombre_producto'),
        'precio_producto' => $this->request->getPost('precio_producto'),
    ];

    // Si se ha subido una nueva imagen, procesarla
    $imagen = $this->request->getFile('imagen_producto');
    if ($imagen && $imagen->isValid()) {
        // Generar un nuevo nombre aleatorio para la imagen y moverla
        $nombreImagen = $imagen->getRandomName();
        $imagen->move('imagenes_producto/imgs', $nombreImagen);
        
        // Actualizar el campo de la imagen en los datos
        $data['imagen_producto'] = $nombreImagen;
    }

    // Actualizar el producto usando el método update() del modelo
    // Asegúrate de que el ID se pase correctamente
    if (!$model->update($id_producto, $data)) {
        return redirect()->back()->with('error', 'No se pudo modificar el producto. Intente nuevamente.');
    }

    // Redirigir con un mensaje de éxito
    return redirect()->back()->with('success', 'Producto modificado exitosamente.');
}





}