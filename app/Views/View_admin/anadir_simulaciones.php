<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml" xmlns:b="http://www.google.com/2005/gml/b"
    xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr">

<head>
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
<link href="https://fonts.googleapis.com/css2?family=Arkhip:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.0.19/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.0.19/sweetalert2.min.css">

        <!-- alertas  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Más meta tags -->
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ie=edge" http-equiv="X-UA-Compatible" />
    <title>GRIP Clothing</title>
    <meta
        content="Actitud y estilo se unen en la ropa deportiva de Grip Clothing, ofreciendo piezas que combinan moda y funcionalidad. Tienda online de GRIP Clothing"
        name="description" />
    <meta content="ecommerce, GRIP, GRIP Clothing, Clothing" name="keywords" />

    <!-- Estilos -->
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/alvarogarciapiz/grip-web/main/styles.css" />
    <link rel="stylesheet" href="/assets/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Arkhip:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.0.19/sweetalert2.min.css">


    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    <!-- Cookies aviso -->
    <script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.1.0/cookie-consent.js"
        charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({ "notice_banner_type": "simple", "consent_type": "implied", "palette": "dark", "language": "es", "page_load_consent_levels": ["strictly-necessary", "functionality", "tracking", "targeting"], "notice_banner_reject_button_hide": false, "preferences_center_close_button_hide": false, "page_refresh_confirmation_buttons": false, "website_name": "https://www.gripclothingstore.com" });
        });
    </script>
    <a href="#" id="open_preferences_center">Update cookies preferences</a>

    <!-- Fixed top scroll and logo -->
    <div class="top-div1">
    <!--Scrolling anuncio marquee-->
    <div class="scroll-left">
        <p>
            Haz tu pedido a través de nuestro instagram
            <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            Haz tu pedido a través de nuestro instagram
            <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            Haz tu pedido a través de nuestro instagram
            <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
        </p>
        <p class="second">
            Haz tu pedido a través de nuestro instagram
            <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            Haz tu pedido a través de nuestro instagram
            <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            Haz tu pedido a través de nuestro instagram
            <a href="https://www.instagram.com/gripclothinges/">@gripclothinges</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
        </p>
    </div>
</div>


        <!--Nav-->
        <div class="top-div">
    <div class="navigation-bar">

    <button id="mobile-menu" class="mobile-menu-icon">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <div class="nav-links">
        <a href="<?= base_url('anadir_prendas') ?>" class="anadir_prendas">Añadir</a>
        <a href="<?= base_url('modificar_producto') ?>">Modificar</a>
        <a href="<?= base_url('admin/anadir-simulaciones') ?>">Añadir simulaciones</a> <!-- Enlace corregido -->
        <a href="<?= base_url('admin/modificar-simulacion') ?>">Modificar simulación</a>

            <a href="#" class="logout" onclick="confirmExit(event)">Salir</a>
            </div>
            <a href="<?= base_url(relativePath: 'home_admin') ?>" class="arkhip">
            <h1>GRIP</h1>
        </a>
    </div>
</div>


    </div>


    
    <script>
     document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = document.querySelector("#mobile-menu");
    const navList = document.querySelector(".nav-links");

    mobileMenu.addEventListener("click", () => {
        mobileMenu.classList.toggle("active");
        navList.classList.toggle("active");
    });
});


    </script>

<body>
    <div class="container mx-auto mt-10">
        <!-- Título -->
        <h1 class="text-4xl font-bold text-center mb-8">AÑADIR SIMULACIONES</h1>

        <div class="flex justify-center items-center">
            <!-- Formulario a la izquierda -->
            <div class="w-1/3">

                <!-- Formulario -->
                <form action="<?= base_url('admin/anadir-simulaciones') ?>" method="post" enctype="multipart/form-data" class="space-y-6">
                    <?= csrf_field() ?>

                    <!-- Select para elegir producto -->
                    <div>
                        <label for="producto_select" class="block text-sm font-medium text-gray-700">Seleccionar Producto</label>
                        <select id="producto_select" name="producto_select" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="">Seleccione un producto para enlazar</option>
                            <?php foreach ($productos as $producto) : ?>
                                <option value="<?= $producto['id_productos'] ?>"><?= $producto['nombre_producto'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div>
                        <label for="productModel" class="block text-sm font-medium text-gray-700">Subir modelo 3D (.glb)</label>
                        <input type="file" id="productModel" name="modelo_producto" accept=".glb" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                    </div>

                    <div>
                        <button type="submit" class="w-full bg-black text-white py-2 px-4 rounded-md hover:bg-gray-800">Guardar Cambios</button>
                    </div>
                </form>
            </div>

            <!-- Imagen del producto a la derecha -->
            <div class="w-1/3 flex justify-center">
                <img id="productPreview" src="https://static.vecteezy.com/system/resources/previews/016/017/372/non_2x/image-upload-free-png.png" alt="Producto" class="product-img">
            </div>
        </div>
    </div>
</body>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectProducto = document.getElementById('producto_select');
        const imagenProducto = document.getElementById('productPreview');

        selectProducto.addEventListener('change', function() {
            const productId = selectProducto.value;

            if (productId) {
                fetch(`<?= base_url('obtener_producto') ?>/${productId}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error en la respuesta de la red');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Asegúrate de que los campos existan en tu respuesta JSON
                        imagenProducto.src = `<?= base_url('imagenes_producto/imgs') ?>/${data.imagen_producto}`;
                    })
                    .catch(error => {
                        console.error('Error al obtener el producto:', error);
                        // Si hay un error, mostrar una imagen predeterminada
                        imagenProducto.src = 'https://static.vecteezy.com/system/resources/previews/016/017/372/non_2x/image-upload-free-png.png';
                    });
            } else {
                // Limpiar la imagen si no hay producto seleccionado
                imagenProducto.src = 'https://static.vecteezy.com/system/resources/previews/016/017/372/non_2x/image-upload-free-png.png';
            }
        });
    });
    </script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (session()->get('success')) : ?>
            Swal.fire({
                title: 'Éxito',
                text: "<?= session()->get('success') ?>",
                icon: 'success',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#000000' // Botón negro
            });
        <?php endif; ?>

        <?php if (session()->get('error')) : ?>
            Swal.fire({
                title: 'Error',
                text: "<?= implode(', ', session()->get('error')) ?>",
                icon: 'error',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#000000' // Botón negro
            });
        <?php endif; ?>
    });
</script>
<script>
    function confirmExit(event) {
        event.preventDefault(); // Evita que el enlace se siga inmediatamente

        Swal.fire({
            title: '¿Seguro que quieres salir?',
            text: "Si sales, perderás los cambios no guardados.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#000000', // Botón negro
            cancelButtonColor: '#d33', // Color del botón de cancelar
            confirmButtonText: 'Sí, salir',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, redirige a la URL de logout
                window.location.href = '<?= base_url('logout') ?>';
            }
        });
    }
</script>
    <!--	 

PARA TENER SÓLO UNA IMAGEN EN VEZ DE CARRUSEL

<section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

<div class="container mx-auto">

    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
        <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a>

    </div>

  </div>

</section>

-->
 <!-- Coloca tu JavaScript aquí -->
 <script>
        document.getElementById('productImage').addEventListener('change', function(event) {
            const file = event.target.files[0]; // Obtener el archivo seleccionado
            if (file) {
                const reader = new FileReader(); // Crear un FileReader

                reader.onload = function(e) {
                    // Asignar la imagen leída al src del img
                    document.getElementById('productPreview').src = e.target.result;
                };

                reader.readAsDataURL(file); // Leer el archivo como una URL de datos
            }
        });
    </script>

    <!--
<section class="bg-white py-8">

    <div class="container py-8 px-6 mx-auto">

        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
        Sobre GRIP
    </a>

        <p class="mt-8 mb-8">grip es una marca de ropa basada en Valladolid
            <br>
            <a class="text-gray-800 underline hover:text-gray-900" href="http://savoy.nordicmade.com/" target="_blank">Savoy Theme</a> created by <a class="text-gray-800 underline hover:text-gray-900" href="https://nordicmade.com/">https://nordicmade.com/</a> and <a class="text-gray-800 underline hover:text-gray-900" href="https://www.metricdesign.no/" target="_blank">https://www.metricdesign.no/</a></p>

        <p class="mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu consequat ac.</p>

    </div>

</section>
-->

    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
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
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a class="mx-2" href="https://www.instagram.com/gripclothinges/">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
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