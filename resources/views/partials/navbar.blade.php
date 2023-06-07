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
        </div>
      </nav>
      {{-- End of Navbar --}}