<nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <a class="navbar-brand" href="{{ route('welcome') }}">
              <img src="{{ asset('/images/logo.png') }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Program</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Profile</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Harga</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Kontak Saya</a>
                  </li>
              </ul>
              <div class="d-flex">
                  <a href="{{ route('login') }}" class="btn btn-master text-red btn-secondary me-3">
                      Masuk
                  </a>
                  <a href="{{ route('login') }}" class="btn btn-master btn-primary">
                      Daftar
                  </a>
              </div>
          </div>
      </div>
  </nav>