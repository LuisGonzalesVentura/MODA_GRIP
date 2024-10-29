<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\SimulacionModel;

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

    if ($producto) {
        return $this->response->setJSON($producto);
    } else {
        return $this->response->setJSON([]);
    }
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

public function eliminar_producto()
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

    // Eliminar el producto usando el método delete() del modelo
    if (!$model->delete($id_producto)) {
        return redirect()->back()->with('error', 'No se pudo eliminar el producto. Intente nuevamente.');
    }

    // Redirigir con un mensaje de éxito
    return redirect()->back()->with('success', 'Producto eliminado exitosamente.');
}


public function view_anadir_simulaciones()
{
    // Asegurarse de que la sesión esté activa
    if (session()->get('logged_in')) {
        $model = new ProductoModel();
        // Obtener todos los productos de la base de datos
        $data['productos'] = $model->findAll();  // Pasamos todos los productos a la vista

        // Cargar la vista y pasarle los datos
        return view("view_admin/anadir_simulaciones", $data);
    } else {
        return redirect()->to(base_url('login'));
    }
}
public function anadir_simulacion()
{
    $simulacionModel = new SimulacionModel();

    // Definir las reglas de validación sin la verificación de extensión por ahora
    $rules = [
        'modelo_producto' => 'uploaded[modelo_producto]|max_size[modelo_producto,71680]', // 70 MB
        'producto_select' => 'required',
    ];

    // Validar el formulario
    if ($this->validate($rules)) {
        // Guardar el archivo
        $file = $this->request->getFile('modelo_producto');
        $fileName = $file->getRandomName();
        $file->move('simulaciones', $fileName); // Mover a la carpeta simulaciones

        // Guardar información en la base de datos
        $data = [
            'archivo_simulacion' => $fileName,
            'id_productos' => $this->request->getPost('producto_select'),
        ];
        $simulacionModel->save($data);

        return redirect()->to('/admin/anadir-simulaciones')->with('success', 'Simulación añadida correctamente.');
    } else {
        // Depuración: muestra información sobre el archivo
        $file = $this->request->getFile('modelo_producto');
        if ($file->isValid()) {
            $fileType = $file->getClientMimeType(); // Tipo MIME
            $fileName = $file->getClientName(); // Nombre del archivo
            log_message('debug', "Archivo subido: Nombre - $fileName, Tipo MIME - $fileType");
        } else {
            log_message('debug', 'Archivo no es válido: ' . $file->getErrorString());
        }

        return redirect()->to('/admin/anadir-simulaciones')->withInput()->with('error', $this->validator->getErrors());
    }
}
public function view_modificar_simulaciones()
{
    // Asegurarse de que la sesión esté activa
    if (session()->get('logged_in')) {
        $simulacionModel = new SimulacionModel();
        $productoModel = new ProductoModel();

        // Obtener todas las simulaciones de la base de datos
        $data['simulaciones'] = $simulacionModel->findAll();  // Pasamos todas las simulaciones a la vista

        // Obtener todos los productos de la base de datos
        $data['productos'] = $productoModel->findAll(); // Pasamos todos los productos a la vista

        // Cargar la vista y pasarle los datos
        return view("view_admin/modificar_simulacion", $data);
    } else {
        return redirect()->to(base_url('login'));
    }
}


public function modificar_simulacion()
    {
        $simulacionModel = new SimulacionModel();

        // Definir las reglas de validación
        $rules = [
            'modelo_producto' => 'uploaded[modelo_producto]|max_size[modelo_producto,71680]', // 70 MB
            'simulacion_id' => 'required'
        ];

        // Validar el formulario
        if ($this->validate($rules)) {
            // Obtener el ID de la simulación
            $simulacionId = $this->request->getPost('simulacion_id');

            // Obtener la simulación existente
            $simulacion = $simulacionModel->find($simulacionId);
            if (!$simulacion) {
                return redirect()->to('/admin/modificar-simulaciones')->with('error', 'Simulación no encontrada.');
            }

            // Verificar si se subió un nuevo archivo
            $file = $this->request->getFile('modelo_producto');
            if ($file && $file->isValid()) {
                // Guardar el nuevo archivo
                $fileName = $file->getRandomName();
                $file->move(FCPATH . 'simulaciones', $fileName); // Mover a la carpeta simulaciones
                
                // Eliminar el archivo antiguo si es necesario
                if (file_exists('simulaciones/' . $simulacion['archivo_simulacion'])) {
                    unlink('simulaciones/' . $simulacion['archivo_simulacion']); // Eliminar el archivo antiguo
                }
                
                // Actualizar la información en la base de datos
                $data = [
                    'archivo_simulacion' => $fileName,
                    'id_productos' => $simulacion['id_productos'] // Mantener el ID del producto asociado
                ];
                $simulacionModel->update($simulacionId, $data);
            }

            return redirect()->to(base_url('admin/modificar-simulacion'))->with('success', 'Simulación modificada correctamente.');
        } else {
            return redirect()->to(base_url('admin/modificar-simulacion'))->withInput()->with('error', $this->validator->getErrors());
        }
    }
    public function eliminar_simulacion()
{
    $simulacionModel = new SimulacionModel();
    $simulacionId = $this->request->getPost('simulacion_id');
    
    if ($simulacionId) {
        // Eliminar la simulación de la base de datos
        if ($simulacionModel->delete($simulacionId)) {
            // Redirigir a la misma pantalla con un mensaje de éxito
            return redirect()->to('admin/modificar-simulacion')->with('success', 'Simulación eliminada correctamente.');
        } else {
            // Redirigir a la misma pantalla con un mensaje de error
            return redirect()->to('admin/modificar-simulacion')->with('error', 'Error al eliminar la simulación.');
        }
    } else {
        // Redirigir a la misma pantalla con un mensaje de error
        return redirect()->to('admin/modificar-simulacion')->with('error', 'ID de simulación no proporcionado.');
    }
}


    

}





