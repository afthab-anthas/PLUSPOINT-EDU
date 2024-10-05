@extends('front.layouts.app')

@section('main')



<section class="section-0 lazy d-flex bg-image-style dark align-items-center" data-bg="{{ asset($blog->image) }}"  data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" style="background-position: top; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1 data-aos="fade-right" data-aos-delay="400" data-aos-duration="600">{{ $blog->title }}</h1>
            </div>
        </div>
        @auth
            @if(auth()->user()->role === 'admin')
                <div class="row mt-4">
                    <div class="col-12">
                        <form action="{{ route('admin.deleteBlog', $blog->id) }}" method="POST">
                            @csrf
                            
                            <button type="submit" class="btn btn-danger">Delete Blog</button>
                        </form>
                    </div>
                </div>
            @endif
        @endauth
    </div>
</section>
<section class="section-3 py-5 py-3 py-md-2 min-vh-100 d-flex justify-content-center align-items-center "
        style="background-image: url({{ asset('images/9496304.png') }}); background-position: bottom; background-repeat: no-repeat;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                <div class="content rounded-3 shadow-lg p-4 mb-4" style="background-color: rgba(255, 255, 255, 0.7);">
                        <!-- Displaying the content fetched from the database -->
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection