@extends('layouts.app')
@section('titulo','consultar apartamentos')
@section('contenido')
<body class="bg-green-200 font-sans">
    <div class="container mx-auto py-8">
        <div class="max-w-xl mx-auto">
            <img src="https://www.jaramillomora.com/wp-content/uploads/2022/09/axo-lite-industrial.jpg" width="720" height="600" alt="Modelo apto" class="mx-auto mb-8 rounded-lg shadow-lg">

            <section class="mb-8">
                <h2 class="text-3xl font-semibold text-black-800 mb-2">Bienvenido a Reserva de Citas Online</h2>
                <p class="text-gray-700">Reserva tu cita para ver apartamentos de forma rápida y conveniente.</p>
                <button id="Boton" class="bg-orange-500 text-white font-semibold px-4 py-2 mt-4 rounded hover:bg-green-800 transition duration-200">Reservar Cita</button>
            </section>

            <section id="proyectos" class="mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-2">Nuestros Proyectos</h2>
                <ul class="list-disc list-inside">
                    <li><a href="#naranjos-del-eden" class="text-green-800">Naranjos del Éden</a></li>
                    <li><a href="#zuame-inn" class="text-green-800">Zuame inn</a></li>
                </ul>
            </section>
            
            <section id="servicios" class="mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-2">Nuestros Servicios</h2>
                <ul class="list-disc list-inside">
                    <li>Visualización de apartamentos disponibles</li>
                    <li>Reserva de citas</li>
                    <li>Gestión de citas</li>
                    <li>Atencion oportuna</li>
                </ul>

            <section id="galeria" class="mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-2">Galeria</h2>
                <div>
                    <img src="https://previews.123rf.com/images/kvsan/kvsan1710/kvsan171000037/87702328-apartamento-interior-sin-techo-perspectiva-ver-el-dise%C3%B1o-de-apartamento-en-azul-degradado-de-fondo.jpg" alt="">
                    <img src="https://previews.123rf.com/images/kvsan/kvsan1709/kvsan170900026/86428251-apartamento-interior-sin-techo-perspectiva-vista-apartamento-disposici%C3%B3n-render-3d-sin-sombra.jpg" alt="">
                </div>
            </section>
            
            <section id="contato" class="mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-2">Contacto</h2>
                <p class="text-gray-700">Para más información, contáctanos:</p>
                <address class="text-gray-700">
                    Dirección: 123 Calle Principal, Ciudad<br>
                    Teléfono: 123-456-7890<br>
                    Correo Electrónico: info@reservacitasonline.com
                </address>
            </section>
        </div>
    </div>
</body>
@endsection

