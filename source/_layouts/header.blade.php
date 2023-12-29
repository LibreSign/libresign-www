<header class="ud-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ $page->baseUrl }}">
              <img src="{{ $page->baseUrl }}assets/images/logo/logo.png" alt="Logo" />
            </a>
            <button class="navbar-toggler">
              <span class="toggler-icon"> </span>
              <span class="toggler-icon"> </span>
              <span class="toggler-icon"> </span>
            </button>

            <div class="navbar-collapse">
              <ul id="nav" class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="ud-menu-scroll" href="#home">Home</a>
                </li>

                <li class="nav-item">
                  <a class="ud-menu-scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="ud-menu-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="ud-menu-scroll" href="#contact">Contact</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="ud-menu-scroll" href="{{ $page->baseUrl }}#pricing">Pricing</a>
                </li> --}}
                <li class="nav-item">
                  <a class="ud-menu-scroll" href="./html_pages/blog.html">Blog</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
</header>