# README

## VIRTUAL_TRY_ON
Proyecto de Simulación de Prendas en Línea
Descripción del Proyecto
Este proyecto es un sistema de simulación de prendas en línea que permite a los usuarios probar prendas virtualmente en 3D. El sistema está desarrollado en PHP usando el framework CodeIgniter 4 y se ejecuta en un entorno local con XAMPP. El objetivo principal es proporcionar una experiencia de compra interactiva y atractiva que permita a los usuarios visualizar las prendas en tiempo real antes de comprarlas.

# Requisitos del Sistema
PHP: Versión 8.1 o superior
Extensiones necesarias:
intl
mbstring
json (habilitada por defecto)
mysqlnd para bases de datos MySQL
libcurl para solicitudes HTTP con CURL
XAMPP: Para proporcionar un entorno de desarrollo local que incluya Apache y MySQL.
Instalación
## 1. Clonar el Proyecto
Clona el repositorio del proyecto en la carpeta de proyectos de tu instalación de XAMPP (htdocs):

bash
Copiar código
cd C:\xampp\htdocs
git clone gh repo clone LuisGonzalesVentura/MODA_GRIP
cd <MODA_GRIP>
## 2. Configuración del Servidor Web
Este proyecto está estructurado con el archivo index.php dentro de la carpeta public para mejorar la seguridad. Configura el servidor web para apuntar a la carpeta public como la raíz del documento.

## 3. Configuración de CodeIgniter
Copia el archivo .env.example y renómbralo a .env.
Configura las variables de entorno necesarias en el archivo .env, en particular:
La conexión a la base de datos:
arduino
Copiar código
 'DSN'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => '',
        'database'     => 'grip_base',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8mb4',
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
Otras configuraciones relevantes, como el modo de desarrollo (CI_ENVIRONMENT = development).
## 4. Configuración de Base de Datos
Abre el panel de XAMPP y asegúrate de que el servidor MySQL esté en ejecución.
Crea una base de datos en phpMyAdmin con el nombre que especificaste en el archivo .env.
Ejecuta el archivo SQL de configuración de la base de datos (si existe) en phpMyAdmin para crear las tablas necesarias.
## 5. Instalación de Dependencias
Este proyecto utiliza Composer para la gestión de dependencias. Ejecuta el siguiente comando en la raíz del proyecto para instalar las dependencias:

bash
Copiar código
composer install
## 6. Inicio del Servidor
Una vez que se hayan configurado todos los archivos y las dependencias, inicia el servidor local desde el panel de XAMPP. Luego, accede al sistema en tu navegador en http://localhost/<MODA_GRIP>/public.

#Estructura del Proyecto
app/: Carpeta principal de la aplicación donde se encuentran los controladores, modelos, y vistas.
public/: Contiene el archivo index.php y otros recursos públicos como imágenes y archivos CSS.
writable/: Carpeta utilizada para el almacenamiento temporal y la gestión de logs de la aplicación.
.env: Archivo de configuración de entorno (especifica credenciales de base de datos y otros parámetros del entorno).
Ejecución de Pruebas
Para ejecutar pruebas unitarias en este proyecto, asegúrate de que Jest y Mocha están instalados en tu entorno. Luego, ejecuta los comandos de prueba en la terminal:

bash
Copiar código
npm test
Mantenimiento
El proyecto está alojado en GitHub para facilitar la colaboración y el control de versiones. Las instrucciones para la instalación y configuración también están documentadas en el archivo README en GitHub para facilitar el proceso a otros desarrolladores.