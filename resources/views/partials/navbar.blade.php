    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ALDIS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ $active === 'home' ? 'active font-weight-bold' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $active === 'about' ? 'active font-weight-bold' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $active === 'posts' ? 'active font-weight-bold' : '' }}" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $active === 'categories' ? 'active font-weight-bold' : '' }}" href="/categories">Categories</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-card-text"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i> Sign Out</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
              <li class="nav-item">
                <a href="/login" class="nav-link {{ $active === 'login' ? 'active font-weight-bold' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
              </li>
              @endauth
          </ul>
        </div>
      </nav>
      {{-- End of Navbar --}}