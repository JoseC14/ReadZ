<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
   
    <title>ReadZ - seu site de histórias</title>
</head>
<body>
  <div  class="navbar"> 
    <nav>
    <div class="navbar-items">  
        <ul class="navbar-list">
        <li  id="titulo">ReadZ </li>
        <li class="navbar-item @yield('homeativo')"  ><a href="{{route('site.index')}}" ><span class="navbar-icon-home"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="5 12 3 12 12 3 21 12 19 12" />
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
          </svg></span>Home</a></li>
          @auth
              
          
        <li class="navbar-item  @yield('historiaativo')" ><a  href="{{route('site.create')}}"><span class="navbar-icon-history"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
            <line x1="3" y1="6" x2="3" y2="19" />
            <line x1="12" y1="6" x2="12" y2="19" />
            <line x1="21" y1="6" x2="21" y2="19" />
          </svg></span>Criar História</a></li>
        <li class="navbar-item @yield('perfilativo')" ><a href="{{route('site.profile')}}">
            <span class="navbar-icon-profile"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="7" r="4" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              </svg></span>Ver Perfil</a></li>
              @else
              <li class="navbar-item   @yield('entrarativo')" ><a href="{{route('site.login')}}">
                <span class="navbar-icon-profile"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="7" r="4" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                  </svg></span>Entrar</a></li>
              @endauth
        </ul>
    <div class="search">
        @yield('pesquisa')
    </div>
    </div>
    </nav>
</div>
      @yield('conteudo')

      <footer class="footer">
        <p>&copy José Carlos Pereira Vieira</p>
      </footer>
</body>
</html>