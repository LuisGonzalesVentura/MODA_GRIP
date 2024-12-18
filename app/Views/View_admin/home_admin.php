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
     <!-- alertas  -->

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        <a href="<?= base_url(relativePath: 'modificar_producto') ?>">Modificar</a>

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

    <div class="carousel relative container mx-auto" style="max-width: 1600px; margin-top: 100px">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input aria-hidden="true" checked="checked" class="carousel-open" hidden="" id="carousel-1" name="carousel"
                type="radio" />
            <div class="carousel-item absolute opacity-0" style="height: 50vh">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom img"
                    style="background-image: url('assets/tres.webp')">
                    <div class="container mx-auto">
                        <div
                            class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-20 tracking-wide">
                            <p class="text-grey text-2xl my-4">
                                <br />
                               
                            </p>
                            <a class="text-xl inline-block no-underline border-b border-white-600 leading-relaxed hover:text-black hover:border-black"
                                href="https://www.gripclothingstore.com/collections/" style="color: white"></a>
                        </div>
                    </div>
                </div>
            </div>
            <label
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto"
                for="carousel-3">&#8249;</label>
            <label
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto"
                for="carousel-2">&#8250;</label>

            <!--Slide 2-->
            <input aria-hidden="true" class="carousel-open" hidden="" id="carousel-2" name="carousel" type="radio" />
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height: 50vh">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom img"
                    style="background-image: url('assets/duo.webp')">
                    <div class="container mx-auto">
                        <div
                            class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4"></p>
                            <a class="text-xl inline-block leading-relaxed hover:text-black hover:border-black"></a>
                        </div>
                    </div>
                </div>
            </div>
            <label
                class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto"
                for="carousel-1">&#8249;</label>
            <label
                class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto"
                for="carousel-3">&#8250;</label>

            <!--Slide 3-->
            <input aria-hidden="true" class="carousel-open" hidden="" id="carousel-3" name="carousel" type="radio" />
            <div class="carousel-item absolute opacity-0" style="height: 50vh">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom img" style="
              background-image: url('assets/unum.webp');
            ">
                    <div class="container mx-auto">
                        <div
                            class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4" style="color: white">
                            
                            </p>
                            <a class="text-xl inline-block leading-relaxed hover:text-black hover:border-black"
                                style="color: white"></a>
                        </div>
                    </div>
                </div>
            </div>
            <label
                class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto"
                for="carousel-2">&#8249;</label>
            <label
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto"
                for="carousel-1">&#8250;</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900"
                        for="carousel-1">&#8226;</label>
                </li>
                <li class="inline-block mr-3">
                    <label class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900"
                        for="carousel-2">&#8226;</label>
                </li>
                <li class="inline-block mr-3">
                    <label class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900"
                        for="carousel-3">&#8226;</label>
                </li>
            </ol>
        </div>
    </div>

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
<?php 
$disponibles = [];
$agotados = [];

// Separar productos disponibles y agotados
foreach ($productos as $producto) {
    if ($producto['precio_producto'] > 0) {
        $disponibles[] = $producto; // Producto disponible
    } else {
        $agotados[] = $producto; // Producto agotado
    }
}

// Combinar los arrays, disponibles primero
$productos_ordenados = array_merge($disponibles, $agotados);
?>


<section class="bg-white py-8">
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <nav class="w-full z-30 top-0 px-6 py-1" id="store">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                <a class="arkhip_sub" id="store">productos</a>
                <div class="flex items-center" id="store-nav-content">
                    <!-- Contenido del navbar -->
                </div>
            </div>
        </nav>

        <!-- Cambiar $productos a $productos_ordenados -->
        <?php foreach ($productos_ordenados as $producto): ?>
        <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
            <a href="https://www.instagram.com/p/Cn94EwrtGFS/"> <!-- Puedes cambiar el enlace -->
                <img alt="<?= esc($producto['nombre_producto']); ?>" class="hover:grow hover:shadow-lg"
                     src="<?= base_url('imagenes_producto/imgs/' . esc($producto['imagen_producto'])); ?>" />
                     
                <div class="pt-3 flex items-center justify-between">
                    <p class=""><?= esc($producto['nombre_producto']); ?></p>
                    <?php if ($producto['precio_producto'] > 0): ?>
                        <svg class='h-10 w-10 fill-current text-gray-500 hover:text-black' viewBox='0 0 24 24'
                                xmlns='http://www.w3.org/2000/svg'>
                                <path
                                    d='M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z' />
                        </svg>
                    <?php else: ?>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    <?php endif; ?>
                </div>
                
                <p class="pt-1 text-gray-900">
                    <?php if ($producto['precio_producto'] > 0): ?>
                        <?= esc($producto['precio_producto']); ?> Bs
                        <div class="pt-4 text-center">
                        <a href="<?= base_url('simulacion/' . esc($producto['id_productos'])); ?>" 
       class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-md text-sm shadow-lg shadow-black">
       Probar Virtualmente
    </a>




                    </div>  
                    <?php else: ?>
                        <span class="text-red-600">SOLD OUT</span>

                        <div class="pt-4 text-center">
                        <a 
                        class="bg-white hover:bg-gray-300 text-black font-bold py-5 px-7 rounded-md text-sm">
                           
                        </a>
                    </div>  
                    <?php endif; ?>
                </p>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>



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