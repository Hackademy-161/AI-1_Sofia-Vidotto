<x-layout title="Reset Password">
    <div class=" vh-100 mt-5 pt-5  bg-reset">
        <div class="container me-5 pt-5 mt-5">
            <div class="row justify-content-center p-5 mt-4 mt-md-0 pt-5">
                <div class="col-md-6 bg-dark-auth text-white p-4 p-md-5">
                    <h3 class="text-center">Reset Password</h3>
                    <p class="text-center text-white-50">Please enter your e-mail:</p>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

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
                            <input type="hidden" name="token" class="form-control-dark text-bg-dark form-control" value="{{ request()->route('token') }}">
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" class="form-control-dark text-bg-dark form-control" required placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" class="form-control-dark text-bg-dark form-control" required placeholder="New Password">
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password_confirmation" class="form-control-dark text-bg-dark form-control" required placeholder="Confirm New Password">
                        </div>

                        <button type="submit" class="btn btn-danger w-100 mt-3">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>