@extends('front.layouts.app')

@section('main')
    <section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center"
        style="background-image: url({{ asset('images/9496304.png') }}); background-position: bottom;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="d-flex justify-content-center align-items-center gap-2 mb-4">
                            <span class="display-1 fw-bold">4</span>
                            <i class="bi bi-exclamation-circle-fill text-danger display-4"></i>
                            <span class="display-1 fw-bold bsb-flip-h">4</span>
                        </h3>
                        <h3 class="h2 mb-2">Oops! You're lost.</h3>
                        <p class="mb-2">we're still under construction and some of our features are yet to come</p>
                        <p class="mb-5">You can hit back to visit PLUSPOINT.UK</p>
                        <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="{{ route('home') }}"
                            role="button">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
