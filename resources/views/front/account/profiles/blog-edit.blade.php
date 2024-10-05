@extends('front.layouts.app')

@section('main')
    <section class="section-5 bg-2">
        <div class="container py-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blogs Database</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                @include('message')
                {{-- To display messages after update-profile --}}
                @include('front.account.sidebar')
                <div class="col-lg-9">
                    <div class="card border-0 shadow mb-4">
                        @csrf
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title mt-4 text-blue mb-0">Manage Blogs</h4>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <!-- Arrow Dropdown Header -->
                                <div class="dropdown-header fs-5 opacity-75 mb-4" id="dropdownHeader"
                                    style="cursor: pointer;">
                                    <i class="bi bi-chevron-right arrow"></i> <!-- Bootstrap icon (right arrow) -->
                                    <strong>Category Management</strong>
                                </div>

                                <!-- Expandable Section -->
                                <div class="mt-3" id="dropdownContent" style="display: none;">
                                    <div class="card-body mb-2">
                                        <h5 class="card-title mt-0 text-blue mb-0">Present Categories</h5>
                                        <select class="form-select" name="category_id">
                                            <option value="">Stored Category Names with ID</option>
                                            @foreach ($category_blog as $category)
                                                <option value="{{ $category->id }}">
                                                    ({{ $category->id }})
                                                    {{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="card-body mb-4">
                                        <h5 class="card-title mt-0 text-blue mb-0">Add New Categories</h5>
                                        <form action="{{ route('admin.addCategory') }}" method="POST">
                                            @csrf
                                            <div class="form-group mb-4">
                                                <input type="text" class="form-control" id="categoryName"
                                                    name="category_name" placeholder="Category Name">
                                                @error('category_name')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn-sm btn btn-success">Upload</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Arrow Dropdown Header -->
                                <div class="dropdown-header fs-5 opacity-75 mb-4" id="dropdownHeader2"
                                    style="cursor: pointer;">
                                    <i class="bi bi-chevron-right arrow"></i> <!-- Bootstrap icon (right arrow) -->
                                    <strong>Blog Management</strong>
                                </div>

                                <!-- Expandable Section -->
                                <div class="mt-3" id="dropdownContent2" style="display: none;">
                                    <div class="card-body mb-2">
                                        <!-- Place your function or content here -->
                                        <h5 class="card-title mt-0 text-blue mb-0">Uploaded Blogs</h5>

                                        @foreach ($blogs->sortByDesc('id') as $blog)
                                            <div class="d-grid mt-3">
                                                <a href="{{ route('blog.show', ['id' => $blog->id]) }}"
                                                    class="btn btn-primary btn-sm">{{ $blog->title }}</a>
                                            </div>
                                        @endforeach
                                        <div class="d-flex justify-content-center mt-4">
                                            {{ $blogs->links('pagination::bootstrap-5') }}
                                        </div>
                                    </div>

                                    <form action="#" method="POST" id="deleteForm">
                                        @csrf
                                        <div class="mb-4">
                                            <select name="blog_id" id="existing_codes" class="form-control">
                                                <option value="">Select a blog to delete</option>
                                                @foreach($blogs as $blogs_unpaginated)
                                                    <option value="{{ $blogs_unpaginated->id }}">{{ $blogs_unpaginated->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-danger" id="deleteButton">Delete Selected Code</button>
                                    </form>
                                </div>

                                <!-- Arrow Dropdown Header -->
                                <div class="dropdown-header fs-5 opacity-75 mb-4" id="dropdownHeader3"
                                    style="cursor: pointer;">
                                    <i class="bi bi-chevron-right arrow"></i> <!-- Bootstrap icon (right arrow) -->
                                    <strong>Blog Creation</strong>
                                </div>

                                <!-- Expandable Section -->
                                <div class="mt-3" id="dropdownContent3" style="display: none;">
                                    <div class="card-body">
                                        <!-- Place your function or content here -->
                                        <h5 class="card-title mt-0 text-blue mb-0">Upload a Blog</h5>

                                        <!-- Example form or other operations -->
                                        <form action="{{ route('admin.uploadBlog') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-4">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title">
                                                @error('title')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-4">
                                                <select class="form-control" id="category_id" name="category_id">
                                                    <option value="">Select A Category To Be Listed Under</option>
                                                    @foreach($category_blog as $category)
                                                    <option value="{{ $category->id }}">
                                                        ({{ $category->id }})
                                                        {{ $category->category_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="document">Upload Document (Docx or PDF)</label>
                                                <input type="file" class="form-control-file" id="document" name="document" accept=".docx,.pdf">
                                                @error('document')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="image">Upload Image (optional):</label>
                                                <input type="file" class="form-control-file" id="image" name="image">
                                                @error('image')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn-sm btn btn-success mt-3">Upload</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownHeader = document.getElementById('dropdownHeader');
        var dropdownContent = document.getElementById('dropdownContent');

        dropdownHeader.addEventListener('click', function() {
            // Toggle the visibility of the content
            dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'block' : 'none';

            // Toggle the 'open' class on the header to rotate the icon
            dropdownHeader.classList.toggle('open');
        });

        var dropdownHeader2 = document.getElementById('dropdownHeader2');
        var dropdownContent2 = document.getElementById('dropdownContent2');

        dropdownHeader2.addEventListener('click', function() {
            // Toggle the visibility of the content
            dropdownContent2.style.display = dropdownContent2.style.display === 'none' ? 'block' :
                'none';

            // Toggle the 'open' class on the header to rotate the icon
            dropdownHeader2.classList.toggle('open');
        });
        
        var dropdownHeader3 = document.getElementById('dropdownHeader3');
        var dropdownContent3 = document.getElementById('dropdownContent3');

        dropdownHeader3.addEventListener('click', function() {
            // Toggle the visibility of the content
            dropdownContent3.style.display = dropdownContent3.style.display === 'none' ? 'block' :
                'none';

            // Toggle the 'open' class on the header to rotate the icon
            dropdownHeader3.classList.toggle('open');
        });
    });
</script>
