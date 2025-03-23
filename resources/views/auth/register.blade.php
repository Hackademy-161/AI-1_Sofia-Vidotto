<x-layout title="Sign Up - NAIROBI">
    <div class="bg-register">
        <div class="text-white pb-5 mt-5">
            <div class="container py-5 my-5 py-md-0 my-md-0">
                <div class="row justify-content-between p-5 mt-4 mt-md-0">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 roundend bg-dark-auth p-4 p-md-5 mt-5">

                        <h3 class="text-center">Sign Up</h3>
                        <p class="text-center text-white-50">Create your Nairobi UI account</p>

                        <form method="POST" action="{{route('register')}}">
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
                                <label class="form-label small">Full Name</label>
                                <input type="text" class="form-control form-control-dark text-bg-dark" placeholder="Name" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Email</label>
                                <input type="email" class="form-control form-control-dark text-bg-dark" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Password</label>
                                <input type="password" class="form-control form-control-dark text-bg-dark" placeholder="Password" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Confirm Password</label>
                                <input type="password" class="form-control form-control-dark text-bg-dark" placeholder="Confirm Password" name="password_confirmation">
                            </div>
                            <div class="my-3 text-center">
                                <button type="submit" class="btn btn-danger w-100 fs-5">Register</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="text-center mt-4">or sign up with other accounts</p>
                            <img src="/images/Socail Links.png">
                            <p class="text-center mt-4">Already have an account? <a class="text-red" href="{{route('login')}}">Back to Log In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>