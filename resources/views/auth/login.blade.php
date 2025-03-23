<x-layout title="Sign In - NAIROBI">
    <div class="bg-login min-vh-100">
        <div class="text-white pb-5 mt-5">
            <div class="container py-5 my-5 py-md-0 my-md-0">
                <div class="row justify-content-between p-5 mt-4 mt-md-0">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 roundend bg-dark-auth p-4 p-md-5 mt-5">
                        <h3 class="text-center">Sign In</h3>
                        <p class="text-center text-white-50">Sign in to stay connected</p>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li><i class="bi bi-exclamation-circle"></i> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="mb-3">
                                <label class="form-label small">Email</label>
                                <input type="email" class=" form-control-dark text-bg-dark form-control" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Password</label>
                                <input type="password" class=" form-control-dark text-bg-dark form-control" placeholder="Password" name="password">
                            </div>
                            <div class="my-3 text-center">
                                <button type="submit" class="btn btn-danger w-100 fs-5">Login</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="text-center mt-4">or sign in with other accounts</p>
                            <img src="/images/Socail Links.png">
                            <p class="text-center mt-4">Forgot you password? <a class="text-red" href="{{ route('password.request') }}">Recover Password</a></p>
                            <p class="text-center mt-4">You don't have an account? <a class="text-red" href="{{route('register')}}">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>