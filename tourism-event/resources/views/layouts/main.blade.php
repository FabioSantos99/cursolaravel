<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="/css/styles.css">
      <script src="/js/scripts.js"></script>

      
</head>
<body>
      <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="collapse navbar-collapse" id="navbar">
                   <a href="/" class="navbar-brand p-3">
                        <img src="/img/logo.png" alt="TourismEvents">
                   </a>
                   <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                        </li>

                        <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>

                        @auth

                        <li class="nav-item">
                              <a href="/dashboard" class="nav-link">Meus Eventos</a>
                         </li>

                        <li class="nav-item">
                          <form action="/logout" method="POST">
                              @csrf
                              <a href="/logout" class="nav-link" onclick="event.preventDefault();
                              this.closest('form').submit();">
                              Sair
                              </a>
                          </form>
                              
                        </li>
                            
                        @endauth

                        @guest
                            
                        <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                        </li>

                        <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                        </li>

                        @endguest

                     
                   </ul>
                  </div>
            </nav>
      </header>
      <main>
            <div class="container-fluid">
                  <div class="row">

                        @if(session('msg'))
                        <p class="msg">{{ session('msg')}}</p>
                        @endif
                        @yield('content')
                        
                  </div>
            </div>
      </main>
     <footer>
      <p>TOURISM &copy; 2023</p>
     </footer> 
     <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
