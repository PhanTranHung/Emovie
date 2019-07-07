<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-size: 40px;">E - Movies</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('/') }} ">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('/') }} ">Films</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('/') }} ">Contact</a>
        </li>
        <li class="nav-item">
          <form action="{{ url('/search') }}" class="">
            <div class="input-group-custom nav-item">
              <div class="input-group input-group-sm">
                <input autocomplete="off" type="text" class="input-custom form-control" placeholder="Search..." name="find">
                <div class="input-group-append">
                  <span class="input-group-text-custom input-group-text">
                    <button class="button-eff" type="submit"><i class="fas fa-search"></i></button>
                  </span>
                </div>
              </div>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>