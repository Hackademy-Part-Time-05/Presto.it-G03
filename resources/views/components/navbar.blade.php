<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark " data-bs-theme="dark">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="#">Quick</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          <a class="nav-link text-white" href="#">Chi siamo</a>
          <a class="nav-link text-white" href="#">Annunci</a>
          @auth
          <a class="nav-link text-white" href="#">{{ auth()->user()->name }}</a>
          
          @else
            <a class="nav-link text-white" href="{{route('login')}}">Login</a>
          @endauth
          
        </div>
      </div>
    </div>
  </nav>

  