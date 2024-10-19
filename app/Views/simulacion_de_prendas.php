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
            display: none;
            border-radius: 8px; /* Bordes redondeados */

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
                <canvas id="canvas" style="position: absolute; top: 0; left: 0; z-index: 10;"></canvas>
                <img id="noCameraFeed" src="https://support.wepow.com/hc/article_attachments/25998203727639" alt="Cámara apagada" class="no-camera" style="z-index: 0;">
            </div>
            <div class="flex justify-center space-x-4 w-full">
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
                <img src="<?= base_url('imagenes_producto/imgs/' . esc($producto['imagen_producto'])); ?>" alt="<?= esc($producto['nombre_producto']); ?>" class="shirt-image">
                
               
                
                <div>
                <button type="button" 
    class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-md text-sm shadow-lg shadow-black" 
    id="starCamera" 
    style="margin-top: 20px;">  <!-- Ajusta el valor según sea necesario -->
    VER EN 3D
</button>                </div>
            </div>
        </div>
    </section>
    <!-- Fin código cámara -->

    <video id="video" playsinline style="display: none;"></video>
    <canvas id="output"></canvas>
   
    <script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const noCameraFeed = document.getElementById('noCameraFeed');
    let net;
    let cameraActive = false;
// Variables para suavizar la posición de los puntos
const previousPositions = {};
    // Variables de Three.js
    let scene, camera, renderer, model;
// Función para suavizar las posiciones de los puntos
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
        camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        
        renderer = new THREE.WebGLRenderer({ alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        // Ajustar la posición de la cámara
        camera.position.set(0, 1, 3); // Aleja la cámara más en Z si es necesario

        // Añadir luces
        const ambientLight = new THREE.AmbientLight(0xffffff, 1); // Luz ambiental
        scene.add(ambientLight);

        const directionalLight = new THREE.DirectionalLight(0xffffff, 1); // Luz direccional
        directionalLight.position.set(1, 1, 1).normalize();
        scene.add(directionalLight);

        // Cargar modelo de la camiseta
        const loader = new THREE.GLTFLoader();
        loader.load('/assets/oversize.glb', function(gltf) {
    model = gltf.scene;
    model.scale.set(50, 50, 50); // Ajusta la escala del modelo según sea necesario

    // Ajustar la rotación del modelo para que esté de frente
    model.rotation.y = Math.PI; // 180 grados en radianes

    scene.add(model);
    console.log("Modelo cargado y agregado a la escena");
}, undefined, function(error) {
    console.error("Error al cargar el modelo:", error);
});

    }

    function drawPoseAndClothes(pose) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    const keypointsToDraw = [
        // Puntos clave
        0,  // Nariz
        1,  // Ojo izquierdo
        2,  // Ojo derecho
        3,  // Oreja izquierda
        4,  // Oreja derecha
        5,  // Hombro derecho
        6,  // Codo derecho
        7,  // Muñeca derecha
        11, // Hombro izquierdo
        12, // Codo izquierdo
        13, // Muñeca izquierda
        8,  // Cadera derecha
        9,  // Rodilla derecha
        10, // Tobillo derecho
        14, // Cadera izquierda
        15, // Rodilla izquierda
        16  // Tobillo izquierdo
    ];

    const confidenceThreshold = 0.5;

    // Dibuja los puntos clave
    keypointsToDraw.forEach(index => {
        const keypoint = pose.keypoints[index];
        if (keypoint && keypoint.score > confidenceThreshold) {
            let { y, x } = keypoint.position;

            // Suavizar la posición del punto
            const smoothed = smoothPosition(index, x, y);
            ctx.beginPath();
            ctx.arc(smoothed.x, smoothed.y, 7, 0, 2 * Math.PI);
            ctx.fillStyle = 'gray'; // Color plomo
            ctx.fill();
        }
    });

    // Obtener los puntos clave de los hombros y caderas
    const rightShoulder = pose.keypoints[5];
    const leftShoulder = pose.keypoints[11];
    const rightHip = pose.keypoints[8];
    const leftHip = pose.keypoints[14];

    // Verifica si ambos hombros y ambas caderas tienen una puntuación de confianza suficiente
    if (rightShoulder.score > confidenceThreshold && leftShoulder.score > confidenceThreshold &&
        rightHip.score > confidenceThreshold && leftHip.score > confidenceThreshold) {

        // Calcular el centro de los hombros y caderas
        const centerShouldersX = (rightShoulder.position.x + leftShoulder.position.x) / 2;
        const centerShouldersY = (rightShoulder.position.y + leftShoulder.position.y) / 2;
        const centerHipsX = (rightHip.position.x + leftHip.position.x) / 2;
        const centerHipsY = (rightHip.position.y + leftHip.position.y) / 2;

        // Calcular la distancia entre los hombros y las caderas para escalar el modelo
        const shoulderWidth = Math.abs(rightShoulder.position.x - leftShoulder.position.x);
        const bodyHeight = Math.abs(centerShouldersY - centerHipsY);

        // Escalar el modelo basado en la distancia del cuerpo
        const scaleFactor = bodyHeight / 60;  // Ajusta este valor según sea necesario
        if (model) {
            model.scale.set(scaleFactor, scaleFactor, scaleFactor); // Ajustar la escala según el tamaño del cuerpo

            const offsetX = -3.8; // Aumenta este valor para mover el modelo más a la derecha
const offsetY = -1.1; // Ajusta este valor para mover el modelo más arriba (mantén o modifica según necesidad)
const offsetZ = -0.5; // Asegúrate de que el modelo esté delante de la cámara

            // Ajustar la posición del modelo con relación a la cámara
            model.position.set(centerShouldersX / 300 + offsetX, -(centerShouldersY / 300) + offsetY, offsetZ); 

            model.visible = true; // Asegúrate de que el modelo sea visible
            model.renderOrder = 1; // Asegura que el modelo se renderice por encima de otros elementos
        }
    } else {
        if (model) {
            model.visible = false; // Oculta el modelo si no se detecta pose
        }
    }
}



    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene, camera); // Renderizar la escena
    }

    async function main() {
    await setupCamera();
    video.play();
    await loadPosenet();
    initThreeJS();
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    detectPose();
    animate();
}

document.getElementById('toggleCamera').addEventListener('click', async () => {
    if (!cameraActive) {
        cameraActive = true;
        const button = document.getElementById('toggleCamera');
        button.classList.remove('bg-black', 'hover:bg-gray-800');
        button.classList.add('bg-red-600', 'hover:bg-red-500');
        button.textContent = 'APAGAR CÁMARA'; 

        video.style.display = 'block';
        noCameraFeed.style.display = 'none';

        await main();
        
        renderer.domElement.style.position = 'absolute';
        renderer.domElement.style.top = '0';
        renderer.domElement.style.left = '0';
        renderer.domElement.style.zIndex = '2';
        
        video.style.zIndex = '1';
    } else {
        cameraActive = false;
        const button = document.getElementById('toggleCamera');
        button.classList.remove('bg-red-600', 'hover:bg-red-500');
        button.classList.add('bg-black', 'hover:bg-gray-800');
        button.textContent = 'ENCENDER CÁMARA';

        video.style.display = 'none';
        noCameraFeed.style.display = 'block';
        
        // Detener la cámara y liberar recursos aquí si es necesario.
        // Si usas navigator.mediaDevices.getUserMedia, recuerda detener el stream.
        const stream = video.srcObject;
        if (stream) {
            const tracks = stream.getTracks();
            tracks.forEach(track => track.stop());
        }
        video.srcObject = null; // Liberar el video
    }
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
