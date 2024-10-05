@extends('front.layouts.app')

@section('main')

<section class="section-0 lazy d-flex bg-image-style dark align-items-center " data-bg="{{ asset('assets/images/banner5.jpg') }}"  data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
    <div class="container">
        <div class="row">
            @include('message')
            <div class="col-12 col-xl-8">
                <h1 class="mb-0 " data-aos="fade-right" data-aos-delay="400" data-aos-duration="600">Our Blogs</h1>
                <p class="fw-light fs-5" data-aos="fade-right" data-aos-delay="500" data-aos-duration="600">Explore our blogs for insights, your go-to resource for learning and inspiration!</p>
            </div>
        </div>
    </div>
</section>

<section class="section-3 py-5 py-3 py-md-2 min-vh-100 d-flex justify-content-center align-items-center " style="background-image: url({{ asset('images/9496304.png') }}); background-position: bottom; background-repeat: no-repeat;">
    <div class="container">
        <div class="row pt-5">
            <!-- Sidebar with Categories and Profile Image -->
            <div class="col-md-4 col-lg-3 sidebar mb-4" data-aos="fade-right" data-aos-delay="400" data-aos-duration="600">
                <div class="card border-0 shadow p-4 mb-4">
                    <div class="mb-4">
                        <h2>Categories</h2>
                        <form method="GET" action="{{ route('blogs') }}">
                            <select name="category" id="category" class="form-control" onchange="this.form.submit()">
                                <option value="">All</option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $selectedCategory ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
                
                <!-- Profile Image -->
                <div class="mb-4">
                    <img class="img-fluid remove-media" src="{{ asset('images/pluspoint-crossword.png') }}" alt="Profile Image 2">
                </div>
            </div>
            
            <!-- Blogs Section -->
            <div class="col-md-8 col-lg-9 rounded" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                <div class="job_listing_area">
                    <div class="job_lists">
                        <div class="row">
                            @foreach ($blogs->sortByDesc('id') as $blog)
                                <div class="col-md-4">
                                    <div class="card border-0 p-0 shadow mb-4">
                                        <div class="card-body">
                                            <h3 class="border-0 fs-5 pb-2 mb-3 text-truncate-2">{{ $blog->title }}</h3>
                                            <div class="bg-light">
                                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded-3" style="object-fit: cover; height: 150px; width: 100%;">
                                            </div>
                                            <br>
                                            <p>By Expert Recruitments</p>
                                            <div class="d-grid mt-3">
                                                <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="btn btn-primary btn-lg">Read</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pagination links -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $blogs->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
