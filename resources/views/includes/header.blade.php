<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
      <a href="{{route('home')}}" class="navbar-brand" > {{config('app.name')}} </a>

      <button type="button" class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbar-collapse">
        
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link {{active_link('home')}}" aria-current="page" >
                    {{ __('Home') }}
                </a>
            </li>

            @auth
           
                <li class="nav-item">
                    <a href="{{route('quizzes')}}" class="nav-link {{active_link('quizzes')}}" aria-current="page" >
                        {{ __('Тест') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('quizzes.results.show')}}" class="nav-link {{active_link('quizzes.results.show')}}" aria-current="page" >
                        {{ __('Результаты') }}
                    </a>
                </li>
            @endauth


        </ul>
        
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            
            @guest
                <li class="nav-item">
                    <a href="{{route('register')}}" class="nav-link {{active_link('register')}}" aria-current="page" >
                        {{ __('Регистрация') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link {{active_link('login')}}" aria-current="page" >
                        {{ __('Вход') }}
                    </a>
                </li>
            @endguest

            @auth
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link {{active_link('logout')}}" aria-current="page" >
                        {{ __('Выйти') }}
                    </a>
                </li>
            @endauth   

        </ul>

      </div>
    </div>
</nav>