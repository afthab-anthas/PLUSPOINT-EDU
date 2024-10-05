<!DOCTYPE html>
<html class="no-js" lang="en_AU" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Plus Point Education | Study Abroad Application Portal | Top Universities</title>
    <meta name="description"
        content="Explore global education opportunities with our Study Abroad Application Portal. Your gateway to top universities worldwide, offering seamless application processes, personalized guidance, and comprehensive support for international students." />
    <meta name="keywords"
        content="Study Abroad, International Education, University Applications, Plus Point Education, Global Education Opportunities" />
    <meta property="og:title" content="Plus Point Education | Study Abroad Application Portal" />
    <meta property="og:description"
        content="Apply to top universities worldwide through Plus Point Education's Study Abroad Application Platform. Get personalized guidance and support for a seamless international education experience." />
    <meta property="og:image" content="{{ asset('assets/images/logomain-D82XgayM.png') }}" />
    <meta property="og:url" content="https://www.pluspointeducation.com" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Plus Point Education | Study Abroad Application Portal" />
    <meta name="twitter:description"
        content="Apply to top universities worldwide through Plus Point Education's Study Abroad Application Platform." />
    <meta name="twitter:image" content="{{ asset('assets/images/logomain-D82XgayM.png') }}" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="pinterest" content="nopin" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap_styles.css') }}" />
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logomain-D82XgayM.png') }}" />

</head>

<body data-instant-intensity="mousedown">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logomain-D82XgayM.png') }}" alt="Plus Point Education Logo" class="img-fluid"
                        style="height: 50px; width: auto;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4 ">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">
                                <i class="bi bi-house"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('students') }}">
                                <i class="bi bi-person"></i> Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('blogs') }}">
                                <i class="bi bi-journal-text"></i> Our Blogs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('contact') }}">
                                <i class="bi bi-telephone"></i> Contact Us
                            </a>
                        </li>

                    </ul>

                    @auth
                        @if (auth()->user() && auth()->user()->role == 'student')
                            <a class="btn btn-outline-primary me-2" href="{{ route('account.profile') }}" type="submit">My
                                Account</a>
                        @elseif(auth()->user() && auth()->user()->role == 'admin')
                            <a class="btn btn-outline-primary me-2" href="{{ route('account.profile.admin.users') }}"
                                type="submit">My Account</a>
                        @endif
                        <a class="btn btn-primary" href="{{ route('account.logout') }}" type="submit">Logout</a>
                    @else
                        <a class="btn btn-outline-primary me-2" href="{{ route('account.login') }}"
                            type="submit">Login</a>
                        <a class="btn btn-primary" href="{{ route('account.registration') }}"
                            type="submit">Register</a>
                    @endauth

                </div>
            </div>
        </nav>
    </header>


    @yield('main')

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="profilePicForm" name="profilePicForm" action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <p id="image-error" class="text-danger"></p>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="nullCheckbox" name="nullCheckbox">
                            <label class="form-check-label" for="nullCheckbox">Delete Profile Picture</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mx-3">Update</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark py-3 bg-2 text-white">
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>
        <div class="container px-3">
            <div class="row">
                <div class="col-md-4">
                    <h6 class="fw-bold">Locate our centers</h6>
                    <ul class="list-unstyled horizontal-list">
                        @foreach ($categories as $categoryName => $addresses)
                            <li>
                                <a href="#" class="text-white text-decoration-none center-link"
                                    data-center="{{ $categoryName }}">
                                    {{ $categoryName }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <p class="mt-3" style="font-size: 14px;">
                        Name: Rahul Kumar<br>
                        Phone: +9876543210<br>
                        Address: 123, Laxmi Nagar, New Delhi, India
                    </p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">Contact us</h6>
                    <p id="contact-info" style="font-size: 14px;">
                        <i class="fa fa-map-marker"></i> 306, Al Shali Building Next to Mamzar Center, Dubai, United
                        Arab Emirates<br>
                        <i class="fa fa-envelope"></i> info@pluspoint.uk<br>
                        <i class="fa fa-phone"></i> (+971) 5262 07777
                    </p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">UK Address</h6>
                    <p style="font-size: 14px;">
                        <i class="fa fa-map-marker"></i> P4 5GA, Clementines Garden, Ipswich, Suffolk, United
                        Kingdom<br>
                        <i class="fa fa-envelope"></i> krish@pluspoint.uk
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var centerLinks = document.querySelectorAll('.center-link');
            var contactInfo = document.getElementById('contact-info');

            // Map the category to their corresponding address details
            var addressMap = {!! json_encode(
                $categories->mapWithKeys(function ($addresses, $categoryName) {
                    return [
                        $categoryName => $addresses->map(function ($address) {
                                return '<i class="fa fa-map-marker"></i> ' .
                                    ($address->address ? $address->address : 'No address available');
                            })->join('<br><br>'),
                    ];
                }),
            ) !!};

            centerLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    var center = this.getAttribute('data-center');
                    if (addressMap[center]) {
                        contactInfo.innerHTML = addressMap[center];
                    }
                });
            });
        });
    </script>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/instantpages.5.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lazyload.17.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#profilePicForm").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                type: 'POST',
                url: "{{ route('account.updateprofilepic') }}",
                data: formData,
                dataType: 'json',

                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == false) {
                        // $('#exampleModal').modal('hide');
                        // location.reload();
                        var errors = response.errors;
                        if (errors.image) {
                            $('#image-error').html(errors.image[0]);
                        }

                    } else {
                        window.location.href = '{{ url()->current() }}'

                    }
                }
            });
        });
    </script>
    </script>
    @yield('customjs')
    <script>
        AOS.init();
    </script>
</body>

</html>
