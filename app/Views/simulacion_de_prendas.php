<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml" xmlns:b="http://www.google.com/2005/gml/b"
    xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr">

<head>
     <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
     <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet"></script>
     <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs-core"></script>
     <script src="https://cdn.jsdelivr.net/npm/@mediapipe/pose/pose.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>


    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2KV3RS6HZY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-2KV3RS6HZY');
    </script>


    <!-- MetaInfo al compartir -->
    <meta content="https://i.ibb.co/CVfKQ4c/min.webp" property="og:image" />
    <meta content="GRIP Clothing Store" property="og:title" />
    <meta content="Vistiéndote dentro y fuera del gimnasio" property="og:description" />
    <meta content="https://www.gripclothingstore.com" property="og:url" />

    <!-- Más meta tags -->
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ie=edge" http-equiv="X-UA-Compatible" />
    <title>GRIP Clothing</title>


    
    <meta content="Actitud y estilo se unen en la ropa deportiva de Grip Clothing, ofreciendo piezas que combinan moda y funcionalidad. Tienda online de GRIP Clothing" name="description" />
    <meta content="ecommerce, GRIP, GRIP Clothing, Clothing" name="keywords" />

    <!-- Estilos -->
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/alvarogarciapiz/grip-web/main/styles.css" />
    <style>
    #toggleCamera {
    pointer-events: auto; /* Asegura que el botón sea clickeable */
    position: relative; /* Necesario para el z-index */
    z-index: 50; /* Asegúrate de que sea mayor que cualquier otro elemento */
}

#modeloContenedor {
    position: absolute; /* Permite mover el contenedor con top y left */
    top: 127px;         /* Ajustar la posición vertical (más abajo) */
    left: 1010px;       /* Ajustar la posición horizontal (más a la derecha) */
    width: 322px;       /* Ancho del contenedor */
    height: 322px;      /* Alto del contenedor */
    overflow: hidden;   /* Oculta cualquier contenido que sobresalga */
    background-color: transparent; /* Fondo completamente transparente */
    border: none;       /* Eliminar borde */
    border-radius: 15px; /* Bordes redondeados */
    z-index: 10;        /* Asegura que el contenedor esté encima de otros elementos */
}



#buttonContainer {
    position: relative; /* Permite el uso de z-index */
    z-index: 50; /* Asegúrate de que esté por encima de otros elementos */
}

 #canvas {
    position: absolute;
    top: 0;
    left: 0;
    pointer-events: none; /* Permitir interacción con el video debajo */
    z-index: 2; /* Asegúrate de que esté por encima del video, pero debajo del modelo 3D */
}

#threeCanvas {
    width: 100vw; /* Ancho completo */
    height: 100vh; /* Alto completo */
    position: absolute; /* Posición absoluta */
    top: 0; /* Desde el inicio */
    left: 0; /* Desde el inicio */
    z-index: 10; /* Asegúrate de que esté por encima de todo */


    
}

.container1, .container2 {
    width: 45%; /* Ancho de cada contenedor */
    padding: 20px; /* Espaciado interno */
    border-radius: 8px; /* Bordes redondeados */
    background-color: white; /* Fondo blanco */
    position: relative; /* Necesario para el z-index */
    z-index: 1; /* Asegúrate de que esté encima del video */
}

.container1 {
    float: left; /* Alinear a la izquierda */
    margin-bottom: 20px; /* Añadir margen inferior para evitar superposición */
    margin-left: 5%; /* Mueve el contenedor un poco a la derecha */
}

.container2 {
    float: right; /* Alinear a la derecha */
    margin-bottom: 20px; /* Añadir margen inferior */
    
}

.camera {
    margin-top: 50px; /* Separar la cámara del contenido superior */
    text-align: center; /* Centrar la cámara */
    position: relative; /* Para que el z-index funcione */
    z-index: 0; /* Asegúrate de que esté detrás del modelo */
}

.camera img {
    width: 640px; /* Ajusta la imagen de la cámara a un 80% del ancho */
    height: auto; /* Mantiene la proporción de la imagen */
    margin: 0 auto; /* Centra la imagen horizontalmente */
    z-index: 0; /* Asegúrate de que esté detrás del modelo */
    border-radius: 8px; /* Bordes redondeados */

}

.no-camera {
    width: 100%; /* Imagen de cámara apagada ocupará todo el ancho */
    height: auto; /* Mantener la proporción de la imagen */
    display: block; /* Mostrar la imagen de cámara apagada */
    border-radius: 8px; /* Bordes redondeados */

}

.shirt-section {
    text-align: center; /* Centrar el contenido de la sección de la camisa */
    position: relative; /* Para permitir que el modelo 3D se posicione correctamente */
    z-index: 1; /* Asegúrate de que el modelo esté por encima */
}

.shirt-image {
    width: 50%; /* Ajusta el tamaño de la imagen */
    height: auto; /* Mantiene la proporción de la imagen */
    display: block; /* Se asegura de que la imagen sea un bloque */
    margin: 50px auto 0; /* Centra la imagen horizontalmente y empuja hacia abajo */
    border-radius: 8px; /* Bordes ligeramente redondeados */
}

#video {
    display: none; /* Se oculta por defecto */
    border-radius: 8px; /* Bordes redondeados */
    z-index: 1; /* Asegúrate de que el video tenga un z-index menor que el botón */
}


/* Estilo para el canvas o contenedor del modelo 3D */
#canvas3D {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 4; /* El modelo 3D estará por encima del video */
}


</style>
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    <!-- Cookies aviso -->
    <script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({ "notice_banner_type": "simple", "consent_type": "implied", "palette": "dark", "language": "es", "page_load_consent_levels": ["strictly-necessary", "functionality", "tracking", "targeting"], "notice_banner_reject_button_hide": false, "preferences_center_close_button_hide": false, "page_refresh_confirmation_buttons": false, "website_name": "https://www.gripclothingstore.com" });
        });
    </script>
    <a href="#" id="open_preferences_center">Update cookies preferences</a>

    <!-- Fixed top scroll and logo -->
    <div class="top-div">
        <div class="scroll-left">
            <p>
                Haz tu pedido a través de nuestro instagram
                <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Haz tu pedido a través de nuestro instagram
                <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Haz tu pedido a través de nuestro instagram
                <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            </p>
            <p class="second">
                Haz tu pedido a través de nuestro instagram
                <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Haz tu pedido a través de nuestro instagram
                <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Haz tu pedido a través de nuestro instagram
                <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            </p>
        </div>

        <!-- Nav -->
        <div class="navigation-bar">
            <a href="https://www.gripclothingstore.com" class="arkhip">
                <h1>grip</h1>
            </a>
            <a class="mx-2 user-icon d-none d-md-block" href="<?= base_url(relativePath: 'home_admin') ?>">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" style="color: black;">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-3.31 0-10 1.67-10 5v2h20v-2c0-3.33-6.69-5-10-5z"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- Código cámara -->
    <section class="bg-white py-8">
    <div class="container1">
    <div class="camera-section">
        <div class="camera">
            <video id="video" autoplay playsinline style="display: none;"></video>
            <canvas id="canvas" style="position: absolute; top: 0; left: 0;"></canvas>
            <img id="noCameraFeed" src="https://support.wepow.com/hc/article_attachments/25998203727639" alt="Cámara apagada" class="no-camera">
        </div>
        <div id="buttonContainer" class="flex justify-center space-x-4 w-full">
            <button type="button" 
                    class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-md text-sm shadow-lg shadow-black" 
                    id="toggleCamera" 
                    style="margin-top: 20px;">
                ENCENDER CÁMARA
            </button>
        </div>
    </div>
</div>

<div class="container2">
    <div class="shirt-section">
        <img src="<?= base_url('imagenes_producto/imgs/' . esc($producto['imagen_producto'])); ?>" 
             alt="<?= esc($producto['nombre_producto']); ?>" 
             class="shirt-image">

        <div>
            <button type="button" 
                    class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-md text-sm shadow-lg shadow-black" 
                    id="verModeloBtn" 
                    style="margin-top: 20px;">
                VER EN 3D
            </button>
            <button type="button" 
                    class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md text-sm shadow-lg shadow-black" 
                    id="apagarModeloBtn" 
                    style="margin-top: 20px; display: none;">
                DESACTIVAR
            </button>
        </div>
    </div>
</div>




    <div id="modeloContenedor"></div> <!-- Contenedor para el modelo 3D -->

    </section>
    <!-- Fin código cámara -->
    <script>
    // Asegúrate de que la URL apunta a /simulaciones/
    const archivoSimulacion = "<?= base_url('/simulaciones/' . $archivo_simulacion) ?>";
    console.log("URL del archivo de simulación:", archivoSimulacion);
</script>


    <video id="video" playsinline style="display: none;"></video>
    <canvas id="output"></canvas>
   
    <script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const noCameraFeed = document.getElementById('noCameraFeed');
    let net;
    let cameraActive = false;
    const previousPositions = {};
    let scene, camera, renderer, model;

    function smoothPosition(keypointIndex, x, y) {
        if (!previousPositions[keypointIndex]) {
            previousPositions[keypointIndex] = { x: x, y: y };
        } else {
            previousPositions[keypointIndex].x = (previousPositions[keypointIndex].x + x) / 2;
            previousPositions[keypointIndex].y = (previousPositions[keypointIndex].y + y) / 2;
        }
        return previousPositions[keypointIndex];
    }

    async function setupCamera() {
        video.width = 640;
        video.height = 480;
        const stream = await navigator.mediaDevices.getUserMedia({ video: true });
        video.srcObject = stream;
        return new Promise((resolve) => {
            video.onloadedmetadata = () => {
                resolve(video);
            };
        });
    }

    async function loadPosenet() {
        net = await posenet.load();
        console.log("PoseNet model loaded");
    }

    async function detectPose() {
        const pose = await net.estimateSinglePose(video, { flipHorizontal: false });
        drawPoseAndClothes(pose);
        requestAnimationFrame(detectPose);
    }

    async function initThreeJS() {
    scene = new THREE.Scene();
    camera = new THREE.PerspectiveCamera(75, 640 / 570, 0.1, 1000);
    renderer = new THREE.WebGLRenderer({ alpha: true });
    renderer.setSize(640, 570); // Establecer el tamaño del renderer

    document.body.appendChild(renderer.domElement);
    camera.position.set(0, 1, 3);

    // ** Luces **
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.5); // Luz ambiental suave
    scene.add(ambientLight);

    const directionalLight1 = new THREE.DirectionalLight(0xffffff, 1); // Luz direccional
    directionalLight1.position.set(1, 1, 1).normalize();
    scene.add(directionalLight1);

    const directionalLight2 = new THREE.DirectionalLight(0xffffff, 0.7); // Otra fuente de luz direccional
    directionalLight2.position.set(-1, 1, -1).normalize();
    scene.add(directionalLight2);

    // Cargar el modelo desde la URL de la base de datos
    const loader = new THREE.GLTFLoader();
    loader.load(archivoSimulacion, function(gltf) {
        model = gltf.scene;
        model.scale.set(5, 5, 5); // Ajustar el tamaño del modelo
        model.rotation.y = Math.PI;
        scene.add(model);
        console.log("Modelo cargado y agregado a la escena");
    }, undefined, function(error) {
        console.error("Error al cargar el modelo:", error);
    });
}



  // Variable global para el factor de ajuste de rotación
let rotationAdjustment = 0.3; // Ajuste inicial

// Función para actualizar el ajuste de rotación
function updateRotationAdjustment(value) {
    rotationAdjustment = value; // Actualiza el valor del ajuste
}
function drawPoseAndClothes(pose) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    const keypointsToDraw = [0, 1, 2, 3, 4, 5, 6, 7, 11, 12, 13]; // Excluyendo las piernas
    const confidenceThreshold = 0.5;

    keypointsToDraw.forEach(index => {
        const keypoint = pose.keypoints[index];
        if (keypoint && keypoint.score > confidenceThreshold) {
            let { y, x } = keypoint.position;
            const smoothed = smoothPosition(index, x, y);
            ctx.beginPath();
            ctx.arc(smoothed.x, smoothed.y, 7, 0, 2 * Math.PI);
            ctx.fillStyle = 'gray';
            ctx.fill();
        }
    });

    const rightShoulder = pose.keypoints[5];
    const leftShoulder = pose.keypoints[11];

    if (rightShoulder.score > confidenceThreshold && leftShoulder.score > confidenceThreshold) {
        const centerShouldersX = (rightShoulder.position.x + leftShoulder.position.x) / 2;
        const centerShouldersY = (rightShoulder.position.y + leftShoulder.position.y) / 2;

        const bodyHeight = Math.abs(centerShouldersY); // Altura del cuerpo
        const scaleFactor = Math.max(0.5, 650 / bodyHeight); // Establecer un valor mínimo para el tamaño

        if (model) {
            model.scale.set(scaleFactor, scaleFactor, scaleFactor);
            
            const offsetX = -0.3; 
            const offsetY = -1.8; // Aumentar este valor para mover el modelo hacia arriba
            const offsetZ = 0;

            model.position.set(centerShouldersX / 300 + offsetX, -(centerShouldersY / 300) + offsetY, offsetZ);

            // Establecer la rotación a 0 para que el modelo siempre esté de frente
            model.rotation.y = 0;

            model.visible = true;
            model.renderOrder = 1;
        }
    } else {
        if (model) {
            model.visible = false;
        }
    }
}


    function animate() {
        
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }

    async function main() {
    await setupCamera();
    video.play();
    await loadPosenet();
    initThreeJS();

    // Asegúrate de que el botón se mantenga visible y activo
    const buttonContainer = document.getElementById('buttonContainer');
    buttonContainer.style.position = 'relative';
    buttonContainer.style.zIndex = '50'; // Coloca el botón por encima de la animación

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    detectPose();
    animate();
}

    let animationId;

    document.getElementById('toggleCamera').addEventListener('click', async () => {
    const button = document.getElementById('toggleCamera');
    
    console.log("Botón clickeado. Estado de cámara:", cameraActive ? "Activada" : "Desactivada");

    if (!cameraActive) {
        cameraActive = true;
        button.classList.remove('bg-black', 'hover:bg-gray-800');
        button.classList.add('bg-red-600', 'hover:bg-red-500');
        button.textContent = 'APAGAR CÁMARA'; 

        video.style.display = 'block';
        noCameraFeed.style.display = 'none';

        // Inicia cámara y simulación
        await main();

        renderer.domElement.style.position = 'absolute';
        renderer.domElement.style.top = '0';
        renderer.domElement.style.left = '0';
        renderer.domElement.style.zIndex = '2';

        console.log("Cámara y simulación activadas.");

    } else {
        // Apagar cámara y simulación
        cameraActive = false;
        button.classList.remove('bg-red-600', 'hover:bg-red-500');
        button.classList.add('bg-black', 'hover:bg-gray-800');
        button.textContent = 'ENCENDER CÁMARA';

        const stream = video.srcObject;
        if (stream) {
            const tracks = stream.getTracks();
            tracks.forEach(track => track.stop());
            console.log("Cámara detenida.");
        }
        video.srcObject = null;

        video.style.display = 'none';
        noCameraFeed.style.display = 'block';

        // Desactiva y limpia el renderer
        if (renderer) {
            renderer.forceContextLoss();
            renderer.dispose();
            renderer = null;
            console.log("Renderer desactivado.");
        }

        // Detiene la animación si es necesario
        if (animationId) {
            cancelAnimationFrame(animationId);
            animationId = null;
            console.log("Animación detenida.");
        }
    }
});

function stopMain() {
    console.log("Deteniendo animación y liberando recursos de WebGL"); // Verifica que entra a stopMain
    // Detener la animación de Three.js si está activa
    if (animationId) {
        cancelAnimationFrame(animationId);
        animationId = null;
        console.log("Animación detenida"); // Confirmar que la animación se detuvo
    }

    // Detener el renderer y limpiar los recursos de WebGL
    if (renderer) {
        renderer.domElement.remove(); // Eliminar el elemento del DOM
        renderer.dispose(); // Liberar el contexto WebGL
        renderer = null;
        console.log("Renderer de Three.js liberado"); // Confirmar que el renderer fue liberado
    }

    // Eliminar el modelo y limpiar la escena
    if (scene && model) {
        scene.remove(model);
        model = null;
        console.log("Modelo eliminado de la escena"); // Confirmar que el modelo se eliminó de la escena
    }
}

function stopCamera() {
    console.log("Apagando la cámara"); // Verifica que entra a stopCamera
    // Detener el flujo de video
    const stream = video.srcObject;
    if (stream) {
        const tracks = stream.getTracks();
        tracks.forEach(track => track.stop());
        console.log("Stream de cámara detenido"); // Confirmar que las pistas de la cámara se detuvieron
    }
    video.srcObject = null;
    console.log("Cámara apagada correctamente"); // Confirmar que el video fue desactivado
}

function animate() {
    // Guardar el ID de animación
    animationId = requestAnimationFrame(animate);
    renderer.render(scene, camera);
    console.log("Animación ejecutándose"); // Confirmar que la animación está en ejecución
}


</script>






<!-- Asegúrate de incluir OrbitControls antes de tu script principal -->
<script src="https://cdn.rawgit.com/mrdoob/three.js/r128/examples/js/controls/OrbitControls.js"></script>


<script>
    // Variables globales
    let escena3D, camara3D, renderizador3D, modelo3D, controles;
    let animacionId; // Añadido para almacenar el ID de la animación

    function inicializarEscena() {
        escena3D = new THREE.Scene();
        camara3D = new THREE.PerspectiveCamera(75, 330 / 330, 0.1, 1000);
        // Establecer alpha: true para la transparencia
        renderizador3D = new THREE.WebGLRenderer({ alpha: true });
        renderizador3D.setSize(325, 325);
        document.getElementById('modeloContenedor').appendChild(renderizador3D.domElement);

        // Configurar cámara
        camara3D.position.set(0, 1, 5);

        // Agregar controles
        controles = new THREE.OrbitControls(camara3D, renderizador3D.domElement);
        controles.enableDamping = true; // Suaviza el movimiento
        controles.dampingFactor = 0.25; // Factor de amortiguamiento
        controles.screenSpacePanning = false; // Evitar que la cámara se desplace en el espacio de la pantalla
        controles.maxPolarAngle = Math.PI / 2; // Limitar el movimiento vertical de la cámara

        // Agregar luces para mejorar la iluminación
        const luzAmbiente = new THREE.AmbientLight(0xffffff, 0.5); // Luz ambiental suave
        escena3D.add(luzAmbiente);
        
        const luzDireccional1 = new THREE.DirectionalLight(0xffffff, 1); // Luz direccional
        luzDireccional1.position.set(1, 1, 1).normalize();
        escena3D.add(luzDireccional1);
        
        const luzDireccional2 = new THREE.DirectionalLight(0xffffff, 0.7); // Otra fuente de luz direccional
        luzDireccional2.position.set(-1, 1, -1).normalize();
        escena3D.add(luzDireccional2);

        // Para hacer la escena transparente, puedes eliminar el color de fondo
        // o establecerlo a null
        escena3D.background = null; // Esto hará que el fondo sea transparente
    }

    function cargarModelo3D() {
        const cargadorGLTF = new THREE.GLTFLoader();
        console.log("Cargando modelo desde:", archivoSimulacion);
        cargadorGLTF.load(archivoSimulacion, function(gltf) {
            modelo3D = gltf.scene;
            modelo3D.scale.set(8, 8, 8);
            modelo3D.position.set(0, -10.1, 0);
            escena3D.add(modelo3D);
            animarModelo(); // Asegurarse de iniciar la animación al cargar el modelo
        }, undefined, function(error) {
            console.error("Error al cargar el modelo:", error);
        });
    }

    function animarModelo() {
        animacionId = requestAnimationFrame(animarModelo);
        if (modelo3D) {
            modelo3D.rotation.y += 0.01; // Rotación opcional
        }
        
        // Actualizar controles
        if (controles) {
            controles.update();
        }

        renderizador3D.render(escena3D, camara3D);
    }

  // Función para ver el modelo 3D
document.getElementById('verModeloBtn').addEventListener('click', function() {
    const modeloContenedor = document.getElementById('modeloContenedor');
    modeloContenedor.style.display = 'block'; // Mostrar el contenedor del modelo
    inicializarEscena(); // Inicializar la escena
    cargarModelo3D(); // Cargar el modelo

    // Cambiar botones
    this.style.display = 'none'; // Ocultar botón de ver en 3D
    document.getElementById('apagarModeloBtn').style.display = 'inline-block'; // Mostrar botón de apagar cámara
});

// Función para apagar el modelo (ocultar y limpiar)
document.getElementById('apagarModeloBtn').addEventListener('click', function() {
    // Detener la animación
    cancelAnimationFrame(animacionId); // Detener la animación

    // Limpiar el modelo y la escena
    if (modelo3D) {
        escena3D.remove(modelo3D); // Eliminar el modelo de la escena
        modelo3D = null; // Limpiar referencia al modelo
    }

    const modeloContenedor = document.getElementById('modeloContenedor');
    modeloContenedor.style.display = 'none'; // Ocultar el contenedor del modelo

    // Cambiar botones
    this.style.display = 'none'; // Ocultar botón de apagar cámara
    document.getElementById('verModeloBtn').style.display = 'inline-block'; // Mostrar botón de ver en 3D
});




</script>





    <footer class="container mx-auto bg-white py-8 footer-border">
        <div class="container flex px-3 py-8">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2">
                    <div class="px-3 md:px-0">
                        <h3 class="arkhip_sub">grip family</h3>
                        <p class="py-4">
                            Únete a la familia GRIP, colecciones exclusivas y limitadas.
                            Síguenos para descubrir el próximo drop.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right mt-6 md:mt-0">
                    <div class="px-3 md:px-0">
                        <h3 class="arkhip_text">social</h3>

                        <div class="w-full flex items-center py-4 mt-0">
                            <a class="mx-2" href="https://twitter.com/Grip_es">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a class="mx-2" href="https://www.instagram.com/gripclothinges/">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
