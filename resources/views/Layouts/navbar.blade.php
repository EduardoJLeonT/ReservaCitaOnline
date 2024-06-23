<div class="navbar bg-orange-400 shadow-lg">
 {{-- logo --}}
 <div class="mx-2">
  <a href="/">
    <img src="https://www.bioconstrucciones.com/wp-content/uploads/2022/03/logo-bio-construcciones-transparente.png" width="170px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-50 h-30">
    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />  
</a> 
 </div>

 {{-- menu móvil --}}
 <div class="flex-1 md:hidden">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0
          0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round"
          stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow
      bg-base-100 rounded-box w-52">
        <li><a href="{{ route('home') }}">Nuestros proyectos</a></li>
        <li><a href="{{ route('home') }}">Servicios</a></li>
        <li><a href="{{ route('apartamentos.index') }}">Apartamentos</a></li>
        <li><a href="{{ route('home') }}">Acerca de nosotros</a></li>
        <li><a href="{{ route('home') }}">Galeria</a></li>
      </ul>
    </div>
 </div>
 {{-- menu desktop --}}
 <div class="flex-1 hidden md:flex space-x-4">
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Nuestros proyectos</a>
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Servicios</a>
    <a href="{{ route('apartamentos.index') }}" class="btn btn-ghost btn-sm">Apartamentos</a>
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Acerca de nosotros</a>
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Galeria</a>
 </div>
 {{-- Si esta autenticado muestra menu de usuario, sino muestra botones de login y
registro --}}
 @auth
 <h3 class="mr-4 font-semibold">Hola, {{ auth()->user()->name }}</h3>
 <div class="dropdown dropdown-end">
    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar mr-4">
      <div class="w-10 rounded-full">
      <img alt="Tailwind CSS Navbar component"
      src="https://loremflickr.com/100/100/face" />
      </div>
    </div>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdowncontent bg-base-100 rounded-box w-52">
      <li>
      <a href="{{ route('dashboard') }}">Dashboard</a>
      </li>
      <li>
      <a href="{{ route('profile.edit') }}">Mi perfil</a>
      </li>
      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
          this.closest('form').submit();">Logout</a>
        </form>
      </li>
      </ul>
 </div>
 @else
 <div class="mx-4 space-x-4">
  <a href="{{ route('login') }}" class="btn btn-outline btn-sm">Ingresar</a>
  <a href="{{ route('register') }}" class="btn btn-outline btn-sm">Registrarse</a>
 </div>
 @endauth
</div>