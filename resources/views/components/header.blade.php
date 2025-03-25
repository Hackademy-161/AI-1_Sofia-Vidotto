<div class="container">
    <div class="row">
        @auth
        <div class="col-12 d-flex flew-roe justify-content-between align-items-center">
            <div class="pt-5">
                <h1 class="text-red">Good Evening {{ Auth::user()->name }}..!</h1>
                <p class="text-white lead">Welcome to Nairobi Game Zone</p>
            </div>
            <div class="pt-5">
                <a href="" class="btn btn-outline-danger">More Games</a>
            </div>
        </div>
        @endauth

        <div class="col-12">
            <img src="/images/header.png" class="img-fluid">
        </div>
    </div>
</div>