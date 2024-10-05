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
        <div class="container my-5">
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
            <div class="row d-flex justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow border-0 p-5">
                        <h1 class="h3">Recover Password</h1>
                        <form action="{{ route('account.processForgotPassword') }}" method="post">
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
                            <div class="justify-content-between d-flex">
                                <button class="btn btn-primary mt-2">Submit</button>
                            </div>

                        </form>
                    </div>
                    <div class="mt-4 text-center">
                        <a class="btn btn-primary" href="{{ route('account.login') }}"
                                type="submit">Back To Login!</a>
                    </div>
                </div>
            </div>
            <div class="py-lg-5">&nbsp;</div>
        </div>
    </section>
@endsection
