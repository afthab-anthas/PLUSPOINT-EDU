@extends('front.layouts.app')

@section('main')
    <style>
        body {
            background-image: url("{{ asset('images/9496304.png') }}");
            background-position: bottom;
            background-size: fill;
            background-repeat: no-repeat;
        }
    </style>
    <section class="section-5">
        <div class="container my-3">
            <div class="py-lg-2">&nbsp;</div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <p class="mb-0 pb-0">{{ session('success') }}</p>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    <p class="mb-0 pb-0">{{ session('error') }}</p>

                </div>
            @endif
            <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                <div class="col-md-5">
                    <div class="card shadow border-0 p-5">
                        <h1 class="h3">Login</h1>
                        <form action="{{ route('account.authenticate') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="mb-2">Email*</label>
                                <input type="text" value="{{ old('email') }}" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="example@example.com">
                                @error('email')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Password*</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter Password">

                                @error('password')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" id="showPassword"> Show Password
                            </div>
                            <div class="justify-content-between d-flex">
                                <button class="btn btn-primary mt-2">Login</button>
                                <a href="{{ route('account.forgotPassword') }}" class="mt-3 text-decoration-none">Forgot Password?</a>

                            </div>

                        </form>
                    </div>
                    <div class="mt-4 text-center">
                        <p>Do not have an account? <a class="btn btn-primary" href="{{ route('account.registration') }}"
                                type="submit">Register</a></p>
                    </div>
                </div>
            </div>
            <div class="py-lg-5">&nbsp;</div>
        </div>
    </section>
@endsection
{{-- this script is explicitly defined for the show password checkbox. It will show the password if the checkbox is checked and hide it if it is unchecked. --}}
@section('customjs')
    <script>
        $(document).ready(function() {
            $("#showPassword").on('change', function() {
                const passwordField = $("#password");
                const type = $(this).is(':checked') ? 'text' : 'password';
                passwordField.attr('type', type);
            });
        });
    </script>
@endsection
