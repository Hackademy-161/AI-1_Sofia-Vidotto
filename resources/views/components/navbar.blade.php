@guest
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start bg-dark-custom p-2">
    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="/images/logo2.png" alt="">
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      
    </ul>

    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
    </form>

    <div class="text-end">
        <a href="{{route('login')}}" class="btn btn-outline-danger me-2">Login</a>
        <a href="{{route('register')}}" class="btn btn-danger">Sign-up</a>
    </div>
</div>
@endguest