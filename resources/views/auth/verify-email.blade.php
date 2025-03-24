<x-layout title="Email Verification">
    <div class=" pb-5 vh-100">
        <div class="container py-5 my-5 py-md-0 my-md-0">
            <div class="row justify-content-center ">
                <img src="/images/Bank_2.png" alt="">
                <div class="col-10 bg-dark-auth text-white p-4 p-md-5">
                    <h3 class="text-center">Email Verification</h3>
                    <p class="text-center text-white-50">Thank you for signing up! Please verify your email address to complete your registration.</p>
                    <ul>
                        <li><i class="bi bi-check-lg fs-4 fw-bold small"></i> Check your inbox for a verification email from us.</li>
                        <li><i class="bi bi-check-lg fs-4 fw-bold small"></i> Click on the verification link provided in the email.</li>
                        <li><i class="bi bi-check-lg fs-4 fw-bold small"></i> If you haven't received the email, check your spam folder or request a new one below.</li>
                    </ul>
                    <p class="small">If you need further assistance, please contact our support team.</p>

                    <p class="small text-red">If you did not receive the verification email, enter your email address below and click "Resend Email."</p>

                    <form method="POST" action="{{ route('verification.send') }}">
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
                        @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control-dark text-bg-dark form-control" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-danger w-100 mt-3">Send Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>