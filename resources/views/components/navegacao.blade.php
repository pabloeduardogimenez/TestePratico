<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Auto-Gestor</h5>
          <div>{{ Auth::user()->name }}</div>      
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Usuários logado: <div>{{ Auth::user()->name }}</div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Tipo de Acesso : <div>{{ Auth::user()->acesso_usuario }}</div>
              </a>
            </li>
            <li class="nav-item">
              @can('acessoAPaginaUsuario', Auth::user())
              <a class="nav-link d-flex align-items-center gap-2" href="{{ route('usuarios.index') }}">
                <svg class="bi"><use xlink:href="#people"/></svg>
                Gestão de Usuarios
              </a>
              @endcan 
            </li>
            <li class="nav-item">
             @can('acessoProdutos', Auth::user())
              <a class="nav-link d-flex align-items-center gap-2" href="{{ route('produtos.index') }}">
                <svg class="bi"><use xlink:href="#cart"/></svg>
                Gestão de Produtos
              </a>
             @endcan   
            </li>

            <li class="nav-item">
             @can('acessoMarcas', Auth::user())
              <a class="nav-link d-flex align-items-center gap-2" href="{{ route('marcas.index') }}">
                <svg class="bi"><use xlink:href="#puzzle"/></svg>
                Gestão de Marcas
              </a>
              @endcan 
            </li>
            <li class="nav-item">
            @can('acessoCategoria', Auth::user())
              <a class="nav-link d-flex align-items-center gap-2" href="{{ route('categorias.index') }}">                
                <i class="bi bi-sort-alpha-down"></i>
                Gestão de Categorias
              </a>
              @endcan
            </li>           
          </ul>    
          <hr class="my-3">
          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a onclick="event.preventDefault();
                  this.closest('form').submit();"class="nav-link d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#door-closed"/></svg>
                  Sair
                </a>                                                        
            </form>
            </li>
          </ul>
        </div>
      </div>
    </div>