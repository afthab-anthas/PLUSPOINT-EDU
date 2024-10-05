@extends('front.layouts.app')

@section('main')
    <section
        style="background-image: url({{ asset('images/9496304.png') }}); background-position: bottom; min-height: 100vh; display: flex; flex-direction: column; justify-content: center; background-repeat: no-repeat;"">
        <section id="hero" class="hero section">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
                @if (session()->has('success'))
                    <div id="success-alert" class="alert alert-success text-center p-0">
                        <p class="mb-0 pb-0">{{ session('success') }}</p>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div id="error-alert" class="alert alert-danger text-center p-0">
                        <p class="mb-0 pb-0">{{ session('error') }}</p>
                    </div>
                @endif
                <div class="row gy-0 justify-content-center">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
                        <h2><span>Have Questions? </span><span class="accent">Contact Us</span></h2>
                        <p>For any inquiries or assistance. We are here to help you!</p>
                    </div>
                </div>
        </section>

        <section id="services" class="services section" style="flex-grow: 1; display: flex; align-items: center;">
            <div class="container my-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="card shadow border-0 p-5">
                            <h1 class="h3">Write Us A Message</h1>
                            <form method="POST" action="{{ route('contact.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="mb-2">Name*</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter Your Name">
                                    @error('name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="mb-2">Email*</label>
                                    <input type="text" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="example@example.com">
                                    @error('email')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="mobile" class="mb-2">Mobile*</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select class="form-control" name="country_code">
                                                <!-- Asia -->
                                                <option value="+86">+86</option> <!-- China -->
                                                <option value="+91">+91</option> <!-- India -->
                                                <option value="+62">+62</option> <!-- Indonesia -->
                                                <option value="+81">+81</option> <!-- Japan -->
                                                <option value="+82">+82</option> <!-- South Korea -->
                                                <option value="+60">+60</option> <!-- Malaysia -->
                                                <option value="+95">+95</option> <!-- Myanmar -->
                                                <option value="+977">+977</option> <!-- Nepal -->
                                                <option value="+63">+63</option> <!-- Philippines -->
                                                <option value="+65">+65</option> <!-- Singapore -->
                                                <option value="+94">+94</option> <!-- Sri Lanka -->
                                                <option value="+886">+886</option> <!-- Taiwan -->
                                                <option value="+66">+66</option> <!-- Thailand -->
                                                <option value="+84">+84</option> <!-- Vietnam -->

                                                <!-- Middle East -->
                                                <option value="+973">+973</option> <!-- Bahrain -->
                                                <option value="+20">+20</option> <!-- Egypt -->
                                                <option value="+98">+98</option> <!-- Iran -->
                                                <option value="+964">+964</option> <!-- Iraq -->
                                                <option value="+962">+962</option> <!-- Jordan -->
                                                <option value="+965">+965</option> <!-- Kuwait -->
                                                <option value="+961">+961</option> <!-- Lebanon -->
                                                <option value="+968">+968</option> <!-- Oman -->
                                                <option value="+970">+970</option> <!-- Palestine -->
                                                <option value="+974">+974</option> <!-- Qatar -->
                                                <option value="+966">+966</option> <!-- Saudi Arabia -->
                                                <option value="+963">+963</option> <!-- Syria -->
                                                <option value="+90">+90</option> <!-- Turkey -->
                                                <option value="+971">+971</option> <!-- United Arab Emirates -->
                                                <option value="+967">+967</option> <!-- Yemen -->

                                                <!-- Add more country codes here -->
                                            </select>
                                        </div>
                                        <input type="text" name="mobile" id="mobile"
                                            class="form-control @error('mobile') is-invalid @enderror"
                                            placeholder="Enter Your Mobile Number">
                                    </div>
                                    @error('mobile')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="mb-2">Inquiry*</label>
                                    <input type="text" name="message" id="message"
                                        class="form-control @error('message') is-invalid @enderror"
                                        placeholder="Type In Your Query">
                                    @error('message')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="justify-content-between d-flex">
                                    <button class="btn btn-primary mt-2">Submit</button>
                                    <a href="{{ route('account.registration') }}"
                                        class="mt-3 text-decoration-none">Register
                                        With Us?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <script>
            // Set the time in milliseconds (e.g., 3000ms = 3 seconds)
            setTimeout(function() {
                // Check if the element exists before trying to remove it
                var successAlert = document.getElementById('success-alert');
                if (successAlert) {
                    successAlert.style.transition = "opacity 0.5s ease";
                    successAlert.style.opacity = "0"; // Fade out the alert
                    setTimeout(function() {
                        successAlert.remove(); // Remove the alert after fade-out
                    }, 500); // Time for fade-out to complete
                }
            }, 3000);

            setTimeout(function() {
                var errorAlert = document.getElementById('error-alert');
                if (errorAlert) {
                    errorAlert.style.transition = "opacity 0.5s ease";
                    errorAlert.style.opacity = "0";
                    setTimeout(function() {
                        errorAlert.remove();
                    }, 500);
                }
            }, 3000);
        </script>
    </section>
@endsection
