@include ('layouts.head')

  <header>
      <!-- navigation start -->
      <nav class="navbar navbar-expand-lg m-0 p-0">
        <div class="container">
          <a class="navbar-brand fs-1" href="#">iPsit</a>
          <a class="d-lg-none" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars f-black"></i>
          </a>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item mx-2">
                <a class="nav-link f-black " href="#">Home</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link f-black " href="#">About</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link f-black " href="#">Blog</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link f-black " href="#">Services</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link f-black " href="#">Contact</a>
              </li>
              <li class="nav-item mx-2 nav-btn">
                <button class="sm-btn-light">Sign in</button>
              </li>
              <li class="nav-item mx-2 nav-btn">
                <button class="sm-btn-glow">Sign up</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navigation end -->

      <!-- hero start -->
      @include('layouts.hero')
      <!-- hero end -->
  </header>