<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>ReservaCitaOnline</title>

    <style>
        /* Custom styles for carousel */
        .carousel-container {
            overflow: hidden;
            max-width: 1024px; /* Ajusta el ancho máximo del carrusel según sea necesario */
            max-height: 640;
            margin: 0 auto; /* Centra el carrusel horizontalmente */
        }

        .carousel-track {
            display: flex;
            transition: transform 0.3s ease;
        }

        .carousel-slide {
            flex: 0 0 auto;
            width: 100%;
        }
    </style>
</head>

<body class="flex flex-row-reverse">

    <div class="absolute mt-24 mx-72 flex justify-center">
        <svg class="w-44" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
    </div>

    <div class="mt-72 mx-60">
        <h1 class="text-2xl text-green-800 font-bold text-center">Iniciar sesión</h1>
        <form class="flex flex-col" action="">
            <input class="border-2 border-green-200 rounded-lg mt-8 mx-2 p-2" type="text" placeholder="Correo electrónico o usuario">
            <input class="border-2 border-green-200 rounded-lg mt-8 mx-2 p-2" type="password" placeholder="Contraseña">
            <button class="bg-orange-500 text-green 600 text-green-800 font-bold rounded-lg mx-2 mt-8 p-2" type="submit">Ingresar</button>
            <button class="border-2 border-green-200 bg-writhe-600 text-black 800 font-bold rounded-lg mt-8 mx-2 p-2" type="submit">
                <img class="absolute mx-2 flex justify-center" src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" alt="" width="20" height="20">Ingresar con Google
            </button>
        </form>
        <div class="text-center font-bold m-8">
            <a href="#">¿Has olvidado la contraseña?</a>
        </div>
        <form class="flex flex-col" action="">
            <button class="bg-orange-500 text-green 600 text-green-800 font-bold rounded-lg mx-2 mt-4 p-2" type="submit">Registrarse</button>
        </form>
    </div>

    <!-- Carrusel de imágenes -->
    <div class="carousel-container mt-8">
        <div class="carousel-track">
            <div class="carousel-slide ">
                <img class="rounded-full"src="http://planosdecasasmodernas.com/wp-content/uploads/2018/06/modelos-de-apartamentos-peque%C3%B1os-para-construir.jpg" alt="Slide 1" width="1000" height="780">
            </div>
            <div class="carousel-slide">
                <img class="rounded-full"src="https://planosdecasasmodernas.com/wp-content/uploads/2018/06/Planos-de-casas-modernas-de-1-dormitorio.jpg" alt="Slide 2" width="1000" height="780">
            </div>
            <div class="carousel-slide">
                <img class="rounded-full"src="https://www.construyehogar.com/wp-content/uploads/2014/06/Plano-de-departamento-en-3D-Rishabh-Kushwaha.jpg" alt="Slide 3" width="1000" height="780">
            </div>
        </div>
    </div>


    <script>
        // JavaScript para manejar la funcionalidad del carrusel
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const totalSlides = slides.length;

        function updateCarousel() {
            const track = document.querySelector('.carousel-track');
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        // Función para cambiar las imágenes automáticamente cada 3 segundos
        setInterval(nextSlide, 3000);
    </script>
    
</body>
</html>
